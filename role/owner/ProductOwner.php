<?php
    include '../../ConnectDB.php';
    session_start();
?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="ProductOwnerStyle.css">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css">
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
    <!-- <script src="ProductOwnerScript.js"></script> -->
</body>
</html>

