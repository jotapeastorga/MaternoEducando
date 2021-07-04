<?php

include("conexion.php");

session_start();
ob_start();


$rutPac = $_POST["rutPacIni"];
$passwordPac = $_POST["pasPacIni"];

$bandera = 0;
$resultados = mysqli_query(conectar(), "SELECT nombrePaciente FROM paciente where rutPaciente = '$rutPac' AND passPaciente = '$passwordPac'");
while ($consulta = mysqli_fetch_array($resultados)) {

    $nombreActivo = $consulta[0];
    $bandera = 1;

}

if ($bandera === 0) {
    echo json_encode ('error');
}else {
    if($rutPac==184896559 or $rutPac==198765432){

        $_SESSION['usuarioActivo'] = $rutPac;
        $_SESSION['nombreActivo'] = $nombreActivo;
        echo json_encode ('profesional');
    } else{
        $_SESSION['usuarioActivo'] = $rutPac;
        $_SESSION['nombreActivo'] = $nombreActivo;
        echo json_encode ('exito');

    }

}




?>