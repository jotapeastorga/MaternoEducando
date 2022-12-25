<?php

include("conexion.php");

session_start();
ob_start();


$rutPac = $_SESSION["usuarioActivo"];


$registroSesionTexto =$_POST['registroSesionTexto'];
$resumenSemana =$_POST['resumenSemana'];
$idConsulta =$_POST['idConsulta'];
$actividadesPsico =$_POST['actividadesPsico'];



if(mysqli_query(conectar(),"INSERT INTO `sesionAtencion` ( `idPacienteConsulta`, `detalles`, `documentos`, `nivelMejora`, `TareaPsicoterapeuticas`, `fechaSesion`) VALUES ( '$idConsulta', '$registroSesionTexto', 0, '$resumenSemana', '$actividadesPsico', current_timestamp());")){
        echo json_encode ('exito');
}else{
    echo json_encode ('error');
}

?>
