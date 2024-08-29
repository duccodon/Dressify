<?php
  include '../../ConnectDB.php';
  session_start();

  // Create connection
  $stmt = mysqli_stmt_init($conn);

  // Check connection
  if ($conn->connect_error) {
      die("Connection failed: " . $conn->connect_error);
  }

  $feedbackMessage = '';

  if ($_SERVER['REQUEST_METHOD'] == 'POST') {
      $rate = isset($_POST['rating-scale']) ? $_POST['rating-scale'] : null; // Update to match form field
      $trackingId = isset($_POST['package-number']) ? $_POST['package-number'] : null;
      $problemDetail = isset($_POST['problems']) ? $_POST['problems'] : null;

      $image1 = '';
      $image2 = '';
      $image3 = '';

      // Validate required fields
      if ($rate === null || $trackingId === null || $problemDetail === null) {
          $feedbackMessage = "Please fill out all required fields.";
      } else {
          // Handle file uploads securely
          $uploadsDir = 'uploads/';
          $uploadSuccess = true;

          // Process uploaded images
          $uploadedImages = [];

          foreach ($_FILES['product-images']['tmp_name'] as $key => $tmpName) {
              $filename = basename($_FILES['product-images']['name'][$key]);
              $targetFilePath = $uploadsDir . $filename;

              // Check if the directory exists, if not create it
              if (!is_dir($uploadsDir)) {
                  mkdir($uploadsDir, 0755, true);
              }

              if (move_uploaded_file($tmpName, $targetFilePath)) {
                  $uploadedImages[] = $filename;
              } else {
                  $uploadSuccess = false;
                  $feedbackMessage .= "Error uploading file: " . $_FILES['product-images']['name'][$key] . "<br>";
              }
          }

          // Assign uploaded image names to the respective fields
          if (!empty($uploadedImages)) {
              $image1 = isset($uploadedImages[0]) ? $uploadedImages[0] : '';
              $image2 = isset($uploadedImages[1]) ? $uploadedImages[1] : '';
              $image3 = isset($uploadedImages[2]) ? $uploadedImages[2] : '';
          }

          // Insert into database
          if ($uploadSuccess) {
              $sql = "INSERT INTO feedback (rate, tracking_id, problem_detail, image1, image2, image3) VALUES (?, ?, ?, ?, ?, ?)";
              $stmt = $conn->prepare($sql);
              $stmt->bind_param('iissss', $rate, $trackingId, $problemDetail, $image1, $image2, $image3);

              if ($stmt->execute()) {
                  $feedbackMessage = "Feedback submitted successfully!";
              } else {
                  $feedbackMessage = "Error: " . $stmt->error;
              }

              $stmt->close();
          }
      }

      $conn->close();
  }
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="CustomerSubmitsFeedbackStyle.css">
    <title>Feedback Submission</title>
</head>
<body>
<?php include 'CustomerSidebar.php'; ?>
<section class="feedback-container">
    <main class="main-content">
        <div class="feedback-message">
            <h1>Feedback Status</h1>
            <p><?php echo $feedbackMessage; ?></p>
            <a href="CustomerFeedback.php" class="back-button">Back to Feedback Form</a>
        </div>
    </main>
</section>
</body>
</html>
