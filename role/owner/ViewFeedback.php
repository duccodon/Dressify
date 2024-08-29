<?php
  include '../../ConnectDB.php';
  session_start();

  
?>


<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="../customer/CustomerFeedbackStyle.css">
  <title>Owner Feedback</title>
</head>
<body>
<?php include 'OwnerSidebar.php'; ?>
<section class="feedback-container">
  <main class="main-content">
    <form class="feedback-form" method="post" action="CustomerSubmitsFeedback.php" enctype="multipart/form-data">
      <h1 class="feedback-title">Owner's Feedback</h1>
      <label for="package-number" class="package-number-label">Package Number</label>
      <input type="text" id="package-number" name="package-number" class="package-number-input" placeholder="Package Number" aria-label="Enter Package Number">
      
      <label for="rating-scale" class="rating-scale-question">On the scale from 1 to 10, how do you rate the customer?</label>
      <input type="number" id="rating-scale" name="rating-scale" min="1" max="10" class="rating-scale-input" placeholder="Rate the product from 1 to 10" aria-label="Rate the product from 1 to 10">
      
      <label for="problems" class="problems-question">What problem(s) did you encounter while communicating the owner?</label>
      <textarea id="problems" name="problems" class="problems-input" placeholder="Enter here" aria-label="Describe problems encountered"></textarea>
      
      <label for="product-images" class="product-images-label">Product Image(s)</label>
      <input type="file" id="product-images" name="product-images[]" class="product-images-upload" accept="image/*" multiple aria-label="Upload product images">
      
      <button type="submit" name="submit-feedback" class="submit-button">Submit</button>
    </form>
  </main>
</section>
</body>
</html>
