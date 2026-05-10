<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<title>Customer Management</title>
<meta name="viewport" content="width=device-width, initial-scale=1.0">

<style>
*{
    margin:0;
    padding:0;
    box-sizing:border-box;
    font-family:'Segoe UI',sans-serif;
}
body{
    background:#f5f5f5
}

nav{
    /* background:#004d4d; */
    background:#69a3a3;
    height: 100px;
    display:flex;
    justify-content:space-between;
    align-items:center;
    padding:0 30px;
    color:#fff;
}
nav .logo{
    font-size:24px;
    font-weight:700
}
nav a{
    color:#fff;
    text-decoration:none;
    margin-left:18px;
    font-weight:600
}
nav a:hover{
    color:#ffd700
}

/* ================= NAVBAR RESPONSIVE ================= */

.logo{
    height: 80px;
    width: 150px;
    background-image: url(Assets/Images/Logo.png);
    background-size: 115%;
    background-position-x: center;
    background-position-y: 45%;
}

.hamburger{
    display:none;
    font-size:28px;
    cursor:pointer;
}

/* Desktop */
.menus{
    display:flex;
    align-items:center;
}

/* Tablet */
@media (max-width: 992px){
    nav{
        padding:0 20px;
    }
}

/* Mobile */
@media (max-width: 768px){
    .hamburger{
        display:block;
    }

    .menus{
        position:absolute;
        top:80px;
        left:0;
        width:100%;
        background:#004d4d;
        flex-direction:column;
        align-items:center;
        display:none;
        padding:20px 0;
        z-index:999;
    }

    .menus a{
        margin:12px 0;
        font-size:18px;
    }

    .menus.active{
        display:flex;
    }
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

<h2 style="margin:20px">Customer List</h2>

<form class="filter-form" method="get">
    <input type="text" name="name" placeholder="Name" value="<?= $_GET['name'] ?? '' ?>">
    <input type="text" name="email" placeholder="Email" value="<?= $_GET['email'] ?? '' ?>">
    <input type="text" name="service" placeholder="Service" value="<?= $_GET['service'] ?? '' ?>">
    <input type="text" name="place" placeholder="Place" value="<?= $_GET['place'] ?? '' ?>">
    <select name="status_c">
        <option value="">All Status</option>
        <option value="not selected" <?= ($_GET['status_c'] ?? '')=='not selected'?'selected':'' ?>>Not Selected</option>
        <option value="selected" <?= ($_GET['status_c'] ?? '')=='selected'?'selected':'' ?>>Selected</option>
    </select>
    <select name="price_range">
        <option value="">All Price</option>
        <option value="100000" <?= ($_GET['price_range'] ?? '')=='100000'?'selected':'' ?>>Under 100000</option>
        <option value="500000" <?= ($_GET['price_range'] ?? '')=='500000'?'selected':'' ?>>Under 500000</option>
        <option value="500001" <?= ($_GET['price_range'] ?? '')=='500001'?'selected':'' ?>>More than 500000</option>
    </select>
    <button type="submit">Filter</button>
</form>

<div class="table-container">
<table>
<thead>
<tr>
<th>Name</th><th>Email</th><th>Phone</th><th>Phone 2</th><th>Address</th><th>Price</th><th>Service</th><th>Start Date</th><th>Place</th><th>Message</th><th>Status</th><th>Actions</th>
</tr>
</thead>
<tbody>
<?php while($row=$result->fetch_assoc()): ?>
<tr>
<td data-label="Name"><?= $row['name'] ?></td>
<td data-label="Email"><?= $row['email'] ?></td>
<td data-label="Phone"><?= $row['phone_num'] ?></td>
<td data-label="Phone2"><?= $row['phone_num2'] ?></td>
<td data-label="Address"><?= $row['address'] ?></td>
<td data-label="Price"><?= $row['price_range'] ?></td>
<td data-label="Service"><?= $row['service'] ?></td>
<td data-label="Start Date"><?= $row['start_date'] ?></td>
<td data-label="Place"><?= $row['place'] ?></td>
<td data-label="Message"><?= $row['message'] ?></td>
<td data-label="Status"><?= $row['status_c'] ?></td>
<td data-label="Actions">
    <a href="?edit=1&email=<?= $row['email'] ?>"><button class="approve">Edit</button></a>
    <a href="?completed=1&email=<?= $row['email'] ?>"><button class="completed">Completed</button></a>
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