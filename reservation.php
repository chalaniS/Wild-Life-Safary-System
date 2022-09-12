<!-- Ishara -->
<?php
include 'conn.php';
?>
<?php
if (isset($_POST["subbtn"])) {

    $sal = $_POST['sal'];
    $type = $_POST['type'];
    $fname = $_POST['fname'];
    $lname = $_POST['lname'];
    $phone = $_POST['phone'];
    $email = $_POST['email'];
    $country = $_POST['country'];
    $adults = $_POST['adults'];
    $child = $_POST['children'];
    $currency  = $_POST['currency'];

    $sql = "INSERT INTO reservation (tripType,salutation,f_name,l_name,phone,email,country,adults,children,currency) 
        VALUES( '{$type}', '{$sal}', '{$fname}', '{$lname}', '{$phone}','{$email}','{$country}','{$adults}','{$child}','{$currency}')";
    $result = mysqli_query($conn, $sql);

    if ($result) {

        /* Reservation successfull message */
        echo "<script>consol.log('You have successfully send a Reservation.!')</script>";
        header('Location: index.php');
    } else {
        echo "<script>consol.log('Unsuccesfull! Do you want to send request again?')</script>";
        header('Location: reservation.php');
    }
}
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Reservation Details</title>
    <link rel="stylesheet" href="./css/reservation.css">
</head>

<body>
    <?php include './header.php' ?>
    <form action="reservation.php" method="POST">
        <div class="container-main">

            <div class="res-det-form">
                <div class="form-head">reservation details</div>

                <!-- first row trip type , fname , lname-->
                <div class="det-row">
                    <div class="card-inside">
                        <div class="label">trip type</div>
                        <select class="answer" name="type" placeholder="Type" required>
                            <option value="select">--SELECT--</option>
                            <option value="Bird-Watching">Bird Watching</option>
                            <option value="safari-tour">Wild Safari Tours</option>
                        </select>
                    </div>
                    <div class="card-inside">
                        <div class="label">first name</div>
                        <input class="answer" type="text" name="fname" placeholder="First Name" autocomplete="off" required>
                    </div>
                    <div class="card-inside">
                        <div class="label">last name</div>
                        <input class="answer" type="text" name="lname" placeholder="Last Name" autocomplete="off" required>
                    </div>
                </div>
                <!-- second row salutation , phone , email-->
                <div class="det-row">
                    <div class="card-inside">
                        <div class="label">salutation</div>
                        <select class="salutation" name="sal" placeholder="Salutation" required>
                            <option value="select">--SELECT--</option>
                            <option value="Mr">Mr</option>
                            <option value="Mrs">Mrs</option>
                            <option value="Miss">Miss</option>
                        </select>
                    </div>
                    <div class="card-inside">
                        <div class="label">phone</div>
                        <input class="answer" type="phone" name="phone" placeholder="Telephone" pattern="[0-9]{10}" autocomplete="off" required />
                    </div>
                    <div class="card-inside">
                        <div class="label">email</div>
                        <input class="answer" type="email" name="email" pattern="[a-z0-9._%+-]+@[a-z0-9.-]+\.[a-z]{2,3}" placeholder="Email address" autocomplete="off" required />
                    </div>
                </div>
                <!-- third row country , adult-count , child-count-->
                <div class="det-row">
                    <div class="card-inside">
                        <div class="label">country</div>
                        <input class="answer" type="text" placeholder="Country" name="country" autocomplete="off" required>
                    </div>
                    <div class="card-inside">
                        <div class="label">num. of adults</div>
                        <input class="answer" type="text" placeholder="Number of adults" name="adults" autocomplete="off" required>
                    </div>
                    <div class="card-inside">
                        <div class="label">num. of children</div>
                        <input class="answer" type="text" placeholder="Number of children" name="children" autocomplete="off" required>
                    </div>
                </div>
                <div class="card-inside">
                    <div class="label">Currency</div>
                    <select class="answer" name="currency" placeholder="Currency" required>
                        <option value="select">--SELECT--</option>
                        <option value="USD">USD</option>
                        <option value="LKR">LKR</option>
                        <option value="EURO">EURO</option>
                        <option value="other">other</option>
                    </select>
                </div>
            </div>
            <div class="det-row" id="det-btn-container">
                <button onclick="return confirm('Are you sure do you want to Submit reservation?')" type="submit" name="subbtn" class="res-btns" id="submit-btn"><i class="fa-solid fa-calendar-check"></i><br>Send Reservation Request</button>
            </div>
        </div>

        </div>
    </form>


    <?php include './footer.php' ?>
</body>

</html>