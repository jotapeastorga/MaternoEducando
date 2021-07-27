<?php
include("../Clases/conexion.php");


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
    <link rel="stylesheet" href="../CSS/StyleprxHorPro.css">
    <link rel="stylesheet" href="../CSS/Master.css">
    <!--script src="https://kit.fontawesome.com/889e1ba2d3.js" crossorigin="anonymous"></script-->
    <meta charset="utf-8">
    <link rel="icon" href="/css/master.css">
    <title>Mis sesiones</title>


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

    <div id="contHorasCli">
      <div id="HorasCliente"><h1>Tus proximas citas</h1></div>
      <div class="hora"> <!--Hora-->
          <div class="fotoPerfil" ></div>
          <h1>Mis Citas del Mes</h1>
          <div class="infoHora">
               <?php

              $resultados = mysqli_query(conectar(),"SELECT * FROM agendaprofesional,paciente WHERE rutProfesionalAgenda = '$rutSesionPaciente' and rutPacienteCita = rutPaciente");
              ?>
              <table border=1>
                  <tr>
                      <th> Mes </th>
                      <th> Dia </th>
                      <th> Rut Paciente </th>
                      <th> Bloque </th>
                      <th> NombrePaciente </th>
                      <th> Estado Cita <I/th>
                      <th> Ir a Cita</th>
                  </tr>
                  <?php
                  while ($consulta = mysqli_fetch_array($resultados)) {
                      echo "<tr>";
                  ?>
                      <form action="../html/registrarSesion.php" method="post">
                          <td><?php echo $consulta["mes"] ?>
                              <input type="hidden" name="mesCitaElegida"  value=<?php echo $consulta["mes"] ?> >
                          </td>
                          <td><?php echo $consulta["dia"] ?>
                              <input type="hidden" name="diaCitaElegida" value=<?php echo $consulta["dia"] ?> >
                          </td>
                          <td><?php echo $consulta["rutPacienteCita"] ?>
                              <input type="hidden" name="rutCitaElegida" value=<?php echo $consulta["rutPacienteCita"] ?> >
                          </td>
                          <td><?php
                              $bloqueCita =$consulta["idBloqueAgenda"];
                              if($bloqueCita==1){
                                  echo "08:00 - 08:45";
                              }
                              if($bloqueCita==2){
                                  echo "09:00 - 09:45";
                              }
                              if($bloqueCita==3){
                                  echo "10:00 - 10:45";
                              }
                              if($bloqueCita==4){
                                  echo "11:00 - 11:45";
                              }
                              if($bloqueCita==5){
                                  echo "12:00 - 12:45";
                              }
                              if($bloqueCita==6){
                                  echo "13:00 - 13:45";
                              }
                              if($bloqueCita==7){
                                  echo "14:00 - 14:45";
                              }
                              if($bloqueCita==8){
                                  echo "15:00 - 15:45";
                              }
                              if($bloqueCita==9){
                                  echo "16:00 - 16:45";
                              }
                              if($bloqueCita==10){
                                  echo "17:00 - 17:45";
                              }
                              if($bloqueCita==11){
                                  echo "18:00 - 18:45";
                              }
                              if($bloqueCita==12){
                                  echo "19:00 - 19:45";
                              }
                              if($bloqueCita==13){
                                  echo "20:00 - 20:45";
                              }
                              if($bloqueCita==14){
                                  echo "21:00 - 21:45";
                              }
                              ?>
                              <input type="hidden" name="bloqueCitaElegida" value=<?php echo $consulta["idBloqueAgenda"] ?> >
                          </td>
                          <td><?php echo $consulta["nombrePaciente"] ?>
                              <input type="hidden" name="nombreCitaElegida" value=<?php echo $consulta["nombrePaciente"] ?> >
                          </td>
                          <td><?php echo $consulta["estadoCita"] ?>
                              <input type="hidden" name="estadoCitaElegida" value=<?php echo $consulta["estadoCita"] ?> >
                          </td>
                          <td>
                          <input type="submit" name="btn" value="CITA">
                      </form>
                          </td>
                  <?php
                      echo "</tr>";
                  }
                  ?>
              </table>
          </div>
      </div>
    </div>

      <div id="GoBack">
          <button type="button" name="btnMenuCli" class="btnMenuCli" ><a style="text-decoration:none" href="../html/sesionPro.php">Ir a mi menu</a></button>
      </div>



    </div>
</div>
  </body>
</html>
