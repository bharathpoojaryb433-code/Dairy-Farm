<?php

include "includes/header.php";
include "includes/navbar.php";

$cows = readJSON("cows.json");

?>

<section class="page-title">

    <h1>🐄 Our Cows</h1>

    <p>
        Learn about our healthy dairy cows.
    </p>

</section>

<section class="cards">

<?php foreach ($cows as $cow): ?>

    <div class="card">

        <img
            src="images/<?= htmlspecialchars($cow['image']) ?>"
            alt="Cow">

        <h2>
            <?= htmlspecialchars($cow['name']) ?>
        </h2>

        <p>
            <b>Breed:</b>
            <?= htmlspecialchars($cow['breed']) ?>
        </p>

        <p>
            <b>Age:</b>
            <?= htmlspecialchars($cow['age']) ?>
        </p>

        <p>
            <b>Milk:</b>
            <?= htmlspecialchars($cow['milk']) ?> L/day
        </p>

        <p>
            <b>Food:</b>
            <?= htmlspecialchars($cow['food']) ?>
        </p>

        <span class="status">
            <?= htmlspecialchars($cow['status']) ?>
        </span>

    </div>

<?php endforeach; ?>

</section>

<?php include "includes/footer.php"; ?>