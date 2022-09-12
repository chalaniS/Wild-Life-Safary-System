<!-- eehanee -->
<?php

use LDAP\Result;

require 'conn.php';
?>
<?php
include "header.php";
?>


<!DOCTYPE html>
<html>

<head>

    <title> Donation </title>
    <link rel="stylesheet" href="./css/donation.css">
    <script src="./js/donation.js"></script>
</head>

<body>

    <div class="bodypart">
        <form method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>">
            <div class="donForm">

                <p id="topic1"> Donate</h1>
                <p id="topic2">Welcome to Wildlife Quest!</h3>
                <p> Here is a great Opportunity for you to Donate funds for Wildlife maintanance and Expenses. <br> You
                    can Donate funds without Registering to the system. This Opportunity is offered only by Wildlife
                    Quest.</p>
                <br>
                <a href="donation.php"><button id="pMonth" disabled="disabled"> Pay Now</button></a>
                <button value="Pay_Monthly" id="pMonth">
                    <a href="#">| Pay Monthly</a>
                </button><br>

                <p id="amount"> Select Amount</p>


                <input type="button" id="btn" value="   5$  ">
                <input type="button" id="btn" value="  10$  ">
                <input type="button" id="btn" value="  15$  ">
                <input type="button" id="btn" value="  20$  ">
                <input type="number" id="btn" placeholder="Other">
            </div>
            <br>
            <aside>
                <h4> Payment Details </h4>
                <label>Choose a Payment method</label>
                <img id="cardicon" src="./images/donation/card payment.png" alt="card payment">
                <br>
                <input type="radio" id="payment" name="payment" value="card" checked required>
                <label for="payment"> Card Payment </label>
                <input type="radio" id="payment" name="payment" value="bank" required>
                <label for="payment"> Bank Withdrawal </label>
                <input type="radio" id="payment" name="payment" value="paypal" required>
                <lebel for="payment"> Paypal </lebel>
                <br><br>
                <input type="number" id="ccnum" name="cardnumber" placeholder="Card number" required><br><br>
                <input type="text" id="cname" name="cardname" placeholder="Name on card" required><br><br>
                <input type="number" id="expmonth" name="expmonth" placeholder="month" required></br><br>
                <input type="text" id="expyear" name="expyear" placeholder="year" required> <br><br>
                <input type="text" id="cvv" name="cvv" placeholder="CVV" required><br><br>
                <input type="number" placeholder="Amount" name="amo" required>

            </aside>
            <!--donor infromation form-->
            <div id="donorinfor">
                <h4> Donor Information </h4>
                <label for="Salutatio"> Choose Salutaion: </label>
                <select name="Salutaion" id="Salutaion">
                    <option value="select">Select</option>
                    <option value="mr">Mr</option>
                    <option value="miss">Miss</option>
                    <option value="mrs">Mrs</option>
                    <option value="other">Other</option>
                </select>
                <br><br>
                <label>First Name : </label>
                <input type="text" name="fName" required> <br> <br>
                <label> Last Name : </label>
                <input type="text" name="lName" required><br> <br>
                <label>Telephone : </label>
                <input type="phone" name="phone" required> <br> <br>
                <label>Email : </label>
                <input type="email" name="Email" required><br><br>
                <label>NIC Number : </label>
                <input type="text" name="nic" required><br> <br>

            </div>
            <br><br>
            <center>
                <button type="submit" id="subBtn" name="subBtn" onclick="successalert()">Submit</button>
                <button type="reset" id="resBtn"> Reset</button>
            </center>
        </form>

        <?php
        if (isset($_POST["subBtn"])) {

            $salu = $_POST['Salutaion'];
            $fname = $_POST['fName'];
            $lname = $_POST['lName'];
            $email = $_POST['Email'];
            $pNo = $_POST['phone'];
            $NIC = $_POST['nic'];
            $date = date('Y-m-d');
            $amount = $_POST['amo'];
            $type = $_POST['payment'];


            $sql = "INSERT INTO donation(D_date, D_salutation, D_firstName, D_lastName, Amount,telephone,nic,Ptype,email) VALUES( '{$date}', '{$salu}', '{$fname}', '{$lname}', '{$amount}','{$pNo}','{$NIC}','{$type}','{$email}')";
            $result = mysqli_query($conn, $sql);

            if ($result) {

                /* Donation Send Successfully message */
                echo "<script>consol.log('You have successfully send a Donation.!')</script>";
            } else {
                echo "<script>consol.log('Unsuccesfull!')</script>";
            }
        }
        ?>
    </div>
    <?php
    include "footer.php";
    ?>

</body>

</html>