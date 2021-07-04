<?php
session_start();
ob_start();
$_SESSION['usuarioActivo'] = null;
$_SESSION['nombreActivo'] = null;


header("Location: ../html/home.php");
?>