<!-- Ishara -->
<?php
require_once './conn.php';
?>

<?php
$errors = array();
if (isset($_POST['sign-up'])) {
    $Username =  $_POST['Username'];
    $password = $_POST['password'];
    $Full_name = $_POST['Full_name'];
    $email = $_POST['email'];
    $repass = $_POST['repass'];

    //check username already exists
    $Username = mysqli_real_escape_string($conn, $_POST['Username']);
    $quary = "SELECT * FROM registered_user WHERE Username = '{$Username}' LIMIT 1";

    $resultset = mysqli_query($conn, $quary);
    if ($resultset) {
        if (mysqli_num_rows($resultset) == 1) {
            $errors[] = 'Username has already taken';
        }
    }

    if ($password != $repass) {
        $errors[] = 'Password are not same';
    }

    if (empty($errors)) {
        $Username = mysqli_real_escape_string($conn, $_POST['Username']);
        $password = mysqli_real_escape_string($conn, $_POST['password']);
        $Full_name = mysqli_real_escape_string($conn, $_POST['Full_name']);
        $email = mysqli_real_escape_string($conn, $_POST['email']);

        $quary = "INSERT INTO  registered_user (Username,password,Full_name,email) VALUES ('{$Username}','{$password}','{$Full_name}','{$email}')";
        $result = mysqli_query($conn, $quary);

        if ($result) {
            //if quary successfull redirect to the home page
            header('Location: index.php');
        } else {
            $errors[] = 'Faild to add the record';
        }
    }
}




?>


<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./css/signup.css">
    <title>Sign-Up</title>
    <script src="./js/sign-up.js" defer></script>
</head>

<body>
    <?php include './header.php' ?>
    <br>
    <div class="sign-card">
        <div class="heading">Sign Up</div>
        <?php
        // if(!empty($errors)){
        //     echo "<div class = \"showerror\">";
        //     echo "<p>There are few errors</p></br>";
        //     foreach($errors as $shownerr){
        //         echo $shownerr."</br>";
        //     }
        //     echo "</div></br>";

        // }


        ?>
        <!-- form details -->
        <form action="signup.php" method="POST">
            <div class="conta">
                <div class="liner">
                    <i class="fa-solid fa-user"></i> User Name
                </div>
                <input type="text" class="log-input" placeholder="username" name="Username"></input>
            </div>
            <div class="conta">
                <div class="liner">
                    <i class="fa-solid fa-file-pen"></i> Full Name
                </div>
                <input type="text" class="log-input" placeholder="full name" name="Full_name"></input>
            </div>
            <div class="conta">
                <div class="liner">
                    <i class="fa-solid fa-at"></i> Email
                </div>
                <input type="email" class="log-input" placeholder="email address" name="email"></input>
            </div>
            <div class="conta">
                <div class="liner">
                    <i class="fa-solid fa-key"></i> Password
                </div>
                <input type="password" class="log-input" placeholder="password" id="pw1" name="password"></input>
            </div>
            <div class="conta">
                <div class="liner">
                    <i class="fa-solid fa-key"></i> Re-Password
                </div>
                <input type="password" class="log-input" placeholder="re-enter password" id="pw2" name="repass"></input>
            </div>

            <div class="val">
                <div class="tagline-validate-success">password matching</div>
                <div class="tagline-validate-unsuccess">password mismatch</div>
                <div class="tagline-validate-empty">fill the text box</div>
            </div>
            <div class="btn-conta">
                <button type="submit" class="log-submit-btn" id="sign-up" name="sign-up">sign-up</button>
                <div class="tagliner">already have an account <a href="./login.php"><span>Log in </span></a></div>
            </div>
        </form>
    </div>
    </div>
    <br>
    <?php include './footer.php' ?>
</body>

</html>