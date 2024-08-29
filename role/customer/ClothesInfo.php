<?php
include '../../ConnectDB.php';
session_start();

$product_id = isset($_GET['id']) ? intval($_GET['id']) : 0;

if ($product_id > 0) {
    $select_product = mysqli_prepare($conn, "SELECT * FROM products WHERE product_id = ? AND approve = 'True'");
    mysqli_stmt_bind_param($select_product, "i", $product_id);
    mysqli_stmt_execute($select_product);
    $result = mysqli_stmt_get_result($select_product);
    $product = mysqli_fetch_assoc($result);

    if (!$product) {
        die('Product not found or not approved');
    }
} else {
    die('Invalid product ID');
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://fonts.googleapis.com/css2?family=Text+Me+One&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Rubik:wght@400;500;700&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Merriweather+Sans:wght@400;700&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="ClothesInfoStyle.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css">
    <title><?php echo htmlspecialchars($product['product_name']); ?></title>
</head>
<body>
    <?php include 'CustomerSidebar.php'; ?>
    <section class="profile-container">
        <main class="main-content">
        <section class="product-details-container">
        <div class="product-images">
            <div class="thumbnails">
                <?php
                for ($i = 1; $i <= 3; $i++) {
                    $image_field = "image$i";
                    if (!empty($product[$image_field])) {
                        echo "<img src='../../img/product/{$product[$image_field]}' alt='Thumbnail {$i}' class='thumbnail' onclick='changeMainImage(this.src)' loading='lazy'>";
                    }
                }
                ?>
            </div>
            <div class="main-image">
                <img src="../../img/product/<?php echo $product['image1']; ?>" 
                    alt="<?php echo htmlspecialchars($product['product_name']); ?>" 
                    id="mainImage">
            </div>
        </div>
        <div class="product-info">
            <h1><?php echo htmlspecialchars($product['product_name']); ?></h1>
            <p class="price"><?php echo number_format((float)$product['price']); ?> VND</p>
            <button class="add-to-cart">Add to cart</button>
            <p class="Description"><?php echo htmlspecialchars($product['description']); ?></p>
            <p class="stock">Stock: <?php echo htmlspecialchars($product['stock']); ?></p>
            <p class="category">Category: <?php echo htmlspecialchars($product['category']); ?></p>
        </div>
    </section>

    <script>
    function changeMainImage(src) {
        const mainImage = document.getElementById('mainImage');
        mainImage.style.opacity = '0';
        setTimeout(() => {
            mainImage.src = src;
            mainImage.onload = function() {
                this.style.opacity = '1';
            };
        }, 300);
    }

    window.onload = function() {
        const thumbnails = document.querySelectorAll('.thumbnail');
        thumbnails.forEach(thumb => {
            const img = new Image();
            img.src = thumb.src;
        });
    }
    </script>
</body>
</html>
