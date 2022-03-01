<?php
include('Connection.php');

$username = $_SESSION["username"];

$q = "Update UserAccount set Score=Score+100 where Username='$username'";

if ($link->query($q)) {
    $_SESSION['status'] = "Success! Score +100!";
    $_SESSION['time'] = time();

    header("location:../FrontEnd/HomePage.php");
} else {
    $_SESSION["error_message"] = "Insertion Error";

    header("location:../FrontEnd/ErrorPage.php");
}
