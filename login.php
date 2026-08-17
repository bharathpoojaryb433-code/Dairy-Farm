<?php

include "config/config.php";

$error = "";

if ($_SERVER["REQUEST_METHOD"] === "POST") {

    $username = trim($_POST["username"] ?? "");
    $password = $_POST["password"] ?? "";

    $users = json_decode(
        file_get_contents(DATA_PATH . "users.json"),
        true
    );

    foreach ($users as $user) {

        if (
            $user["username"] === $username &&
            $user["password"] === $password
        ) {

            $_SESSION["user"] = $username;
            $_SESSION["role"] = $user["role"];

            if ($user["role"] === "admin") {

                header("Location: admin/dashboard.php");

            } else {

                header("Location: index.php");

            }

            exit();

        }

    }

    $error = "Invalid username or password.";

}

?>

<!DOCTYPE html>

<html>

<head>

    <meta charset="UTF-8">

    <meta name="viewport"
          content="width=device-width, initial-scale=1.0">

    <title>Dairy Farm Login</title>

    <link rel="stylesheet"
          href="css/style.css">

</head>

<body>

<div class="login-container">

    <form
        class="login-box"
        method="POST">

        <h1>🐄 DairyFarm</h1>

        <h2>Login</h2>

        <?php if ($error): ?>

            <p class="error">
                <?= htmlspecialchars($error) ?>
            </p>

        <?php endif; ?>

        <input
            type="text"
            name="username"
            placeholder="Username"
            required>

        <input
            type="password"
            name="password"
            placeholder="Password"
            required>

        <button
            type="submit"
            class="btn">

            Login

        </button>

    </form>

</div>

</body>
</html>