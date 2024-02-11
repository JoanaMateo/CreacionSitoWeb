<?php
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);

include_once ('/Applications/MAMP/htdocs/mandelaYoga_JoanaMateo/CONTROL/clases/producto.php');
require_once ('conexionBBDD.php');

class ModeloProducto extends conexionBBDD{
    public function getListadoProductos($tabla) {
        $query = "SELECT * FROM $tabla"; //variable que almacena el tipo de consulta.
        $statement = $this->conn->prepare($query); //variable donde almacenaremos el objeto de tipo PDOStatement
        $statement->execute();
        
        $arrayProductos = []; //Nos creamos nuestro array
        $results = $statement->get_result()->fetch_all(MYSQLI_ASSOC); //En una variable almaceno todos los registros de la tabla.
        //Recorremos el array:
        
        foreach ($results as $row){
            $Objeto_Producto = new Producto(); //Nos creamos un objeto
            
            $Objeto_Producto->setNombreProducto($row['nombre']);
            $Objeto_Producto->setPrecioProducto($row['precio']);
            $Objeto_Producto->setImgUrl($row['imgUrl']);
            $Objeto_Producto->setDescripcionProducto($row['descripcion']);
            
            $arrayProductos[] = $Objeto_Producto;
        }
        //Cerramos conexion
        $statement->close();

        return $arrayProductos; //Este modelo devuelve un array
    }
    
    //FUNCIONES QUE HACEN LA CONSULTA DE PRODUCTOS:
    public function getListadoProductosApi ($tabla, $categoria=null,$pagina,$registros, $inicio){
        if($categoria!=null){
            $query= "SELECT * FROM $tabla WHERE categoria LIKE '$categoria' LIMIT $inicio, $registros"; //variable que almacena el tipo de consulta.
        }else{
            $query= "SELECT * FROM $tabla LIMIT $inicio, $registros"; //variable que almacena el tipo de consulta.
        }
        $statement= $this->conn->prepare($query); //variable donde almacenaremos el objeto de tipo PDOStatement
        $statement->execute();
        $results = $statement->get_result()->fetch_all(MYSQLI_ASSOC); //En una variable almaceno todos los registros de la tabla.
        
        foreach ($results  as $row) {
            $arrayDatosConsulta["datosConsultaProductos"]=[
                "idProducto" => $row['idProducto'],
                "nombre" => $row['nombre'],
                "categoria" => $row['categoria'],
                "precio" => $row['precio'],
                "imgUrl" => $row['imgUrl'],
                "descripcion" => $row['descripcion']
            ];
        }
        $datosPaginacion= $this->paginacion($tabla, $categoria, $pagina, $registros);
        $arrayDatosPaginacion=[
            "paginacion" => [
                "total" => $datosPaginacion['total'],
                "paginas" => $datosPaginacion['paginas'],
                "pagina" => $datosPaginacion['pagina'],
                "limite" => $datosPaginacion['limite']
            ]
        ];
        $arrayResulado= array_merge($arrayDatosConsulta,$arrayDatosPaginacion);
               
        //Cerramos conexion
        $statement->close();

        return $arrayResulado;
    }
    function paginacion($tabla,$categoria=null, $pagina, $limite){
        if($categoria!=null){
            $total = $this->getTotalNumProductos($tabla, $categoria);
        } else {
           $total = $this->getTotalNumProductos($tabla);
        }
        $paginas = ceil($total/$limite);//redondea hacia arriba
        
        return [
            "total" => $total,
            "paginas"=> $paginas,
            "pagina" => $pagina,
            "limite" => $limite
        ];
    }
    public function getTotalNumProductos($tabla,$categoria=null){
        if($categoria!=null){
            $query = "SELECT COUNT(*) FROM $tabla WHERE categoria LIKE '$categoria'"; //variable que almacena el tipo de consulta.
        }else{
            $query = "SELECT COUNT(*) FROM $tabla"; //variable que almacena el tipo de consulta.
        }
        $statement = $this->conn->prepare($query); //variable donde almacenaremos el objeto de tipo PDOStatement
        $statement->execute();
        $results = $statement->get_result()->fetch_assoc();
        //Cerramos conexion
        $statement->close();

        return intval($results['COUNT(*)']);
    }
    
    
    function busqueda($busqueda, $consulta){
        $filtro="";
        if($busqueda && strlen($busqueda)>1){
            $filtro = "WHERE nombre LIKE '%$busqueda%'";
            $consulta = $consulta.$filtro;
        }
        return $consulta;
    }    
}