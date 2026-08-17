<?php

include "includes/header.php";
include "includes/navbar.php";

?>

<section class="page-title">

    <h1>🛒 Shopping Cart</h1>

</section>

<div class="cart-container">

    <div id="cartItems"></div>

    <div class="cart-total">

        <h2>
            Total:
            ₹<span id="cartTotal">0</span>
        </h2>

        <a
            href="checkout.php"
            class="btn">

            Proceed to Checkout

        </a>

    </div>

</div>

<?php include "includes/footer.php"; ?>