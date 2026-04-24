<?php

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>ADMIN Login / Forgot Password</title>

    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" href="nav.css">

    <!-- VERY IMPORTANT -->
    <script src="script.js" defer></script>
</head>
<body>

    <div id="container">

        <!-- LOGIN FORM -->
        <div class="login">
            <div class="content">
                <h1>Log In</h1>

                <form method="POST" action="login.php">
                    <input type="text" name="user_input" placeholder="Username / Email" required>
                    <input type="password" name="password" placeholder="Password" required>
                    <input type="hidden" name="login" value="1">

                    <span class="clearfix"></span>

                    <!-- ONLY submit -->
                    <button type="submit">Log In</button>
                </form>
            </div>
        </div>
    </div>

    <!-- FRONT PANEL -->
    <div class="page front">
        <div class="content">
            <h1>Hello, Admin</h1>
            <p>Log in to continue</p>

            <!-- MUST be id="register" -->
            <button type="button" id="register">
                Forgot Password
            </button>

            <br>

            <button type="button" onclick="window.location.href='http://localhost/Design_Inside/'">
                HOME
            </button>
        </div>

        <!-- BACK PANEL -->
        <div class="page back">
            <div class="content">
                <h1>Welcome Back!</h1>
                <p>Return to login</p>

                <!-- MUST be id="login" -->
                <button type="button" id="login">
                    Log In
                </button>

                <br>

                <button type="button" onclick="window.location.href='http://localhost/Design_Inside/'">
                    HOME
                </button>
            </div>
        </div>

    </div>

</body>
</html>