<?php

$servername = "localhost";
$username = "username";
$password = "password";
$dbname = "dressify_db";

// Start the session
session_start();

// Check if the customer ID is set in the session
if(isset($_SESSION['cus_id'])) {
    $customerId = $_SESSION['cus_id'];
    // Now you can use $customerId in your code
} else {
    // Handle the case where the customer ID is not set
    echo "Customer ID is not set in the session.";
    // Redirect to a login page or show an error
}

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// Fetch notifications for the logged-in customer
$notifications = [];
$sql = "SELECT * FROM notifications WHERE customer_id = ? ORDER BY created_at DESC";
$stmt = $conn->prepare($sql);
$stmt->bind_param("i", $customerId);
$stmt->execute();
$result = $stmt->get_result();

if ($result->num_rows > 0) {
    while($row = $result->fetch_assoc()) {
        $notifications[] = $row;
    }
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="CartStyle.css">
    <title>Notification Page</title>
</head>
<body>
<?php include 'CustomerSidebar.php'; ?>
<div class="container">
    <div class="inner_left_pannel">
        <div class="header-left">
            <div>Cart</div>
            <div><a href="mark_all_read.php">Mark all as read</a></div>
        </div>
        <div class="cart-list">
            <?php foreach ($notifications as $notification): ?>
                <div class="notification <?php echo $notification['is_read'] ? 'read' : 'unread'; ?>">
                    <div class="description">
                        <article><?php echo htmlspecialchars($notification['message']); ?></article>
                        <span><?php echo htmlspecialchars($notification['created_at']); ?></span>      
                    </div>  
                </div>
            <?php endforeach; ?>
        </div>
    </div>
    <div class="inner_right_pannel">
        <h1>Detail</h1>
        <?php include 'CartDetails.php'; ?>
    </div>
</div>
</body>
</html>
