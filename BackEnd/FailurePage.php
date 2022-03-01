<?php
session_start();

$_SESSION['status'] = "Failure! Not a picture of Plant. See the guidlines!";
$_SESSION['time'] = time();

header("location:../FrontEnd/HomePage.php");

?>