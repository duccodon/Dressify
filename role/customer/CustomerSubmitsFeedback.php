<?php
$servername = "localhost";
$username = "username";
$password = "password";
$dbname = "dressify_db";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

$feedbackMessage = '';

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $rate = $_POST['rating'];
    $trackingId = $_POST['package-number'];
    $reportToId = $_POST['rating-scale']; 
    $problemDetail = $_POST['problems'];
    $image1 = '';
    $image2 = '';
    $image3 = '';

    // Handle file uploads securely
    $uploadsDir = 'uploads/';
    $uploadSuccess = true;

    // Process uploaded images
    $images = ['image1', 'image2', 'image3'];
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
            $feedbackMessage .= "Error submitting feedback: " . $_FILES['product-images']['name'][$key] . "<br>";
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
        $sql = "INSERT INTO feedback (rate, tracking_id, report_to_id, problem_detail, image1, image2, image3) VALUES (?, ?, ?, ?, ?, ?, ?)";
        $stmt = $conn->prepare($sql);
        $stmt->bind_param('iiissss', $rate, $trackingId, $reportToId, $problemDetail, $image1, $image2, $image3);

        if ($stmt->execute()) {
            $feedbackMessage = "Feedback submitted successfully!";
        } else {
            $feedbackMessage = "Error: " . $stmt->error;
        }

        $stmt->close();
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
