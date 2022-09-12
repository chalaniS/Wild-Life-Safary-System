<!-- Dileep -->

<?php
require('./conn.php');
?>
<!--store package details-->
<?php

if (isset($_POST["subBtn"])) {

  $name = $_POST['pkgname'];
  $price = $_POST['price'];
  $nights = $_POST['nights'];
  $description = $_POST['description'];



  $quary = "INSERT INTO  package (p_name,nights,details,price) VALUES ('{$name}','{$nights}',' {$description}','{$price}')";
  $result = mysqli_query($conn, $quary);

  if ($result) {
    //if quary successfull redirect to the home page
    header('Location: admin.php');
  }
}



?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="./css/contact.css" />
    <link rel="stylesheet" href="/css/addpackages.css" />
</head>

<body>
    <?php
  include "headerforadmin.php"
  ?>
    <div class="body">
        <form method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>">
            <input class="contact-form-item" type="text" name="pkgname" placeholder="    Package name"
                autocomplete="off" required />

            <br /><br />

            <input class="contact-form-item" type="text" name="price" placeholder="    Enter Price" autocomplete="off"
                required />

            <input class="contact-form-phone" type="text" name="nights" placeholder="    Number of nights"
                autocomplete="off" required />
            <br /><br />

            <textarea class="contact-form-txt" name="description" cols="92" rows="10"
                placeholder="    Details about package" autocomplete="off" required></textarea>
            <br /><br />

            <label for=pick-picture id="pick-cover"> Select Pic <i class="fa-solid fa-camera-retro"></i>
                <input id="pick-picture" class="contact-form-file" type="file" name="package-pic" />
            </label>
            <br><br>

            <button type="submit" id="subBtn" name="subBtn">Submit</button>
            <button type="reset" id="resetBtn">Reset</button>

            <br /><br />
        </form>
</body>
</div>
<?php include "./footer.php" ?>

</html>