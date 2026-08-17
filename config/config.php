<?php

session_start();

define("BASE_URL", "/dairy-farm/");

define("DATA_PATH", __DIR__ . "/../data/");

function redirect($page) {
    header("Location: " . BASE_URL . $page);
    exit();
}
?>