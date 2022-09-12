<!-- Chalani -->
<?php
require('./conn.php');
?>
<!--store inquiree details-->
<?php

if (isset($_POST["subBtn"])) {

  $fname = $_POST['fullname'];
  $salutation = $_POST['Salutation'];
  $email = $_POST['Email'];
  $pNo = $_POST['phone'];
  $inquire = $_POST['description'];

  $quary = "INSERT INTO  contactus (Full_name,email,telephone,salutation,Description) VALUES ('{$fname}','{$email}','{$pNo}','{$salutation}',' {$inquire}')";
  $result = mysqli_query($conn, $quary);

  if ($result) {
    //if quary successfull redirect to the home page
    header('Location: index.php');
  }
}



?>


<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Contact Us</title>
    <style>
    @import url("https://fonts.googleapis.com/css2?family=Poppins:wght@400;600&display=swap");
    </style>

    <link rel="stylesheet" href="./css/contact.css" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/all.min.css"
        integrity="sha512-KfkfwYDsLkIlwQp6LFnl8zNdLGxu9YAA1QvwINks4PhcElQSvqcyVLLD9aMhXd13uQjoXtEKNosOWaZqXgel0g=="
        crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="stylesheet" href="./css/home.css" />
    <script src="./js/contact.js"></script>
    <script src="./js/home.js"></script>

</head>

<body>

    <!-- Header code -->

    <?php
  include('./header.php');
  ?>

    <!--Contact us-->

    <div class="cForm">

        <h2 id="cUs">Contact Us</h2>

        <!--Our contact details-->

        <div class="cDetails">
            <div class="boxer">
                <div class="head">
                    <i class="fa fa-map-marker" aria-hidden="true"></i>
                    Location
                </div>
                <div class="child">
                    <p>No.41/60,<br />Galle Road,<br />Colombo-04.</p>
                </div>
            </div>
            <div class="boxer">
                <div class="head">
                    <h3><i class="fa fa-phone" aria-hidden="true"></i>
                        Telephone
                </div>
                <div class="child">
                    <p>+947893674342<br />+947893674385</p>
                    <br />
                </div>
            </div>
            <div class="boxer">
                <div class="head">
                    <i class="fa fa-envelope" aria-hidden="true"></i>Email
                </div>
                <div class="child">
                    <a id="gmail" href="https://mail.google.com/mail/" target="_blank">
                        wildquest@gmail.com
                </div>
                <div id="sLinks">
                    <a href="https://www.facebook.com/" target="_blank" alt="Facebook">
                        <i id="sMedia" class="fa-brands fa-facebook-square"></i>
                    </a>
                    <a href="https://twitter.com/" target="_blank">
                        <i id="sMedia" class="fa-brands fa-twitter-square"></i>
                    </a>
                    <a href="https://www.instagram.com/" target="_blank">
                        <i id="sMedia" class="fa-brands fa-instagram-square"></i>
                    </a>
                    <a href="https://www.linkedin.com/" target="_blank">
                        <i id="sMedia" class="fa-brands fa-linkedin"></i>
                    </a>
                    <a href="https://www.whatsapp.com/" target="_blank">
                        <i id="sMedia" class="fa-brands fa-whatsapp-square"></i>
                    </a>
                </div>
            </div>
        </div>
        <br />

        <!--Map-->


        <aside class="a">
            <iframe
                src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d4047271.2999762455!2d78.46169489521603!3d7.851731513542368!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3ae2593cf65a1e9d%3A0xe13da4b400e2d38c!2sSri%20Lanka!5e0!3m2!1sen!2slk!4v1652730033179!5m2!1sen!2slk"
                width="450" height="475" style="border: 0" allowfullscreen="" loading="lazy"
                referrerpolicy="no-referrer-when-downgrade"></iframe>
        </aside>



        <!--The contact form-->

        <form method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>">
            <input class="contact-form-item" type="text" name="fullname" id="fname" placeholder="    Full Name"
                autocomplete="off" required />

            <select id="salutaion" name="Salutaion">
                <option value="sal">Salutation :</option>
                <option value="Mr.">Mr.</option>
                <option value="Mrs.">Mrs.</option>
                <option value="Miss.">Miss.</option>
            </select>
            <br /><br />

            <input class="contact-form-item" type="email" name="Email" id="email"
                pattern="[a-z0-9._%+-]+@[a-z0-9.-]+\.[a-z]{2,3}" placeholder="    Email address" autocomplete="off"
                required />

            <input class="contact-form-phone" type="phone" name="phone" id="telephone" placeholder="    Telephone"
                pattern="[0-9]{10}" autocomplete="off" required />
            <br /><br />

            <textarea class="contact-form-txt" name="description" id="inquire" cols="92" rows="10"
                placeholder="    Describe your needs" autocomplete="off" required></textarea>
            <br /><br />

            <button type="submit" id="subBtn" name="subBtn">Submit</button>
            <button type="reset" id="resetBtn">Reset</button>

            <br /><br />
        </form>
    </div>

</body>
<?php include "./footer.php" ?>

</html>