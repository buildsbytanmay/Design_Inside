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

</body>
</html>