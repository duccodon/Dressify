<?php
include '../../ConnectDB.php';

if(!isset($_SESSION)){
  session_start();
}

$sql = "SELECT * FROM orders";
$result = $conn->query($sql);

echo $result->num_rows;
$conn->close();


?>