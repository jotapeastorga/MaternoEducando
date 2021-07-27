
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
$mesCita =$_POST['mesCitaElegida'];
$diaCita =$_POST['diaCitaElegida'];
$rutCita =$_POST['rutCitaElegida'];
$bloqueCita =$_POST['bloqueCitaElegida'];
$nombreCita =$_POST['nombreCitaElegida'];
$estadoCita =$_POST['estadoCitaElegida'];
$textoCitaElegida =$_POST['textoCitaElegida'];



?>

<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <link rel="stylesheet" href="../CSS/StyleRegistrarSesion.css">
    <link rel="stylesheet" href="../CSS/Master.css">
    <!--script src="https://kit.fontawesome.com/889e1ba2d3.js" crossorigin="anonymous"></script-->
    <meta charset="utf-8">
    <link rel="icon" href="../css/master.css">

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
                  <div class="btnSesion"><a style="text-decoration:none"  href="../PhpBackEnd/cerrarSesion.php">Cerrar Sesión<a/></div>
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
    </div>

    <div id="cont_formulario" class="textCenter"> <!--Formulario de registro-->
            <div id="registroSesion">
                  <h3>Registro de sesion</h3>
                <form id="formRegistrarSesion">
                    <div id="textarea">
                      <p><textarea name="registroSesionTexto" class="textarea" disabled><?php echo $textoCitaElegida ?></textarea>
                      </p>
                    </div>
                    <input type="hidden"  name="mesCita" value=<?php echo $mesCita ?>>
                    <input type="hidden"  name="diaCita" value=<?php echo $diaCita ?>>
                    <input type="hidden"  name="rutCita" value=<?php echo $rutCita ?>>
                    <input type="hidden"  name="bloqueCita" value=<?php echo  $bloqueCita?>>
                    <input type="hidden"  name="estadoCita" value=<?php echo  $estadoCita?>>
                    <input type="hidden"  name="nombreCita" value=<?php echo  $nombreCita?>>
                    <!--div id="archivo">
                      <input type="file" name="Documento" value=""class="archivo">
                    </div-->
                </form>

                <?php
                if($estadoCita=='ANULADO' or  $estadoCita=='ATENDIDO'){
                ?>

                        <button type="submit" name="btnAnularSesion" class="btnResSesion" disabled>Anular sesion</button>

                <?php
                }else{?>


                <form id="formAnularSesionPaciente">
                    <input type="hidden"  name="mesCita" value=<?php echo $mesCita ?>>
                    <input type="hidden"  name="diaCita" value=<?php echo $diaCita ?>>
                    <input type="hidden"  name="rutCita" value=<?php echo $rutCita ?>>
                    <input type="hidden"  name="bloqueCita" value=<?php echo  $bloqueCita?>>
                    <input type="hidden"  name="estadoCita" value=<?php echo  $estadoCita?>>
                    <input type="hidden"  name="nombreCita" value=<?php echo  $nombreCita?>>
                    <button type="submit" name="btnAnularSesion" class="btnResSesion">Anular sesion</button>
                </form>
                <?php
                }
                ?>

            </div>

      </div>
      <div id="GoBack">
          <button type="button" name="btnMenuCli" class="btnMenuCli" ><a style="text-decoration:none" href="../html/sesionCli.php">Ir a mi menu</a></button>
      </div>
    </div>
    <script src="../js/anulaSesionPaciente.js"></script>
  </body>
</html>
