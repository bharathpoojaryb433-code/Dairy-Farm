<?php

include "includes/header.php";
include "includes/navbar.php";

$products = readJSON("products.json");

?>

<section class="page-title">

    <h1>🥛 Dairy Products</h1>

    <p>
        Fresh products directly from our dairy farm.
    </p>

</section>


<section class="product-grid">

<?php foreach ($products as $product): ?>

    <div class="product-card">

        <img
            src="images/<?= htmlspecialchars($product['image']) ?>"
            alt="<?= htmlspecialchars($product['name']) ?>">

        <h2>
            <?= htmlspecialchars($product['name']) ?>
        </h2>

        <p>
            <?= htmlspecialchars($product['description']) ?>
        </p>

        <h3>
            ₹<?= htmlspecialchars($product['price']) ?>
            /
            <?= htmlspecialchars($product['unit']) ?>
        </h3>

        <button
            class="buy-btn"
            onclick='addToCart(<?= json_encode($product) ?>)'>

            🛒 Add to Cart

        </button>

    </div>

<?php endforeach; ?>

</section>


<?php include "includes/footer.php"; ?>