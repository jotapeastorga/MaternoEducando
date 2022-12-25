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
$estadoAnimo = $_SESSION['estadoAnimo'];
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
                    <a style="text-decoration:none" href="https://www.instagram.com/materno.educando"
                       class="tamañoColor">
                        <i class="fab fa-instagram"></i>
                    </a>
                </div>
                <div id="y2" class="redes">
                    <a style="text-decoration:none" href="https://www.youtube.com/channel/UCSuqzLJgmO0tesZhGUzLVUg"
                       class="tamañoColor">
                        <i class="fab fa-youtube"></i>
                    </a>
                </div>
                <div id="wS" class="redes">
                    <a style="text-decoration:none" href="https://www.instagram.com/materno.educando"
                       class="tamañoColor">
                        <i class="fab fa-whatsapp"></i>
                    </a>
                </div>
            </div>
        </div>
        <?php if ($rutSesionPaciente == null) {

            ?>
            <div id="login"><!--botones inicio de sesion-->
                <div class="btnSesion"><a style="text-decoration:none" href=<?php echo $iniciarSesion ?>>Iniciar
                        Sesion</a></div>
                <div class="btnSesion"><a style="text-decoration:none" href=<?php echo $registrar ?>>Registrarse<a/>
                </div>
            </div>
        <?php } else { ?>
            <div id="login"><!--botones inicio de sesion-->
                <div class="btnSesion">Bienvenido, <?php echo $nombreActivo ?></div>
                <div class="btnSesion"><a style="text-decoration:none" href="../Clases/cerrarSesion.php">Cerrar
                        Sesión<a/></div>
            </div>
            <?php

        } ?>
    </div>
    <div id="conMenu">
        <div id="menu">
            <!--<div class="btnSesion">Iniciar sesion</div>-->
            <div id="inicio">
                <button type="button" name="btnInicio" class="btnMenu"
                </button><a style="text-decoration:none" href=<?php echo $home ?>>Inicio </a></div>
            <div id="qS">
                <button type="button" name="btnQs" class="btnMenu"
                </button><a style="text-decoration:none" href=<?php echo $Qsomos ?>>Quienes somos</a></div>
            <div id="rO">
                <button type="button" name="btnReservar" class="btnMenu"><a style="text-decoration:none"
                                                                            href=<?php echo $reservar ?>>Reservar
                        Hora</a></button>
            </div>
            <div id="rO">    <button type="button" name="btnEstadoAnimo" class="btnMenu"><a style="text-decoration:none" href=<?php echo  $estadoAnimo?>>Estado de Animo</a></button></div>
        </div>
    </div>

    <div id="contHorasCli">
        <div id="HorasCliente"><h1>Registro de Estado de Animo</h1></div>
        <div class="hora"> <!--Hora-->
            <div class="fotoPerfils"></div>
            <h1>Tareas Ultima Sesion</h1>
            <div class="infoHora">
                <?php

                $resultados = mysqli_query(conectar(), "SELECT * FROM sesionAtencion where fechaSesion = (SELECT max(fechaSesion) FROM sesionAtencion Where idPacienteConsulta = 1 ) and idPacienteConsulta = 1");
                $consulta = mysqli_fetch_array($resultados);
                ?>

                <textarea id="w3review" name="w3review" rows="10" cols="70" disabled>
                <?php echo $consulta["TareaPsicoterapeuticas"] ?>
                </textarea>
           </div>
        </div>

        <form id="formEstadoAnimo">

        <div class="hora">
            <div class="infoHora">
                <h3>¿Que tal Estuvo tu día?</h3>
                <select  name="resumenDia" id="resumenDia" class="horaReserva">
                    <option value="1">1</option>
                    <option value="2">2</option>
                    <option value="3">3</option>
                    <option value="4">4</option>
                    <option value="5">5</option>
                    <option value="6">6</option>
                    <option value="7">7</option>
                </select>
            </div>

            <div class="infoHora">
                <h3>¿Que emoción te representa más hoy?</h3>
                <select  name="emocionDia" id="emocionDia" class="horaReserva">
                    <option value="Alegria">Alegria</option>
                    <option value="Tristeza">Tristeza</option>
                    <option value="Miedo">Miedo</option>
                    <option value="Asco">Asco</option>
                    <option value="Enojo">Enojo</option>
                </select>
            </div>
            <div class="infoHora">
                <h3>¿Porqué te sentiste así?</h3>
                <textarea id="comentariosEstadoAnimo" name="comentariosEstadoAnimo" rows="10" cols="70" placeholder="Escribe aqui un poco de porque sentiste eso ...">

                </textarea>
                <input type="hidden"  name="idConsulta" value=<?php echo  $consulta["idPacienteConsulta"]?>>
                <input type="hidden"  name="idSesion" value=<?php echo  $consulta["idSesion"]?>>
            </div>
        </div>
    </div>
    <button type="submit" name="btnEstadoAnimo" class="btnResSesion" >Guardar estado de Animo</button>
    </form>

    <div id="GoBack">

        <button type="button" name="btnMenuCli" class="btnMenuCli"><a style="text-decoration:none" href="../html/sesionCli.php">Volver a mis Sesiones</a></button
    </div>
</div>
</div>
<script src="../js/registraEstadoAnimo.js"></script>
</body>
</html>
