<?php
    session_start();

    // unset($_SESSION["email"]);
    // unset($_SESSION["fname"]);

    session_unset();

    session_destroy();

    header("Location:../FrontEnd/LogInPage.php");
?>