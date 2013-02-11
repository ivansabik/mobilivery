<?php

class Categoria extends CI_Model {

    public $id, $nombre, $icono, $articulos;

    function __construct() {
        parent::__construct();
        
        $this->articulos = array();
    }

    function load($id) {
        $query = $this->db->get_where('categoria', array('id =' => $id));
        $resultados = $query->result();
        $resultados = $resultados[0];
        $this->id = $resultados->id;
        $this->nombre = $resultados->nombre;
        $this->icono = $resultados->icono;

        $this->db->select('*');
        $this->db->from('articulo_menu');
        $this->db->where('id_categoria', $id);
        $query = $this->db->get();
        $resultadosArticulos = $query->result();
        foreach ($resultadosArticulos as $resultadosArticulo) {
            $articulo = new ArticuloMenu();
            $articulo->id = $resultadosArticulo->id;
            $articulo->nombre = $resultadosArticulo->nombre;
            $articulo->descripcion = $resultadosArticulo->descripcion;
            $articulo->foto = $resultadosArticulo->foto;
            $articulo->precio = $resultadosArticulo->precio;
            $this->articulos[] = $articulo;
        }
    }

}

?>
