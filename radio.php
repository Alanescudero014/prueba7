<!doctype html>
<html lang="en">
<head>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
<title>Agregar o quitar campos de entrada dinámicamente mediante jQuery - BaulPHP</title>

<link rel="stylesheet" href="//maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css">
<script src="//ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
</head>
<body>
<div class="container" style="max-width: 800px;">

<div class="text-center" style="margin: 20px 0px 20px 0px;">
<a href="https://www.baulphp.com/" target="_blank">BaulPHP</a><br>
<span class="text-secondary">Agregar o quitar campos de formulario dinámicamente con jQuery</span>
</div>

<form method="post" action="alta_radio.php">
    <input type="text" class="form-control m-input" placeholder="Ingresa la pregunta" name="texto_pregunta" id="texto_pregunta" required><br>
<div class="row">
<div class="col-lg-12">
<div id="inputFormRow">
<div class="input-group mb-3">
<input type="text" name="title[]" class="form-control m-input" placeholder="Ingrese la respuesta" autocomplete="off">
<div class="input-group-append"> 
<button id="removeRow" type="button" class="btn btn-danger">Borrar</button>
</div>
</div>
</div>

<div id="newRow"></div>
<button id="addRow" type="button" class="btn btn-info">Agregar</button>
<input type="submit" value="Enviar" class="btn btn-danger">
</div>
</div>
</form>
</div>

<script type="text/javascript">
// agregar registro
$input = 0;
$("#addRow").click(function () {
    if($input <= 3){
$input++;
var html = '';
html += '<div id="inputFormRow">';
html += '<div class="input-group mb-3">';
html += '<input type="text" name="title[]" class="form-control m-input" placeholder="Ingrese titulo" autocomplete="off">';
html += '<div class="input-group-append">';
html += '<button id="removeRow" type="button" class="btn btn-danger">Borrar</button>';
html += '</div>';
html += '</div>';

$('#newRow').append(html);
}else{

}
});

// borrar registro
$(document).on('click', '#removeRow', function () {
    $input--;
$(this).closest('#inputFormRow').remove();
});
</script>

</body>
</html>