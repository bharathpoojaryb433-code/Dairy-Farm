<?php

include "../includes/auth.php";

$orders = readJSON("orders.json");

?>

<h1>🛒 Customer Orders</h1>

<table>

<tr>

    <th>Order ID</th>
    <th>Customer</th>
    <th>Mobile</th>
    <th>Status</th>
    <th>Date</th>

</tr>

<?php foreach ($orders as $order): ?>

<tr>

    <td>
        <?= htmlspecialchars($order["id"]) ?>
    </td>

    <td>
        <?= htmlspecialchars($order["name"]) ?>
    </td>

    <td>
        <?= htmlspecialchars($order["mobile"]) ?>
    </td>

    <td>
        <?= htmlspecialchars($order["status"]) ?>
    </td>

    <td>
        <?= htmlspecialchars($order["date"]) ?>
    </td>

</tr>

<?php endforeach; ?>

</table>