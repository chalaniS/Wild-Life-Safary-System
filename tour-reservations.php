<!-- chalani -->
<?php
include 'conn.php';
?>
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Reservations</title>
  <link rel="stylesheet" href="./css/tInquiree.css">
</head>

<body>
  <?php
  include './headerfortourguide.php';
  ?>

  <!--reservation read eka admin reservation eken aran dnna-->
  <table>
    <tr>

      <th>Trip Type</th>
      <th>Salutation</th>
      <th>First Name</th>
      <th>Last Name</th>
      <th>Phone number</th>
      <th>Email</th>
      <th>County</th>
      <th>Adults</th>
      <th>Children</th>
      <th>Country</th>
      <th>Date</th>
    </tr>

    <?php


    $sql = "SELECT	*
      FROM reservation WHERE reaction = 'approve'";

    $result = mysqli_quary($conn, $sql);

    if ($result->num_rows > 0) {
      while ($row = $result->fetch_assoc()) {

        echo    " <tr>  <td>";
        echo    $row["tripType"] . "</td>";
        echo    "   <td>";
        echo    $row["salutation"] . "</td>";
        echo    "   <td>";
        echo    $row["fistName"] . "</td>";
        echo    "   <td>";
        echo    $row["lastName"] . "</td>";
        echo    "   <td>";
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
        echo    $row["date"] . "</td></tr>";
      }
    }
    ?>
  </table>
</body>
<?php
include 'footer.php';
?>

</html>