<?php
session_start();
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="shortcut icon" href="img/perfil.png">
    <title>Inicio de sesión y Registro</title>
    <link href="https://fonts.googleapis.com/css2?family=Roboto:ital,wght@0,100;0,300;0,400;0,500;0,700;0,900;1,100;1,300;1,400;1,500;1,700;1,900&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="css/estilos4.css">
</head>
<body>
    <header id="header" style="background: #002b49">
        <div class="container__header">
            <div class="logo">
                <img src="img/logo.svg" alt="">
            </div>
            <div class="container__nav">
                <nav id="nav">
                    <ul>
                        <li><a href="iniciosesion.php" class="select"><b>INICIAR SESIÓN</b></a></li>
                    </ul>
                </nav>              
                <div class="btn__menu" id="btn_menu"><i class="fas fa-bars"></i></div>

            </div>

        </div>
    </header>

        <main>

            <div class="contenedor__todo">
                <div class="caja__trasera">
                    <div class="caja__trasera-login">
                        <h3>¿Ya tienes una cuenta?</h3>
                        <p>Inicia sesión para entrar en la página</p>
                        <button id="btn__iniciar-sesion">Iniciar Sesión</button>
                    </div>
                    <div class="caja__trasera-register">
                        <h3>¿Aún no tienes una cuenta?</h3>
                        <p>Regístrate para que puedas iniciar sesión</p>
                        <button id="btn__registrarse">Regístrarse</button>
                    </div>
                </div>

                <!--Formulario de Login y registro-->
                <div class="contenedor__login-register">
                    <!--Login-->
                    <form method="post" action="modelos/tipo.php" class="formulario__login">
                        <h2>Iniciar Sesión</h2>
                        <input name="ingresoUsuario" type="email" placeholder="Correo Electrónico">
                        <input name="ingresoContrasena" type="password" placeholder="Contraseña">
                        <button>Entrar</button>
                    </form>

                    <!--Register-->
                    <form method="post" action="vistas/alta_usuario.php"  class="formulario__register">
                        <h2>Regístrarse</h2>
                        <input name="nom_usuario" type="text" placeholder="Nombre completo">
                        <input name="empleado" type="text" placeholder="No. Empleado">
                        <input name="direccion" type="text" placeholder="Dirección">
                        <input name="subdireccion" type="text" placeholder="Subdirección">
                        <input name="gerencia" type="text" placeholder="Gerencia">
                        <input name="cargo" type="text" placeholder="Cargo">
                        <input name="correo" type="email" placeholder="Correo Eletrónico">
                        <input value="3" type="hidden" name="id_tipo_usuario">
                        <button>Regístrarse</button>
                    </form>
                </div>
            </div>

        </main>
        <Footer>
            <div class="container__footer">

            <div class="box__copyright">
                <hr>
                <p>Todos los derechos reservados © 2023 <b>Aeropuerto Internacional Felipe Ángeles</b></p>
            </div>
        </Footer>

        <script src="javascript/script.js"></script>
</body>
</html>