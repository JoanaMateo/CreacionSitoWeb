<?php
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);

class TipoUsuario {
    private Integer $idTipoUsuario;
    private String $tipoUsuario;
    
    public function getIdTipoUsuario(): Integer {
        return $this->idTipoUsuario;
    }

    public function getTipoUsuario(): String {
        return $this->tipoUsuario;
    }

    public function setIdTipoUsuario(Integer $idTipoUsuario): void {
        $this->idTipoUsuario = $idTipoUsuario;
    }

    public function setTipo(String $tipoUsuario): void {
        $this->tipoUsuario = $tipoUsuario;
    }

}

