<script>
var bPreguntar = true;

window.onbeforeunload = preguntarAntesDeSalir();

function preguntarAntesDeSalir() {
    var respuesta;

    if (bPreguntar) {
        respuesta = confirm('¿Seguro que quieres salir?');

        if (respuesta) {
            window.onunload = function() {

                return true;

            }
            window.location = "index.php";
        } else {

            return false;
        }
    }
}
</script>