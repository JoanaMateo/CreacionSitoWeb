<?php
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);

header("Cache-Control: no-cache, must-revalidate"); // HTTP/1.1
header("Expires: Sat, 1 Jul 2000 05:00:00 GMT"); // Fecha en el pasado

//session_start();

require_once("VISTA/header.php");
//Primero gestiono si está o no con variables sesión.
$method = $_SERVER["REQUEST_METHOD"];
if($method == "GET"){
   //Aquí gestiono segun get o post a que página vamos
   //ISSET: isset() -> Determina si una variable está definida y no es NULL

   /* Con este if estamos dando tambien seguridad a nuestra pagina */
   if(isset($_GET['nombPagina'])){
    include_once 'CONTROL/controladores/control.php';
           switch ($_GET["nombPagina"]) { //vamos a la pagina que se ha pulsado
                case "home":
                case "login":
                case "landing":
                case "galeria":
                //case "productos":
                case "aboutUs":
                case "contacto":
                case "preguntasFrecuentes":
                case "modal_finalizarCompraCarrito":
                case "pagError":
                    

                       //OJO como enlazo!!!
                       include "VISTA/" . $_GET['nombPagina'] . ".php";
                   break;
                    
               default:  include "VISTA/home.php";
                   break;
           }
   }else{
    include "VISTA/home.php";
   }
}

if($method == "POST"){

}

require_once("VISTA/footer.php");

