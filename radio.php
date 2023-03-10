<!doctype html>
<html lang="en">
<head>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
<title>Agregar o quitar campos de entrada dinĂ¡micamente mediante jQuery - BaulPHP</title>

<link rel="stylesheet" href="//maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css">
<script src="//ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
</head>
<body>
<div class="container" style="max-width: 800px;">

<div class="text-center" style="margin: 20px 0px 20px 0px;">
<a href="https://www.baulphp.com/" target="_blank">BaulPHP</a><br>
<span class="text-secondary">Agregar o quitar campos de formulario dinĂ¡micamente con jQuery</span>
</div>

<form method="post" action="">
<div class="row">
<div class="col-lg-12">
<div id="inputFormRow">
<div class="input-group mb-3">
<input type="text" name="title[]" class="form-control m-input" placeholder="Ingrese titulo" autocomplete="off">
<div class="input-group-append"> 
<button id="removeRow" type="button" class="btn btn-danger">Borrar</button>
</div>
</div>
</div>

<div id="newRow"></div>
<button id="addRow" type="button" class="btn btn-info">Agregar</button>
</div>
</div>
</form>
</div>

<script type="text/javascript">
// agregar registro
$("#addRow").click(function () {
var html = '';
html += '<div id="inputFormRow">';
html += '<div class="input-group mb-3">';
html += '<input type="text" name="title[]" class="form-control m-input" placeholder="Ingrese titulo" autocomplete="off">';
html += '<div class="input-group-append">';
html += '<button id="removeRow" type="button" class="btn btn-danger">Borrar</button>';
html += '</div>';
html += '</div>';

$('#newRow').append(html);
});

// borrar registro
$(document).on('click', '#removeRow', function () {
$(this).closest('#inputFormRow').remove();
});
</script>

</body>
</html>