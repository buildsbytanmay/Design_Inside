<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<title>Customer Management</title>
<meta name="viewport" content="width=device-width, initial-scale=1.0">

<style>

</style>
</head>
<body>
    <!-- <nav>
        <div class="logo">Design_Inside</div>
        <div>
            <a href="dashboard.php">Home</a>
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

<h2 style="margin:20px"><?= $edit_data ? "Update Customer" : "Add New Customer" ?></h2>

<form class="filter-form" method="post">
    <input type="hidden" name="action" value="<?= $edit_data ? 'update' : 'add' ?>">
    <?php if($edit_data): ?>
        <input type="hidden" name="old_email" value="<?= $edit_data['email'] ?>">
    <?php endif; ?>

    <input type="text" name="name" placeholder="Name" value="<?= $edit_data['name'] ?? '' ?>" required>
    <input type="email" name="email" placeholder="example@domain.com" pattern="^[a-zA-Z0-9._%+-]+@[a-zA-Z0-9.-]+\.[a-zA-Z]{2,}$" value="<?= $edit_data['email'] ?? '' ?>" required>
    <input type="tel" name="phone_num" placeholder="10-digit phone" pattern="[6-9][0-9]{9}" maxlength="10" value="<?= $edit_data['phone_num'] ?? '' ?>" required>
    <input type="tel" name="phone_num2" placeholder="10-digit phone (optional)" pattern="[6-9][0-9]{9}" maxlength="10" value="<?= $edit_data['phone_num2'] ?? '' ?>">
    <input type="text" name="address" placeholder="Address" value="<?= $edit_data['address'] ?? '' ?>" required>
    <input type="number" name="price_range" placeholder="Price Range" value="<?= $edit_data['price_range'] ?? '' ?>" required>
    <input type="date" name="start_date" value="<?= $edit_data['start_date'] ?? '' ?>" required>
    <input type="text" name="place" placeholder="Place" value="<?= $edit_data['place'] ?? '' ?>" required>
    <input type="text" name="service" placeholder="Service" value="<?= $edit_data['service'] ?? '' ?>" required>
    <textarea name="message" placeholder="Message"><?= $edit_data['message'] ?? '' ?></textarea>
    <select name="status_c" required>
        <option value="not selected" <?= ($edit_data['status_c'] ?? '')=='not selected'?'selected':'' ?>>Not Selected</option>
        <option value="selected" <?= ($edit_data['status_c'] ?? '')=='selected'?'selected':'' ?>>Selected</option>
    </select>
    <button type="submit"><?= $edit_data ? "Update Customer" : "Add Customer" ?></button>
</form>

</body>
</html>