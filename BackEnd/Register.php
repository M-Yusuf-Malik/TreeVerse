<?php

include('Connection.php');
$_SESSION["back_page"] = "SignUpPage.php";

if($_POST['password'] != $_POST['cpassword']){
    header("location:../FrontEnd/SignUpPage.php");
    die;
};

$name = $_POST['name'];
$uname = $_POST['username'];
$email = $_POST['email'];
$password = $_POST['password'];
$gender = $_POST['gender'];

$q = "INSERT INTO UserAccount(Full_Name, Username, Email, Password, Gender, Score, Donated)
 VALUES ('$name', '$uname', '$email', '$password', '$gender', '0', '0')";

if ($link->query($q)) {
    header("location:../FrontEnd/LogInPage.php");
} else {
    $_SESSION["error_message"] = "Insertion Error";

    header("location:../FrontEnd/ErrorPage.php");
}

$link->close();
