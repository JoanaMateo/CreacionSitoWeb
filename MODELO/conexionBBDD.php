<?php
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);

//Lo primero que hacemos es cargar el contenido del fichero en una variable.

//El siguiente paso es decodificar el JSON y para ello usaremos la función json_decode

/*
  Ahora ya podemos acceder a los datos del JSON,
  para ello accedemos a ellos tratando el fichero como arrays multidimensionales. */


class conexionBBDD {
    
    protected mysqli $conn;  //variable conexion tipo mysqli. En esta variable se almacena la bbdd

    //constructor que realiza la conexión con la bbdd
    public function __construct() {
        
            $dataJson = file_get_contents('/Applications/MAMP/htdocs/mandelaYoga_JoanaMateo/configuracion/conexion.json');
            $items = json_decode($dataJson, true);

        $this->conn = new mysqli($items["hostname"], $items["usuario"], $items["password"], $items["basedatos"]);
        //Para usar las constantes hay que requerir el archivo

        //$this->conn = new mysqli(DB_HOST, DB_NOMBRE_USUARIO, DB_PASS, DB_NOMBREBBDD); //Para usar las constantes hay que requerir el archivo
        //$this->conn = new mysqli("localhost", "prueba", "prueba", "ejercicioClientes");
        return $this->conn->connect_errno ? false : true;
    }

}

