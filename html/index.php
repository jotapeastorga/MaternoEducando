<?php

session_start();
ob_start();



//Cambiar esta variable dependiendo de como se use
//JP
//JPX
//SEBA
//HOSTGATOR



    $_SESSION['iniciarSesion'] = "../html/iniciarSesion.php";
    $_SESSION['home'] = "../html/home.php";
    $_SESSION['Qsomos'] = "../html/quienesSomos.php";
    $_SESSION['recuperarClave'] = "../html/recuperarClave.php";
    $_SESSION['registrar'] = "../html/registrar.php";
    $_SESSION['reservar'] = "../html/reserva.php";
    $_SESSION['validarPaciente'] = "../Clases/crearPaciente.php";
    $_SESSION['nombreActivo'] = null;
    $_SESSION['usuarioActivo'] = null;


    header("Location: ../html/home.php");



?>
