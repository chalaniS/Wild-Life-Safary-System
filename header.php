<!-- Ishara -->
<!-- <?php
        session_start();
        ?> -->

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>WSM Header</title>
    <link rel="stylesheet" href="./css/header.css">
    <script src="./js/home.js"></script>
</head>

<body>
    <section>
        <div class="log-main">
    </section>
    <header>
        <div class="head-container">
            <div class="head-sector">
                <div class="logo">
                    <img src="./images/logo-text-updated.png">
                </div>
                <div class="user"></div>
            </div>
            <div class="sign-btn-container">
                <div class="profiler"> </i></div>
                <a href="./login.php" <?php if (!isset($_SESSION['user_ID'])) { ?>>
                    <div class="logger">Login<?php } ?></div>
                </a>
                <a href="./signup.php" <?php if (!isset($_SESSION['user_ID'])) { ?>>
                    <div class="logger">Sign up<?php } ?></div>
                </a>
                <a href="./user.php" <?php if (isset($_SESSION['user_ID'])) { ?>>
                    <div class="logger">Profile<?php } ?></div>
                </a>
                <a href="./logout.php" <?php if (isset($_SESSION['user_ID'])) { ?>>
                    <div class="logger">Log out<?php } ?></div>
                </a>
            </div>
            <div class="nav-btns">
                <ul>
                    <a href="./index.php">
                        <li>Home</li>
                    </a>
                    <a href="Wildcamping.php">
                        <li>Wild Camping</li>
                    </a>
                    <a href="./reservation.php">
                        <li>Reservation</li>
                    </a>
                    <a href="./about.php">
                        <li>About Us</li>
                    </a>
                    <a href="./contact.php">
                        <li>Contact Us</li>
                    </a>
                    <a href="donation.php">
                        <li>Donations</li>
                    </a>
                </ul>
            </div>
        </div>
    </header>
</body>

</html>