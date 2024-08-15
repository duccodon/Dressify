<?php
include '../../ConnectDB.php';

if(!isset($_SESSION)){
  session_start();
}

$sql = "SELECT * FROM orders";
$result = $conn->query($sql);

if ($result->num_rows > 0){
    //output data of each row
    while($row = $result->fetch_assoc()){
        $id = $row["id"];
        $from = $_SESSION['cus_id'];
        $to = $_SESSION['cus_id'];
        $date = $row["date_start"];
        $duration = $row["duration"];
        $status = $row["status"];
        $shipadd = $row["shipping_address"];
        $delivercode = $row["delivery_code"];

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
    <h2>From Customer: <?php echo $from; ?><br>
    Package Number: AVN00</br>
    </h2>
    <p>Dear owner</p>
    <p>We are delighted to inform you that there is a new booking for your product. A customer named <?php echo $from; ?> has expressed interest in renting your item.</p>
   <fieldset>
    <legend>Details</legend>
    <p>Package Details: <?php echo $date;?>
    <?php echo $duration; ?>.</p>
    <br>
    <p>Package Note:</p>
    <br>    
    <p>Shipping Address: <?php echo $shipadd; ?>.</p>
    <br>  
    <p>Delivery Code: <?php echo $delivercode;?>.</p>
    <br>
    <div>
        <p>Image:</p> 
        <img src ="inter.png"> 
    </div>
    </fieldset>
    <p>Please prepare your product package as soon as possible and contact admin to start the delivery process.</p>
    <p>Best Regards</p>
    