<?php
session_start();

if (isset($_SESSION['username'])) {
    header("location:../FrontEnd/HomePage.php");
} else {
?>
    <html>

    <head>
        <title> Log In </title>
        <link rel="stylesheet" href="CSS/Style.css">
        <link rel="stylesheet" href="CSS/LoginPage.css">
    </head>

    <body>

        <main class="main center-parent">
            <div class="center-parent" style="backdrop-filter: blur(10px); width: 100%; height: 100%; justify-content: space-evenly;">
                <div>
                    <h1>TreeVerse</h1>
                </div>

                <form action="../BackEnd/LogInCheck.php" method="post" class="form-box-main center-parent">

                    <div class="form-fields center-parent">
                        <h2> Log In </h2>
                    </div>

                    <hr>

                    <div class="form-fields center-parent">
                        <input type="text" class="input-fields" name="username" placeholder="Username">
                    </div>

                    <div class="form-fields center-parent">
                        <input type="password" class="input-fields" name="password" placeholder="Password">
                    </div>

                    <div class="center-parent" style="justify-content: center; width: 22.5vw; margin-bottom: 2.5vh;">
                        <div class="form-fields center-parent" style="height: 6vh; width: 10vw; border-right: 2px solid rgb(170, 170, 170);">
                            <input type="submit" value="Log In" class="two-towers">
                        </div>

                        <div class="form-fields center-parent" style="width: 10vw;">
                            <a href="SignUpPage.php">
                                <div class="two-towers center-parent">Sign Up</div>
                            </a>
                        </div>
                    </div>
                </form>

            </div>


        </main>

    </body>

    </html>

<?php
}
?>