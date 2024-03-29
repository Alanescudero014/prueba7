<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <title>Stackfindover: Sign in</title>
  <link rel="stylesheet"href="css/estilos2.css">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
</head>
<style>
      footer{
	background-color: #111F2D;
	height: 50px;
	width: 100%;
	position: absolute;

	text-align:center;
  }
</style>
<body>
    <header class="navbar sticky-top flex-md-nowrap p-1 text-white m" style="background-color: #002b49">
        <a class="navbar-brand p-2">
            <img src="img/logo.svg" height="60rem"></a>
        <div class="navbar-nav">
        </div>
  </header>
  <div class="login-root">
    <div class="box-root flex-flex flex-direction--column" style="min-height: 100vh;flex-grow: 1;">
      <div class="loginbackground box-background--white padding-top--64">
        <div class="loginbackground-gridContainer">
          <div class="box-root flex-flex" style="grid-area: top / start / 8 / end;">
            <div class="box-root" style="background-image: linear-gradient(white 0%, rgb(247, 250, 252) 33%); flex-grow: 1;">
            </div>
          </div>
          <div class="box-root flex-flex" style="grid-area: 4 / 2 / auto / 5;">
            <div class="box-root box-divider--light-all-2 animationLeftRight tans3s" style="flex-grow: 1;"></div>
          </div>
          <div class="box-root flex-flex" style="grid-area: 6 / start / auto / 2;">
            <div class="box-root box-background--blue800" style="flex-grow: 1;"></div>
          </div>
          <div class="box-root flex-flex" style="grid-area: 7 / start / auto / 4;">
            <div class="box-root box-background--blue animationLeftRight" style="flex-grow: 1;"></div>
          </div>
          <div class="box-root flex-flex" style="grid-area: 8 / 4 / auto / 6;">
            <div class="box-root box-background--gray100 animationLeftRight tans3s" style="flex-grow: 1;"></div>
          </div>
          <div class="box-root flex-flex" style="grid-area: 2 / 15 / auto / end;">
            <div class="box-root box-background--cyan200 animationRightLeft tans4s" style="flex-grow: 1;"></div>
          </div>
          <div class="box-root flex-flex" style="grid-area: 3 / 14 / auto / end;">
            <div class="box-root box-background--blue animationRightLeft" style="flex-grow: 1;"></div>
          </div>
          <div class="box-root flex-flex" style="grid-area: 4 / 17 / auto / 20;">
            <div class="box-root box-background--gray100 animationRightLeft tans4s" style="flex-grow: 1;"></div>
          </div>
          <div class="box-root flex-flex" style="grid-area: 5 / 14 / auto / 17;">
            <div class="box-root box-divider--light-all-2 animationRightLeft tans3s" style="flex-grow: 1;"></div>
          </div>
        </div>
      </div>
      <div class="box-root padding-top--24 flex-flex flex-direction--column" style="flex-grow: 1; z-index: 9;">
        <div class="box-root padding-top--48 padding-bottom--24 flex-flex flex-justifyContent--center">
          <h1>AIFA</h1>
        </div>
        <div class="formbg-outer">
          <div class="formbg">
            <div class="formbg-inner padding-horizontal--48">
              <span class="padding-bottom--15">Inicio de sesión</span>
              <form id="stripe-login" method="post" action="modelo/entrar.php">
                <div class="field padding-bottom--24">
                  <label for="email">Correo</label>
                  <input type="email" name="ingresoUsuario" required>
                </div>
                <div class="field padding-bottom--24">
                  <div class="grid--50-50">
                    <label for="password">Contraseña</label>
                    
                  </div>
                  <input type="password" name="ingresoUsuario" required>
                </div>
                <div class="reset-pass">
                      <a class="ssolink" href="#">¿Olvidaste tu contraseña?</a>
                    </div>
                <div class="field padding-bottom--24">
                  <input type="submit" name="submit" value="Continuar">
                </div>
                <div class="field">
                  <a class="ssolink" href="#">Crear una cuenta</a>
                </div>
              </form>
            </div>
          </div>
          <div class="footer-link padding-top--24"> 
            <div class="listing padding-top--24 padding-bottom--24 flex-flex center-center">
              <span><a href="#">© 2023 Aeropuerto Internacional Felipe Ángeles.</a></span>
              <span><a href="#">Contacto</a></span>
              <span><a href="#">Privacidad y Terminos</a></span>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</body>
<footer>
	<p style="color: white;">Copyright © 2023 Aeropuerto Internacional Felipe Ángeles. </p>
</footer>

</html>