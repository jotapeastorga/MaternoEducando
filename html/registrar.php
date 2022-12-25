
<?php
session_start();
ob_start();

$iniciarSesion = $_SESSION['iniciarSesion'];
$home = $_SESSION['home'] ;
$Qsomos = $_SESSION['Qsomos'];
$recuperarClave = $_SESSION['recuperarClave'];
$registrar= $_SESSION['registrar'];
$reservar = $_SESSION['reservar'];
$validarPaciente = $_SESSION['validarPaciente'];
$idConsulta =$_POST['idConsulta'];


?>

<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <link rel="stylesheet" href="../CSS/StyleRegistrar.css">
    <link rel="stylesheet" href="../CSS/Master.css">
    <!--script src="https://kit.fontawesome.com/889e1ba2d3.js" crossorigin="anonymous"></script-->
    <meta charset="utf-8">
    <link rel="icon" href="../css/master.css">
      <script type="text/javascript" src="../js/validarut.js"></script>

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
              <div id="qS">    <button type="button" name="btnQs"       class="btnMenu"</button><a style="text-decoration:none" href=<?php echo $Qsomos ?>>Quienes Somos</a></div>
              <div id="rO"><button type="button" name="btnReservar" class="btnMenu"><a style="text-decoration:none" href=<?php echo  $reservar?>>Reservar Hora</a></button></div>
              <div id="blog"><button type="button" name="btnBlog" class="btnMenu"><!--Aqui va el href-->Blog</button></div>
          </div>
      </div>
    </div>

    <div id="cont_formulario" class="textCenter"> <!--Formulario de registro-->
            <div >
                <form id="registrarPaciente" >
                  <h3>Registrate Aquí</h3>
                  <input type="text" name="nombresPac" class="inputFormulario" placeholder="Ingresa Nombre" required>
                  <input type="text" name="apellidosPac" class="inputFormulario"  placeholder="Ingresa Apellidos"required>
                  <input type="text" name="rutPac" id="rutPac"  class="inputFormulario"  placeholder="Ingrese Rut sin puntos ni Guion 170329953" required onblur=" Rut(document.registrarPaciente.rutPac.value)">
                  <input type="email" name="correoPac" class="inputFormulario"  placeholder="Ingresa correo electronico"required>
                  <input type="text" name="correo" class="inputFormulario"  placeholder="Reingresa correo electronico"required>
                  <input type="text" name="celularPac" class="inputFormulario"  placeholder="+569 1111 2222"required>
                  <input type="password" name="passwordPac" class="inputFormulario"  placeholder="Ingresa tu nueva contraseña"required>
                  <input type="password" name="password" class="inputFormulario" placeholder="Reingresa tu nueva contraseña"required><br>
                    <button class="btnSesion" type="submit">Enviar</button>
                    
                  <p>Estoy de acuerdo con los <a style="text-decoration:none" href="">Terminos y Condiciones</a> <input type="checkbox" name="checkTyC" id="checkTyC"></p>
                  <p>Ya tienes una cuenta? <a style="text-decoration:none" href="https://nelumbotech.com/MaternoEducando/html/iniciarSesion.php">Inicia sesión aquí</a></p>
                </form>
                <div class="mt-3" id="respuesta">

                </div>

            </div>

      </div>
    </div>



    <script src="../js/crearPaciente.js"></script>
  </body>
</html>
