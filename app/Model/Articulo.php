<?php

class Articulo {
    private $id;
    private $titulo;
    private $descripcion;
    private $autorId;
    private $fechaPublicacion;

    public function __construct($id, $titulo, $descripcion, $autorId, $fechaPublicacion) {
        $this->id = $id;
        $this->titulo = $titulo;
        $this->descripcion = $descripcion;
        $this->autorId = $autorId;
        $this->fechaPublicacion = $fechaPublicacion;
    }

    public function getId() {
        return $this->id;
    }

    public function getTitulo() {
        return $this->titulo;
    }

    public function getDescripcion() {
        return $this->descripcion;
    }

    public function getAutorId() {
        return $this->autorId;
    }

    public function getFechaPublicacion() {
        return $this->fechaPublicacion;
    }

    public function setTitulo($titulo) {
        $this->titulo = $titulo;
    }

    public function setDescripcion($descripcion) {
        $this->descripcion = $descripcion;
    }

    public function setAutorId($autorId) {
        $this->autorId = $autorId;
    }

    public function setFechaPublicacion($fechaPublicacion) {
        $this->fechaPublicacion = $fechaPublicacion;
    }

}