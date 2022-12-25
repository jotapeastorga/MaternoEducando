<?php

include("conexion.php");

session_start();
ob_start();


$diaReserva = $_POST["dia"];
$mesReserva = $_POST["mes"];
$annoReserva = $_POST["anno"];
$bloqueEli = $_POST["bloque"];
$nombreActivo = $_SESSION['nombreActivo'];
$rutPacienteCita = $_POST["rutPacienteCita"];

$bandera = 0;

//0 = en tratamiento y 1 = tratamiento consulta terminado
$resultados = mysqli_query(conectar(),"SELECT * FROM pacienteConsulta WHERE rutPsicologo = '184896559' AND rutPaciente  ='$rutPacienteCita'  and estadoConsulta = 0");

while ($consulta = mysqli_fetch_array($resultados)) {

    $bandera = 1;
}

if ($bandera === 0) {
    //Redirige para crear nueva consulta, porque el paciente no tiene consultas activas
    header("Location: ../html/prxHorPro.php");

}else{
    //Si trae datos quiere decir que el paciente tiene consultas activas
    header("Location: ../html/registrarSesion.php");


}









?>