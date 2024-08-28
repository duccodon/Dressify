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
    Package Number: <?php echo $id; ?> </br>
    </h2>
    <p>Dear owner</p>
    <p>We are delighted to inform you that there is a new booking for your product. A customer named <?php echo $from2; ?> has expressed interest in renting your item.</p>
   <fieldset>
    <legend>Details</legend>
    <p>Package Details: <br>Date Start: <?php echo $date;?>.<br>Duration: <?php echo $duration; ?> days.</p>
    <br>
    <p>Package Note: <br> <?php echo $note;?></p>
    <br>    
    <p>Shipping Address: <?php echo $shipadd; ?>.</p>
    <br>
    <p>Contact number: <?php echo $contact_number; ?>.</p>
    <p>Delivery Company: <?php echo $delivercode;?>.</p>
    <br>
    </fieldset>
    <p>Please prepare your product package as soon as possible and contact admin to start the delivery process.</p>
    <p>Best Regards</p>
