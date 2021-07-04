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

    <div id="contTera">
        <div id="tipoTerapia"><h1>Selecciona el tipo de Psicoterapia</h1></div>

        <div class="terapeuta"> <!--profesional1-->
            <div class="fotoPerfilDani"></div>
            <div class="especialidad">Educadora diferencial, especialista en problemas de audición y lenguaje. Postítulo en Dificultades específicas del aprendizaje. Experiencia en estimulación temprana y programas de integración escolar.</div>
            <div class="valorHora">
                <div class="tiempoSe">Tiempo: 45 Minutos</div>
                <div class="valorSe">$45.000</div>
            </div>
            <div class="divBotones">
                <div  >
                    <form id="reservarHoraDani" name="reservarHoraDani" >
                        <input type="date" name="diaReserva" class="diaReserva" required>
                        <select  name="bloqueDani" id="bloqueDani" class="horaReserva" required>
                            <option value="1">8:00 a 8:45</option>
                            <option value="2">9:00 a 9:45</option>
                            <option value="3">10:00 a 10:45</option>
                            <option value="4">11:00 a 11:45</option>
                            <option value="5">12:00 a 12:45</option>
                            <option value="6">13:00 a 13:45</option>
                            <option value="7">14:00 a 14:45</option>
                            <option value="8">15:00 a 15:45</option>
                            <option value="9">16:00 a 16:45</option>
                            <option value="10">17:00 a 17:45</option>
                            <option value="11">18:00 a 18:45</option>
                            <option value="12">19:00 a 19:45</option>
                            <option value="13">20:00 a 20:45</option>
                            <option value="14">21:00 a 21:45</option>

                        </select>
                </div>
                <div  id="btnReservar">
                    <button class="btns" type="submit" id="btnRHD" >Reservar</button>
                </div>
                </form>
            </div>
        </div>
    </div>
        <div class="terapeuta"> <!--profesional2-->
            <div class="fotoPerfilEli"></div>
            <div class="especialidad">Psicóloga. Diplomada en salud mental perinatal y cursando diplomado en psicodiagnóstico infanto-juvenil.
                Experiencia en atención de NNA en establecimientos educacionales ejecutando talleres psicoeducativos, realizando apoyo en convivencia escolar y en programa de integración escolar.
                En la actualidad ejerce en el área educacional y en consulta particular con madres-padres y NNA.</div>
            <div class="valorHora">
                <div class="tiempoSe">Tiempo: 45 Minutos</div>
                <div class="valorSe">$45.000</div>
            </div>
            <div class="divBotones">
                <div  >
                    <form id="reservarHoraEli" name="reservarHoraEli" >
                            <input type="date" name="diaReserva" class="diaReserva" required>
                                <select  name="bloqueEli" id="bloqueEli" class="horaReserva">
                                    <option value="1">8:00 a 8:45</option>
                                    <option value="2">9:00 a 9:45</option>
                                    <option value="3">10:00 a 10:45</option>
                                    <option value="4">11:00 a 11:45</option>
                                    <option value="5">12:00 a 12:45</option>
                                    <option value="6">13:00 a 13:45</option>
                                    <option value="7">14:00 a 14:45</option>
                                    <option value="8">15:00 a 15:45</option>
                                    <option value="9">16:00 a 16:45</option>
                                    <option value="10">17:00 a 17:45</option>
                                    <option value="11">18:00 a 18:45</option>
                                    <option value="12">19:00 a 19:45</option>
                                    <option value="13">20:00 a 20:45</option>
                                    <option value="14">21:00 a 21:45</option>

                                </select>
                </div>
                <div  id="btnReservar">
                    <button class="btns"  type="submit" id="btnRHE" >Reservar</button>
                </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
</div>
<script src="../js/reservaHoraEli.js"></script>
<script src="../js/reservaHoraDani.js"></script>
</body>
</html>
