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
$misPacientes = $_SESSION['misPacientes'];
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
              <div id="rO"><button type="button" name="btnReservar" class="btnMenu"><a style="text-decoration:none" href=<?php echo  $misPacientes?>>Mis Pacientes</a></button></div>
              <div id="blog"><button type="button" name="btnBlog" class="btnMenu">Blogs</button></div>
          </div>
      </div>

    <div id="contHorasCli">
      <div id="HorasCliente"><h1>Listado de Pacientes</h1></div>
      <div class="hora"> <!--Hora-->
          <div class="fotoPerfil2" ></div>
          <div class="infoHora">
               <?php

              //$resultados = mysqli_query(conectar(),"SELECT * FROM agendaprofesional,paciente WHERE rutProfesionalAgenda = '$rutSesionPaciente' and rutPacienteCita = rutPaciente");
               $resultados = mysqli_query(conectar(),"SELECT * FROM pacienteConsulta as con,paciente as pac WHERE rutPsicologo = '$rutSesionPaciente' and con.rutPaciente = pac.rutPaciente;");
              ?>
              <table border=1>
                  <tr>
                      <th> Id Consulta </th>
                      <th> Rut Paciente </th>
                      <th> Nombre Paciente </th>
                      <th> Telefono Paciente </th>
                      <th> Correo Paciente </th>
                      <th> Fecha Inicio <I/th>
                      <th> Sesiones</th>
                  </tr>
                  <?php
                  while ($consulta = mysqli_fetch_array($resultados)) {
                      echo "<tr>";
                  ?>

                          <form action="../html/listadoSesionesPaciente.php" method="post">
                              <td><?php echo $consulta["idConsulta"] ?>
                                  <input type="hidden" name="idConsulta"  value=<?php echo $consulta["idConsulta"] ?> >
                              </td>
                              <td><?php echo $consulta["rutPaciente"] ?>
                                  <input type="hidden" name="rutPaciente"  value=<?php echo $consulta["rutPaciente"] ?> >
                              </td>
                              <td><?php echo $consulta["nombrePaciente"] ?>
                                  <input type="hidden" name="nombrePaciente"  value=<?php echo $consulta["nombrePaciente"] ?> >
                              </td>
                              <td><?php echo $consulta["telefonoPaciente"] ?>
                                  <input type="hidden" name="telefonoPaciente"  value=<?php echo $consulta["telefonoPaciente"] ?> >
                              </td>
                              <td><?php echo $consulta["emailPaciente"] ?>
                                  <input type="hidden" name="emailPaciente"  value=<?php echo $consulta["emailPaciente"] ?> >
                              </td>
                               <td><?php echo $consulta["fechaInicio"] ?>
                                  <input type="hidden" name="fechaInicio"  value=<?php echo $consulta["fechaInicio"] ?> >
                              </td>
                              <td>
                              <input type="submit" name="btn" value="Sesion">
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
          <button type="button" name="btnMenuCli" class="btnMenuCli" ><a style="text-decoration:none" href="../html/sesionPro.php">Crear Consulta Paciente</a></button>
          <button type="button" name="btnMenuCli" class="btnMenuCli" ><a style="text-decoration:none" href="../html/sesionPro.php">Ir a mi menu</a></button>
      </div>



    </div>
</div>
  </body>
</html>
