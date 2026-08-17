<?php

include "../includes/auth.php";

$farmers = readJSON("farmers.json");

?>

<h1>👨‍🌾 Manage Farmers</h1>

<table>

<tr>
    <th>Name</th>
    <th>Farm</th>
    <th>Location</th>
    <th>Cows</th>
</tr>

<?php foreach ($farmers as $farmer): ?>

<tr>

    <td>
        <?= htmlspecialchars($farmer["name"]) ?>
    </td>

    <td>
        <?= htmlspecialchars($farmer["farm"]) ?>
    </td>

    <td>
        <?= htmlspecialchars($farmer["location"]) ?>
    </td>

    <td>
        <?= htmlspecialchars($farmer["cows"]) ?>
    </td>

</tr>

<?php endforeach; ?>

</table>