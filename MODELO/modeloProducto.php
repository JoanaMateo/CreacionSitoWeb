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
    public function getListadoProductosApi ($tabla, $busqueda=null, $categoria=null,$pagina,$registros, $inicio){
        if($categoria!=null && $busqueda==null){
            $query= "SELECT * FROM $tabla WHERE categoria LIKE '$categoria' LIMIT $inicio, $registros"; //variable que almacena el tipo de consulta.
            }elseif($categoria==null && $busqueda==null){
            $query= "SELECT * FROM $tabla LIMIT $inicio, $registros"; //variable que almacena el tipo de consulta.

            
            }elseif($busqueda!=  null){
                //($busqueda && strlen($busqueda)>1)
           $this->conn->real_escape_string($busqueda);
                $query= "SELECT * FROM $tabla WHERE nombre LIKE '%$busqueda%' LIMIT $inicio, $registros"; //variable que almacena el tipo de consulta.
        }
        
        $statement= $this->conn->prepare($query); //variable donde almacenaremos el objeto de tipo PDOStatement
        $statement->execute();
        $results = $statement->get_result()->fetch_all(MYSQLI_ASSOC); //En una variable almaceno todos los registros de la tabla.
        
       $arrayDatosConsulta["datosConsultaProductos"]= $results;
       /*
        foreach ($results as $row) {
            $objetoProducto = new Producto();
            $objetoProducto->setIdProducto($row['idProducto']);
            $objetoProducto->setNombreProducto($row['nombre']);
            $objetoProducto->setPrecioProducto($row['categoria']);
            $objetoProducto->setNombreProducto($row['precio']);
            $objetoProducto->setImgUrl($row['imgUrl']);
            $objetoProducto->setDescripcionProducto($row['descripcion']);
            
            $arrayDatosConsulta["datosConsultaProductos"]= $objetoProducto;
        }*/
        /*
        foreach ($results  as $row) {
            $arrayDatosConsulta["datosConsultaProductos"]=[
                "idProducto" => $row['idProducto'],
                "nombre" => $row['nombre'],
                "categoria" => $row['categoria'],
                "precio" => $row['precio'],
                "imgUrl" => $row['imgUrl'],
                "descripcion" => $row['descripcion']
            ];
        }*/

        $datosPaginacion= $this->paginacion($tabla, $busqueda, $categoria, $pagina, $registros);
        $arrayDatosPaginacion=[
            "paginacion" => [
                "categoria"=>$datosPaginacion['categoria'],
                "total" => $datosPaginacion['total'],
                "paginas" => $datosPaginacion['paginas'],
                "pagina" => $datosPaginacion['pagina'],
                "limite" => $datosPaginacion['limite']
            ]
        ];
        $arrayResultado= array_merge($arrayDatosConsulta,$arrayDatosPaginacion);
             
        //Cerramos conexion
        $statement->close();

        return $arrayResultado;
    }
    function paginacion($tabla,$busqueda=null, $categoria=null, $pagina, $limite){
        if($categoria!=null && $busqueda == null){
            $total = $this->getTotalNumProductos($tabla,$busqueda, $categoria);
        }elseif($categoria == null && $busqueda == null){
            $total = $this->getTotalNumProductos($tabla);
        } elseif($busqueda != null) {
           $total = $this->getTotalNumProductos($tabla, $busqueda);

        }
        $paginas = ceil($total/$limite);//redondea hacia arriba
        
        return [
            "categoria"=>$categoria,
            "total" => $total,
            "paginas"=> $paginas,
            "pagina" => $pagina,
            "limite" => $limite
        ];
    }
    public function getTotalNumProductos($tabla, $busqueda=null, $categoria=null){
        if($categoria!=null && $busqueda == null){
            $query = "SELECT COUNT(*) FROM $tabla WHERE categoria LIKE '$categoria'"; //variable que almacena el tipo de consulta.
        }elseif ($categoria==null && $busqueda==null)  {  
            $query = "SELECT COUNT(*) FROM $tabla"; //variable que almacena el tipo de consulta. 

        }elseif ($busqueda != null){
            $query = "SELECT COUNT(*) FROM $tabla WHERE nombre LIKE '%$busqueda%'"; //variable que almacena el tipo de consulta.

        }
        $statement = $this->conn->prepare($query); //variable donde almacenaremos el objeto de tipo PDOStatement
        $statement->execute();
        $results = $statement->get_result()->fetch_assoc();
        //Cerramos conexion
        $statement->close();

        return intval($results['COUNT(*)']);
    }
    
}