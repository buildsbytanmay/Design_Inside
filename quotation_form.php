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

                <div class="grid-2">
                    <div class="field">
                        <label>Phone Number</label>
                        <input type="tel" name="phone_num" maxlength="10" oninput="this.value=this.value.replace(/[^0-9]/g,'')" required>
                    </div>

                    <div class="field">
                        <label>Alternate Phone</label>
                        <input type="tel" name="phone_num2" maxlength="10" oninput="this.value=this.value.replace(/[^0-9]/g,'')">
                    </div>
                </div>

                <div class="field">
                    <label>Address</label>
                    <input type="text" name="address">
                </div>

                <div class="grid-2">
                    <div class="field">
                        <label>Place</label>
                        <input type="text" name="place">
                    </div>

                    <div class="field">
                        <label>Service</label>
                        <select name="service" required>
                            <option value="">Select service</option>
                            <option>Interior Design</option>
                            <option>Renovation</option>
                            <option>Modular Kitchen</option>
                            <option>Full Home Design</option>
                        </select>
                    </div>
                </div>

                <div class="grid-2">
                    <div class="field">
                        <label>Price Range</label>
                        <select name="price_range">
                            <option value="">Select budget</option>
                            <option value="500000">Below ₹5 Lakhs</option>
                            <option value="1000000">₹5–10 Lakhs</option>
                            <option value="2000000">₹10–20 Lakhs</option>
                            <option value="2500000">Above ₹20 Lakhs</option>
                        </select>
                    </div>

                    <div class="field">
                        <label>Start Date</label>
                        <input type="date" name="start_date" min="<?= date('Y-m-d') ?>">
                    </div>
                </div>

                <div class="field">
                    <label>Project Details</label>
                    <textarea rows="4" name="message"></textarea>
                </div>

                <button class="quote-btn">Get a Quote</button>
            </form>
        </div>
    </div>

</body>
</html>