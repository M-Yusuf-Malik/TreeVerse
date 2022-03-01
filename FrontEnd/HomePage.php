<?php
session_start();

if (isset($_SESSION['username'])) {
?>
    <html>

    <head>
        <title> Home Page </title>
        <link rel="stylesheet" href="CSS/Style.css">
        <link rel="stylesheet" href="CSS/HomePage.css">

        <?php
        if (isset($_SESSION['status']) and (time() - $_SESSION['time'] < 3)) {
        ?>
            <meta http-equiv="refresh" content="3">
        <?php } ?>

    </head>

    <body>

        <?php
        include('Header.php');

        if (isset($_SESSION['status'])) {
            if (time() - $_SESSION['time'] < 3) {
                echo "<div style=
                'position: absolute;
                top: 12vh;
                width:100vw;
                z-index: 3;
                font-size:1.15em;
                display:flex;
                justify-content:center;'>" . $_SESSION['status'] . "</div>";
            }
        }
        ?>

        <main class="main center-parent">
            <div class="center-parent" style="width: 100vw; height:125vh;">
                <img class="After-800" src="Pictures/Background_HP.jpg" width="100%" height="100%">
            </div>

            <h1> Welcome to TreeVerse! </h1>
            <h2> A hope for a better future. </h2>

            <div class="links-div-main center-parent">
                <div class="links-img-container" style="background-image: url('Pictures/Earn_Seeds_HP.jpg');">
                    <div class="links-divs center-parent">
                        <span class="text-in-links">Earn Seeds</span>
                        <p style="margin-bottom: -5%;"> By uploaing the picture of plant seedlings.</p>
                    </div>
                </div>
                <div class="hr-line"></div>
                <a href="http://127.0.0.1:40/">
                    <div class="links-divs-button center-parent">
                        <img src="Pictures/Arrow_Logo.png">
                    </div>
                </a>
            </div>

            <div class="center-parent links-div-main" style="background: rgba(0, 0, 0, 0.85);">
                <a href="DonatePage.php">
                    <div class="links-divs-button even-hover center-parent" style="margin-left: 22.5vw; margin-right: 0; background-color:rgba(82, 82, 82, 0.85);">
                        <img src="Pictures/Arrow_Logo.png" style="opacity: .75;">
                    </div>
                </a>
                <div class="hr-line" style="box-shadow: 2px 3px .3em 1px rgba(24, 94, 112, 0.226), 0.3em 0.3em 1em rgba(7, 8, 8, 0.25);">
                </div>
                <div class="links-img-container help-img" style="background-image: url('Pictures/Donate_Us_HP.jpeg');">
                    <div class="links-divs center-parent help-text">
                        <span class="text-in-links" style="color: rgba(30, 32, 30, 0.993); ">Donate Money</span>
                        <p style="color: rgba(31, 29, 29, 0.671); "> Help us grow more.</p>
                    </div>
                </div>

            </div>

            <div class="links-div-main center-parent">
                <div class="links-img-container" style="background-image: url('Pictures/LeaderBorad_HP.png'); background-position: -5vw 0;">
                    <div class="links-divs center-parent ">
                        <span class="text-in-links ">Check Leaderboard</span>
                        <p> See if you rank in the top.</p>
                    </div>
                </div>
                <div class="hr-line "></div>
                <a href="LeaderboardPage.php">
                    <div class="links-divs-button center-parent ">
                        <img src="Pictures/Arrow_Logo.png ">
                    </div>
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