<?php
    include '../../ConnectDB.php';
    session_start();
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
                <div class="notification">
                <img alt="photo" src="../../img/1.jpg">
                <div class="description">
                    <div class="name">Friends</div>
                    <article>Total product: 3</article>
                    <a href="Cart.php?view-cart="<?php ?>>View</a>
                </div>  
                </div>
        </div>
        </div>
        <div class="inner_right_pannel">
            <h1 style="width: 950px;">Detail</h1>
            <?php
                if(isset($_GET['view-cart'])){
            ?>
            <h2 style="display:flex; justify-content:center; width: 100%;">Order Information</h2> 
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
                                            <td>Product Image</td>
                                            <td>Product Name</td>
                                            <td>Quantity</td>
                                            <td>Price per product</td>
                                            <td>Discount</td>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <tr>
                                            <td>
                                                <div class="model-count">
                                                    <label>Amount</label>
                                                    <input type="number" style="width: 35px;" name="amount" value="1" min="1" />
                                                </div>
                                            </td>
                                            <td>UI/UX design</td>
                                            <td>UI Team</td>
                                            <td>Packaging</td>
                                            <td>50%</td>
                                        </tr>
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="submit-button-container">   
  <a href="CheckOut.php">
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