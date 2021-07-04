<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>

      <?php
      session_start();
      ob_start();

      $iniciarSesion = $_SESSION['iniciarSesion'];
      $home = $_SESSION['home'] ;
      $Qsomos = $_SESSION['Qsomos'];
      $recuperarClave = $_SESSION['recuperarClave'];
      $registrar= $_SESSION['registrar'];
      $reservar = $_SESSION['reservar'];



      ?>

      <link rel="stylesheet" href="../CSS/StyleIndex.css">
    <link rel="stylesheet" href="../CSS/Master.css">
    <link rel="stylesheet" href="../CSS/StyleLoggin.css">
    <!--script src="https://kit.fontawesome.com/889e1ba2d3.js" crossorigin="anonymous"></script-->
    <meta charset="utf-8">
    <link rel="icon" href="/css/master.css">
    <title>Inicio</title>

  </head>
  <body style="background-color:#75716F;">
    <div id="contenedor">
      <div id="cabezera">
        <div id="Logo"></div>

        <div id="contacto">
          <div id="conEmail">
            <div id="email" class="btnEmail">contacto@maternoeducando.cl</div>
          </div>
          <div id="redes">
            <div id="instagram" class="redes">
              <a style="text-decoration:none" href="https://www.instagram.com/materno.educando" class="tamañoColor">
                <i class="fab fa-instagram"></i>
              </a>
            </div>
            <div id="y2" class="redes">
              <a style="text-decoration:none" href="https://www.youtube.com/channel/UCSuqzLJgmO0tesZhGUzLVUg" class="tamañoColor">
                <i class="fab fa-youtube"></i>
              </a>
            </div>
            <div id="wS" class="redes">
              <a style="text-decoration:none" href="https://www.instagram.com/materno.educando" class="tamañoColor">
                <i class="fab fa-whatsapp"></i>
              </a>
            </div>
          </div>
        </div>
        <div id="login"><!--botones inicio de sesion-->
            <div class="btnSesion"><a style="text-decoration:none" href=<?php echo $iniciarSesion?>>Iniciar Sesion</a></div>
            <div class="btnSesion"><a style="text-decoration:none" href=<?php echo $registrar ?>>Registrarse<a/></div>
        </div>
      </div>
      <div id="conMenu">
          <div id="menu">
              <!--<div class="btnSesion">Iniciar sesion</div>-->
              <div id="inicio"><button type="button" name="btnInicio"   class="btnMenu"</button><a style="text-decoration:none" href=<?php echo  $home?>>Inicio       </a></div>
              <div id="qS">    <button type="button" name="btnQs"       class="btnMenu"</button><a style="text-decoration:none" href=<?php echo $Qsomos ?>>Quienes somos</a></div>
              <div id="rO"><button type="button" name="btnReservar" class="btnMenu"><a style="text-decoration:none" href=<?php echo  $reservar?>>Reservar Hora</a></button></div>
              <div id="blog"><button type="button" name="btnBlog" class="btnMenu"><!--Aqui va el href-->Blog</button></div>
          </div>
      </div>

    </div>

    <div id="cont_formulario" class="textCenter"> <!--Formulario de registro-->
            <div id="formulario">
                <form id="formIniciarSesion">
                  <h3>Inicia sesión aquí</h3>
                  <input type="text" name="rutPacIni" class="inputFormulario"  placeholder="111111111">
                  <input type="password" name="pasPacIni" class="inputFormulario"  placeholder="Tú Clave">
                    <button class="btnSesion" type="submit">Iniciar Sesión</button>
                    <div class="inputFormulario" id="respuestaLogin">

                    </div>
                  <p>Olvidaste tu clave? <a style="text-decoration:none" href=<?php echo $recuperarClave ?>>Pincha aquí</a> </p>
                  <p>No tienes una cuenta? <a style="text-decoration:none" href=<?php echo $registrar ?>>Registrate aquí</a></p>
                </form>
            </div>

      </div>
    </div>
    <script src="../js/iniciarSesion.js"></script>

  </body>
</html>
