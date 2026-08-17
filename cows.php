<?php

include "includes/header.php";
include "includes/navbar.php";

$cows = readJSON("cows.json");

?>

<section class="page-title">

    <h1>🐄 Our Cows</h1>

    <p>
        Meet the healthy cows of our dairy farm.
    </p>

</section>


<section class="cards">

<?php foreach ($cows as $cow): ?>

    <div class="card">

        <img
            src="images/<?= htmlspecialchars($cow['image']) ?>"
            alt="Cow"
        >

        <h2>
            <?= htmlspecialchars($cow['name']) ?>
        </h2>

        <p>
            Breed:
            <?= htmlspecialchars($cow['breed']) ?>
        </p>

        <p>
            Milk:
            <?= htmlspecialchars($cow['milk']) ?>
            L/day
        </p>

    </div>

<?php endforeach; ?>

</section>


<?php include "includes/footer.php"; ?>