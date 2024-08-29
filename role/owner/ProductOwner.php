<?php
    include '../../ConnectDB.php';
    session_start();

    $cus_id = $_SESSION['cus_id'];
    $select_promotions = mysqli_query($conn, "SELECT * FROM discount WHERE cus_id='$cus_id'") or die('Query failed');
    $select_products = mysqli_query($conn, "SELECT * FROM products WHERE owner_id='$cus_id' AND approve='True'");

    $products = mysqli_fetch_all($select_products, MYSQLI_ASSOC);
?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link href="https://fonts.googleapis.com/css2?family=Text+Me+One&display=swap" rel="stylesheet">
  <link href="https://fonts.googleapis.com/css2?family=Rubik:wght@400;500;700&display=swap" rel="stylesheet">
  <link href="https://fonts.googleapis.com/css2?family=Merriweather+Sans:wght@400;700&display=swap" rel="stylesheet">

  <link rel="stylesheet" href="ProductOwnerStyle.css">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css">
  <title>Profile</title>
</head>
<body>
  <?php include 'OwnerSidebar.php'; ?>
    <section class="profile-container">
            <main class="main-content">
                <div class="filter-buttons">
                    <div class="filter-buttons">
                        <button class="filter-button" data-category="Formalclothes">Formal clothes</button>
                        <button class="filter-button" data-category="Casual clothes">Casual clothes</button>
                        <button class="filter-button" data-category="Cosplay costumes">Cosplay costumes</button>
                        <button class="filter-button" data-category="Uniform">Uniform</button>
        
                    </div>
                </div>
                
                <div class="promotion-section">
                    <div class="promotion-content">
                        <?php
                            if (mysqli_num_rows($select_promotions) > 0) {
                                while ($promotion = mysqli_fetch_assoc($select_promotions)) {
                                    echo "<div class='promotion-box'>";
                                    echo "<div class='promotion-image-container'>";
                                    if ($promotion['image_url']) {
                                        echo "<img src='../../" . $promotion['image_url'] . "' alt='Promotion Image' class='promotion-image'>";
                                    }
                                    echo "</div>";
                                    echo "<div class='promotion-details'>";
                                    echo "<h3>" . $promotion['discount_code'] . "</h3>";
                                    echo "<p class='discount-value'>" . $promotion['discount_value'] . "% OFF</p>";
                                    echo "</div>";
                                    echo "</div>";
                                }
                            }
                        ?>
                    </div>
                    <button id="deletePromotionBtn" class="delete-promotion-btn">Delete Promotion</button>
                    <button id="addPromotionBtn" class="add-promotion-btn">Add Promotion</button>
                </div>
                <div id="promotionModal" class="modal">
                    <div class="modal-content">
                        <span class="close">&times;</span>
                        <h2>Add Promotion</h2>
                        <form id="promotionForm">
                            <div class="form-group">
                                <label for="discountCode">Discount Code:</label>
                                <input type="text" id="discountCode" name="discountCode" required>
                            </div>

                            <div class="form-group">
                                <label for="discountValue">Discount Value (%):</label>
                                <input type="number" id="discountValue" name="discountValue" min="0" max="100" required>
                            </div>

                            <div class="form-group">
                                <label for="promotionImage">Promotion Image:</label>
                                <input type="file" id="promotionImage" name="promotionImage" accept="image/*" required>
                            </div>

                            <button type="submit" class="submit-btn">Save Promotion</button>
                        </form>
                    </div>
                </div>

                <div id="deletePromotionModal" class="modal">
                    <div class="modal-content">
                        <span class="close">&times;</span>
                        <h2>Delete Promotion</h2>
                        <form id="deletePromotionForm">
                            <div class="form-group">
                                <label for="deleteDiscountCode">Enter Discount Code to Delete:</label>
                                <input type="text" id="deleteDiscountCode" name="deleteDiscountCode" required>
                            </div>
                            <button type="submit" class="submit-btn">Delete Promotion</button>
                        </form>
                    </div>
                </div>
                <div class="product-grid">
                    <?php if (count($products) > 0): ?>
                        <?php foreach ($products as $product): ?>
                            <div class="product-card" data-category="<?php echo htmlspecialchars($product['category']); ?>">
                                <div class="product-image">
                                    <img src="../../img/product/<?php echo htmlspecialchars($product['image1']); ?>" alt="<?php echo htmlspecialchars($product['product_name']); ?>">
                                </div>
                                <div class="product-details">
                                    <div class="product-header">
                                        <h3><?php echo htmlspecialchars($product['product_name']); ?></h3>
                                        <button class="edit-btn"><i class="fas fa-pencil-alt"></i></button>
                                    </div>
                                    <p class="product-stock">Stock: <?php echo htmlspecialchars($product['stock']); ?></p>
                                    <p class="product-price"><?php echo number_format($product['price']); ?> VND</p>
                                </div>
                            </div>
                        <?php endforeach; ?>
                    <?php endif; ?>
                    
                    <div class="product-card add-more">
                        <a href="OwnerForm.php">
                        <div  class="add-more-content">
                            <span>+</span>
                            <a href="OwnerForm.php"></a>
                            <p>Add More</p>
                        </div>
                    </div>
                </div>
            </main>
    </section>
    <script src="ProductOwnerScript.js"></script>
</body>
</html>

