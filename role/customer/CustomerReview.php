<?php include 'CustomerSidebar.php'; ?>

<section class="feedback-container">
  <img loading="lazy" src="https://cdn.builder.io/api/v1/image/assets/TEMP/5ef6db6bfb4a7ebfc7b81a389071b6f520e0ab72aafd27466d1fb371e36ef4a5?apiKey=2cbb572e4cb94131a46c507d9ddbcac0&" class="sidebar-image" alt="Decorative sidebar image" />
  <main class="main-content">
    <h1 class="continue-shopping">Continue shopping</h1>
    <form class="feedback-form">
      <h2 class="feedback-title">Customer's Feedback</h2>
      <label for="rating" class="form-label">How would you rate our product?</label>
      <input type="text" id="rating" class="rating-input" placeholder="Rate from 1 to 10" aria-label="Rate from 1 to 10" />
      <label for="package-number" class="form-label">Package Number</label>
      <input type="text" id="package-number" class="package-number-input" aria-label="Enter package number" />
      <label for="package-details" class="form-label">Package details</label>
      <input type="text" id="package-details" class="package-details-input" placeholder="Enter here" aria-label="Enter package details" />
      <label for="scale-rating" class="form-label">On the scale from 1 to 10, how do rate the product?</label>
      <input type="text" id="scale-rating" class="scale-rating-input" aria-label="Enter rating from 1 to 10" />
      <label for="problems" class="form-label">What problem(s) did you encounter while using the product?</label>
      <textarea id="problems" class="problems-input" placeholder="Enter here" aria-label="Describe problems encountered"></textarea>
      <label for="suggestions" class="form-label">Do you have any suggestions on how to improve the product?</label>
      <textarea id="suggestions" class="suggestions-input" placeholder="Enter here" aria-label="Enter your suggestions"></textarea>
      <label for="product-images" class="form-label">Product Image(s)</label>
      <input type="file" id="product-images" class="product-images-input" accept="image/*" multiple aria-label="Upload product images" />
      <button type="submit" name="submit-changes" class="">Submit changes</button>
    </form>
  </main>
</section>
