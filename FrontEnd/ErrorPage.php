<html>

<head>
    <title> Error </title>
    <link rel="stylesheet" href="CSS/Style.css">
    <link rel="stylesheet" href="CSS/ErrorPage.css">
</head>

<body>
    <header class="header center-parent">

        <div class="header-center center-parent">
            <div class="small-circle"></div>
            <div class="center-parent" style="width: 80%;">
                <img src="Pictures/TreeVerse_Logo.png" alt="" width="50vw" height="50vh" style="margin: 0 2.5% 0% 0;">
                <a href="ErrorPage.php">
                    <h1 style="font-size: 0.9em; padding: 0 0% 0% 5%;">TreeVerse</h1>
                </a>
            </div>
            <div class="small-circle"></div>
        </div>

    </header>

    <?php
    session_start();
    $back_page = $_SESSION['back_page'];

    echo "<a href=" . $back_page . "> <img src='Pictures/Back_Logo.png' class='img-back'> </a>";
    ?>

    <main class="main center-parent">
        <div class="error-text center-parent" style="backdrop-filter: blur(7.5px);">

            <?php
            $error_msg = $_SESSION['error_message'];
            echo $error_msg;
            ?>

        </div>
    </main>


</body>

</html>