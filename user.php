<?php
include 'conn.php';
?>
<?php
session_start();
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>User Profile</title>
    <script src="./js/password_check.js"></script>
    <link rel="stylesheet" href="./css/user.css">
</head>

<body>
    <?php include "./header.php" ?>
    <br>
    <div class="user-card">
        <div class="user-col" id="ucol1">
            <div class="credits">
                <?php if (isset($_SESSION['user_ID'])) {
                    echo "<h1>" . $_SESSION['username'] . "</h1>";
                } else {
                    echo "<div class=\"user\">User</div>";
                }

                ?>

                <button onclick="return confirm('Are you sure do you want to logout?')" class="submit-btn"><a
                        href="logout.php">Log-Out</a></button>
            </div>
            <div class="divider"></div>
            <div class="profile-frame">
                <div class="default">
                    <i class="fa-solid fa-user-tie"></i>
                </div>
                <div class="real"></div>
                <div class="edit-btn"><a href="#">Edit Profile Photo <i class="fa-solid fa-pencil"></i></a></div>
            </div>
            <div class="bio-head">Bio</div>
            <?php
            echo "<button onclick=\"return confirm('Are you sure do you want to Delete Your account?')\" class=\"submit-btn\"><a href=\"deleteaccount.php?delete_ac={$_SESSION['user_ID']}\">Delete Account</a></button>";
            ?>
            <div class="user-bio"></div>
        </div>
        <div class="user-col" id="ucol2">
            <div class="part p1">
                <div class="partition">Account Details</div>
                <div class="user-info-container">
                    <div class="titles">
                        <div class="tagline">Username</div>
                        <div class="tagline">First Name</div>
                        <div class="tagline">Last Name</div>
                        <div class="tagline">Phone Number</div>
                        <div class="tagline">Email Address</div>
                    </div>
                    <div class="representers">
                        <div class="retriever" id="ret1"></div>
                        <div class="retriever" id="ret2"></div>
                        <div class="retriever" id="ret3"></div>
                        <div class="retriever" id="ret4"></div>
                        <div class="retriever" id="ret5"></div>
                    </div>
                </div>
            </div>
            <div class="part p2">
                <div class="partition">Change Password</div>
                <div class="password-info-container">
                    <div class="headers">
                        <div class="head-items">Current Password</div>
                        <div class="head-items">Re-enter Password</div>
                        <div class="head-items">New Password</div>
                    </div>
                    <div class="inputboxes">
                        <input type="text" class="input-layout" name="current-pasword" id="user-inp-1"></input>
                        <input type="text" class="input-layout" name="reenter-pasword" id="user-inp-2"></input>
                        <input type="text" class="input-layout" name="new-pasword" id="user-inp-3"></input>
                    </div>
                </div>
                <div class="validate">
                    <p class="val-correct"> Mismatch found while validating. <i
                            class="fa-solid fa-circle-xmark"></i></i></p>
                    <p class="val-wrong"> No mismatch found while validating. <i class="fa-solid fa-circle-check"></i>
                    </p>
                    <p class="val-empty"> Please fill the textbox. <i class="fa-solid fa-unlock-keyhole"></i></p>
                    <p class="val-fallback"> Something went wrong please check. <i
                            class="fa-solid fa-arrows-rotate"></i></p>
                </div>
                <div class="submit-btn" id="check-btn">Apply Changes</div>
            </div>
        </div>
    </div>
    <?php include "./footer.php" ?>
</body>

</html>