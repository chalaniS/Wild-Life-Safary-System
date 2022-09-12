<!-- eehanee -->

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Manager Profile</title>
    <link rel="stylesheet" href="./css/admin.css">
</head>

<body>
    <?php
    include './headerformanager.php';
    ?>
    <?php
    session_start();
    echo  $_SESSION['user_ID'];
    if (!isset($_SESSION['user_ID'])) {
        header('Location:login.php');
    }
    ?>
    <br>
    <div class="admin-container">
        <div class="adm-col ac1">
            <div class="credits">
                <?php if (isset($_SESSION['user_ID'])) {
                    echo "<h1>" . $_SESSION['username'] . "</h1>";
                } else {
                    echo "<div class=\"user\">Manager</div>";
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
            </div>
            <div class="description">
                <div class="det">Full Name: </div>
                <div class="det">Address: </div>
                <div class="det"></div>
                <div class="det"></div>
                <div class="det"></div>
                <div class="det"></div>
            </div>
        </div>
        <div class="adm-col ac2">
            <div class="user-type">Manager</div>
            <div class="divider"></div>
            <a href="#">
                <div class="partition">Admins and Tour Guids<i style="margin-left: 20px;"
                        class="fa-solid fa-rectangle-list"></i></div>
            </a>
            <div class="reservation-table">
                <table>
                    <tr>
                        <th>Name</th>
                        <th>Details</th>
                        <th>Position</th>
                    </tr>
                    <tr>
                        <td>Name-1</td>
                        <td>Details-1</td>
                        <td>Admin</td>
                    </tr>
                    <tr>
                        <td>Name-2</td>
                        <td>Details-2</td>
                        <td>Tour Guide</td>
                    </tr>
                    <tr>
                        <td>Name-3</td>
                        <td>Details-1</td>
                        <td>Admin</td>
                    </tr>

                </table>
            </div>
            <div class="partition">Manage Admins<i style="margin-left: 20px;" class="fa-solid fa-address-card"></i>
            </div>
            <div class="operations">
                <div class="user-update">
                    <input type="text" class="user-det" name="old-user-name" placeholder="old username">
                    <input type="text" class="user-det" name="old-user-name" placeholder="reenter old username">
                    <input type="text" class="user-det" name="new-user-name" placeholder="new username">
                    <button class="submit-btn">Change Username</button>
                </div>
                <div class="account-activation">
                    <div class="partition">Account Activation</div>
                    <div class="status-check">
                        <input type="text" class="user-det" name="user-status" placeholder="enter the username">
                        <button class="submit-btn">Check Status</button>
                    </div>
                    <div class="current-staus">Current Status: Active</div>
                    <div class="btn-container">
                        <button class="submit-btn">Activate</button>
                        <button class="submit-btn">Deactivate</button>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <?php include "./footer.php" ?>
</body>

</html>