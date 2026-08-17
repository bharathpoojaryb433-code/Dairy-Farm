<?php
include "includes/header.php";
include "includes/navbar.php";

$cows = readJSON("cows.json");
$products = readJSON("products.json");
?>

<section class="hero">

    <div class="hero-content">

        <h1>
            Fresh Milk From
            <span>Our Farm</span>
        </h1>

        <p>
            Healthy cows. Happy farmers.
            Fresh and natural dairy products.
        </p>

        <div class="hero-buttons">

            <a href="products.php"
               class="btn">
                🥛 Shop Products
            </a>

            <a href="cows.php"
               class="btn secondary">
                🐄 View Cows
            </a>

        </div>

    </div>

    <div class="hero-image">

        <img src="images/cow1.jpg"
             alt="Dairy Cow">

    </div>

</section>


<section class="section">

    <h2>🐄 Our Cows</h2>

    <div class="cards">

        <?php foreach (array_slice($cows, 0, 3) as $cow): ?>

            <div class="card">

                <img
                    src="images/<?= htmlspecialchars($cow['image']) ?>"
                    alt="Cow">

                <h3>
                    <?= htmlspecialchars($cow['name']) ?>
                </h3>

                <p>
                    Breed:
                    <?= htmlspecialchars($cow['breed']) ?>
                </p>

                <p>
                    Milk:
                    <?= htmlspecialchars($cow['milk']) ?> L/day
                </p>

                <a href="cows.php"
                   class="small-btn">
                    View Details
                </a>

            </div>

        <?php endforeach; ?>

    </div>

</section>


<section class="section light">

    <h2>🥛 Our Products</h2>

    <div class="cards">

        <?php foreach (array_slice($products, 0, 4) as $product): ?>

            <div class="product-card">

                <img
                    src="images/<?= htmlspecialchars($product['image']) ?>"
                    alt="Product">

                <h3>
                    <?= htmlspecialchars($product['name']) ?>
                </h3>

                <p>
                    ₹<?= htmlspecialchars($product['price']) ?>
                    /<?= htmlspecialchars($product['unit']) ?>
                </p>

                <button
                    class="buy-btn"
                    onclick='addToCart(<?= json_encode($product) ?>)'>

                    Add to Cart

                </button>

            </div>

        <?php endforeach; ?>

    </div>

</section>


<section class="features">

    <div>
        <span>🥛</span>
        <h3>Fresh Milk</h3>
        <p>Fresh milk collected every day.</p>
    </div>

    <div>
        <span>🐄</span>
        <h3>Healthy Cows</h3>
        <p>Proper food and care for our cows.</p>
    </div>

    <div>
        <span>🚚</span>
        <h3>Fast Delivery</h3>
        <p>Fresh products delivered to your door.</p>
    </div>

    <div>
        <span>🌱</span>
        <h3>Natural Feed</h3>
        <p>Quality food for healthy cattle.</p>
    </div>

</section>


<?php include "includes/footer.php"; ?>