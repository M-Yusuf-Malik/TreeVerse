<?php

include('Connection.php');
$_SESSION["back_page"] = "DonatePage.php";

$uname = $_POST['username'];
$email = $_POST['email'];
$card_name = $_POST['card_name'];
$card_number = $_POST['card_number'];
$donation_amount = $_POST['donation_amount'];

$q = "INSERT INTO DonationHistory(Username, Email, Card_Name, Card_Number, Amount)
 VALUES ('$uname', '$email','$card_name', '$card_number', '$donation_amount')";

if ($_SESSION["Username"] != $uname) {
    $_SESSION["error_message"] = "Please provide your own Username.";

    header("location:../FrontEnd/ErrorPage.php");

} else {

    if ($link->query($q)) {

        $link->query("Update UserAccount set Donated=Donated+'$donation_amount' where Username='$uname'");
        header("location:../FrontEnd/HomePage.php");
    } else {
        $_SESSION["error_message"] = "Insertion Error";

        header("location:../FrontEnd/ErrorPage.php");
    }
}

$link->close();
