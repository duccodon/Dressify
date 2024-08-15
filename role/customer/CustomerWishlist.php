<?php
    include '../../ConnectDB.php';
    session_start();
    if (isset($_GET['delete-wishlist'])){
        $product_id = $_GET['delete-wishlist'];
        $product_query = mysqli_query($conn, "SELECT * FROM wishlist where product_id='$product_id'") or die('Query failed');
        if (mysqli_num_rows($product_query) > 0){ 
           $wish_product = mysqli_query($conn, "DELETE FROM wishlist WHERE product_id = '$product_id' AND cus_id = '$_SESSION[cus_id]'") or die('Query failed');
        }
        header('location:CustomerWishlist.php');
    }
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Friends Admin</title>

    <link rel="stylesheet" href="AdminStyle.css">
    <link rel= "stylesheet" href= "https://maxst.icons8.com/vue-static/landings/line-awesome/line-awesome/1.3.0/css/line-awesome.min.css" >
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css">
</head>
<body>
<?php include 'CustomerSidebar.php'; ?>
<div class="main-content">
    <main>
        <div class="cards-list">
            <?php
                $wish_products = mysqli_query($conn, "SELECT * FROM wishlist WHERE cus_id='$_SESSION[cus_id]'") or die('Query failed');
                if (mysqli_num_rows($wish_products) > 0){
                    while($fetch_wish = mysqli_fetch_assoc($wish_products)){
                        $select_products = mysqli_query($conn, "SELECT * FROM products WHERE product_id='$fetch_wish[product_id]'") or die('Query failed');
                        if (mysqli_num_rows($select_products) > 0){
                            while($fetch_products = mysqli_fetch_assoc($select_products)){
                                if ($fetch_products['approve'] == 'True'){
            ?>
                <div class="card-list-single">
                    <div>
                        <a href="CustomerWishlist.php?delete-wishlist=<?php echo $fetch_products['product_id']; ?>" class="wish" onclick = "return confirm('Delete from wishlist');"><i class="fa-solid fa-heart-circle-xmark"></i></a>
                        <img src = "../../img/product/<?php echo $fetch_products['image1'];?>">
                        <div class="list-content"><?php echo $fetch_products['product_name'] ?></div>
                        <div class="list-content"><?php echo $fetch_products['price'] ?></div>
                        <div>
                            <a href="CustomerProductlisting.php?view=<?php echo $fetch_products['product_id']; ?>" class="edit">View <i class="fa-solid fa-eye"></i></a>
                            <a href="CustomerProductlisting.php?add-cart=<?php echo $fetch_products['product_id']; ?>" class="delete" onclick="return confirm('Added to cart!!');">Cart <i class="fa-solid fa-shopping-cart"></i></a>
                        </div>
                    </div>
                </div>
            <?php
                                }
                            }
                        }
                    }
                }
            ?>
        </div>
    </main>
</div>
</body>
</html>