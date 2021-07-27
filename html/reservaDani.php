<?php
session_start();
ob_start();

$iniciarSesion = $_SESSION['iniciarSesion'];
$home = $_SESSION['home'] ;
$Qsomos = $_SESSION['Qsomos'];
$recuperarClave = $_SESSION['recuperarClave'];
$registrar= $_SESSION['registrar'];
$reservar = $_SESSION['reservar'];
$horasDisponiblesEli = $_SESSION['horasDisponiblesEli'];


?>


<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <link rel="stylesheet" href="../CSS/StyleReserva.css">
    <link rel="stylesheet" href="../CSS/Master.css">
    <!--script src="https://kit.fontawesome.com/889e1ba2d3.js" crossorigin="anonymous"></script-->
    <meta charset="utf-8">
    <link rel="icon" href="/css/master.css">
    <title>Seleccion</title>


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
              <div id="qS">    <button type="button" name="btnQs"       class="btnMenu"</button><a style="text-decoration:none" href=<?php echo $Qsomos ?>>Quienes somos</a></div>
              <div id="rO"><button type="button" name="btnReservar" class="btnMenu"><a style="text-decoration:none" href=<?php echo  $reservar?>>Reservar Hora</a></button></div>
              <div id="blog"><button type="button" name="btnBlog" class="btnMenu"><!--Aqui va el href-->Blog</button></div>
          </div>
      </div>

    <div id="contTera">
      <div id="tipoTerapia"><h1>Selecciona el tipo de Psicoterapia</h1></div>

      <div class="terapeuta"> <!--profesional1-->
          <div class="fotoPerfilDani" ></div>
          <div class="especialidad">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</div>
          <div class="valorHora">
            <div class="tiempoSe">Tiempo: 45 Minutos</div>
            <div class="valorSe">$45.000</div>
          </div>
          <div class="divBotones">
            <div class="" id="fechaReserva">
              <input type="date" name="diaReserva" class="diaReserva">
              <button type="button" name="diaDisponible" class="btnFecha">Ver</button>
              <input type="time" name="horaReserva" class="horaReserva">
            </div>
            <div class="" id="btnReservar">
              <button type="button" name="btnReservar" class="btns">Reservar</button>
            </div>
          </div>

      </div>
      <div class="terapeuta"> <!--profesional2-->
          <div class="fotoPerfilEli"></div>
          <div class="especialidad">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</div>
          <div class="valorHora">
            <div class="tiempoSe">Tiempo: 45 Minutos</div>
            <div class="valorSe">$45.000</div>
          </div>
          <div class="divBotones">
            <div class="" id="fechaReserva">
            <form id="buscarHoraEli">
              <input type="date" name="diaReserva" class="diaReserva">
            <button class="btnFecha" type="submit" name="btnBHE">Ver</button>

                <form id="reservarHoraEli">

                <?php
                if($horasDisponiblesEli!=null){
                    ?>
                <select  name="diaReserva" id="bloqueEli" class="horaReserva" >
                    <?php
                    foreach($horasDisponiblesEli as $key => $value) {

                        ?>
                        <option value=<?php echo $value[0] ?>><?php echo $value[0] ?></option>
                        <?php
                    }
                    ?>
                </select>
                        <?php

                }else{
                       ?>
                    <select  name="diaReserva" id="bloqueEli" class="diaReserva" disabled>
                        <option value="">Sin Horas Disponibles</option>
                    </select>
                    <?php
                }
                ?>



            </div>
            <div class="" id="btnReservar">
            <button class="btns" type="submit" name="btnRHE" >Reservar</button>
            </div>
          </div>
      </div>
    </div>
    </div>
</div>
    <script src="../js/reservaHoraEli.js"></script>
  </body>
</html>
