<!-- eeeEhaneeeee -->

<?php
require './conn.php'
?>
<?php
include './headerformanager.php'
?>

<!DOCTYPE html>
<html>

<head>
    <title>Donation Report</title>
    <link rel="stylesheet" href="../css/donationReport.css">
    <script src="../js/donationReport.js"></script>
</head>



<body>
    <div class="body">
        <h1 id="topic1">Donation Report</h1>
        <center>
            <table border="1" id="table">
                <tr id="row1">
                    <th>Donation ID</th>
                    <th>Date</th>
                    <th>Salutaion</th>
                    <th>First Name</th>
                    <th>Last Name</th>
                    <th>Amount</th>
                    <th>Email</th>
                    <th>Telephone</th>
                </tr>
                <tr>
                <tr>

                    <?php

                    $sql = "SELECT	* FROM donation";

                    $result = mysqli_query($conn, $sql);


                    if ($result->num_rows > 0) {
                        while ($row = $result->fetch_assoc()) {

                            echo    " <tr>";
                            echo    "   <td>";
                            echo    $row["D_ID"] . "</td>";
                            echo    "   <td>";
                            echo    $row["D_date"] . "</td>";
                            echo    "   <td>";
                            echo    $row["D_salutation"] . "</td>";
                            echo    "   <td>";
                            echo    $row["D_firstName"] . "</td>";
                            echo    "   <td>";
                            echo    $row["D_lastName"] . "</td>";
                            echo    "   <td>";
                            echo    $row["Amount"] . "</td>";
                            echo    "   <td>";
                            echo    $row["Email"] . "</td>";
                            echo    "   <td>";
                            echo    $row["Telephone"] . "</td>  </tr>";
                        }
                    }
                    ?>
                </tr>
            </table>
            <br> <br>
            <button id="savBtn" onclick="successalert()"> Save Report </button>
        </center>
    </div>

</body>

<?php
include 'footer.php'
?>

</html>