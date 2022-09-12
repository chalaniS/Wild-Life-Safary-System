<!-- Chalani -->
<?php
require 'conn.php';
?>
<?php
include 'headerfortourguide.php';

?>
<?php
include './tdeleteInquiry.php';
?>



<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Inquies</title>
    <style>
    @import url("https://fonts.googleapis.com/css2?family=Poppins:wght@400;600&display=swap");
    </style>
    <link rel="stylesheet" href="./css/inquires.css" />

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/all.min.css"
        integrity="sha512-KfkfwYDsLkIlwQp6LFnl8zNdLGxu9YAA1QvwINks4PhcElQSvqcyVLLD9aMhXd13uQjoXtEKNosOWaZqXgel0g=="
        crossorigin="anonymous" referrerpolicy="no-referrer" />
</head>

<body>
    <div class="body">
        <br>
        <h1 id="title">Tour Guide Dashbroad</h1>

        <table>

            <tr>
                <th>Inq ID</th>
                <th>User name</th>
                <th>Email</th>
                <th>Phone number</th>
                <th>Inquiry</th>
                <th>Action</th>
            </tr>
            <tr>

                <?php

        $sql = "SELECT	* FROM contactus ORDER BY inq_ID ";

        $result = mysqli_query($conn, $sql);


        if ($result->num_rows > 0) {
          while ($row = $result->fetch_assoc()) {

            echo    " <tr>";
            echo    "   <td>";
            echo    $row["inq_ID"] . "</td>";
            echo    "   <td>";
            echo    $row["Full_name"] . "</td>";
            echo    "   <td>";
            echo    $row["email"] . "</td>";
            echo    "   <td>";
            echo    $row["telephone"] . "</td>";
            echo    "   <td>";
            echo    $row["Description"] . "</td>";
            echo    "<td>";
            echo    " <div>";
            echo    "<a href='https://mail.google.com/mail/u/0/' target = '_blank'><input type='button' value = 'Reply'></a>";
            echo    "<button><a href=\"tdeleteInquiry.php?id={$row['inq_ID']}\"onclick=\"return confirm('Are you sure you want to delete this ?');\">delete</a></button>";
            echo    "</div>";
            echo    "</td>";
            echo    "</tr>";
          }
        }
        ?>
        </table>

    </div>

</body>

<?php
include 'footer.php';
?>

</html>