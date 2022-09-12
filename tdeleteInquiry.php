<!-- Chalani -->
<?php
require_once 'conn.php';
?>

<?php

if (isset($_GET['id'])) {

  $inq_ID = $_GET['id'];
  $sql = "DELETE FROM  contactus where inq_ID = '$inq_ID' LIMIT 1";
  $result = mysqli_query($conn, $sql);
  if ($result) {
    header('Location: inquires.php');
  }
}
?>