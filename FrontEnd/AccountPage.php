<?php
include('../BackEnd/Connection.php');

if (isset($_SESSION['username'])) {
    $username = $_SESSION['username'];
    
    $_SESSION["back_page"] = "AccountPage.php";

    $q = "SELECT * FROM UserAccount WHERE Username='$username'";

    if (($result = $link->query($q))) {
        $user_data = $result->fetch_assoc();
    
        if (is_array($user_data)) {
        }
    }
    else{
        $_SESSION["error_message"] = "Query Error";
    
        header("location:../FrontEnd/ErrorPage.php");
    }
?>

    <html>

    <head>
        <title> Account Page </title>
        <link rel="stylesheet" href="CSS/Style.css">
        <link rel="stylesheet" href="CSS/AccountPage.css">
    </head>

    <body>

        <?php
        include('Header.php');
        ?>

        <main class="main center-parent">

            <div class="profile-fields" style="height: 0; margin-top:-5vh;">
            </div>

            <div class="profile-fields">
                <label> Full Name: </label>
                <span class="user-data">
                    <?php echo $user_data["Full_Name"] ?>
                </span>
            </div>
            <div class="profile-fields">
                <label> Username: </label>
                <span class="user-data">
                    <?php echo $user_data["Username"] ?>
                </span>
            </div>
            <div class="profile-fields">
                <label> Email: </label>
                <span class="user-data">
                    <?php echo $user_data["Email"] ?>
                </span>
            </div>
            <div class="profile-fields">
                <label> Pasword: </label>
                <span class="user-data">
                    <?php echo $user_data["Password"] ?>
                </span>
            </div>
            <div class="profile-fields">
                <label> Score: </label>
                <span class="user-data">
                    <?php echo $user_data["Score"] ?>
                </span>
            </div>
            <div class="profile-fields">
                <label> Donated: </label>
                <span class="user-data">
                    <?php echo $user_data["Donated"] ?>
                </span>
            </div>
            <div class="center-parent" style="width: 25vw; height: 10vh;">
                <a href="HistoryPage.php">
                    <div class="two-towers center-parent"> View History </div>
                </a>
            </div>

        </main>

        <?php
        include('Footer.php');
        ?>

    </body>

    </html>

<?php
} else {
    header("location:../FrontEnd/LogInPage.php");
}
?>