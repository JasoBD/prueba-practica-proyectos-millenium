<?php

class Usuarios extends ModeloGenerico {

    protected $id;
    protected $nombres;
    protected $apellidos;
    

    public function __construct($propiedades = null) {
        parent::__construct("usuario", Usuarios::class, $propiedades);
    }

    function getId() {
        return $this->id;
    }

    function getNombres() {
        return $this->nombres;
    }

    function getApellidos() {
        return $this->apellidos;
    }


    function setId($id) {
        $this->id = $id;
    }

    function setNombres($nombres) {
        $this->nombres = $nombres;
    }

    function setApellidos($apellidos) {
        $this->apellidos = $apellidos;
    }

}