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

    <div class="table-container">
        <table>
            <thead>
                <tr>
                    <th>Name</th><th>Email</th><th>Phone</th><th>Address</th>
                    <th>Price</th><th>Service</th><th>Message</th>
                    <th>Status</th><th>Date</th><th>Action</th>
                </tr>
            </thead>
            <tbody>
                <?php while($row=$result->fetch_assoc()): ?>
                <tr>
                    <td><?= htmlspecialchars($row['name']) ?></td>
                    <td><?= htmlspecialchars($row['email']) ?></td>
                    <td><?= htmlspecialchars($row['phone_num']) ?></td>
                    <td><?= htmlspecialchars($row['address']) ?></td>
                    <td><?= htmlspecialchars($row['price_range']) ?></td>
                    <td><?= htmlspecialchars($row['service']) ?></td>
                    <td><?= htmlspecialchars($row['message']) ?></td>
                    <td><?= htmlspecialchars($row['status_c']) ?></td>
                    <td><?= htmlspecialchars($row['created_at']) ?></td>
                    <td>
                        <?php if($row['status_c']=='not selected'): ?>
                        <a href="?action=approve&email=<?= $row['email'] ?>"><button class="approve">Approve</button></a>
                        <a href="?action=reject&email=<?= $row['email'] ?>" onclick="return confirm('Delete this record?')">
                        <button class="reject">Reject</button></a>
                        <?php else: ?>
                        Approved
                        <?php endif; ?>
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