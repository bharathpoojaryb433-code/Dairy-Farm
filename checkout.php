<?php

include "includes/header.php";
include "includes/navbar.php";

?>

<section class="page-title">

    <h1>📦 Checkout</h1>

</section>

<form
    class="checkout-form"
    method="POST"
    action="delivery.php">

    <label>
        Customer Name
    </label>

    <input
        type="text"
        name="name"
        required>

    <label>
        Mobile Number
    </label>

    <input
        type="tel"
        name="mobile"
        required>

    <label>
        Delivery Address
    </label>

    <textarea
        name="address"
        required></textarea>

    <label>
        Payment Method
    </label>

    <select name="payment">

        <option>Cash on Delivery</option>
        <option>UPI Demo</option>
        <option>Card Demo</option>

    </select>

    <button
        class="btn"
        type="submit">

        Place Order 🚚

    </button>

</form>

<?php include "includes/footer.php"; ?>