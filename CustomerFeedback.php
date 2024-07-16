<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="CustomerFeedbackStyle.css">
  <title>Customer Feedback</title>
</head>
<body>
<section class="feedback-container">
  <img loading="lazy" src="https://cdn.builder.io/api/v1/image/assets/TEMP/9b384beee964f6be0f0563081af76fc9d34d6b4f97a7d00839dcd2e4ed6839a3?apiKey=06f22fa033964e85a3e6f07dc7f00b07&" class="sidebar-image" alt="" />
  <main class="main-content">
    <a href="#" class="continue-shopping">Continue shopping</a>
    <form class="feedback-form" method="post" action="submit_feedback.php" enctype="multipart/form-data">
      <h1 class="feedback-title">Customer's Feedback</h1>
      <label for="rating" class="rating-question">How would you rate our product?</label>
      <input type="number" id="rating" name="rating" min="1" max="10" class="rating-input" placeholder="Rate from 1 to 10" aria-label="Rate from 1 to 10">
      <label for="package-number" class="package-number-label">Package Number</label>
      <input type="text" id="package-number" name="package-number" class="package-number-input" placeholder="Package Number" aria-label="Enter Package Number">
      <label for="package-details" class="package-details-label">Package details</label>
      <textarea id="package-details" name="package-details" class="package-details-input" placeholder="Enter here" aria-label="Enter package details"></textarea>
      <label for="rating-scale" class="rating-scale-question">On the scale from 1 to 10, how do rate the product?</label>
      <input type="number" id="rating-scale" name="rating-scale" min="1" max="10" class="rating-scale-input" placeholder="Rate the product from 1 to 10" aria-label="Rate the product from 1 to 10">
      <label for="problems" class="problems-question">What problem(s) did you encounter while using the product?</label>
      <textarea id="problems" name="problems" class="problems-input" placeholder="Enter here" aria-label="Describe problems encountered"></textarea>
      <label for="suggestions" class="suggestions-question">Do you have any suggestions on how to improve the product?</label>
      <textarea id="suggestions" name="suggestions" class="suggestions-input" placeholder="Enter here" aria-label="Enter your suggestions"></textarea>
      <label for="product-images" class="product-images-label">Product Image(s)</label>
      <input type="file" id="product-images" name="product-images[]" class="product-images-upload" accept="image/*" multiple aria-label="Upload product images">
      <button type="submit" class="submit-button">Submit</button>
    </form>
  </main>
</section>
</body>
</html>
