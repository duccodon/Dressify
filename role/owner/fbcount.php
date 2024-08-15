<?php
include '../../ConnectDB.php';

if(!isset($_SESSION)){
  session_start();
}

$sql = "SELECT * FROM feedback";
$result = $conn->query($sql);

echo $result->num_rows;

$conn->close();


?>