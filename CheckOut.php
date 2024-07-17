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
          <div class="back-to-cart">
            <a href="#" class="back-link">
              <img loading="lazy" src="https://cdn.builder.io/api/v1/image/assets/TEMP/f73e71db4be3b243d4de401c086bb58d4b93001097133ea57a59afe4c519b394?apiKey=2cbb572e4cb94131a46c507d9ddbcac0&" class="back-icon" alt="Back arrow icon" />
              <span class="back-text">Back to cart</span>
            </a>
          </div>
          <div class="product-card">
            <div class="product-content">
              <div class="product-image-container">
                <div class="product-image-wrapper">
                  <img loading="lazy" src="https://cdn.builder.io/api/v1/image/assets/TEMP/df3b69a6d82643f052ab75ad0a5a92f88e147d0e11126c791e65db56c4123f99?apiKey=2cbb572e4cb94131a46c507d9ddbcac0&" class="product-image" alt="Product image" />
                  <div class="product-text">
                    <h2 class="product-name">Product name</h2>
                    <p class="product-details">Details</p>
                  </div>
                </div>
              </div>
              <div class="product-price-container">
                <div class="product-price-wrapper">
                  <p class="product-quantity">Amount: 1</p>
                  <div class="product-price">
                    <span class="price-value">$681</span>
                    <img loading="lazy" src="https://cdn.builder.io/api/v1/image/assets/TEMP/a9c518354bf85cc83ba0aac5609761f02d9d835923ef34f5a4187c32476b0720?apiKey=2cbb572e4cb94131a46c507d9ddbcac0&" class="price-icon" alt="Price icon" />
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>
    <section class="order-section">
      <div class="order-content">
        <h2 class="section-title">Shipping Address</h2>
        <form class="address-form">
          <div class="form-row">
            <div class="form-column">
              <div class="form-group">
                <label for="firstName">First Name</label>
                <input type="text" id="firstName" class="form-input" required />
                <label for="streetAddress">Street Address</label>
                <input type="text" id="streetAddress" class="form-input" required />
              </div>
            </div>
            <div class="form-column">
              <div class="form-group">
                <label for="lastName">Last Name</label>
                <input type="text" id="lastName" class="form-input" required />
              </div>
            </div>
          </div>
          <div class="form-group">
            <label for="houseNumber">House Number</label>
            <input type="text" id="houseNumber" class="form-input" required />
          </div>
          <div class="form-row">
            <div class="form-column">
              <div class="form-group">
                <label for="city">City</label>
                <input type="text" id="city" class="form-input" required />
              </div>
            </div>
            <div class="form-column">
              <div class="form-group">
                <label for="zipCode">Zip Code</label>
                <input type="text" id="zipCode" class="form-input" required />
              </div>
            </div>
          </div>
          <div class="form-actions">
            <button type="button" class="btn btn-cancel">Cancel</button>
            <button type="submit" class="btn btn-save">Save this Address</button>
          </div>
        </form>
        <h2 class="section-title">Package Note</h2>
        <form class="note-form">
          <label for="packageNote" class="visually-hidden">Leave your note here</label>
          <textarea id="packageNote" class="note-input" placeholder="Leave your note here"></textarea>
          <div class="form-actions">
            <button type="button" class="btn btn-cancel">Cancel</button>
            <button type="submit" class="btn btn-save">Save this Note</button>
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
              <p>Discount</p>
            </div>
            <div class="summary-values">
              <p>56.73</p>
              <p>5.50</p>
              <p>62.23</p>
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
<body>
