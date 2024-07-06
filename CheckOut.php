<style>
.checkout-container {
  background-color: #fbf3d5;
}

.checkout-content {
  display: flex;
  gap: 20px;
}

@media (max-width: 991px) {
  .checkout-content {
    flex-direction: column;
    align-items: stretch;
    gap: 0;
  }
}

.product-section {
  width: 60%;
}

@media (max-width: 991px) {
  .product-section {
    width: 100%;
    margin-top: 40px;
  }
}

.product-details {
  display: flex;
  gap: 20px;
}

@media (max-width: 991px) {
  .product-details {
    flex-direction: column;
    align-items: stretch;
    gap: 0;
  }
}

.logo-container {
  width: 18%;
}

@media (max-width: 991px) {
  .logo-container {
    width: 100%;
  }
}

.logo {
  aspect-ratio: 0.06;
  object-fit: cover;
  width: 149px;
  max-width: 100%;
  flex-grow: 1;
}

@media (max-width: 991px) {
  .logo {
    display: none;
  }
}

.product-info {
  width: 82%;
  margin-left: 20px;
}

@media (max-width: 991px) {
  .product-info {
    width: 100%;
  }
}

.back-to-cart {
  display: flex;
  margin-top: 12px;
  flex-direction: column;
}

@media (max-width: 991px) {
  .back-to-cart {
    max-width: 100%;
  }
}

.back-link {
  align-self: flex-start;
  display: flex;
  gap: 0;
  font: 600 25px Poppins, sans-serif;
  color: #1e1e1e;
}

.back-icon {
  aspect-ratio: 1.27;
  width: 75px;
}

.back-text {
  align-self: flex-start;
  margin-top: 21px;
}

.product-card {
  border-radius: 15px;
  box-shadow: 0 1px 4px 0 rgba(0, 0, 0, 0.25);
  background-color: #d6dac8;
  margin: 28px 0 0 56px;
  padding: 10px 31px;
}

@media (max-width: 991px) {
  .product-card {
    max-width: 100%;
    padding: 0 20px;
  }
}

.product-content {
  display: flex;
  gap: 20px;
}

@media (max-width: 991px) {
  .product-content {
    flex-direction: column;
    align-items: stretch;
    gap: 0;
  }
}

.product-image-container {
  width: 44%;
}

@media (max-width: 991px) {
  .product-image-container {
    width: 100%;
  }
}

.product-image-wrapper {
  display: flex;
  flex-grow: 1;
  gap: 9px;
  font: 500 17px Poppins, sans-serif;
  color: #1e1e1e;
}

@media (max-width: 991px) {
  .product-image-wrapper {
    margin-top: 40px;
  }
}

.product-image {
  aspect-ratio: 0.85;
  width: 78px;
  mix-blend-mode: multiply;
}

.product-text {
  align-self: flex-start;
  display: flex;
  margin-top: 13px;
  flex-direction: column;
}

.product-name {
  font-family: Poppins, sans-serif;
}

.product-details {
  font-family: Nunito, sans-serif;
  margin-top: 12px;
}

.product-price-container {
  width: 56%;
  margin-left: 20px;
}

@media (max-width: 991px) {
  .product-price-container {
    width: 100%;
  }
}

.product-price-wrapper {
  display: flex;
  gap: 20px;
  align-self: stretch;
  font-size: 17px;
  color: #393939;
  justify-content: space-between;
  margin: auto 0;
}

@media (max-width: 991px) {
  .product-price-wrapper {
    margin-top: 40px;
  }
}

.product-quantity {
  font-variant-numeric: lining-nums proportional-nums;
  font: 600 17px Raleway, sans-serif;
  line-height: 100%;
  align-self: flex-start;
}

.product-price {
  display: flex;
  flex-direction: column;
  font-weight: 500;
  white-space: nowrap;
  text-align: right;
}

@media (max-width: 991px) {
  .product-price {
    white-space: initial;
  }
}

.price-value {
  font-family: Poppins, sans-serif;
}

.price-icon {
  aspect-ratio: 0.88;
  width: 32px;
  align-self: flex-end;
}

.order-section {
  width: 40%;
  margin-left: 20px;
}

@media (max-width: 991px) {
  .order-section {
    width: 100%;
  }
}

.order-content {
  display: flex;
  flex-direction: column;
  align-self: stretch;
  margin: auto 0;
  padding: 0 20px;
}

@media (max-width: 991px) {
  .order-content {
    max-width: 100%;
    margin-top: 40px;
  }
}

.section-title {
  color: #000;
  align-self: flex-start;
  font: 400 22px Poppins, sans-serif;
}

@media (max-width: 991px) {
  .section-title {
    margin-left: 4px;
  }
}

.address-form {
  border-radius: 8px;
  border: 5px solid rgba(129, 115, 115, 1);
  background-color: #d6dac8;
  display: flex;
  margin-top: 12px;
  flex-direction: column;
  padding: 48px 34px 27px;
}

@media (max-width: 991px) {
  .address-form {
    max-width: 100%;
    padding: 0 20px;
  }
}

.form-row {
  display: flex;
  gap: 20px;
}

@media (max-width: 991px) {
  .form-row {
    flex-direction: column;
    align-items: stretch;
    gap: 0;
  }
}

.form-column {
  display: flex;
  flex-direction: column;
  line-height: normal;
  width: 50%;
}

@media (max-width: 991px) {
  .form-column {
    width: 100%;
  }
}

.form-group {
  display: flex;
  flex-grow: 1;
  flex-direction: column;
  font: 300 17px Poppins, sans-serif;
  color: #000;
}

@media (max-width: 991px) {
  .form-group {
    margin-top: 25px;
  }
}

.form-input {
  border-radius: 8px;
  border: 1px solid rgba(129, 115, 115, 1);
  margin-top: 5px;
  height: 52px;
}

.form-actions {
  display: flex;
  margin-top: 55px;
  gap: 12px;
  font-size: 17px;
  font-weight: 400;
}

@media (max-width: 991px) {
  .form-actions {
    flex-wrap: wrap;
    margin-top: 40px;
  }
}

.btn {
  font-family: Poppins, sans-serif;
  border-radius: 8px;
  justify-content: center;
  padding: 19px 40px;
}

@media (max-width: 991px) {
  .btn {
    padding: 0 20px;
  }
}

.btn-cancel {
  border: 1px solid rgba(129, 115, 115, 1);
  color: #000;
}

.btn-save {
  background-color: #9cafaa;
  color: #fff;
  flex-grow: 1;
}

@media (max-width: 991px) {
  .btn-save {
    padding: 0 30px;
  }
}

.note-form {
  border-radius: 8px;
  border: 5px solid rgba(129, 115, 115, 1);
  background-color: #d6dac8;
  display: flex;
  margin-top: 11px;
  flex-direction: column;
  font-size: 17px;
  padding: 41px 27px;
}

@media (max-width: 991px) {
  .note-form {
    max-width: 100%;
    padding: 0 20px;
  }
}

.note-input {
  border-radius: 8px;
  border: 1px solid rgba(129, 115, 115, 1);
  margin-top: 4px;
  height: 249px;
}

@media (max-width: 991px) {
  .note-input {
    max-width: 100%;
  }
}

.order-summary {
  border-radius: 15px;
  box-shadow: 0 0 4px 0 rgba(0, 0, 0, 0.25);
  border: 5px solid rgba(129, 115, 115, 1);
  background-color: #d6dac8;
  display: flex;
  margin-top: 15px;
  flex-direction: column;
  font: 300 17px Poppins, sans-serif;
  color: #000;
  padding: 43px 28px;
}

@media (max-width: 991px) {
  .order-summary {
    max-width: 100%;
    padding: 0 20px;
  }
}

.place-order-btn {
  border-radius: 8px;
  background-color: #9cafaa;
  align-items: center;
  color: #fff;
  font-weight: 400;
  justify-content: center;
  padding: 23px 60px;
}

@media (max-width: 991px) {
  .place-order-btn {
    max-width: 100%;
    padding: 0 20px;
  }
}

.terms {
  margin-top: 24px;
}

@media (max-width: 991px) {
  .terms {
    max-width: 100%;
  }
}

.divider {
  border-top: 1px solid rgba(176, 176, 176, 1);
  background-color: #b0b0b0;
  margin-top: 22px;
  height: 1px;
}

.summary-details {
  display: flex;
  margin-top: 46px;
  gap: 20px;
  color: #575757;
  justify-content: space-between;
}

@media (max-width: 991px) {
  .summary-details {
    max-width: 100%;
    flex-wrap: wrap;
    padding-right: 20px;
    margin-top: 40px;
  }
}

.summary-labels {
  display: flex;
  flex-direction: column;
}

.summary-values {
  align-self: flex-start;
  display: flex;
  margin-top: 4px;
  flex-direction: column;
  text-align: right;
}

.total {
  display: flex;
  margin-top: 30px;
  gap: 20px;
  justify-content: space-between;
}

@media (max-width: 991px) {
  .total {
    max-width: 100%;
    flex-wrap: wrap;
  }
}

.visually-hidden {
  position: absolute;
  width: 1px;
  height: 1px;
  padding: 0;
  margin: -1px;
  overflow: hidden;
  clip: rect(0, 0, 0, 0);
  white-space: nowrap;
  border: 0;
}
</style>

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