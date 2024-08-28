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
    <p>Dear owner</p>
    <p>There is a feedback from a customer named <?php echo $from2; ?> for your product.</p>
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
