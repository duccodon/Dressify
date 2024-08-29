<?php
  include '../../ConnectDB.php';
  session_start();

  $mess_query = mysqli_query($conn, "SELECT * FROM `message` WHERE `from_id`='$_SESSION[cus_id]' ");

  if(isset($_GET['view-order'])){
    $order_id = $_GET['view-order'];
    mysqli_query($conn, "UPDATE `message` SET `from_view` = '1' WHERE order_id = '$order_id'") or die('Query failed');

    $order= mysqli_fetch_assoc(mysqli_query($conn, "SELECT * FROM orders WHERE id='$order_id'"));
    $customer = mysqli_fetch_assoc(mysqli_query($conn, "SELECT * FROM customers WHERE cus_id='$_SESSION[cus_id]'"));
    $owner = mysqli_fetch_assoc(mysqli_query($conn, "SELECT * FROM customers WHERE cus_id='$order[owner_id]'"));//ready
  }


  if (isset($_POST['update'])){
    $filter_status = filter_var($_POST['status'], FILTER_SANITIZE_STRING);
    $status = mysqli_real_escape_string($conn, $filter_status);

    $filter_fee = filter_var($_POST['fee'], FILTER_SANITIZE_STRING);
    $fee = mysqli_real_escape_string($conn, $filter_fee);

    if (!empty($status)){
      mysqli_query($conn, "UPDATE orders SET `status` ='$status', `fee` = '$fee' WHERE id ='$order[id]'") or die('Query failed');
      mysqli_query($conn, "UPDATE cart SET `status` ='$status' WHERE order_id ='$order[id]'") or die('Query failed');
    }
  }
?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="AdminStyle.css">
  <link rel="stylesheet" href="../customer/CartStyle.css">

  <link rel="stylesheet" href="../customer/CustomerOrderTracking.css">
  <title>Notification Page</title>
</head>
<body>
<?php include 'OwnerSidebar.php'; ?>
<div class="container">
<div class="inner_left_pannel">
  <div class="header-left">
    <div>Mark all as read</div>
  </div>
  <div class="notification-list">
            <?php
                if (mysqli_num_rows($mess_query) > 0){
                    while($fetch_mess = mysqli_fetch_assoc($mess_query)){
                        $receiver = mysqli_fetch_assoc(mysqli_query($conn, "SELECT * FROM customers WHERE cus_id='$fetch_mess[to_id]'"));    
                        if ($fetch_mess['to_view'] == 0){
            ?>
                    <a class="notification unread" href="OwnerNotification.php?view-order=<?php echo $fetch_mess['order_id']?>">
                    <img alt="photo" src="../../img/default_avatar.jpg">
                      <div class="description">
                        <div class="name"><?php echo $receiver['username'];?></div>
                        <article>Date: <?php echo "date"?></article>
                      </div>  
                    </a>
            <?php 
                        }
                        else{
            ?>
                      <a class="notification" href="OwnerNotification.php?view-order=<?php echo $fetch_mess['order_id']?>">
                      <img alt="photo" src="../../img/default_avatar.jpg">
                        <div class="description">
                          <div class="name"><?php echo $receiver['username'];?></div>
                          <article>Date: <?php echo "date"?></article>
                        </div>  
                      </a>
            <?php
                        }
                    }
                }
            ?>
  </div>
</div>


<div  class="inner_right_pannel">
  <h1 style="width: 950px;">Detail</h1>
              <?php
                if(isset($_GET['view-order'])){
                    $order_id = $_GET['view-order'];
                    mysqli_query($conn, "UPDATE `message` SET `to_view` = '1' WHERE order_id = '$order_id'") or die('Query failed');

                    $order= mysqli_fetch_assoc(mysqli_query($conn, "SELECT * FROM orders WHERE id='$order_id'"));
                    $customer = mysqli_fetch_assoc(mysqli_query($conn, "SELECT * FROM customers WHERE cus_id='$_SESSION[cus_id]'"));
                    $owner = mysqli_fetch_assoc(mysqli_query($conn, "SELECT * FROM customers WHERE cus_id='$order[owner_id]'"));//ready
              ?>
  <form method="post" style="display:flex; width: 950px;" class="message-detail">
    <h2>Order Tracking: <?php echo $order['id']?></h2>
    <h3>Customer Information</h3>
    
    <div class = "Customer">
        <label for="Customer" class ="info-label">Name: </label>
        <div id = "Customer" class ="info-input" type = "text"><?php echo $customer['fullname']?></div>
    </div>
    
    <br>
    
    <div class = "Customer">
        <label for="Customer" class ="info-label">Email: </label>
        <div id = "Customer" class ="info-input" type = "text"><?php echo $customer['email']?></div>
    </div>

    <br>

    <div class = "Customer">
        <label for="Customer" class ="info-label">Country: </label>
        <div id = "Customer" class ="info-input" type = "text"><?php echo $customer['country']?></div>
        <label for="Customer" class ="info-label">City: </label>
        <div id = "Customer" class ="info-input" type = "text"><?php echo $customer['city']?></div>
    </div>

    <br>
    <div class = "Customer">
        <label for="Customer" class ="info-label">Address: </label>
        <div id = "Customer" class ="info-input" type = "text"><?php echo $customer['address']?></div>
    </div>

    <br>
    <div class = "Customer">
        <label for="Customer" class ="info-label">Contact Number: </label>
        <div id = "Customer" class ="info-input" type = "text"><?php echo $customer['contact_number']?></div>
    </div>

    <h3>Rental Owner Information</h3>
    
    <div class = "RentalOwner">
        <label for="RentalOwner" class ="info-label">Name: </label>
        <div id = "RentalOwner" class ="info-input" type = "text"><?php echo $owner['fullname']?></div>
    </div>
    
    <br>
    
    <div class = "Customer">
        <label for="RentalOwner" class ="info-label">Email: </label>
        <div id = "RentalOwner" class ="info-input" type = "text"><?php echo $owner['email']?></div>
    </div>

    <br>

    <div class = "RentalOwner">
        <label for="RentalOwner" class ="info-label">Country: </label>
        <div id = "RentalOwner" class ="info-input" type = "text"><?php echo $owner['country']?></div>
        <label for="RentalOwner" class ="info-label">City: </label>
        <div id = "RentalOwner" class ="info-input" type = "text"><?php echo $owner['city']?></div>
    </div>

    <br>
    <div class = "Customer">
        <label for="Customer" class ="info-label">Address: </label>
        <div id = "Customer" class ="info-input" type = "text"><?php echo $owner['address']?></div>
    </div>

    <br>
    <div class = "Customer">
        <label for="Customer" class ="info-label">Contact Number: </label>
        <div id = "Customer" class ="info-input" type = "text"><?php echo $owner['contact_number']?></div>
    </div>
    
    <h3>Receiver Information</h3>
    <div class = "Customer">
        <label for="Customer" class ="info-label">Name: </label>
        <div id = "Customer" class ="info-input" type = "text"><?php echo $order['fullname']?></div>
    </div>
    
    <br>

    <div class = "Customer">
        <label for="Customer" class ="info-label">Country: </label>
        <div id = "Customer" class ="info-input" type = "text"><?php echo $order['country']?></div>
        <label for="Customer" class ="info-label">City: </label>
        <div id = "Customer" class ="info-input" type = "text"><?php echo $order['city']?></div>
    </div>

    <br>
    <div class = "Customer">
        <label for="Customer" class ="info-label">Address: </label>
        <div id = "Customer" class ="info-input" type = "text"><?php echo $order['shipping_address']?></div>
    </div>

    <br>
    <div class = "Customer">
        <label for="Customer" class ="info-label">Contact Number: </label>
        <div id = "Customer" class ="info-input" type = "text"><?php echo $order['contact_number']?></div>
    </div>

    <h3>Package Information</h3>
    <div class = "Package">
        <label for="Package" class ="info-label">Package Number: </label>
        <div id = "Package" class = "info-input" type = "text"><?php echo $order['id']?></div>  
    </div>

    <br>

    <div class = "Package">
        <label for="Package" class ="info-label">Package Details: </label>
        <div id = "Package" class = "info-input" type = "text">1 pair of jeans <br> 1 pair of trousers</div>  
    </div>
        
    <br> 

    <div class = "Package">
        <label for="Package" class ="info-label">Package Note: </label>
        <div id = "Package" class = "info-input" type = "text"><?php echo $order['note']?></div>  
    </div>
        
    <br> 

    <div class = "Package">
        <label for="Package" class ="info-label">Package Status: </label>
        <div id = "Package" class = "info-input" type = "text" ><?php echo $order['status']?></div>  
        <select name="status" class="info-input" required>
                  <option value="" disabled selected>Update the status</option>
                  <option value="customer received">Customer Received</option>
                  <option value="refund">Refund</option>
                  <option value="success">Success</option>
          </select>
    </div>
        
    <br> 

    <div class ="Package">
        <label for="Package" class ="info-label">Estimated Delivery Date: </label>
        <div id = "EED" class = "info-input" type = 'Date'><?php echo $order['date_start']?></div>

        <label for="Package" class ="info-label">Estimated Return Date: </label>
        <div id = "ERD" class = "info-input" type = 'Date'>
          <?php
            $startDate = $order['date_start'];
            $duration = $order['duration'];

            echo date('Y-m-d', strtotime($startDate. ' + ' .$duration. ' days'));
          ?>
        </div>
    </div>
    
    <div class = "Package">
        <label for="Package" class ="info-label">Additional Fee (Fine included): </label>
        <div name = "Fee" class ="info-input" type = "text"><?php if ($order['fee']){echo $order['date_start'];}else{echo "None";}?></div>  
    </div>
    
    <br>

    <div class = "Package">
        <label for="Package" class ="info-label">Total Fee: </label>
        <div id = "Total" class = "info-input">
            <?php echo $order['total']; + $order['fee'];;?>
        </div>  
    </div>
    
    <?php 
      if ($order['status'] == "success"){
    ?>
      <a href="ViewFeedback.php?order_id=<?php echo $order['id']?>" class="update-button">Feedback</a>
    <?php
      }else{
    ?>
    <button type="submit" name="update" class="update-button">Update status</button>
  </form>  

  <?php
      }
                }
  ?>
</div>


</div>
</body>
</html>
