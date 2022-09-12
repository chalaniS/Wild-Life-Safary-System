<?php

require 'conn.php';
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Inquiry</title>
    <link rel="stylesheet" href="./css/tInquiree.css">
</head>

<body>
    <?php
    include 'headerfortourguide.php';
    include 'tdeleteInquiry.php';
    ?>
    <table>
        <tr>
            <th>Full name</th>
            <th>Email</th>
            <th>Telephone</th>
            <th>Salutation</th>
            <th>Inquiry</th>
            <th>Delete</th>
        </tr>
        <tr>

            <?php
           
            $sql = "SELECT	*
            FROM contactus";
           
            $result = $con->query($sql);
 
            if($result->num_rows >0){  
              while($row = $result->fetch_assoc()){  
        
                echo    " <tr>  <td>";
                echo    $row["Full_name"]."</td>";
                echo    "   <td>";
                echo    $row["email"]."</td>";
                echo    "   <td>";
                echo    $row["telephone"]."</td>";
                echo    "   <td>";
                echo    $row["salutation"]."</td>";
                echo    "   <td>";
                echo    $row["Description"]."</td>";
                echo    "   <td>";
                        $id =  $row["inq_ID"];
                echo    "<button onclick='deleteData($id)'> Delete </button>";
       
                }
                               
              }
            
          ?>
    </table>

</body>

</html>