<!DOCTYPE html>
<html lang="en" dir="ltr">
<head>

    <?php
    session_start();
    ob_start();

    $iniciarSesion = $_SESSION['iniciarSesion'];
    $home = $_SESSION['home'];
    $Qsomos = $_SESSION['Qsomos'];
    $recuperarClave = $_SESSION['recuperarClave'];
    $registrar = $_SESSION['registrar'];
    $reservar = $_SESSION['reservar'];
    $validarPaciente = $_SESSION['validarPaciente'];
    $rutSesionPaciente = $_SESSION['usuarioActivo'];
    $nombreActivo = $_SESSION['nombreActivo'];


    ?>
    <link rel="stylesheet" href="../CSS/StyleIndex.css">
    <link rel="stylesheet" href="../CSS/Master.css">
    <!--script src="https://kit.fontawesome.com/889e1ba2d3.js" crossorigin="anonymous"></script-->
    <meta charset="utf-8">
    <link rel="icon" href="../css/Master.css">
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

            <div id="qS">
                <button type="button" name="btnQs" class="btnMenu"
                </button><a style="text-decoration:none" href=<?php echo $Qsomos ?>>Quienes somos</a></div>
            <div id="rO">
                <button type="button" name="btnReservar" class="btnMenu"><a style="text-decoration:none" href=<?php echo $reservar ?>>Reservar Hora</a></button>
            </div>
            <div id="blog">
                <button type="button" name="btnBlog" class="btnMenu"><!--Aqui va el href-->Blog</button>
            </div>
        </div>
    </div>
</div>

<div id="cont_abajo">
    <div id="mje_ini" class="textCenter">
        <div <!--encabezado-->
        <h3>¡Escoge la modalidad de consulta<br>
            que mas te acomode!
        </h3>
    </div>
    <div <!--intermedio-->
    <h2>TELE CONSULTA ONLINE <br>
        O<br>
        CONSULTA PRESENCIAL
    </h2>
</div>
<div<!--Abajo-->
<p>
    Protocolo Covid:<br>
    Para las atenciones presenciales asegurate <br>
    de asistir con tu mascarilla y sin acompañantes en la medida <br>
    de lo posible. Si tienes alguna duda escribenos, nuestro equipo estara feliz de ayudarte.
</p>
</div>
<div id="videos" class="textCenter">
    <div id="vid1">
        <iframe width="560" height="315" src="https://www.youtube.com/embed/D-_dfm-SrcU" title="YouTube video player"
                frameborder="0"
                allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture"
                allowfullscreen></iframe>
    </div>
    <div id="vid2">
        <iframe width="560" height="315" src="https://www.youtube.com/embed/iBPub64_U0k" title="YouTube video player"
                frameborder="0"
                allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture"
                allowfullscreen></iframe>
    </div>
</div>

</div>
</div>


</body>
</html>
