<!-- dileep -->
<?php
include 'conn.php';
?>
<?php include './headerforadmin.php' ?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Reservation Details</title>
    <link rel="stylesheet" href="./css/reservation-det.css">

</head>

<body>
    <div class="body">

        <table>

            <tr>
                <th>Reservation ID</th>
                <th>Trip Type</th>
                <th class="salutation">Salutation</th>
                <th>First Name</th>
                <th>Last Name</th>
                <th>Phone number</th>
                <th>Email</th>
                <th>County</th>
                <th>Adults</th>
                <th>Children</th>
                <th>Country</th>
                <th>Currency</th>
                <th>Date</th>
                <th>Response</th>
            </tr>
            <tr>

                <?php

                $sql = "SELECT	* FROM reservation";

                $result = mysqli_query($conn, $sql);


                if ($result->num_rows > 0) {
                    while ($row = $result->fetch_assoc()) {

                        echo    " <tr>";
                        echo    "   <td>";
                        echo    $row["r_ID"] . "</td>";
                        echo    "   <td>";
                        echo    $row["tripType"] . "</td>";
                        echo    "   <td class=\"salutation\">";
                        echo    $row["salutation"] . "</td>";
                        echo    "   <td>";
                        echo    $row["f_name"] . "</td>";
                        echo    "   <td>";
                        echo    $row["l_name"] . "</td>";
                        echo    "   <td>";
                        echo    $row["phone"] . "</td>";
                        echo    "   <td>";
                        echo    $row["email"] . "</td>";
                        echo    "   <td>";
                        echo    $row["country"] . "</td>";
                        echo    "   <td>";
                        echo    $row["adults"] . "</td>";
                        echo    "   <td>";
                        echo    $row["children"] . "</td>";
                        echo    "   <td>";
                        echo    $row["currency"] . "</td>";
                        echo    "   <td>";
                        echo    $row["date"] . "</td>";

                        echo    "<td>";
                        echo    " <div>";
                        echo    "<a href='https://mail.google.com/mail/u/0/'><input type='button' value = 'Reply'>Approve</a>";
                        echo    "<button><a href=\"tdeleteInquiry.php?id={$row['r_ID']}\"onclick=\"return confirm('Are you sure you want to delete this Reservation ?');\">Cancel</a></button>";
                        echo    "</div>";
                        echo    "</td>";
                        echo    "</tr>";
                    }
                }
                ?>
        </table>

    </div>


</body>
<?php include 'footer.php' ?>

</html>