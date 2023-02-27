<?php

$usuarios = "root";
$bd = "prueba";
$servidor = "localhost";


try{
    $base_de_datos = new PDO("mysql:host=$servidor;dbname=$bd",$usuarios,"");
    $base_de_datos->setAttribute(PDO::ATTR_ERRMODE,PDO::ERRMODE_EXCEPTION);

} catch (PDOException $e) {
    echo "Ocurrio un error con la base de datos: "
    .  $e->getMessage();
}