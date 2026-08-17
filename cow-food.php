<?php

include "includes/header.php";
include "includes/navbar.php";

$foods = [

    [
        "name" => "Green Grass",
        "price" => 20,
        "image" => "hay.jpg"
    ],

    [
        "name" => "Cattle Feed",
        "price" => 850,
        "image" => "cattle-feed.jpg"
    ],

    [
        "name" => "Dry Hay",
        "price" => 300,
        "image" => "hay.jpg"
    ]

];

?>

<section class="page-title">

    <h1>🌱 Cow Food & Feeding Shop</h1>

    <p>
        Quality food for healthy cows.
    </p>

</section>

<section class="product-grid">

<?php foreach ($foods as $food): ?>

    <div class="product-card">

        <img
            src="images/<?= $food['image'] ?>"
            alt="<?= htmlspecialchars($food['name']) ?>">

        <h2>
            <?= htmlspecialchars($food['name']) ?>
        </h2>

        <h3>
            ₹<?= $food['price'] ?>
        </h3>

        <button
            class="buy-btn"
            onclick='addToCart(<?= json_encode($food) ?>)'>

            🛒 Buy Now

        </button>

    </div>

<?php endforeach; ?>

</section>

<?php include "includes/footer.php"; ?>