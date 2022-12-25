<?php

include("conexion.php");

session_start();
ob_start();


$rutPac = $_SESSION["usuarioActivo"];


$resumenDia =$_POST['resumenDia'];
$emocionDia =$_POST['emocionDia'];
$comentariosEstadoAnimo =$_POST['comentariosEstadoAnimo'];
$idConsulta =$_POST['idConsulta'];
$idSesion =$_POST['idSesion'];




if(mysqli_query(conectar(),"INSERT INTO `estadoAnimoSesion` ( `idSesionAnimo`, `idConsultaAnimo`, `notaDia`, `emocionDia`, `detalleEmocion`) VALUES ( '$idSesion', '$idConsulta', '$resumenDia', '$emocionDia', '$comentariosEstadoAnimo');")){

        echo json_encode ('exito');
}else{
    echo json_encode ('error');
}

?>
