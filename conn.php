<?php 
//create connection
$conn = new mysqli('localhost','2021','','wildlifetripsafari');

//check connection
if($conn->connect_error){
    die("Data base connection error : ". $conn->connect_error);
}
