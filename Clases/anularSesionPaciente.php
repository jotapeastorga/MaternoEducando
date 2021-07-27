<?php

include("conexion.php");

session_start();
ob_start();


$rutPac = $_SESSION["usuarioActivo"];


$mesCita =$_POST['mesCita'];
$diaCita =$_POST['diaCita'];
$rutCita =$_POST['rutCita'];
$bloqueCita =$_POST['bloqueCita'];
$nombreCita =$_POST['estadoCita'];
$estadoCita =$_POST['nombreCita'];
if(mysqli_query(conectar(),"UPDATE agendaprofesional SET estadoCita ='ANULADO' WHERE rutPacienteCita = '$rutPac' AND dia = '$diaCita' AND mes = '$mesCita' AND idBloqueAgenda  ='$bloqueCita'")){

    echo json_encode ('exito');
}else{
    echo json_encode ('error');
}





?>
