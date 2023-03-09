<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
    <title>Document</title>
</head>

<body>
    <button onclick="contestado()">contestado</button>
    <button onclick="salir()">salir</button>
    <button onclick="envia()">envia</button>

    <script>
    function contestado() {
        Swal.fire('Evaluación', 'Formulario contestado', 'error'); //error

    }
    </script>

    <script>
    function salir() {
        Swal.fire({
            title: '¿Seguro que deseas salir?',
            showDenyButton: true,
            confirmButtonText: 'Salir',
            denyButtonText: `Cancelar                           `,
        }).then((result) => {
            /* Read more about isConfirmed, isDenied below */
            if (result.isConfirmed) {
                window.location = "index.php";
            } else if (result.isDenied) {
                Swal.fire('Changes are not saved', '', 'info')
            }
        })
    }
    </script>

    <script>
    function envia() {
        Swal.fire({
            position: 'top',
            icon: 'success',
            title: 'Evaluación',
            text: 'Respuestas guardadas exitosamente',
            showConfirmButton: false,
            timer: 2000
            
        });
        setInterval("refrescar()",2300);
    }
    function refrescar(){
            window.location= "index.php";
        }
    </script>
</body>

</html>