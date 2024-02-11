<?php

ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);

    require_once ('/Applications/MAMP/htdocs/mandelaYoga_JoanaMateo/CONTROL/controladores/control.php');

    if($_GET["nombPagina"] == "home"){
        /*
        $tabla = 'productos';
        header('Content-type:application/json;charset=utf-8');

        $productosAPi = (new Control())->mostrarProductosApi($tabla);
               
        echo json_encode( $productosAPi, JSON_PRETTY_PRINT);       
        */
    }elseif($_GET["nombPagina"] == "galeria"){
        switch ($_GET["categoria"]) {
            case "todos":
                $tabla = 'productos';
                $categoria= null;
                            /*El valor de pagina viene por get si no vale 1*/                
                //$pagina = isset( $_GET['pagina']) ? isset( $_GET['pagina']) : 1;
                $pagina=1;
                $registros = 3;
                $inicio = $registros * ($pagina-1);
                
                header('Content-type:application/json;charset=utf-8');

                $productosAPi = (new Control())->mostrarListadoProductosApi($tabla, $categoria,$pagina,$registros, $inicio);
                echo json_encode( $productosAPi,JSON_PRETTY_PRINT);        
            break;
        
            case "talleres":
                $tabla = 'productos';
                $categoria= "talleres";
                            /*El valor de pagina viene por get si no vale 1*/
                
                //$pagina = isset( $_GET['pagina']) ? isset( $_GET['pagina']) : 1;
                $pagina=1;
                $registros = 3;
                $inicio = $registros* ($pagina-1);
                             
                header('Content-type:application/json;charset=utf-8');

                $productosAPi = (new Control())->mostrarListadoProductosApi($tabla, $categoria,$pagina,$registros, $inicio);
                echo json_encode( $productosAPi,JSON_PRETTY_PRINT);
            break;
        
            case "producYoga":
                $tabla = 'productos';
                $categoria= "producYoga";
                            /*El valor de pagina viene por get si no vale 1*/
                
                //$pagina = isset( $_GET['pagina']) ? isset( $_GET['pagina']) : 1;
                $pagina=1;
                $registros = 3;
                $inicio = $registros* ($pagina-1);
                             
                header('Content-type:application/json;charset=utf-8');

                $productosAPi = (new Control())->mostrarListadoProductosApi($tabla, $categoria,$pagina,$registros, $inicio);
                echo json_encode( $productosAPi,JSON_PRETTY_PRINT);
            
            break;
            case "esterillas":
                $tabla = 'productos';
                $categoria= "esterillas";
                            /*El valor de pagina viene por get si no vale 1*/
                
                //$pagina = isset( $_GET['pagina']) ? isset( $_GET['pagina']) : 1;
                $pagina=1;
                $registros = 3;
                $inicio = $registros* ($pagina-1);
                             
                header('Content-type:application/json;charset=utf-8');

                $productosAPi = (new Control())->mostrarListadoProductosApi($tabla, $categoria,$pagina,$registros, $inicio);
                echo json_encode( $productosAPi,JSON_PRETTY_PRINT);
            break;
        
            case "buscador":
                $tabla = 'productos';
                $categoria= "buscador";
                            /*El valor de pagina viene por get si no vale 1*/
                
                //$pagina = isset( $_GET['pagina']) ? isset( $_GET['pagina']) : 1;
                $pagina=1;
                $registros = 3;
                $inicio = $registros* ($pagina-1);
                             
                header('Content-type:application/json;charset=utf-8');

                $productosAPi = (new Control())->mostrarListadoProductosApi($tabla, $categoria,$pagina,$registros, $inicio);
                echo json_encode( $productosAPi,JSON_PRETTY_PRINT);
                
            break;
            
        }
    }
    
             

 






    




