<?php
include("conexion.php");

class pacienteDAO
{

    public function validarRut($rut)
    {

        $con = conexion();
        $resultados = mysqli_query($con, "SELECT * FROM paciente where rutPaciente ='$rut'");
        while ($consulta = mysqli_fetch_array($resultados)) {
            echo 'existe', '<br>';
        }

    }

    public function validarPaciente($rut)
    {

    }

    public function crearPaciente()
    {

    }
}


validarRut(170329953);

?>