<?php

require_once "config/config.php";

if (
    !isset($_SESSION["user"]) ||
    $_SESSION["role"] !== "admin"
) {

    header("Location: login.php");

    exit();

}

header("Location: admin/dashboard.php");

exit();

?>