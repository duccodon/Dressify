<?php
    include '../../ConnectDB.php';
    session_start();

    $cus_id = $_SESSION['cus_id'];
    $select_promotions = mysqli_query($conn, "SELECT * FROM discount WHERE cus_id='$cus_id'") or die('Query failed');
?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link href="https://fonts.googleapis.com/css2?family=Text+Me+One&display=swap" rel="stylesheet">
  <link href="https://fonts.googleapis.com/css2?family=Rubik:wght@400;500;700&display=swap" rel="stylesheet">
  <link rel="stylesheet" href="ProductOwnerStyle.css">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css">
  <title>Profile</title>
</head>
<body>
  <?php include 'OwnerSidebar.php'; ?>
    <section class="profile-container">
            <main class="main-content">
                <div class="filter-buttons">
                    <button class="filter-button">Formal clothes</button>
                    <button class="filter-button">Casual clothes</button>
                    <button class="filter-button active">Cosplay costumes</button>
                    <button class="filter-button">Uniform</button>
                </div>
                
                <div class="promotion-section">
                    <div class="promotion-content">
                        <?php
                        if (mysqli_num_rows($select_promotions) > 0) {
                            while ($promotion = mysqli_fetch_assoc($select_promotions)) {
                                echo "<div class='promotion-box'>";
                                echo "<div class='promotion-image-container'>";
                                if ($promotion['image_url']) {
                                    echo "<img src='" . $promotion['image_url'] . "' alt='Promotion Image' class='promotion-image'>";
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

                <div style="margin-left: 2rem;">
                <div class="cards-list">
                    <div class="card-list-single">
                        <a style="font-size:10px;" href="OwnerForm.php">
                        <div style="align-content:center;">
                            <div class="list-content"><i class="fa-solid fa-plus"></i></div>
                            <div class="list-content">Add products</div>
                        </div>
                        </a>
                    </div>
                <?php
                    $select_products = mysqli_query($conn, "SELECT * FROM products WHERE owner_id='$_SESSION[cus_id]'") or die('Query failed');
                    if (mysqli_num_rows($select_products) > 0){
                        while($fetch_products = mysqli_fetch_assoc($select_products)){
                            if ($fetch_products['approve'] == 'True'){
                ?>
                    <div class="card-list-single">
                        <div>
                            <img src = "../../img/product/<?php echo $fetch_products['image1'];?>">
                            <div class="list-content"><?php echo $fetch_products['product_name'] ?></div>
                            <div class="list-content"><?php echo $fetch_products['price'] ?></div>
                        <div>
                            <a href="ProductOwner.php?view=<?php echo $fetch_products['product_id']; ?>" class="edit">View <i class="fa-solid fa-eye"></i></a>
                            <a href="ProductOwner.php?delete=<?php echo $fetch_products['product_id']; ?>" class="delete" onclick="return confirm('Are you sure to delete this product');">Delete <i class="fa-solid fa-trash"></i></a>
                        </div>
                    </div>
                </div>
                <?php
                            }
                        }
                    }
                ?>
                </div>
                </div>
            </main>
    </section>
    <script src="ProductOwnerScript.js"></script>
</body>
</html>

