<?php
include '../../ConnectDB.php';
session_start();

if(isset($_GET['view'])){
    $order_id = $_GET['view'];
    $order = mysqli_fetch_assoc(mysqli_query($conn, "SELECT * FROM orders WHERE id='$order_id' "));

    $owner = mysqli_fetch_assoc(mysqli_query($conn, "SELECT * FROM customers WHERE cus_id='$order[owner_id]' "));
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="AdminStyle.css">
  <style>
    h2{
        margin-bottom: 15px;
    }
    p{
        line-height: 20px;   /* within paragraph */
        margin-bottom: 20px;
        font-size: large;
    }
    fieldset{
        width: 700px;
    }
    legend{
        font-size: large;
        margin-bottom: 10px;
    }
  </style>
</head>
<body>
<?php include 'CustomerSidebar.php'; ?>
<div class="container">
        <div class="inner_right_pannel">
            <h2>From Customer: <?php echo $owner['fullname']; ?><br>
            Package Number: <?php echo $order['id']; ?></br>
            </h2>
            <fieldset>
                <legend>Details</legend>
                <p>Total: <?php echo $order['total']; ?>.</p>
                <br>
                <p>Duration: <?php echo $order['duration']; ?>.</p>
                <br>
                <p>Package Note: <?php echo $order['note'];?></p>
                <br>    
                <p>Shipping Address: <?php echo $order['shipping_address']; ?>.</p>
                <br>  
                <p>Delivery Unit: <?php echo $order['delivery_code'];?>.</p>
                <br>
                <a href="History.php">Return to history</a>
                <br>
                <a href="CustomerNotificationPage.php?view-order=<?php echo"$order_id";?>">More detail information</a>
            </fieldset>
        </div>
</div>
</body>
</html>