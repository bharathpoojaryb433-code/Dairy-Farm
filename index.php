<?php

include "includes/header.php";
include "includes/navbar.php";

$cows = readJSON("cows.json");
$products = readJSON("products.json");

?>

<!-- 3D BACKGROUND -->
<div class="home-3d-bg">

    <div class="home-circle home-circle1"></div>
    <div class="home-circle home-circle2"></div>
    <div class="home-circle home-circle3"></div>

    <div class="home-cube home-cube1"></div>
    <div class="home-cube home-cube2"></div>
    <div class="home-cube home-cube3"></div>

    <div class="floating-milk milk-a">🥛</div>
    <div class="floating-milk milk-b">🥛</div>
    <div class="floating-milk milk-c">🥛</div>

    <div class="floating-grass grass-a">🌱</div>
    <div class="floating-grass grass-b">🌿</div>

</div>


<!-- HERO -->
<section class="hero">

    <div class="hero-content">

        <div class="welcome-badge">
            🌱 Fresh From Our Farm
        </div>

        <h1>
            Fresh Milk From
            <span>Our Farm</span>
        </h1>

        <p>
            Healthy cows. Happy farmers.
            Fresh and natural dairy products
            delivered to your home.
        </p>

        <div class="hero-buttons">

            <a href="products.php" class="btn">
                🥛 Shop Products
            </a>

            <a href="cows.php" class="btn secondary">
                🐄 View Cows
            </a>

        </div>

    </div>


    <!-- 3D COW -->
    <div class="hero-image-3d">

        <div class="cow-glow"></div>

        <img
            src="images/cow1.jpg"
            alt="Dairy Cow">

        <div class="milk-bubble">
            🥛
        </div>

        <div class="leaf-bubble">
            🌿
        </div>

    </div>

</section>


<!-- COWS -->
<section class="section home-section">

    <div class="page-title">

        <h2>🐄 Our Cows</h2>

        <p>
            Meet the healthy cows from our farm.
        </p>

    </div>


    <div class="cards">

        <?php foreach (array_slice($cows, 0, 3) as $cow): ?>

            <div class="card home-card">

                <img
                    src="images/<?= htmlspecialchars($cow['image']) ?>"
                    alt="<?= htmlspecialchars($cow['name']) ?>">

                <h3>
                    <?= htmlspecialchars($cow['name']) ?>
                </h3>

                <p>
                    Breed:
                    <?= htmlspecialchars($cow['breed']) ?>
                </p>

                <p>
                    🥛 Milk:
                    <?= htmlspecialchars($cow['milk']) ?> L/day
                </p>

                <a href="cows.php" class="small-btn">
                    View Details
                </a>

            </div>

        <?php endforeach; ?>

    </div>

</section>


<!-- PRODUCTS -->
<section class="section light home-section">

    <div class="page-title">

        <h2>🥛 Our Products</h2>

        <p>
            Fresh dairy products directly from our farm.
        </p>

    </div>


    <div class="cards">

        <?php foreach (array_slice($products, 0, 4) as $product): ?>

            <div class="product-card home-card">

                <img
                    src="images/<?= htmlspecialchars($product['image']) ?>"
                    alt="<?= htmlspecialchars($product['name']) ?>">

                <h3>
                    <?= htmlspecialchars($product['name']) ?>
                </h3>

                <p class="price">
                    ₹<?= htmlspecialchars($product['price']) ?>
                    /
                    <?= htmlspecialchars($product['unit']) ?>
                </p>

                <button
                    class="buy-btn"
                    onclick='addToCart(<?= json_encode($product) ?>)'>

                    🛒 Add to Cart

                </button>

            </div>

        <?php endforeach; ?>

    </div>

</section>


<!-- FEATURES -->
<section class="features home-features">

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