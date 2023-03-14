<?php

include_once("respuesta.php");
function create_respuesta($respuesta){
    include_once("conexion.php");
    $sql="INSERT INTO respuesta(    )VALUES ('".
        $respuesta->getDescripcion()."');";

    $stmt = $base_de_datos->prepare($sql);
    if($stmt->execute())
        return true;
    else
    return false;
}


function update_respuesta($respuesta){
    include_once("conexion.php");
    $sql="update respuesta set descripcion=? where id_respuesta=?";
    $stmt= $base_de_datos->prepare($sql);
    $p= $respuesta->getDescripcion();
    $id=$respuesta->getId_respuesta();
    $stmt->bindParam(1,$t);
    $stmt->bindParam(2,$id);
    if($stmt->execute())
        return true;
    else    
        return false;
}//update

function delete_respuesta($id_respuesta){
    include_once("conexion.php");
    $sql="delete from respuesta where id_respuesta=?";
    $stmt=$base_de_datos->prepare($sql);
    $stmt->bindParam(1,$id_respuesta);
    if($stmt->execute())
        return true;
    else    
        return false;
}


function read_todo(){
    include_once("conexion.php");

    $stmt=$base_de_datos->prepare("SELECT * FROM respuesta ORDER BY id_respuesta");// DESC LIMIT 1
    $stmt->execute();
    if($stmt -> rowCount()>0){
    $results= $stmt->fetchAll(PDO::FETCH_OBJ);
    }else
        $results=null;

        return $results;
}//read_todos


function read_busca($id_respuesta){
    include_once("conexion.php");
    $stmt=$base_de_datos->prepare("select id_respuesta from respuesta where id_respuesta=$id_respuesta");
    $stmt->execute();
    $c =$stmt->fetch(PDO::FETCH_OBJ);
    return $c;
}//buscar

