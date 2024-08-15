<?php
include '../../ConnectDB.php';

if(!isset($_SESSION)){
  session_start();
}

$sql = "SELECT * FROM feedback";
$result = $conn->query($sql);


if ($result->num_rows > 0){
    //output data of each row
    while($row = $result->fetch_assoc()){
        $id = $row["id"];
        $rate = $row["rate"];
        $from = $_SESSION["cus_id"];
        $to = $_SESSION['cus_id'];
        $image = $row["image1"];
        $problemDetail = $row["problem_detail"];

        $imagePath = '../../img/' . $image; //lay anh trong file duoc up
    }
    }   else    {
        echo "0 results";
    }
$conn->close();


?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="AdminStyle.css">
  <style>
    h2{
        margin-bottom: 30px;
    }
    p{
        line-height: 20px;   /* within paragraph */
        margin-bottom: 20px;
    }
  </style>
</head>
<div>
    <h2>From Customer: <?php echo $from; ?> <br>
    Package Number: AVN00</br>
    </h2>
    <p>Dear owner <?php echo $to; ?></p>
    <p>We are delighted to inform you that there is a new booking for your product. A customer named <?php echo $from; ?> has expressed interest in renting your item.</p>
    <p>
  <fieldset>
    <legend>Feedback</legend>
    <p>Package Details:</p>
    <br>
    <p>Product rating: <?php echo $rate;?></p> 
    <br>
    <p>Customer Problems Feedback: <?php echo $problemDetail;?></p>
    <p>Customer Suggestion Feedback: None.</p>
    <div>
        <p>Image:</p> <?php echo "<img src='$imagePath' alt='Image' />"; ?>
    </div>
  </fieldset>
</head>
    