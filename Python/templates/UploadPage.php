<html>

<head>
    <title> Upload Page </title>
    <link rel="stylesheet" href="static/CSS/Style.css">
    <link rel="stylesheet" href="static/CSS/UploadPage.css">
</head>

<body>

    <header class="header center-parent" style="justify-content: space-between;">
        <div class="header-nav center-parent">
            <a href="https://treeverse.000webhostapp.com/TreeVerse/FrontEnd/HomePage.php">
                <div class="nav-links center-parent"> Home</div>
            </a>
            <a href="https://treeverse.000webhostapp.com/TreeVerse/FrontEnd/LeaderboardPage.php">
                <div class="nav-links center-parent"> Leaderboard</div>
            </a>
            <a href="">
                <div class="nav-links center-parent"> Upload</div>
            </a>
        </div>

        <div class="header-center center-parent" style="justify-content: space-between;">
            <div class="small-circle"></div>
            <div class="center-parent" style="width: 80%;">
            <img src="static/TreeVerse_Logo.png" alt="" width="40vh" height="40vw" style="margin: 0 2.5% 0% 0;">
                <a href="https://treeverse.000webhostapp.com/TreeVerse/FrontEnd/HomePage.php">
                    <h1 style="font-size: 0.9em; padding: 0 0% 0% 5%;">TreeVerse</h1>
                </a>
            </div>
            <div class="small-circle"></div>
        </div>

        <div class="header-nav center-parent">
            <a href="https://treeverse.000webhostapp.com/TreeVerse/FrontEnd/DonatePage.php">
                <div class="nav-links center-parent"> Donate</div>
            </a>
            <a href="https://treeverse.000webhostapp.com/TreeVerse/FrontEnd/AccountPage.php">
                <div class="nav-links center-parent"> Account</div>
            </a>
            <a href="https://treeverse.000webhostapp.com/TreeVerse/BackEnd/LogOut.php">
                <div class="nav-links center-parent"> Log Out</div>
            </a>
        </div>

    </header>

    <main class="main" style="background-image: url('static/Background_Upload.jpg');">
        <div class="center-parent" style="flex-direction: column; flex-wrap: nowrap; backdrop-filter: blur(7.5px); width: 100%; height: 100%;">

            <form action="/result" method="POST" class="center-parent" style="flex-direction: column;" enctype="multipart/form-data">
                <div class="center-parent form">

                    <input type="file" name='img'>
                    <div class="inner-upload " style="background-image: url('static/upload_logo.png');">
                        <span> Have you planted a seed?<br> Let's find out :) </span>
                    </div>
                </div><br>

                <div class="center-parent form-b" style="text-align: center; width: 30vw;">
                    <div class="checkbox-text">
                        <input type="checkbox"> <span>I swear it is my picture and i have not<br> uploaded it previously.</span>
                    </div>

                    <div>
                        <button type="submit"> Check </button>
                    </div>
                </div>
            </form>

            <a href="https://treeverse.000webhostapp.com/TreeVerse/FrontEnd/UploadDetails.php">
                <div class="upload-details">Guidlines for Uploading</div>
            </a>

        </div>
    </main>

    <footer class=" center-parent footer ">

        <div class="footer-text center-parent ">
            <a href="https://treeverse.000webhostapp.com/TreeVerse/FrontEnd/HomePage.php">
                <h1>TreeVerse</h1>
            </a>
        </div>

        <div class="center-parent footer-links ">
            <div style="width: 100%; ">
                <ul>
                    <li> <a href="https://treeverse.000webhostapp.com/TreeVerse/FrontEnd/HomePage.php"> Home </a></li>
                    <li><a href="https://treeverse.000webhostapp.com/TreeVerse/FrontEnd/LeaderboardPage.php "> Leaderboard </a></li>
                    <li> <a href=""> Upload </a> </li>
                    <li><a href="https://treeverse.000webhostapp.com/TreeVerse/FrontEnd/Donatepage.php"> Donate </a> </li>
                    <li> <a href="https://treeverse.000webhostapp.com/TreeVerse/FrontEnd/AccountPage.php "> Account </a> </li>
                </ul>
                <div class="rights "> &copy; 2022 TreeVerse. All right reserved. </div>
            </div>
        </div>

        <div class="footer-socials center-parent ">
            <div class="center-parent ">
                <a href=" "> <img src="static/FB_Logo.png "></a>
                <a href=" "> <img src="static/Insta_Logo.png "></a>
                <a href=" "> <img src="static/Twitter_Logo.png "></a>
            </div>
            <div class="footer-support center-parent "> Support: treverse@gmail.com</div>
        </div>


    </footer>

</body>

</html>