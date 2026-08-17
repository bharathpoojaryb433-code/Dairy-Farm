<?php

include "../includes/auth.php";

$cows = readJSON("cows.json");
$farmers = readJSON("farmers.json");
$products = readJSON("products.json");
$orders = readJSON("orders.json");

include "../includes/header.php";
include "../includes/navbar.php";

?>

<section class="page-title">

    <h1>📊 Dairy Farm Admin Dashboard</h1>

</section>

<div class="dashboard">

    <div class="stat-card">
        <span>🐄</span>
        <h2><?= count($cows) ?></h2>
        <p>Total Cows</p>
    </div>

    <div class="stat-card">
        <span>👨‍🌾</span>
        <h2><?= count($farmers) ?></h2>
        <p>Farmers</p>
    </div>

    <div class="stat-card">
        <span>🥛</span>
        <h2><?= count($products) ?></h2>
        <p>Products</p>
    </div>

    <div class="stat-card">
        <span>🛒</span>
        <h2><?= count($orders) ?></h2>
        <p>Orders</p>
    </div>

</div>

<div class="admin-links">

    <a href="cows.php">🐄 Manage Cows</a>

    <a href="farmers.php">👨‍🌾 Manage Farmers</a>

    <a href="products.php">🥛 Manage Products</a>

    <a href="orders.php">🛒 Manage Orders</a>

    <a href="delivery.php">🚚 Manage Delivery</a>

</div>

<?php include "../includes/footer.php"; ?>