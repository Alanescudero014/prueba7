<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    
<label for="gender">Pregunta 1: </label>
<input type="radio" id="a1" name="res1" value="1" onclick="ar1()">Rojo
<input type="radio" id="b1" name="res1" value="2"  onclick="br1()">Azul
<input type="radio" id="c1" name="res1" value="3"  onclick="cr1()">Amarillo
<input type="radio" id="d1" name="res1" value="0" checked="true">Verde
<br><br>
<label for="gender">Pregunta 2: </label>
<input type="radio" id="a2" name="res2" value="1" onclick="ar2()">Rojo
<input type="radio" id="b2" name="res2" value="2"  onclick="br2()">Azul
<input type="radio" id="c2" name="res2" value="3"  onclick="cr2()">Amarillo
<input type="radio" id="d2" name="res2" value="0" checked="true">Verde

<script src="respuestas.js"></script>
<br><br>
<button onclick="guardar()">BORRAR</button>
</body>
</html>