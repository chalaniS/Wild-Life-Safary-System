<!-- Ishara -->
<?php
require_once './conn.php';

session_start();
?>


<?php
$errors = array();

if (isset($_POST['signin'])) {
    $email = $_POST['email'];
    $password = $_POST['password'];

    $quary = "SELECT * FROM registered_user WHERE email ='{$email}' AND password = '{$password}' LIMIT 1 ";
    $result = mysqli_query($conn, $quary);

    if (mysqli_num_rows($result) > 0) {
        $row = mysqli_fetch_array($result);
        
        $_SESSION['user_ID'] = $row['User_ID'];
        $_SESSION['username'] = $row['Username'];
        $_SESSION['email'] = $row['email'];

        if ($row['type'] == 'user') {
            header('Location: index.php');
        } 
        elseif ($row['type'] == 'admin') {
            header('Location: admin.php');
        } 
        elseif ($row['type'] == 'tourg') {
            header('Location: tourGuide.php');
        } 
        elseif ($row['type'] == 'manager') {    
            header('Location: manager.php');
        }
    } 
    
    else {
        $errors[] = "<h1 class = \"error\">Username or Password is invalid</h1>";
    }
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale1.0">
    <link rel="stylesheet" href="./css/login.css">
    <title>Log-In Form</title>
</head>

<body>
    <?php include './header.php' ?>
    <br>
    <div class="login-card">
        <!-- edit in this -->

        <div class="col co2">
            <?php
            echo  "<div>";
            foreach ($errors as $message) {
                echo $message;
            }
            echo "</div>";
            ?>
            <div class="heading">Log In</div>
            <form action="./login.php" method="post">
                <div class="conta">
                    <div class="liner">
                        <i class="fa-solid fa-user"></i> Email
                    </div>
                    <input type="email" class="log-input" placeholder="Email" name="email"></input>
                </div>
                <div class="conta">
                    <div class="liner">
                        <i class="fa-solid fa-key"></i> Password
                    </div>
                    <input type="password" class="log-input" placeholder="password" name="password"></input>
                </div>
                <div class="btn-conta">
                    <a href="login.php"><button type="submit" class="log-submit-btn" name="signin">login</button></a>
                    <div class="btn-wrap">
                        <div class="tagliner">still don't have an account</div>
                        <a href="signup.php"><button type="submit" class="log-submit-btn">sign up</button></a>
                    </div>

                </div>
            </form>
        </div>
    </div>
    <br>
    <?php include './footer.php' ?>
</body>

</html>