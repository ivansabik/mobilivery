<?php

class ArticuloMenu extends CI_Model {

    public $id, $nombre, $descripcion, $foto, $precio, $caracteristicas, $nombreCategoria;

    function __construct() {
        parent::__construct();
        $this->caracteristicas = array();
    }

    function load($id) {
        // Info del artículo
        $query = $this->db->get_where('articulo_menu', array('id =' => $id));
        $resultados = $query->result();
        $resultados = $resultados[0];
        $this->id = $resultados->id;
        $this->nombre = $resultados->nombre;
        $this->descripcion = $resultados->descripcion;
        $this->foto = $resultados->foto;
        $this->precio = $resultados->precio;
        // Nombre de la categoría (para el título)
        $idCategoria = $resultados->id_categoria;
        $query = $this->db->get_where('categoria', array('id =' => $idCategoria));
        $resultados = $query->result();
        $resultados = $resultados[0];
        $this->nombreCategoria = $resultados->nombre;
        // Ids de características
        $this->db->select('id_caracteristica');
        $this->db->from('articulo_caracteristica');
        $this->db->where('id_articulo_menu', $id);
        $query = $this->db->get();
        $resultados = $query->result();
        // Busca características
        foreach ($resultados as $resultado) {
            $this->db->select('id, nombre, valor_unico');
            $this->db->from('caracteristica');
            $this->db->where('id', $resultado->id_caracteristica);
            $query = $this->db->get();
            $resultados2 = $query->result();
            foreach ($resultados2 as $resultado2) {
                $caracteristica = new Caracteristica();
                $caracteristica->id = $resultado->id_caracteristica;
                $caracteristica->valorUnico = $resultado2->valor_unico;
                $caracteristica->nombre = $resultado2->nombre;
                // Busca opciones
                $this->db->select('id, nombre, precio');
                $this->db->from('opcion');
                $this->db->where('id_caracteristica', $resultado->id_caracteristica);
                $query = $this->db->get();
                $resultados3 = $query->result();
                foreach ($resultados3 as $resultado3) {
                    $opcion = new Opcion();
                    $opcion->id = $resultado3->id;
                    $opcion->nombre = $resultado3->nombre;
                    $opcion->precio = $resultado3->precio;
                    $caracteristica->opciones[] = $opcion;
                }
            }
            $this->caracteristicas[] = $caracteristica;
        }
    }

}

?>
