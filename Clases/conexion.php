

<?php

function conectar(){

    $user="root";
    $pass="";
    $server="localhost";
    $db="MaternoEducando";
    return new mysqli($server, $user, $pass, $db);
}
?>