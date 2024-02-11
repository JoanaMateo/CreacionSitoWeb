<?php
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);

class Producto{
    private $nombreProducto;
    private $precioProducto;
    private $imgUrl;
    private $descripcionProducto;

    public function getNombreProducto(){
      return  $this->nombreProducto;
    }
    function getPrecioProducto() {
        return $this->precioProducto;
    }

    function getImgUrl() {
        return $this->imgUrl;
    }

    function getDescripcionProducto() {
        return $this->descripcionProducto;
    }

    function setNombreProducto($nombreProducto): void {
        $this->nombreProducto = $nombreProducto;
    }

    function setPrecioProducto($precioProducto): void {
        $this->precioProducto = $precioProducto;
    }

    function setImgUrl($imgUrl): void {
        $this->imgUrl = $imgUrl;
    }

    function setDescripcionProducto($descripcionProducto): void {
        $this->descripcionProducto = $descripcionProducto;
    }

}