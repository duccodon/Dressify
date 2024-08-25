<?php
    include '../../ConnectDB.php';
    session_start();

    $customer = mysqli_fetch_assoc(mysqli_query($conn, "SELECT * FROM customers WHERE cus_id='$_SESSION[cus_id]'"));
    $total=0;

    $owner_id_main = $_GET['owner_id'];
    $product_id_main = mysqli_query($conn, "SELECT * FROM cart as c JOIN products as p ON c.product_id=p.product_id WHERE p.owner_id ='$owner_id_main'");
    while($fetch_product = mysqli_fetch_assoc($product_id_main))
        $total = $total + $fetch_product['price']; 

    if(isset($_POST['confirm'])){
        $filter_fullname = filter_var($_POST['fullname'], FILTER_SANITIZE_STRING);
        $fullname = mysqli_real_escape_string($conn, $filter_fullname);

        $filter_contact_number = filter_var($_POST['contact_number'], FILTER_SANITIZE_STRING);
        $contact_number = mysqli_real_escape_string($conn, $filter_contact_number);

        $filter_shipping_address = filter_var($_POST['shipping_address'], FILTER_SANITIZE_STRING);
        $shipping_address = mysqli_real_escape_string($conn, $filter_shipping_address);

        $filter_city = filter_var($_POST['city'], FILTER_SANITIZE_STRING);
        $city = mysqli_real_escape_string($conn, $filter_city);

        $filter_country = filter_var($_POST['country'], FILTER_SANITIZE_STRING);
        $country = mysqli_real_escape_string($conn, $filter_country);

        $filter_date_start = filter_var($_POST['date_start'], FILTER_SANITIZE_STRING);
        $date_start = mysqli_real_escape_string($conn, $filter_date_start);

        $filter_duration = filter_var($_POST['duration'], FILTER_SANITIZE_STRING);
        $duration = mysqli_real_escape_string($conn, $filter_duration);

        $filter_delivery_unit = filter_var($_POST['delivery_unit'], FILTER_SANITIZE_STRING);
        $delivery_unit = mysqli_real_escape_string($conn, $filter_delivery_unit);

        $filter_note = filter_var($_POST['note'], FILTER_SANITIZE_STRING);
        $note = mysqli_real_escape_string($conn, $filter_note);


        $delivery_price= mysqli_fetch_assoc(mysqli_query($conn, "SELECT * FROM delivery_unit WHERE `name`='$delivery_unit'"))['price'];
        $total = $total + $delivery_price;


        mysqli_query($conn, "INSERT INTO orders (`cus_id`, `owner_id`, `fullname`, `contact_number`, `shipping_address`, `city`, `country`,  `date_start`, `duration`, `status`, `delivery_code`, `total`, `note`) 
        VALUES('$_SESSION[cus_id]', '$owner_id_main', '$fullname', '$contact_number', '$shipping_address', '$city', '$country', '$date_start', '$duration', 'in progress', '$delivery_unit', '$total', '$note')") or die('Query failed');
        $message_up[] = 'Place an order successfully' .$delivery_price;
    }

    $total=0;
?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="CheckoutStyle.css">

  <link href = "https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css" rel = 'stylesheet'>
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css">

  <title>Checkout</title>
</head>
<body>
    <?php
                if (isset($message_up)){
                    foreach($message_up as $message_up){
                      echo '
                      <div style="border-radius: 15px; background-color: rgba(0,0,0,0.6); width: 400px; height: 200px; color: #fff; padding: 40px; margin: 10px 0 0 40%; z-index: 100; position: relative;">
                          <span style="margin-left: 20%">'.$message_up.'<i style="margin-left: 1rem;" class="fa-solid fa-trash" onclick="this.closest(\'div\').remove()"></i></span>
                          <span style="margin-left: 20%"> <a style="color: #fff;" href="Cart.php">Click here to return to carts</a> </span>
                      </div>
                      ';
                    }
                }
    ?>


  <?php include 'CustomerSidebar.php'; ?>
  <main class="checkout-container">
  <div class="checkout-content">
    <section class="product-section">
      <div class="product-details">
        <div class="logo-container">
          <img loading="lazy" src="https://cdn.builder.io/api/v1/image/assets/TEMP/c30996d5703da71b9f16896489382a2dca74474011131c05ba13ce2a9ac40fe9?apiKey=2cbb572e4cb94131a46c507d9ddbcac0&" class="logo" alt="Company logo" />
        </div>
        <div class="product-info">
        <?php
            if(isset($_GET['owner_id'])){
                $owner_id = $_GET['owner_id'];
                $product_id = mysqli_query($conn, "SELECT * FROM cart as c JOIN products as p ON c.product_id=p.product_id WHERE p.owner_id ='$owner_id'");
                $owner = mysqli_fetch_assoc(mysqli_query($conn, "SELECT * FROM customers WHERE cus_id='$owner_id'"));//ready
                while($fetch_product = mysqli_fetch_assoc($product_id)){  
                  $total = $total + $fetch_product['price']; 
        ?>

          <div class="product-card">
            <div class="product-content">
              <div class="product-image-container">
                <div class="product-image-wrapper">
                    <img loading="lazy" style="border-radius: 25%;width: 80px; height: 80px; object-fit: cover;" src = "../../img/product/<?php echo $fetch_product['image1'];?>"/>
                  <div class="product-text">
                    <h2 style="display: inline-flex; width: 200%; overflow: hidden;" class="product-name"><?php echo $fetch_product['product_name']?></h2>
                    <p class="product-details"><?php echo $fetch_product['description']?></p>
                  </div>
                </div>
              </div>
              <div class="product-price-container">
                <div class="product-price-wrapper">
                  <p class="product-quantity">Amount: 1</p>
                  <div class="product-price">
                    <span class="price-value">Price: <?php echo $fetch_product['price']?></span>
                  </div>
                </div>
              </div>
            </div>
          </div>
        
        <?php
                }
            }
        ?>
        </div>
      </div>
    </section>

    <section class="order-section">
      <div class="order-content">
        <form class="address-form" method="post">
        <h2 class="section-title" style="margin-bottom: 1rem; margin-top: -2rem;">Customer Information</h2>
          <div class="form-row">
            <div class="form-column">
              <div class="form-group">
                <label for="firstName">Full Name</label>
                <input type="text" name="fullname" class="form-input" placeholder="<?php echo$customer['fullname'];?>" required />
              </div>
            </div>
            <div class="form-column">
              <div class="form-group">
                <label for="firstName">Phone Number</label>
                <input type="text" name="contact_number" class="form-input" placeholder="<?php echo$customer['contact_number'];?>" required />
              </div>
            </div>  
          </div>
          <div class="form-group">
            <label for="houseNumber">Shipping Address</label>
            <input type="text" name="shipping_address" class="form-input"  placeholder="<?php echo$customer['address'];?>" required />
          </div>
          <div class="form-row">
            <div class="form-column">
              <div class="form-group">
                <label for="city">City</label>
                <input type="text" name="city" class="form-input" placeholder="<?php echo$customer['city'];?>" required />
              </div>
            </div>
            <div class="form-column">
              <div class="form-group">
                <label for="zipCode">Country</label>
                <input type="text" name="country" class="form-input" placeholder="<?php echo$customer['country'];?>" required />
              </div>
            </div>
          </div>

        <h2 class="section-title">Package Information</h2>
            <div class="form-row">
                <div class="form-column">
                <div class="form-group">
                    <label for="firstName">Starting Date</label>
                    <input type="date" name="date_start" class="form-input" placeholder="01/01/2024" required />
                </div>
                </div>
                <div class="form-column">
                <div class="form-group">
                    <label for="firstName">Duration (days)</label>
                    <input type="number" name="duration" class="form-input" value="1" min="1" required />
                </div>
                </div>  
            </div>
            <div class="form-group">
            <label for="houseNumber">Delivery Unit</label>
                <select name="delivery_unit" class="form-input" id="getDelivery">
                    <option value="Giao Hang Tiet Kiem">Giao Hang Tiet Kiem</option>
                    <option value="GHN">GHN</option>
                    <option value="Ahamove">Ahamove</option>
                    <option value="Grab">Grab</option>
                    <option value="Shopee">Shopee</option>
                </select>
                <?php
                    // $getDelivery = $_POST['delivery_unit'];
                    // $price = mysqli_fetch_assoc(mysqli_query($conn, "SELECT * FROM delivery_unit WHERE `name`='$getDelivery'"))['price'];
                ?>
            </div>

          <label for="packageNote" class="visually-hidden">Leave your note here</label>
          <textarea name="note" class="note-input" placeholder="Leave your note here"></textarea>

        <h2 style="margin-top: 1rem;" class="section-title">Order Confirmation</h2>
        <div class="order-summary">
          <button type="submit" name="confirm" class="place-order-btn">Place Order</button>
          <p class="terms">
            By placing your order, you agree to our company
            <a href="#" style="color: rgba(0, 0, 0, 1)">Privacy policy</a> and
            <a href="#" style="color: rgba(0, 0, 0, 1)">Conditions of use.</a>
          </p>
          <hr class="divider" />
          <h3 class="section-title">Order Summary</h3>
          <div class="summary-details">
            <div class="summary-labels">
              <p>Items (<?php echo mysqli_num_rows($product_id)?>)</p>
              <p>Delivery</p>
            </div>
            <div class="summary-values">
              <p><?php echo $total?></p>
              <p id="selected_delivery_unit"></p>
            </div>
          </div>
          <hr class="divider" />
          <div class="total">
            <p>Order Total:</p>
            <p><?php echo $total?></p>
          </div>
        </div>
        </form>    

      </div>
    </section>

  </div>
  </main>
</body>

<script>
  function updateSelectedDeliveryUnit() {
    var selectedDeliveryUnit = document.getElementById("getDelivery").value;
    document.getElementById("selected_delivery_unit").textContent = selectedDeliveryUnit;
  }
</script>

</html>