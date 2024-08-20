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

$orderId = $_GET['order_id'] ?? null;
$confirmationMessage = '';

if (!$orderId) {
    die("Order ID is required.");
}

// Fetch order details
$stmt = $conn->prepare("SELECT * FROM orders WHERE id = ?");
$stmt->bind_param("i", $orderId);
$stmt->execute();
$order = $stmt->get_result()->fetch_assoc();

$confirmationMessage = "Thank you for your purchase! Your order has been successfully placed. We will notify you once your items are ready for shipping.";

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="CustomerOrderConfirmationStyle.css">
    <title>Order Confirmation</title>
</head>
<body>
    <?php include 'CustomerSidebar.php'; ?>
    <main class="confirmation-container">
        <div class="confirmation-message">
            <h1>Confirmation</h1>
            <p><?php echo $confirmationMessage; ?></p>
            <a href="Cart.php" class="back-button">Back to Cart</a>
        </div>
    </main>
</body>
</html>
