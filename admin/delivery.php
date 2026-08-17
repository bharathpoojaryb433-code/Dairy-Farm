<?php

include "../includes/auth.php";

$orders = readJSON("orders.json");

?>

<h1>🚚 Delivery Management</h1>

<table>

<tr>

    <th>Order</th>
    <th>Customer</th>
    <th>Status</th>

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

        <select>

            <option>
                Order Placed
            </option>

            <option>
                Packed
            </option>

            <option>
                Out for Delivery
            </option>

            <option>
                Delivered
            </option>

        </select>

    </td>

</tr>

<?php endforeach; ?>

</table>