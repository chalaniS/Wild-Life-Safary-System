<!-- Ishara -->
<?php
    require_once 'conn.php';
?>
<?php
if (isset($_GET['delete_ac'])) {
    $delete = $_GET['delete_ac'];

    $quary = "DELETE FROM registered_user WHERE User_ID = '{$delete}' LIMIT 1";
    $result = mysqli_query($conn, $quary);
    if ($result) {
        header('Location: logout.php');
    }
}
?>