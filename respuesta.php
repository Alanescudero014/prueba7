<?php

Class Respuesta{
    private $id_respuesta;
    private $descripcion;

public function __construct($id_respuesta, $descripcion){
                    $this->id_respuesta = $id_respuesta;
                    $this->descripcion = $descripcion;
}

public function getId_respuesta(){
    return $this->id_respuesta;
}
public function setId_respuesta($id_respuesta){
    $this->id_respuesta = $id_respuesta;
}
public function getDescripcion(){
    return $this->descripcion;
}
public function setDescripcion($descripcion){
    $this->descripcion = $descripcion;
}

}