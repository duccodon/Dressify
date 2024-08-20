<?php
session_start();

$servername = "localhost";
$username = "username";
$password = "password";
$dbname = "dressify_db";

$customerId = $_SESSION['customer_id'];

$conn = new mysqli($servername, $username, $password, $dbname);

if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// Mark all notifications as read for the logged-in customer
$sql = "UPDATE notifications SET is_read = 1 WHERE customer_id = ?";
$stmt = $conn->prepare($sql);
$stmt->bind_param("i", $customerId);

if ($stmt->execute()) {
    // Redirect back to the notifications page
    header("Location: NotificationPage.php");
    exit();
} else {
    echo "Error: " . $stmt->error;
}

$stmt->close();
$conn->close();
?>
