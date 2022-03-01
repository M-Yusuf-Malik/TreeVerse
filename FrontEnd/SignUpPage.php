<?php
session_start();

if (isset($_SESSION['username'])) {
    header("location:../FrontEnd/HomePage.php");
} else {
?>
    <html>

    <head>
        <title> Sign Up </title>
        <link rel="stylesheet" href="CSS/Style.css">
        <link rel="stylesheet" href="CSS/SignUpPage.css">

        <script>
            function check() {
                if (document.form.password.value != document.form.cpassword.value) {
                    window.alert("Password not matched!");
                }
            }
        </script>
    </head>

    <body>

        <main class="main center-parent">
            <div class="center-parent" style="backdrop-filter: blur(10px); width: 100%; height: 100%; justify-content: space-evenly;">
                <div>
                    <h1>TreeVerse</h1>
                </div>

                <form name="form" onsubmit="check();" action="../BackEnd/Register.php" method="post" class="form-box-main center-parent">

                    <div class="form-fields center-parent">
                        <h2> Register </h2>
                    </div>

                    <hr>

                    <div class="form-fields center-parent">
                        <input type="text" class="input-fields" name="name" placeholder="Full Name">
                    </div>

                    <div class="form-fields center-parent">
                        <input type="text" class="input-fields" name="username" placeholder="User Name" required>
                    </div>

                    <div class="form-fields center-parent">
                        <input type="email" class="input-fields" name="email" placeholder="Email" required>
                    </div>

                    <div class="form-fields center-parent">
                        <input type="password" class="input-fields" name="password" placeholder="Password" required>
                        <span id="wrong"></span>
                    </div>

                    <div class="form-fields center-parent">
                        <input type="password" class="input-fields" name="cpassword" placeholder="Confirm Password" required>
                    </div>

                    <div class="form-fields center-parent">
                        <input type="radio" name="gender" value="male" checked>
                        <pre> Male     </pre>
                        <input type="radio" name="gender" value="female">
                        <pre> Female    </pre>
                        <input type="radio" name="gender" value="other">
                        <pre> Other</pre>
                    </div>

                    <div class="center-parent" style="justify-content: center; width: 22.5vw; margin-bottom: 2.5vh;">
                        <div class="form-fields center-parent" style="height: 6.5vh; width: 10vw; margin-bottom: 1.5vh;">
                            <input type="submit" value="Sign Up" class="two-towers">
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