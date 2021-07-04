<?php

include("conexion.php");

session_start();
ob_start();


$diaReserva = $_POST["dia"];
$mesReserva = $_POST["mes"];
$annoReserva = $_POST["anno"];
$bloqueEli = $_POST["bloque"];
$nombreActivo = $_SESSION['nombreActivo'];


$bandera = 0;



$resultados = mysqli_query(conectar(),"SELECT * FROM agendaprofesional WHERE rutProfesionalAgenda = '184896559' AND dia = '$diaReserva' AND mes = '$mesReserva' AND estadoProfesionalAgenda = 0 AND idBloqueAgenda  ='$bloqueEli'");
while ($consulta = mysqli_fetch_array($resultados)) {

    $rows[] = $consulta;
    $bandera = 1;

}

if  ($nombreActivo==null){
    echo json_encode ('sinSesion');
}elseif  ($bandera == 0){
    echo json_encode ('sinHoras');
}else{

    if(mysqli_query(conectar(),"UPDATE agendaprofesional SET estadoProfesionalAgenda = 1 WHERE rutProfesionalAgenda = '184896559' AND dia = '$diaReserva' AND mes = '$mesReserva' AND estadoProfesionalAgenda = 0 AND idBloqueAgenda  ='$bloqueEli'")){
        echo json_encode ('reservaExitosa');
    }else{
        echo json_encode ('errorAlReservar');
    }

}




?>