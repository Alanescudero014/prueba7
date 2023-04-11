<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<style>
    section {
    background-color: #111F2D;
    color: white;
    width: 230px;
    height: 25px;
    border-radius: 40px;
    text-align: center;
}
</style>
<body>
    
<script>

function tiempo() {
    
    fecha.setMinutes(fecha.getMinutes() + 5);
    console.log(fecha);
    }
    setInterval('tiempo()',1000);


</script>
    <section>
                <p>
                    <span id="input"></span>
                </p>


            </section>

</body>
</html>


