<?php

include "includes/header.php";
include "includes/navbar.php";

$farmers = readJSON("farmers.json");

?>

<section class="page-title">

    <h1>👨‍🌾 Our Farmers</h1>

</section>

<section class="cards">

<?php foreach ($farmers as $farmer): ?>

    <div class="card">

        <img
            src="images/<?= htmlspecialchars($farmer['image']) ?>"
            alt="Farmer">

        <h2>
            <?= htmlspecialchars($farmer['name']) ?>
        </h2>

        <p>
            Farm:
            <?= htmlspecialchars($farmer['farm']) ?>
        </p>

        <p>
            Location:
            <?= htmlspecialchars($farmer['location']) ?>
        </p>

        <p>
            Cows:
            <?= htmlspecialchars($farmer['cows']) ?>
        </p>

        <p>
            Milk Collection:
            <?= htmlspecialchars($farmer['milk']) ?> L/day
        </p>

    </div>

<?php endforeach; ?>

</section>

<?php include "includes/footer.php"; ?>