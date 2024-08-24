<?php
    include '../../ConnectDB.php';
    session_start();

    if (isset($_GET['delete-product'])){
        $product_id = $_GET['delete-product'];
        $owner_id = $_GET['owner_id'];
        $product_query = mysqli_query($conn, "SELECT * FROM cart where product_id='$product_id'") or die('Query failed');
        if (mysqli_num_rows($product_query) > 0){ 
            $cart_product = mysqli_query($conn, "DELETE FROM cart WHERE product_id = '$product_id'") or die('Query failed');
        }
        header('location:Cart.php?view-cart=' .$owner_id);
    }
?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Notification Page</title>
    <link rel="stylesheet" href="CartStyle.css">
</head>
<body>
    <?php include 'CustomerSidebar.php'; ?>
    <div class="container">
        <div class="inner_left_pannel">
            <div class="header-left">
            <div>Cart</div>
            <div>Mark all as read</div>
            </div>
        <div class="notification-list">
            <?php
                $cart_query = mysqli_query($conn, "SELECT DISTINCT owner_id FROM cart");
                if (mysqli_num_rows($cart_query) > 0){
                    while($fetch_owner = mysqli_fetch_assoc($cart_query)){
                        $owner = mysqli_fetch_assoc(mysqli_query($conn, "SELECT * FROM customers WHERE cus_id='$fetch_owner[owner_id]'"));
                        $amount = mysqli_fetch_assoc(mysqli_query($conn, "SELECT COUNT(*) AS count FROM cart WHERE owner_id='$owner[cus_id]'"))['count'];    
            ?>

                <a class="notification" href="Cart.php?view-cart=<?php echo $owner['cus_id']?>" >
                <img alt="photo" src="../../img/default_avatar.jpg">
                <div class="description">
                    <div class="name"><?php echo $owner['username'];?></div>
                    <article>Total product: <?php echo $amount?></article>
                </div>  
                </a>

            <?php
                    }
                }
            ?>
        </div>
        </div>
        <div class="inner_right_pannel">
            <h1 style="width: 950px;">Detail</h1>
            <?php
                if(isset($_GET['view-cart'])){
                    $owner_id = $_GET['view-cart'];
                    $product_id = mysqli_query($conn, "SELECT * FROM cart as c JOIN products as p ON c.product_id=p.product_id WHERE p.owner_id ='$owner_id'");
                    $owner = mysqli_fetch_assoc(mysqli_query($conn, "SELECT * FROM customers WHERE cus_id='$owner_id'"));//ready
            ?>
            <h2 style="display:flex; justify-content:center; width: 100%;">Order Information From <?php echo $owner['username']?></h2> 
            <div class="recent-grid">
                <div class="orders">
                    <div class="card" style="width: 140%">
                        <div class="card-header">
                            <h3>Product List</h3>
                        </div>

                        <div class="card-body">
                            <div class="table-responsive">
                                <table width="100%"> 
                                    <thead>
                                        <tr>
                                            <td>Quantity</td>
                                            <td>Product Name</td>
                                            <td>Product Image</td>
                                            <td>Price per product</td>
                                            <td>Delete</td>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <?php
                                            while($fetch_product = mysqli_fetch_assoc($product_id)){  
                                        ?>
                                            <tr>
                                                <td>
                                                    <div class="model-count">
                                                        <label>Amount</label>
                                                        <input type="number" style="width: 35px;" name="amount" value="1" min="1" />
                                                    </div>
                                                </td>
                                                <td><?php echo $fetch_product['product_name']?></td>
                                                <td><?php echo $fetch_product['price']?></td>
                                                <td><img style="width: 100px; height: 70px;" src = "../../img/product/<?php echo $fetch_product['image1'];?>"></td>
                                                <td><a href="Cart.php?delete-product=<?php echo$fetch_product['product_id'];?>&owner_id=<?php echo$owner['cus_id']?>" onclick="return confirm('Delete this product from cart');">Delete</a></td>
                                            </tr>
                                        <?php
                                            }
                                        ?>
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="submit-button-container">   
                <a href="CheckOut.php?owner_id=<?php echo$owner_id?>">
                <button type="button" class="submit-button">Check out</button>
                </a>
            </div>
            <?php
                }
            ?>
        </div>
    </div>
</body>
</html>