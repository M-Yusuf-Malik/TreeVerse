<?php

include('Connection.php');
$_SESSION["back_page"] = "LogInPage.php";

$username = $_POST["username"];
$password = $_POST["password"];

$q = "SELECT * FROM UserAccount WHERE Username='$username' and Password='$password'";

if ($result = $link->query($q)) {
	$login_data = $result->fetch_assoc();

	if (is_array($login_data)) {
		$_SESSION["username"] = $login_data["Username"];

		header("location:../FrontEnd/HomePage.php");
	}
	else{
		$_SESSION["error_message"] = "Invalid Username or Password";
	
		header("location:../FrontEnd/ErrorPage.php");
	}
}
else{
	$_SESSION["error_message"] = "Query Error";

	header("location:../FrontEnd/ErrorPage.php");
}

$link->close();
