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

    <form class="filter-form" method="get">
        <select name="status">
            <option value="">All Status</option>
            <option value="selected">Selected</option>
            <option value="not selected">Not Selected</option>
        </select>
        <input type="text" name="name" placeholder="Name">
        <input type="text" name="email" placeholder="Email">
        <input type="text" name="phone" placeholder="Phone">
        <input type="text" name="service" placeholder="Service">
        <select name="price">
            <option value="">All Price</option>
            <option value="100000">Under 100000</option>
            <option value="500000">Under 500000</option>
            <option value="500001">Above 500000</option>
        </select>
        <button type="submit">Filter</button>
    </form>

</body>
</html>