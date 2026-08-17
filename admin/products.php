<?php

include "../includes/auth.php";

$products = readJSON("products.json");

?>

<h1>🥛 Manage Products</h1>

<table>

<tr>

    <th>Product</th>
    <th>Price</th>
    <th>Unit</th>

</tr>

<?php foreach ($products as $product): ?>

<tr>

    <td>
        <?= htmlspecialchars($product["name"]) ?>
    </td>

    <td>
        ₹<?= htmlspecialchars($product["price"]) ?>
    </td>

    <td>
        <?= htmlspecialchars($product["unit"]) ?>
    </td>

</tr>

<?php endforeach; ?>

</table>