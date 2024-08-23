<?php
session_start();
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "dressify_db";

$conn = new mysqli($servername, $username, $password, $dbname);

if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}


//if (!isset($_SESSION['cus_id'])) {
//    header("Location: login.php");
//    exit();
//}

$_SESSION['cus_id'] = 3; // For testing purposes
$cus_id = $_SESSION['cus_id'];

?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="ProductOwnerStyle.css">
  <title>Profile</title>
</head>
<body>
  <?php include 'OwnerSidebar.php'; ?>
    <section class="profile-container">
            <main class="main-content">
                <div class="filter-buttons">
                    <button class="filter-button">Casual</button>
                    <button class="filter-button">Uniform</button>
                    <button class="filter-button active">Traditional</button>
                    <button class="filter-button">Uniform</button>
                    <button class="filter-button">Casual</button>
                </div>
                <div class="promotion-section">
                    <div class="promotion-content"></div>
                    <button id="addPromotionBtn" class="add-promotion-btn">Add Promotion</button>
                </div>
                <div id="promotionModal" class="modal">
                    <div class="modal-content">
                        <span class="close">&times;</span>
                        <h2>Add Promotion</h2>
                        <form id="promotionForm">
                            <label for="discountCode">Discount Code:</label>
                            <input type="text" id="discountCode" name="discountCode" required>
                            
                            <label for="promotionImage">Promotion Image:</label>
                            <input type="file" id="promotionImage" name="promotionImage" accept="image/*">
                            
                            <h3>Apply Discount to:</h3>
                            <div id="itemCheckboxes">
                                <!-- Checkboxes will be dynamically added here -->
                            </div>
                            
                            <button type="submit">Save Promotion</button>
                        </form>
                    </div>
                </div>
                <div class="clothing-grid">
                    <div class="clothing-item">
                        <img src="default_avatar.jpg" alt="Denim Jacket">
                        <p>Denim Jacket</p>
                    </div>
                    <div class="clothing-item">
                        <img src="default_avatar.jpg" alt="Blue Jeans">
                        <p>Blue Jeans</p>
                    </div>
                    <div class="clothing-item">
                        <img src="default_avatar.jpg" alt="Blue Sweater">
                        <p>Blue Sweater</p>
                    </div>
                    <div class="add-photo">
                        <span>+ Add Photo</span>
                    </div>
                </div>
            </main>
    </section>
    <script src="ProductOwnerScript.js"></script>
</body>
</html>

