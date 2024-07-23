<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="CartStyle.css">
  <title>Cart</title>
</head>
<body>
  <?php include 'CustomerSidebar.php'; ?>
  <section class="shopping-cart-container">
      <div class="cart-content">
        <div class="cart-items">
          <div class="cart-layout">
            <div class="product-column">
              <article class="product-card">
                <div class="product-info">
                  <img src="https://cdn.builder.io/api/v1/image/assets/TEMP/3fb34618dd882fcad868c2a5c291f328f6b0912335632b6acbfdbe6c9db6a599?apiKey=2cbb572e4cb94131a46c507d9ddbcac0&" alt="Product image" class="product-image" />
                  <div class="product-details">
                    <h2 class="product-name">Product name</h2>
                    <p class="product-description">Details</p>
                  </div>
                </div>
                <div class="quantity-control">
                  <span class="quantity">1</span>
                  <img src="https://cdn.builder.io/api/v1/image/assets/TEMP/6b7b8c2e7c8665cd11b49e31c1ff470c9d01ed0f58d942e805ec6da65cde5f7c?apiKey=2cbb572e4cb94131a46c507d9ddbcac0&" alt="Quantity adjustment" class="quantity-icon" />
                </div>
                <div class="price-remove">
                  <span class="price">$681</span>
                  <img src="https://cdn.builder.io/api/v1/image/assets/TEMP/b94faabcbc9a269942aa600e719a2d12b1dfbebc4db37d83f22ee52073a6068d?apiKey=2cbb572e4cb94131a46c507d9ddbcac0&" alt="Remove item" class="remove-icon" />
                </div>
              </article>
            </div>
            <div class="summary-column">
              <aside class="order-summary">
                <div class="discount-section">
                  <span class="discount-label">Discount</span>
                  <span class="discount-code">Add code</span>
                </div>
                <div class="summary-details">
                  <h3 class="summary-title">Order Summary</h3>
                  <p class="summary-item">Items</p>
                  <p class="summary-item">Delivery</p>
                  <p class="summary-item">Discount</p>
                  <p class="summary-total">Total</p>
                </div>
                <button class="checkout-button">Proceed to check out</button>
              </aside>
            </div>
          </div>
        </div>
      </div>
  </section>
</body>
</html>
