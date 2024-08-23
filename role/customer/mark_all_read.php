<?php
include "../../ConnectDB.php";
session_start();

$customerId = $_SESSION['cus_id'];

$stmt = mysqli_stmt_init($conn);

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
