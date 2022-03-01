<?php
session_start();

if (isset($_SESSION['username'])) {
?>

    <html>

    <head>
        <title> Leaderboard </title>
        <link rel="stylesheet" href="CSS/Style.css">
        <link rel="stylesheet" href="CSS/LeaderboardPage.css">
    </head>

    <body>

        <?php
        include('Header.php');
        ?>

        <main class="main center-parent">
            <a href="ScoreLeaderboardPage.php">
                <div class="L-text center-parent" style="margin-bottom:25vh; ">
                    Seeders Leaderboard
                </div>
            </a>

            <div class="v-line"> </div>

            <a href="DonateLeaderboardPage.php">
                <div class="L-text center-parent" style="margin-top:25vh; ">
                    Rooters Leaderboard
                </div>
            </a>

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