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
<html lang="en">

<head>

    <meta charset="UTF-8">

    <meta name="viewport"
          content="width=device-width, initial-scale=1.0">

    <title>DairyFarm Login</title>

    <link rel="stylesheet" href="css/style.css">

</head>

<body class="login-page">

    <!-- 3D BACKGROUND -->

    <div class="bg-animation">

        <div class="circle circle1"></div>
        <div class="circle circle2"></div>
        <div class="circle circle3"></div>

        <div class="cube cube1"></div>
        <div class="cube cube2"></div>

    </div>


    <!-- FLOATING COW -->

    <div class="cow-3d">

        <img src="images/cow1.jpg"
             alt="Dairy Cow">

    </div>


    <!-- LOGIN -->

    <div class="login-container">

        <div class="login-box">

            <div class="login-logo">
                🐄
            </div>

            <h1>DairyFarm</h1>

            <p class="login-subtitle">
                Fresh Farm • Healthy Life
            </p>

            <h2>Welcome Back 👋</h2>


            <?php if ($error): ?>

                <p class="error">
                    <?= htmlspecialchars($error) ?>
                </p>

            <?php endif; ?>


            <form method="POST">

                <div class="login-input">

                    <label>Username</label>

                    <input
                        type="text"
                        name="username"
                        placeholder="Enter username"
                        required>

                </div>


                <div class="login-input">

                    <label>Password</label>

                    <input
                        type="password"
                        name="password"
                        placeholder="Enter password"
                        required>

                </div>


                <button
                    type="submit"
                    class="login-btn">

                    🔐 Login

                </button>

            </form>


            <a href="index.php"
               class="back-home">

                ← Back to Home

            </a>

        </div>

    </div>


    <!-- FLOATING MILK -->

    <div class="milk milk1">🥛</div>
    <div class="milk milk2">🥛</div>
    <div class="milk milk3">🥛</div>

</body>

</html>