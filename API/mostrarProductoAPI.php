<?php
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);

    require_once ('/Applications/MAMP/htdocs/mandelaYoga_JoanaMateo/CONTROL/controladores/control.php');

    if(isset($_GET['pagina'], $_GET['categoria'], $_GET['buscador'])){
        $pagina = intval($_GET['pagina']);
        //var_dump($pagina);
        $categoria = $_GET['categoria'];
        //var_dump($categoria);
        $busqueda = $_GET['buscador'];
        //var_dump($busqueda);
     }
     
    if($_GET["nombPagina"] == "home"){
        $tabla = 'productos';
        $categoria= null;
        $busqueda = null;
        $pagina=1;       

        $registros = 10;
        $inicio = $registros * ($pagina-1);
                
        header('Content-type:application/json;charset=utf-8');

        $productosAPi = (new Control())->mostrarListadoProductosApi($tabla,$busqueda, $categoria,$pagina,$registros, $inicio);
        echo json_encode( $productosAPi,JSON_PRETTY_PRINT); 
        
    }elseif($_GET["nombPagina"] == "galeria"){

        switch ($categoria) {
            case "null": 
                $tabla = 'productos';
                $categoria= null;
                if($busqueda == "null"){
                    $busqueda = null;
                }

                $registros = 3;
                $inicio = $registros * ($pagina-1);
                
                header('Content-type:application/json;charset=utf-8');

                $productosAPi = (new Control())->mostrarListadoProductosApi($tabla,$busqueda, $categoria,$pagina,$registros, $inicio);
                echo json_encode( $productosAPi,JSON_PRETTY_PRINT);        
            break;
        
            case "todos":
                $tabla = 'productos';
                $categoria= null;
                if($busqueda == "null"){
                    $busqueda = null;
                }

                $registros = 3;
                $inicio = $registros * ($pagina-1);
                
                header('Content-type:application/json;charset=utf-8');

                $productosAPi = (new Control())->mostrarListadoProductosApi($tabla, $busqueda, $categoria,$pagina,$registros, $inicio);
                echo json_encode( $productosAPi,JSON_PRETTY_PRINT);        
            break;
        
            case "talleres":
                $tabla = 'productos';
                $categoria= "talleres";
                if($busqueda == "null"){
                    $busqueda = null;
                }
                 
                $registros = 3;
                $inicio = $registros* ($pagina-1);
                             
                header('Content-type:application/json;charset=utf-8');

                $productosAPi = (new Control())->mostrarListadoProductosApi($tabla, $busqueda,$categoria,$pagina,$registros, $inicio);
                echo json_encode( $productosAPi,JSON_PRETTY_PRINT);
            break;
            case "producYoga":
                $tabla = 'productos';
                $categoria= "producYoga";
                 if($busqueda == "null"){
                    $busqueda = null;
                }

                $registros = 3;
                $inicio = $registros* ($pagina-1);
                             
                header('Content-type:application/json;charset=utf-8');

                $productosAPi = (new Control())->mostrarListadoProductosApi($tabla,$busqueda,$categoria,$pagina,$registros, $inicio);
                echo json_encode( $productosAPi,JSON_PRETTY_PRINT);          
            break;
            case "esterillas":
                $tabla = 'productos';
                $categoria= "esterillas";
                if($busqueda == "null"){
                    $busqueda = null;
                }

                $registros = 3;
                $inicio = $registros* ($pagina-1);
                             
                header('Content-type:application/json;charset=utf-8');

                $productosAPi = (new Control())->mostrarListadoProductosApi($tabla,$busqueda,$categoria,$pagina,$registros, $inicio);
                echo json_encode( $productosAPi,JSON_PRETTY_PRINT);
            break;
        
            case "inputBuscador":
                $tabla = 'productos';
                $categoria= null;
                $registros = 3;
                $inicio = $registros * ($pagina-1);
                
                header('Content-type:application/json;charset=utf-8');

                $productosAPi = (new Control())->mostrarListadoProductosApi($tabla,$busqueda,$categoria,$pagina,$registros, $inicio);
                echo json_encode( $productosAPi,JSON_PRETTY_PRINT);                   
            break;      
        }
    }
    
    
    
             

 






    




       