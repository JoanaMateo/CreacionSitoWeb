<?php
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);

class Usuario {
private $idUsuario;
private $email;
private $imagen;
private $idTipoUsuario;

public function __construct($email, $imagen, $idTipoUsuario, $idUsuario=null) {
    $this->idUsuario = $idUsuario;
    $this->email = $email;
    $this->imagen = $imagen;
    $this->idTipoUsuario = $idTipoUsuario;
}

public function getId() {
    return $this->idUsuario;
}

public function getEmail() {
    return $this->email;
}

public function getidTipoUsuario() {
    return $this->idTipoUsuario;
}

public function getImagen() {
    return $this->imagen;
}

public function setId($idUsuario): void {
    $this->id = $idUsuario;
}

public function setEmail($email): void {
    $this->email = $email;
}

public function setidTipoUsuario($idTipoUsuario): void {
    $this->idTipoUsuario = $idTipoUsuario;
}

public function setImagen($imagen): void {
    $this->imagen = $imagen;
}
}
