<?php
    include '../../ConnectDB.php';
    session_start();

    $customer = mysqli_fetch_assoc(mysqli_query($conn, "SELECT * FROM customers WHERE cus_id='$_SESSION[cus_id]'"));
?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="CheckoutStyle.css">
  <title>Checkout</title>
</head>
<body>
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
        <h2 class="section-title">Customer Information</h2>
        <form class="address-form" method="post">
          <div class="form-row">
            <div class="form-column">
              <div class="form-group">
                <label for="firstName">Full Name</label>
                <input type="text" id="fullName" class="form-input" placeholder="<?php echo$customer['fullname'];?>" required />
              </div>
            </div>
            <div class="form-column">
              <div class="form-group">
                <label for="firstName">Phone Number</label>
                <input type="text" id="fullName" class="form-input" placeholder="<?php echo$customer['contact_number'];?>" required />
              </div>
            </div>  
          </div>
          <div class="form-group">
            <label for="houseNumber">Shipping Address</label>
            <input type="text" id="houseNumber" class="form-input"  placeholder="<?php echo$customer['address'];?>" required />
          </div>
          <div class="form-row">
            <div class="form-column">
              <div class="form-group">
                <label for="city">City</label>
                <input type="text" id="city" class="form-input" placeholder="<?php echo$customer['city'];?>" required />
              </div>
            </div>
            <div class="form-column">
              <div class="form-group">
                <label for="zipCode">Country</label>
                <input type="text" id="zipCode" class="form-input" placeholder="<?php echo$customer['country'];?>" required />
              </div>
            </div>
          </div>
          <div class="form-actions">
            <button type="submit" class="btn btn-save">Save this Customer Information</button>
          </div>
        </form>

        <h2 class="section-title">Package Information</h2>
        <form class="note-form" method="post">
            <div class="form-row">
                <div class="form-column">
                <div class="form-group">
                    <label for="firstName">Starting Date</label>
                    <input type="text" id="fullName" class="form-input" placeholder="01/01/2024" required />
                </div>
                </div>
                <div class="form-column">
                <div class="form-group">
                    <label for="firstName">Duration (days)</label>
                    <input type="number" id="fullName" class="form-input" value="1" min="1" required />
                </div>
                </div>  
            </div>
            <div class="form-group">
            <label for="houseNumber">Delivery Unit</label>
                <select name="delivery_unit" class="form-input">
                    <option value="Giao Hang Tiet Kiem">Giao Hang Tiet Kiem</option>
                    <option value="GHN">GHN</option>
                    <option value="Ahamove">Ahamove</option>
                    <option value="Grab">Grab</option>
                    <option value="Shopee">Shopee</option>
                </select>
            </div>

          <label for="packageNote" class="visually-hidden">Leave your note here</label>
          <textarea id="packageNote" class="note-input" placeholder="Leave your note here"></textarea>
          <div class="form-actions">
            <button type="submit" class="btn btn-save">Save this Package Information</button>
          </div>
        </form>

        <h2 class="section-title">Order Confirmation</h2>
        <div class="order-summary">
          <button type="button" class="place-order-btn">Place Order</button>
          <p class="terms">
            By placing your order, you agree to our company
            <a href="#" style="color: rgba(0, 0, 0, 1)">Privacy policy</a> and
            <a href="#" style="color: rgba(0, 0, 0, 1)">Conditions of use.</a>
          </p>
          <hr class="divider" />
          <h3 class="section-title">Order Summary</h3>
          <div class="summary-details">
            <div class="summary-labels">
              <p>Items (3)</p>
              <p>Delivery</p>
            </div>
            <div class="summary-values">
              <p>56.73</p>
              <p>5.50</p>
            </div>
          </div>
          <hr class="divider" />
          <div class="total">
            <p>Order Total:</p>
            <p>70.44</p>
          </div>
        </div>

      </div>
    </section>

  </div>
  </main>
</body>
</html>