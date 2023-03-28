<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
    <title>Document</title>
</head>
<body>
 <script>
    function guarda() {
        Swal.fire({
            position: "top",
            icon: "success",
            title: "Evaluación",
            text: "Respuestas guardadas exitosamente, gracias",
            showConfirmButton: false,
            timer: 2500

        });
        setInterval("refrescar()", 2800);
    }

    guarda();
    
    function refrescar(){
            window.location= "../../index.php";
        }
    </script>   
    
</body>
</html>
