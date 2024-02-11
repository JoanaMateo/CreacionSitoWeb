<?php

ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);

require_once ('/Applications/MAMP/htdocs/mandelaYoga_JoanaMateo/MODELO/modeloProducto.php');


class Control {
    function mostrarProductos($tabla){
        $modeloProducto = new ModeloProducto();
        //Esta variable almacena un array ya preparada en el metodo.
        $datosProductos = $modeloProducto->getListadoProductos($tabla);
        
        return $datosProductos;
    }
  
    function mostrarListadoProductosApi ($tabla, $categoria,$pagina,$registros, $inicio) {
        $modeloProductoApi = new ModeloProducto();

        //Esta variable almacena un array ya preparada en el metodo.
        $listaProducto = $modeloProductoApi->getListadoProductosApi($tabla, $categoria,$pagina,$registros, $inicio);
        return $listaProducto;
    }
    
}

