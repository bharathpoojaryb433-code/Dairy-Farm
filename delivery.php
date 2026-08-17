<?php

include "includes/header.php";
include "includes/navbar.php";

if ($_SERVER["REQUEST_METHOD"] === "POST") {

    $orders = readJSON("orders.json");

    $order = [

        "id" => "DF" . rand(1000, 9999),

        "name" => trim($_POST["name"] ?? ""),

        "mobile" => trim($_POST["mobile"] ?? ""),

        "address" => trim($_POST["address"] ?? ""),

        "payment" => $_POST["payment"] ?? "",

        "status" => "Order Placed",

        "date" => date("Y-m-d H:i:s")

    ];

    $orders[] = $order;

    writeJSON("orders.json", $orders);

    $newOrder = $order;
}

?>

<section class="page-title">

    <h1>🚚 Delivery Tracking</h1>

</section>

<?php if (isset($newOrder)): ?>

<div class="delivery-card">

    <h2>
        Order #<?= htmlspecialchars($newOrder["id"]) ?>
    </h2>

    <p>
        Customer:
        <?= htmlspecialchars($newOrder["name"]) ?>
    </p>

    <div class="tracking">

        <div class="active">
            <span>1</span>
            <p>Order Placed</p>
        </div>

        <div>
            <span>2</span>
            <p>Packed</p>
        </div>

        <div>
            <span>3</span>
            <p>Out for Delivery</p>
        </div>

        <div>
            <span>4</span>
            <p>Delivered</p>
        </div>

    </div>

</div>

<?php else: ?>

<div class="delivery-search">

    <input
        type="text"
        id="orderSearch"
        placeholder="Enter Order ID">

    <button
        class="btn"
        onclick="trackOrder()">

        Track Order

    </button>

</div>

<?php endif; ?>

<?php include "includes/footer.php"; ?>