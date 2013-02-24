<?php

if (!defined('BASEPATH'))
    exit('No direct script access allowed');

class Actual extends CI_Controller {

    public function agregar() {
        $ordenActual = $this->nativesession->get('ordenActual');
        $articulo = $this->construyeArticuloOrden($this->input->post());
        // Ya existe orden actual en la sesión
        if ($ordenActual) {
            $ordenActual->articulos[] = $articulo;
        }
        // No hay orden actual en la sesión, hay que crearla
        else {
            $ordenActual = new Orden();
            $ordenActual->articulos[] = $articulo;
        }
        // Guarda en la sesión la orden actualizada 
        $this->nativesession->set('ordenActual', $ordenActual);
        $data['orden'] = $ordenActual;
        $this->load->model('Comercio');
        $this->Comercio->load();
        $data['comercio'] = $this->Comercio;
        $this->load->view('movil/dialogActual', $data);
    }

    public function quitar() {
        echo 'Hello World!';
    }

    private function construyeArticuloOrden($params) {
        $articuloOrden = new ArticuloOrden();
        $articuloMenu = new ArticuloMenu();
        $articuloMenu->load($params['idArticulo']);
        $articuloOrden->idArticuloMenu = $articuloMenu->id;
        $articuloOrden->comentarios = $params['comentarios'];
        if($articuloOrden->comentarios === 'Ej. Sin chile, sin empanizar, al tiempo') {
            $articuloOrden->comentarios = '';
        }
        $articuloOrden->cantidad = $params['cantidad'];
        $articuloOrden->nombreArticulo = $articuloMenu->nombre;
        $articuloOrden->nombreCategoria = $articuloMenu->nombreCategoria;        
        $articuloOrden->precio = $articuloMenu->precio;
        // Construye opciones
        foreach ($params as $key => $value) {
            // Es una opción
            if (substr($key, 0, 13) === 'idOpcionUnica' || substr($key, 0, 8) === 'idOpcion') {
                $opcion = new Opcion();
                $opcion->load($value);
                $articuloOrden->opciones[] = $opcion;
            }
        }
        return $articuloOrden;
    }

    public function ver() {
        $ordenActual = $this->nativesession->get('ordenActual');
        $this->load->model('Comercio');
        $this->Comercio->load();
        $data['comercio'] = $this->Comercio;
        if (!$ordenActual) {
            $this->load->view('dialogSinArticulos', $data);
        } else {
            $data['titulo'] = 'Orden';
            $data['orden'] = $ordenActual;
            $this->load->view('movil/orden', $data);
        }
    }

}

?>
