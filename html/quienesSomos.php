<?php
session_start();
ob_start();

$iniciarSesion = $_SESSION['iniciarSesion'];
$home = $_SESSION['home'] ;
$Qsomos = $_SESSION['Qsomos'];
$recuperarClave = $_SESSION['recuperarClave'];
$registrar= $_SESSION['registrar'];
$reservar = $_SESSION['reservar'];
$rutSesionPaciente = $_SESSION['usuarioActivo'];
$nombreActivo = $_SESSION['nombreActivo'];



?>


<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <link rel="stylesheet" href="../CSS/StyleQsomos.css">
    <link rel="stylesheet" href="../CSS/Master.css">
    <!--script src="https://kit.fontawesome.com/889e1ba2d3.js" crossorigin="anonymous"></script-->
    <meta charset="utf-8">
    <link rel="icon" href="/css/master.css">
    <style type="text/css">
  		a img{
  			width: 25%;
  		}
  	</style>
    <title>Quienes somos</title>
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
          <?php if($rutSesionPaciente == null) {

              ?>
              <div id="login"><!--botones inicio de sesion-->
                  <div class="btnSesion"><a style="text-decoration:none"  href=<?php echo $iniciarSesion ?>>Iniciar Sesion</a></div>
                  <div class="btnSesion"><a style="text-decoration:none"  href=<?php echo $registrar ?>>Registrarse<a/></div>
              </div>
          <?php }else{?>
              <div id="login"><!--botones inicio de sesion-->
                  <div class="btnSesion">Bienvenido,  <?php echo $nombreActivo ?></div>
                  <div class="btnSesion"><a style="text-decoration:none"  href="../Clases/cerrarSesion.php">Cerrar Sesión<a/></div>
              </div>
              <?php

          }?>
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

    <div id="contQs">
      <div id="qsTitulo"><h1></h1></div>
      <div id="qsImagen"></div>
    </div>
    </div>


    <div id=titulo_insta>
      <h1 style="text-align: center">Nuestros pacientes si nos avalan</h1>
    </div>
        <div id="instafeed-container">

          <script src="https://cdn.jsdelivr.net/gh/stevenschobert/instafeed.js@2.0.0rc1/src/instafeed.min.js"></script>
          <script type="text/javascript">
          var userFeed = new Instafeed({
            get: 'user',
            target: "instafeed-container",
              resolution: 'low_resolution',
            accessToken: "IGQVJXTFFscHNfb1JScVJPOE1BNGxBaWtBcU5WalM0SXg1N29ZARERZAVkp5cnpqdkdkbEVvZAG5pZATFCeVJwaWZAUY2hmSE5LN0ljdEFSUnZAWODUtbWRZAR21HVkx3LXlYY3BUUmpiTDFBeDFmZAlhidTR3QwZDZD"
          });
          userFeed.run();
          </script>
      </div>
      </div>


  </body>
</html>
