<?php
session_start();

if (isset($_SESSION['username'])) {
?>
<html>

<head>
    <title> Donate Page </title>
    <link rel="stylesheet" href="CSS/Style.css">
    <link rel="stylesheet" href="CSS/DonatePage.css">
</head>

<body>

    <?php
    include('Header.php');
    ?>

        <main class="main center-parent">
            <div class="center-parent" style="backdrop-filter: blur(2.5px); width: 100%; height: 100%; ">
                <form action="../BackEnd/Donate.php" method="post" class="form-box-main center-parent">

                    <div class="form-fields center-parent">
                        <h1 style="font-size: 1.75em;"> Donate </h1>
                    </div>

                    <hr><br>

                    <div class="form-fields center-parent">
                        <input type="text" class="input-fields" name="username" placeholder="Username" value=<?php echo $_SESSION['username'] ?> >
                    </div>

                    <div class="form-fields center-parent">
                        <input type="email" class="input-fields" name="email" placeholder="Email">
                    </div>

                    <div class="form-fields center-parent">
                        <input type="text" class="input-fields" name="card_name" placeholder="Name on Card">
                    </div>

                    <div class="form-fields center-parent">
                        <input type="number" class="input-fields" name="card_number" placeholder="Card Number">
                    </div>

                    <div class="form-fields center-parent">
                        <input type="number" class="input-fields" name="donation_amount" placeholder="Amount to Donate">
                    </div>

                    <div class="form-fields center-parent">
                        <input type="submit" value="Donate" class="two-towers">
                    </div>
                </form>

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