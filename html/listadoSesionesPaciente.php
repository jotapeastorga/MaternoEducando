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
$idConsulta =$_POST['idConsulta'];
$nombrePaciente =$_POST['nombrePaciente'];




?>


<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <link rel="stylesheet" href="../CSS/StyleprxHorPro.css">
    <link rel="stylesheet" href="../CSS/Master.css">
    <!--script src="https://kit.fontawesome.com/889e1ba2d3.js" crossorigin="anonymous"></script-->
      <script src="https://cdn.jsdelivr.net/npm/chart.js@latest/dist/Chart.min.js"></script>
      <script>
          let sesionesGrafico = [];
          let sesionesFechaGrafico = [];
      </script>
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
              <div id="blog"><button type="button" name="btnBlog" class="btnMenu">Crear Paciente</button></div>
          </div>
      </div>

    <div id="contHorasCli">
      <div id="HorasCliente"><h1>Sesiones de <?php echo $nombrePaciente ?>  </h1></div>
      <div class="hora"> <!--Hora-->
          <div class="fotoPerfil" ></div>
          <h1></h1>
          <div class="infoHora">
               <?php

              //$resultados = mysqli_query(conectar(),"SELECT * FROM agendaprofesional,paciente WHERE rutProfesionalAgenda = '$rutSesionPaciente' and rutPacienteCita = rutPaciente");
               $resultados = mysqli_query(conectar(),"SELECT * FROM sesionAtencion WHERE idPacienteConsulta = '$idConsulta' ");
              ?>
              <table border=1>
                  <tr>
                      <th> Id Consulta </th>
                      <th> Id Sesion </th>
                      <th> Nombre Paciente </th>
                      <th> Nota </th>
                      <th> FechaSesion </th>
                      <th> Detalle</th>
                  </tr>
                  <?php
                  while ($consulta = mysqli_fetch_array($resultados)) {
                      echo "<tr>";
                  ?>

                          <form action="../html/detalleSesion.php" method="post">

                          <td><?php echo $consulta["idPacienteConsulta"] ?>
                              <input type="hidden" name="idPacienteConsulta" value=<?php echo $consulta["idPacienteConsulta"] ?> >
                          </td>
                          <td><?php echo $consulta["idSesion"] ?>
                              <input type="hidden" name="idSesion"  value=<?php echo $consulta["idSesion"] ?> >
                          </td>
                          <td><?php echo $nombrePaciente ?>
                              <input type="hidden" name="nombrePaciente" value=<?php echo $nombrePaciente ?> >
                          </td>

                          <td><?php echo $consulta["nivelMejora"] ?>
                              <input type="hidden" name="nivelMejora" value=<?php echo $consulta["nivelMejora"] ?> >
                          </td>
                          <td><?php echo $consulta["fechaSesion"] ?>
                              <input type="hidden" name="fechaSesion" value=<?php echo $consulta["fechaSesion"] ?> >
                          </td>
                          <script>
                              sesionesGrafico.push(<?php echo $consulta["nivelMejora"] ?>)

                              <?php $stringFecha =   $consulta["fechaSesion"];  ?>

                               fechaOtra = "<?php echo $stringFecha ; ?>".split("-");
                               mes = fechaOtra[1];
                               anno = fechaOtra[0];
                               dia = fechaOtra[2];


                              console.log("mes " + mes);
                              console.log("anno " + anno);
                              console.log("dia " + dia);

                              sesionesFechaGrafico.push(anno + "-" + mes + "-" + dia);

                          </script>

                          <td>
                          <input type="submit" name="btn" value="Detalle">
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

        <div >
            <canvas id="GraficoPaciente" style="background-color: rgba(0, 0, 0, 0.500)"></canvas>
        </div>

        <script>
            // Obtener una referencia al elemento canvas del DOM
            const $grafica = document.querySelector("#GraficoPaciente");
            // Las etiquetas son las que van en el eje X.
            const etiquetas = sesionesFechaGrafico
            console.log(sesionesFechaGrafico)
            // Podemos tener varios conjuntos de datos. Comencemos con uno
            const datosVentas2020 = {
                label: "Evolucion del Paciente por Sesion",
                data: sesionesGrafico, // La data es un arreglo que debe tener la misma cantidad de valores que la cantidad de etiquetas
                backgroundColor: 'rgb(89,201,188)', // Color de fondo
                borderColor: 'rgba(54, 162, 235, 1)', // Color del borde
                borderWidth: 3,// Ancho del borde

            };

            new Chart($grafica, {
                type: 'line',// Tipo de gráfica
                responsive: true,
                data: {
                    labels: etiquetas,
                    datasets: [
                        datosVentas2020,
                        // Aquí más datos...
                    ]
                },
                options: {
                    scales: {
                        yAxes: [{
                            ticks: {
                                beginAtZero: true
                            }
                        }],
                    },
                }
            });
        </script>

        <form action="../html/registrarSesion.php" method="post">
            <input type="hidden" name="idConsulta" value=<?php echo $idConsulta ?> >
            <input type="submit" name="btn" value="Crear Sesion" class="btnMenuCli">
        </form>
      <div id="GoBack">
          <button type="button" name="btnMenuCli" class="btnMenuCli" ><a style="text-decoration:none" href="../html/sesionPro.php">Ir a mi menu</a></button>
      </div>



    </div>
</div>
  </body>
</html>
