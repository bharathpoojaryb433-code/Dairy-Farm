<?php

include "includes/header.php";
include "includes/navbar.php";

$products = readJSON("products.json");

?>

<section class="page-title">

    <h1>💰 Dairy Pricing</h1>

</section>

<div class="table-container">

<table>

    <thead>

        <tr>
            <th>Product</th>
            <th>Price</th>
            <th>Unit</th>
        </tr>    

    </thead>

    <tbody>

    <?php foreach ($products as $product): ?>

        <tr>

            <td>
                <?= htmlspecialchars($product['name']) ?>
            </td>

            <td>
                ₹<?= htmlspecialchars($product['price']) ?>
            </td>

            <td>
                <?= htmlspecialchars($product['unit']) ?>
            </td>

        </tr>

    <?php endforeach; ?>

    </tbody>

</table>

</div>

<?php include "includes/footer.php"; ?>