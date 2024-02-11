<?php
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);

require_once ('/Applications/MAMP/htdocs/mandelaYoga_JoanaMateo/CONTROL/clases/login.php');
require_once ('conexionBBDD.php');

class ModeloLogin extends conexionBBDD {

    public function consultarLogin($mail, $pass) {
        $query = "SELECT * FROM pswd WHERE idMailUsuarioPswd = ? AND password = ?";
        $statement = $this->conn->prepare($query);
        
        //Acuerdate que si usas la conexion estatica no hay herencia de la clase conexion.
        //$statement = conexionBBDD::conexion()->prepare($query);
        
        $statement->bind_param('ss', $mail, $pass);
        
        $statement->execute();
        
        $result = $statement->get_result()->fetch_all(MYSQLI_ASSOC);
        
        return sizeof($result) > 0 ;
    }
    
    public function datosUsuarioLogin($mail, $pass){
        $query = "SELECT * FROM pswd WHERE idMailUsuarioPswd = ? AND password = ?";
        $statement = $this->conn->prepare($query);
        
        $statement->bind_param('ss', $mail,$pass);
        
        $statement->execute();
        
        $result= $statement->get_result()->fetch_all(MYSQLI_ASSOC);
         
      
         foreach ($result as $value) {
            $objetoLogado = new login();
            
            $objetoLogado->setMailLogin($value['idMailUsuarioPswd']);
            $objetoLogado->setPassLogin($value['password']);

         }
      //cerramos conexion
        $statement->close();
           
        return $objetoLogado;
    }
}
