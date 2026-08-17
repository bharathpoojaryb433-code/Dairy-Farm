<?php

include "includes/header.php";
include "includes/navbar.php";

$farmers = readJSON("farmers.json");

?>

<section class="page-title">

    <h1>👨‍🌾 Our Farmers</h1>

    <p>
        Meet the people who take care of our dairy farm.
    </p>

</section>


<section class="cards">

<?php foreach ($farmers as $farmer): ?>

    <div class="card">

        <img
            src="images/<?= htmlspecialchars($farmer['image']) ?>"
            alt="Farmer"
        >

        <h2>
            <?= htmlspecialchars($farmer['name']) ?>
        </h2>

        <p>
            📍 <?= htmlspecialchars($farmer['location']) ?>
        </p>

    </div>

<?php endforeach; ?>

</section>


<?php include "includes/footer.php"; ?>