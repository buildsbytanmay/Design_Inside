<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Quotation Form</title>
    <link rel="stylesheet" href="quotation_form.css">
    <link rel="stylesheet" href="nav.css">
    <link rel="stylesheet" href="footer.css">
</head>

<body>

    <nav>
        <a href="index.html"><div class="logo"></div></a>

        <!-- Hamburger -->
        <div class="hamburger" onclick="toggleMenu()">☰</div>

        <div class="menus">
            <a class="submenus underline" href="index.html">HOME</a>
            <a class="submenus underline" href="service.html">SERVICES</a>
            <a class="submenus underline" href="project.html">PROJECTS</a>
            <a class="submenus underline" href="about_us.html">ABOUT US</a>
        </div>
    </nav>

    <div class="quote-wrapper">
        <div class="quote-card">
            <h1>Get a Quote</h1>
            <p>Tell us about your project and we’ll get back to you</p>

            <form action="quotation_form.php" method="POST">

                <div class="grid-2">
                    <div class="field">
                        <label>First Name</label>
                        <input type="text" name="first_name" required>
                    </div>

                    <div class="field">
                        <label>Last Name</label>
                        <input type="text" name="last_name" required>
                    </div>
                </div>

                <div class="field">
                    <label>Email</label>
                    <input type="email" name="email" required>
                </div>
            </form>
        </div>
    </div>

</body>
</html>