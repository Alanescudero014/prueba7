<?php

include_once("../modelo/preguntaDAO.php");

$pregunta = new Pregunta("",$_POST["texto_pregunta"]);
create_pregunta($pregunta);

include_once("respuestaDAO.php");

foreach($_POST['title'] as $title) {


    echo "<p>Valor recibido: $title</p>";
    include('conexionP.php');
    $conn = new mysqli($servidor, $usuario, $password, $nombreBD);
    if ($conn->connect_error) {
        die("la conexión ha fallado: " . $conn->connect_error);
    }// conexión a la base de datos
                    
        $result=mysqli_query($conn, "INSERT INTO respuesta VALUES ('', '$title')") or die(mysqli_error());

}


include_once("../modelo/preg_resDAO.php");



include('../modelo/consulta.php');
$conn = new mysqli($servidor, $usuario, $password, $nombreBD);
if ($conn->connect_error) {
    die("la conexión ha fallado: " . $conn->connect_error);
}// conexión a la base de datos
                
    $result=mysqli_query($conn, "SELECT id_pregunta FROM pregunta ORDER BY id_pregunta DESC LIMIT 1") or die(mysqli_error());

    $result2=mysqli_query($conn, "SELECT id_respuesta FROM respuesta ORDER BY id_respuesta DESC LIMIT 1") or die(mysqli_error());

    while ($row = $result->fetch_assoc()) {

        echo $row['id_pregunta']."";
        $pregunta = $row['id_pregunta']."";
    
    }

    while ($row = $result2->fetch_assoc()) {

        echo $row['id_respuesta']."";
        $respuesta = $row['id_respuesta']."";
    
    }

$preg_res = new Pregunta_respuesta("",$pregunta,$respuesta);
create_preg_res($preg_res);