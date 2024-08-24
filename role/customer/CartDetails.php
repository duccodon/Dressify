<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <link rel="stylesheet" href="CartDetails.css">
</head>
<body>
<div> 
  <h2 style="display:flex; justify-content:center; width: 934px;">List of order:</h2>
  <div class="recent-grid">
    <div class="orders">  
      <div class="card">
        <div class="card-body">
          <div class="table-responsive">
            <form method="POST" action="">
              <table width="100%"> 
                <thead>
                  <tr>
                    <td>Product Image</td>
                    <td>Product Name</td>
                    <td>Quantity</td>
                    <td>Price per product</td>
                    <td>Action</td>
                  </tr>
                </thead>
                <tbody>
                  <?php foreach ($productDetails as $product): ?>
                  <tr>
                    <td>
                      <img src="/img/<?php echo htmlspecialchars($product['image']); ?>" class="product-image">
                    </td>
                    <td><?php echo htmlspecialchars($product['name']); ?></td>
                    <td>
                      <input type="number" name="quantity[<?php echo htmlspecialchars($product['product_id']); ?>]" value="<?php echo htmlspecialchars($cartItems[$product['product_id']]); ?>" min="1" max="1000" step="1">
                    </td>
                    <td><?php echo htmlspecialchars($product['price']); ?></td>
                    <td>
                      <input type="hidden" name="product_id" value="<?php echo htmlspecialchars($product['product_id']); ?>">
                      <button type="submit" name="update_quantity" value="Update">Update</button>
                      <button type="submit" name="remove_item" value="Remove">Remove</button>
                    </td>
                  </tr>
                  <?php endforeach; ?>
                </tbody>
              </table>
              <button type="submit" name="update_quantity">Update Quantities</button>
            </form>
          </div>
        </div> 
      </div>
    </div>
  </div>
</div>
<div class="submit-button-container">   
  <a href="CheckOut.php">
    <button type="button" class="submit-button">Check out</button>
  </a>
</div>
</body>
</html>
