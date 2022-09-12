<!-- Dileep -->
<?php
session_start();
$name = 'a';
?>
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
                <div class="profiler"></div>
                <a href="login.php" <?php if (!isset($_SESSION['user_ID'])) { ?>>
                    <div class="logger">Login<?php } ?></div>
                </a>
                <a href="signup.php" <?php if (!isset($_SESSION['user_ID'])) { ?>>
                    <div class="logger">Sign up<?php } ?></div>
                </a>
                <a href="admin.php" <?php if (isset($_SESSION['user_ID'])) { ?>>
                    <div class="logger">Profile<?php } ?></div>
                </a>
                <a href="logout.php" <?php if (isset($_SESSION['user_ID'])) { ?>>
                    <div class="logger">Log Out<?php } ?></div>
                </a>


            </div>

            <div class="nav-btns">
                <ul>

                    <a href="./addpackages.php">
                        <li>Add Packages</li>
                    </a>
                    <a href="./reservation-details.php">
                        <li>Reserve Details</li>
                    </a>
                    <a href="./feedback-management.php">
                        <li>Feedbacks and Requests</li>
                    </a>
                </ul>
            </div>
        </div>
    </header>
</body>

</html>