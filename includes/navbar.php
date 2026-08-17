<nav class="navbar">

    <div class="logo">
        🐄 DairyFarm
    </div>

    <button class="menu-btn" onclick="toggleMenu()">
        ☰
    </button>

    <ul id="navMenu">

        <li>
            <a href="<?= BASE_URL ?>index.php">Home</a>
        </li>

        <li>
            <a href="<?= BASE_URL ?>cows.php">Cows</a>
        </li>

        <li>
            <a href="<?= BASE_URL ?>products.php">Products</a>
        </li>

        <li>
            <a href="<?= BASE_URL ?>farmers.php">Farmers</a>
        </li>

        <li>
            <a href="<?= BASE_URL ?>pricing.php">Pricing</a>
        </li>

        <li>
            <a href="<?= BASE_URL ?>delivery.php">Delivery</a>
        </li>

        <li>
            <a href="<?= BASE_URL ?>cow-food.php">Cow Food</a>
        </li>

        <li>
            <a href="<?= BASE_URL ?>cart.php">
                🛒 Cart
                <span id="cartCount">0</span>
            </a>
        </li>

        <li>
            <a href="<?= BASE_URL ?>login.php">
                Login
            </a>
        </li>

    </ul>

</nav>