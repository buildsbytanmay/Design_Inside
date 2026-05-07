<?php
session_start();
if (!isset($_SESSION['admin'])) {
    header("Location: ../index.php");
    exit;
}

?>

<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<title>Completed Projects</title>
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<style>
*{
    margin:0;
    padding:0;
    box-sizing:border-box;
    font-family:'Segoe UI',sans-serif;
}
body{
    background:#f5f5f5;
}
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


<h2 style="margin:20px"><?= $edit_data ? "Update Project" : "Add New Project" ?></h2>

<form class="filter-form" method="post">
    <input type="hidden" name="action" value="<?= $edit_data ? 'update' : 'add' ?>">
    <?php if($edit_data): ?>
        <input type="hidden" name="old_email" value="<?= $edit_data['email'] ?>">
    <?php endif; ?>

    <input type="text" name="name" placeholder="Name" value="<?= $edit_data['name'] ?? '' ?>" required>
    <input type="email" name="email" placeholder="example@domain.com" value="<?= $edit_data['email'] ?? '' ?>" required>
    <input type="tel" name="phone_num" placeholder="10-digit phone" pattern="[6-9][0-9]{9}" maxlength="10" value="<?= $edit_data['phone_num'] ?? '' ?>" required>
    <input type="tel" name="phone_num2" placeholder="10-digit phone (optional)" pattern="[6-9][0-9]{9}" maxlength="10" value="<?= $edit_data['phone_num2'] ?? '' ?>">
    <input type="text" name="address" placeholder="Address" value="<?= $edit_data['address'] ?? '' ?>" required>
    <input type="number" name="Profit_price" placeholder="Profit Price" value="<?= $edit_data['Profit_price'] ?? '' ?>" required>
    <input type="date" name="start_date" value="<?= $edit_data['start_date'] ?? '' ?>" required>
    <input type="date" name="ending_date" value="<?= $edit_data['ending_date'] ?? '' ?>" required>
    <input type="text" name="place" placeholder="Place" value="<?= $edit_data['place'] ?? '' ?>" required>
    <input type="text" name="service" placeholder="Service" value="<?= $edit_data['service'] ?? '' ?>" required>
    <textarea name="message" placeholder="Message"><?= $edit_data['message'] ?? '' ?></textarea>
    <input type="number" name="comp_pro_price" placeholder="Completed Project Price" value="<?= $edit_data['comp_pro_price'] ?? '' ?>" required>
    <button type="submit"><?= $edit_data ? "Update Project" : "Add Project" ?></button>
</form>

<h2 style="margin:20px">Completed Projects</h2>

<form class="filter-form" method="get">
    <input type="text" name="name" placeholder="Name" value="<?= $_GET['name'] ?? '' ?>">
    <input type="text" name="email" placeholder="Email" value="<?= $_GET['email'] ?? '' ?>">
    <input type="text" name="service" placeholder="Service" value="<?= $_GET['service'] ?? '' ?>">
    <input type="text" name="place" placeholder="Place" value="<?= $_GET['place'] ?? '' ?>">
    <button type="submit">Filter</button>
</form>

<div class="table-container">
<table>
<thead>
<tr>
<th>Name</th><th>Email</th><th>Phone</th><th>Phone 2</th><th>Address</th><th>Profit Price</th><th>Start Date</th><th>Ending Date</th><th>Place</th><th>Service</th><th>Message</th><th>Completed Price</th><th>Actions</th>
</tr>
</thead>
<tbody>
<?php while($row = $result->fetch_assoc()): ?>
<tr>
<td><?= $row['name'] ?></td>
<td><?= $row['email'] ?></td>
<td><?= $row['phone_num'] ?></td>
<td><?= $row['phone_num2'] ?></td>
<td><?= $row['address'] ?></td>
<td><?= $row['Profit_price'] ?></td>
<td><?= $row['start_date'] ?></td>
<td><?= $row['ending_date'] ?></td>
<td><?= $row['place'] ?></td>
<td><?= $row['service'] ?></td>
<td><?= $row['message'] ?></td>
<td><?= $row['comp_pro_price'] ?></td>
<td>
    <a href="?edit=1&email=<?= $row['email'] ?>"><button class="approve">Edit</button></a>
    <a href="?delete=1&email=<?= $row['email'] ?>" onclick="return confirm('Delete?')"><button class="reject">Delete</button></a>
</td>
</tr>
<?php endwhile; ?>
</tbody>
</table>
</div>

<script>
    function toggleMenu(){
        document.querySelector('.menus').classList.toggle('active');
    }
</script>

</body>
</html>