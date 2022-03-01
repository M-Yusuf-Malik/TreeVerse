<?php
session_start();
$_SESSION["main_path"] = "TreeVerse/FrontEnd/";
$_SESSION["back_page"] = "HomPage.php";

$link = new mysqli("localhost", "root", "", "TreeVerse");

if ($link->connect_error) {
    $_SESSION["error_message"] = "Database Error";

    header("location:../FrontEnd/ErrorPage.php");
};

?>