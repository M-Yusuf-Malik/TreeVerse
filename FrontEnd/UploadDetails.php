<?php
session_start();

if (isset($_SESSION['username'])) {
?>
    <html>

    <head>
        <title> Upload Details </title>
        <link rel="stylesheet" href="CSS/Style.css">
        <link rel="stylesheet" href="CSS/UploadDetails.css">
    </head>

    <body>

        <?php
        include('Header.php');
        ?>

        <main class="main center-parent" style="flex-direction: column;">
            <div class="text-details center-parent">
                <table>
                    <tr>
                        <th>- Guidlines -</th>
                    </tr>
                    <tr>
                        <td>Pictures should be taken from above.</td>
                    </tr>
                    <tr>
                        <td>Plant's specie should be of <br><label>Black-grass, Charlock, Cleavers, Common Chickweed,
                                Common
                                wheat, Fat Hen, Loose Silky-bent, Maize, Scentless Mayweed, Shepherds Purse,
                                Small-flowered
                                Cranesbill, Sugar beet</label><br> only.</td>
                    </tr>
                    <tr>
                        <td style="font-size: 1em; border: none; text-align: center; margin-top: 2.5%;height: 7.5vh;">
                            Some examples are:
                        </td>
                    </tr>

                </table>
            </div>

            <div class="pictures center-parent">
                <img src="Pictures/Plants/1 (1).png" alt="">
                <img src="Pictures/Plants/1 (2).png" alt="">
                <img src="Pictures/Plants/1 (3).png" alt="">
                <img src="Pictures/Plants/1 (4).png" alt="">
                <img src="Pictures/Plants/1 (5).png" alt="">
                <img src="Pictures/Plants/1 (6).png" alt="">
                <img src="Pictures/Plants/1 (7).png" alt="">
                <img src="Pictures/Plants/1 (8).png" alt="">
                <img src="Pictures/Plants/1 (9).png" alt="">
                <img src="Pictures/Plants/1 (10).png" alt="">
                <img src="Pictures/Plants/1 (11).png" alt="">

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