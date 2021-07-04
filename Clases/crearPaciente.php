<?php

include("conexion.php");

$rutPac = $_POST["rutPac"];
$nombresPac = $_POST["nombresPac"];
$apellidosPac = $_POST["apellidosPac"];
$correoPac = $_POST["correoPac"];
$celularPac = $_POST["celularPac"];
$passwordPac = $_POST["passwordPac"];

    $bandera = 0;
    $resultados = mysqli_query(conectar(), "SELECT * FROM paciente where rutPaciente = '$rutPac'");
    while ($consulta = mysqli_fetch_array($resultados)) {

        $bandera = 1;
    }

    if ($bandera === 0) {

        mysqli_query(conectar(), "INSERT INTO `paciente` (`rutPaciente`, `nombrePaciente`, `apellidosPacientes`, `telefonoPaciente`, `emailPaciente`, `passPaciente`) VALUES ('$rutPac', '$nombresPac', '$apellidosPac', '$celularPac', '$correoPac', '$passwordPac');");
        echo json_encode ('usuarioCreado');
    }else {
        echo json_encode ('siExiste');
    }


?>