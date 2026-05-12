<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<title>Admin Dashboard</title>
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<style>

</style>
</head>

<body>
    <!-- <nav>
        <div class="logo">Design_Inside</div>
        <div>
            <a href="dashboard.php">Dashboard</a>
            <a href="customer.php">Customer</a>
            <a href="completed.php">Completed</a>
            <a href="logout.php">Logout</a>
        </div>
    </nav> -->

    <nav>
        <a href="http://localhost/Design_Inside/">
            <div class="logo"></div>
        </a>

        <!-- Hamburger -->
        <div class="hamburger" onclick="toggleMenu()">☰</div>

        <div class="menus">
            <a class="submenus underline" href="dashboard.php">DASHBOARD</a>
            <a class="submenus underline" href="customer.php">CUSTOMER</a>
            <a class="submenus underline" href="completed.php">COMPLETED</a>
            <a class="submenus underline" href="logout.php">LOGOUT</a>
        </div>
    </nav>

    <div class="dashboard">
        <div class="card"><h3>Total Customers</h3><div class="count"><?= $total_customer ?></div></div>
        <div class="card"><h3>Selected</h3><div class="count"><?= $selected_customer ?></div></div>
        <div class="card"><h3>Not Selected</h3><div class="count"><?= $not_selected_customer ?></div></div>
        <div class="card"><h3>Completed</h3><div class="count"><?= $completed_project ?></div></div>
    </div>

</body>
</html>