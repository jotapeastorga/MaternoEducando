
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
    <link rel="stylesheet" href="../CSS/StyleRegistrarSesion.css">
    <link rel="stylesheet" href="../CSS/Master.css">
    <!--script src="https://kit.fontawesome.com/889e1ba2d3.js" crossorigin="anonymous"></script-->
    <meta charset="utf-8">
    <link rel="icon" href="../css/master.css">
      <script type="text/javascript" src="../js/validarut.js"></script>

      <title>Registro sesion</title>


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
                          <?php if ($rutSesionPaciente == null) {
                ?>
                <div id="inicio">
                    <button type="button" name="btnInicio" class="btnMenu"
                    </button><a style="text-decoration:none" href="../html/index.php">Inicio </a></div>

            <?php } else {
                if ($rutSesionPaciente == 184896559 or $rutSesionPaciente == 176557865) {
                    ?>
                    <div id="inicio">
                        <button type="button" name="btnInicio" class="btnMenu"
                        </button><a style="text-decoration:none" href="../html/sesionPro.php">Profesional </a></div>
                <?php } else {
                    ?>
                    <div id="inicio">
                        <button type="button" name="btnInicio" class="btnMenu"
                        </button><a style="text-decoration:none" href="../html/sesionCli.php">Paciente </a></div>
                    <?php
                }
            } ?>
              <div id="qS">    <button type="button" name="btnQs"       class="btnMenu"</button><a style="text-decoration:none" href=<?php echo $Qsomos ?>>Quienes somos</a></div>
              <div id="rO"><button type="button" name="btnReservar" class="btnMenu"><a style="text-decoration:none" href=<?php echo  $reservar?>>Reservar Hora</a></button></div>
              <div id="blog"><button type="button" name="btnBlog" class="btnMenu"><!--Aqui va el href-->Blog</button></div>
          </div>
      </div>
    </div>

    <div id="cont_formulario" class="textCenter"> <!--Formulario de registro-->
            <div id="registroSesion">

                  <h3>Registro de sesion</h3>
                  <form class="" action="index.html" method="post" enctype="multipart/form-data">
                    <div id="textarea">
                      <p><textarea name="registro" class="textarea" placeholder="Escribe aqui el registro de la sesion..."></textarea></p>
                    </div>
                    <div id="archivo">
                      <input type="file" name="Documento" value=""class="archivo">
                    </div>
                      <button class="btnResSesion" type="submit">Registrar</button>
                  </form>


                <div class="mt-3" id="respuesta">

                </div>

            </div>

      </div>
      <div id="GoBack">
          <button type="button" name="btnMenuCli" class="btnMenuCli" ><a style="text-decoration:none" href="../html/sesionPro.php">Ir a mi menu</a></button>
      </div>
    </div>



    <script src="../js/crearPaciente.js"></script>
  </body>
</html>
