<?php

include "../includes/auth.php";

$cows = readJSON("cows.json");

?>

<h1>🐄 Manage Cows</h1>

<table>

<tr>
    <th>Name</th>
    <th>Breed</th>
    <th>Age</th>
    <th>Milk</th>
</tr>

<?php foreach ($cows as $cow): ?>

<tr>

    <td><?= htmlspecialchars($cow["name"]) ?></td>

    <td><?= htmlspecialchars($cow["breed"]) ?></td>

    <td><?= htmlspecialchars($cow["age"]) ?></td>

    <td><?= htmlspecialchars($cow["milk"]) ?> L</td>

</tr>

<?php endforeach; ?>

</table>