<?php
session_start();

if (isset($_SESSION['username'])) {
?>
    <html>

    <head>
        <title> How it Works </title>
        <link rel="stylesheet" href="CSS/Style.css">
        <link rel="stylesheet" href="CSS/HowItWorks.css">
    </head>

    <body>

        <?php
        include('Header.php');
        ?>

        <main class="main center-parent">
            <div class="text-details center-parent">
                <div>
                    <table>
                        <tr>
                            <th>- How it Works -</th>
                        </tr>
                        <tr>
                            <td> We'll pick top 3 from the Seeders leaderboard every month and will give the rewards to them. </td>
                        </tr>
                        <tr>
                            <td> We'll also pick 3 randomly persons from the Seeders leaderboard exluding top 3 every month for the rewards. </td>
                        </tr>
                        <tr>
                            <td> One person who has won before can win again :) </td>
                        </tr>
                        <tr>
                            <td> It's all about making the world a little better! </td>
                        </tr>
                        <tr>
                            <td> Good luck! </td>
                        </tr>
                    </table>
                    <div class="center-parent" style="font-weight:bolder; margin-top: 7.5vh;"> The World is Cruel :( </div>
                </div>
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