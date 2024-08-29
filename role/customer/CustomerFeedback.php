<?php
  include '../../ConnectDB.php';
  session_start();
?>


<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="CustomerFeedbackStyle.css">
  <title>Customer Feedback</title>
</head>
<body>
<?php include 'CustomerSidebar.php'; ?>
<section class="feedback-container">
  <main class="main-content">
    <form class="feedback-form" method="post" action="CustomerSubmitsFeedback.php" enctype="multipart/form-data">
      <h1 class="feedback-title">Customer's Feedback</h1>
      <label for="package-number" class="package-number-label">Package Number</label>
      <input type="text" id="package-number" name="package-number" class="package-number-input" placeholder="Package Number" aria-label="Enter Package Number">
      <label for="package-details" class="package-details-label">Package details</label>
      <textarea id="package-details" name="package-details" class="package-details-input" placeholder="Enter here" aria-label="Enter package details"></textarea>
      <label for="rating-scale" class="rating-scale-question">On the scale from 1 to 10, how do you rate the product?</label>
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
<script>
  function handleSubmit(event) {
    event.preventDefault(); // Prevent the default form submission

    // Validate form fields (optional)
    if (validateForm()) {
      // Show the popup
      openPopup();

      // Submit the form via AJAX
      let formData = new FormData(event.target);
      fetch('submit_feedback.php', {
        method: 'POST',
        body: formData
      }).then(response => {
        if (response.ok) {
          console.log('Form submitted successfully.');
        } else {
          console.error('Form submission failed.');
        }
      }).catch(error => {
        console.error('Error submitting the form:', error);
      });
    } else {
      console.log('Form validation failed.');
    }
  }

  function validateForm() {
    // Return true if the form is valid; otherwise, false
    return true; // Simplified for this example
  }
</script>
</body>
</html>
