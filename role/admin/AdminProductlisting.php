<?php
    include '../../ConnectDB.php';
    session_start();

    require 'check.php';

    if (isset($_GET['agree'])){
        $view_id = $_GET['agree'];
        $view_query = mysqli_query($conn, "SELECT * FROM products where product_id='$view_id'") or die('Query failed');
        if (mysqli_num_rows($view_query) > 0){ 
           $agree_product = mysqli_query($conn, "UPDATE products SET approve = 'True' WHERE product_id = '$view_id'") or die('Query failed');
        }
        header('location:AdminProductlisting.php');
    }

    if (isset($_GET['decline'])){
        $view_id = $_GET['decline'];
        $view_query = mysqli_query($conn, "SELECT * FROM products where product_id='$view_id'") or die('Query failed');
        if (mysqli_num_rows($view_query) > 0){ 
           $decline_product = mysqli_query($conn, "DELETE FROM products WHERE product_id = '$view_id'") or die('Query failed');
        }
        header('location:AdminProductlisting.php');
    }

    if (isset($_GET['delete'])){
        $view_id = $_GET['delete'];
        $view_query = mysqli_query($conn, "SELECT * FROM products where product_id='$view_id'") or die('Query failed');
        if (mysqli_num_rows($view_query) > 0){ 
           $delete_product = mysqli_query($conn, "DELETE FROM products WHERE product_id = '$view_id'") or die('Query failed');
        }
        header('location:AdminProductlisting.php');
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

    <div class="sidebar">
        <div class="sidebar-brand">
            <h2><span class=""></span>Dressify</h2>
        </div>

        <div class="sidebar-menu">
            <ul>
                <li>
                    <a href="Admin.php"><span class="la la-chalkboard"></span>
                    <span>Dashboard</span></a>
                </li>
                <li>
                    <a href="AdminCustomerinfo.php"><span class="la la-user-circle"></span>
                    <span>Customers</span></a>
                </li>
                <li>
                    <a href="AdminOwnerinfo.php"><span class="la la-user-tie"></span>
                    <span>Rental owner</span></a>
                </li>
                <li>
                    <a href="AdminOrder.php"><span class="la la-shipping-fast"></span>
                    <span>Orders</span></a>
                </li>
                <li>
                    <a href="AdminProductlisting.php" class="active"><span class="la la-warehouse"></span>
                    <span>Inventory</span></a>
                </li>
                <li>
                    <a href="AdminFeedback.php"><span class="la la-bullhorn"></span>
                    <span>Feedback</span></a>
                </li>
                <li>
                    <a href="../../join.php"><span class="la la-sign-out"></span>
                    <span>Log out</span></a>
                </li>
            </ul>
        </div>
    </div>

    <div class="main-content">
        <header>
            <h2>
                <label for="">
                    <span class="la la-bars"></span>
                </label>
                Dashboard
            </h2>

            <div class="search-wrapper">
                <span class="la la-search"></span>
                <input type="search" placeholder="Search"/>
            </div>

            <div class="user-wrapper">
                <img src="img/1.jpg">
                <div>
                    <h4>Friends</h4>
                    <small>Admin</small>
                </div>
            </div>
        </header>

        <main>
            <div class="cards-list">
            <?php
                $select_products = mysqli_query($conn, "SELECT * FROM products") or die('Query failed');
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
                            <a href="AdminProductlisting.php?view=<?php echo $fetch_products['product_id']; ?>" class="edit">View <i class="fa-solid fa-eye"></i></a>
                            <a href="AdminProductlisting.php?delete=<?php echo $fetch_products['product_id']; ?>" class="delete" onclick="return confirm('Are you sure to delete this product');">Delete <i class="fa-solid fa-trash"></i></a>
                        </div>
                    </div>
                </div>
            <?php
                        }
                    }
                }
            ?>
            </div>

            <div class="recent-grid">
                <div class="orders">
                    <div class="card">
                        <div class="card-header">
                            <h3 style="font-size: 30px;">Recent products</h3>
                        </div>

                        <div class="card-body">
                            <div class="table-responsive">
                                <table width="100%"> 
                                    <thead>
                                        <tr>
                                            <td>Product ID</td>
                                            <td>Product name</td>
                                            <td>Product price</td>
                                            <td>Approve</td>
                                        </tr>
                                    </thead>
            <?php
                $select_products = mysqli_query($conn, "SELECT * FROM products") or die('Query failed');
                if (mysqli_num_rows($select_products) > 0){
                    while($fetch_products = mysqli_fetch_assoc($select_products)){
                        if ($fetch_products['approve'] == 'false'){
            ?>
                                    <tbody>
                                        <tr>
                                            <td><?php echo $fetch_products['product_id'] ?></td>
                                            <td><?php echo $fetch_products['product_name'] ?></td>
                                            <td><?php echo $fetch_products['price'] ?></td>
                                            <td>
                                                <a href="AdminProductlisting.php?agree=<?php echo $fetch_products['product_id']; ?>">Agree</a>
                                                <a href="AdminProductlisting.php?decline=<?php echo $fetch_products['product_id']; ?>">Decline</a>
                                            </td>
                                        </tr>
                                    </tbody>
            <?php
                        }
                    }
                }
            ?>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="customers">
                    <div class="card">
                        <div class="card-header">
                            <h3>New customers</h3>
                            <a href="AdminCustomerinfo.php">
                                <button>See all <span class="la la-arrow-right">                              
                                </span></button>
                            </a>
                        </div>

                        <div class="card-body">
                            <div class="customer">
                                <div class="info">
                                    <img src="" width="40px" height="40px" alt="">
                                    <div>
                                        <h4>Cao Nguyen Huy Hoang</h4>
                                        <small>CEO Friends</small>
                                    </div>
                                </div>
                                <div class="contact">
                                    <span class="la la-user-circle"></span>
                                    <span class="la la-phone"></span>
                                    <span class="la la-at"></span>
                                </div>
                            </div>
                            <div class="customer">
                                <div class="info">
                                    <img src="" width="40px" height="40px" alt="">
                                    <div>
                                        <h4>Cao Nguyen Huy Hoang</h4>
                                        <small>CEO Friends</small>
                                    </div>
                                </div>
                                <div class="contact">
                                    <span class="la la-user-circle"></span>
                                    <span class="la la-phone"></span>
                                    <span class="la la-at"></span>
                                </div>
                            </div>
                            <div class="customer">
                                <div class="info">
                                    <img src="" width="40px" height="40px" alt="">
                                    <div>
                                        <h4>Cao Nguyen Huy Hoang</h4>
                                        <small>CEO Friends</small>
                                    </div>
                                </div>
                                <div class="contact">
                                    <span class="la la-user-circle"></span>
                                    <span class="la la-phone"></span>
                                    <span class="la la-at"></span>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="owners">
                    <div class="card">
                        <div class="card-header">
                            <h3>New Rental Owners</h3>
                            <a href="AdminOwnerinfo.php">
                                <button>See all <span class="la la-arrow-right">                              
                                </span></button>
                            </a>
                        </div>
                            
                        <div class="card-body">
                            <div class="customer">
                                <div class="info">
                                    <img src="" width="40px" height="40px" alt="">
                                    <div>
                                        <h4>Cao Nguyen Huy Hoang</h4>
                                        <small>CEO Friends</small>
                                    </div>
                                </div>
                                <div class="contact">
                                    <span class="la la-user-tie"></span>
                                    <span class="la la-phone"></span>
                                    <span class="la la-at"></span>
                                </div>
                            </div>
                            <div class="customer">
                                <div class="info">
                                    <img src="" width="40px" height="40px" alt="">
                                    <div>
                                        <h4>Cao Nguyen Huy Hoang</h4>
                                        <small>CEO Friends</small>
                                    </div>
                                </div>
                                <div class="contact">
                                    <span class="la la-user-tie"></span>
                                    <span class="la la-phone"></span>
                                    <span class="la la-at"></span>
                                </div>
                            </div>
                            <div class="customer">
                                <div class="info">
                                    <img src="" width="40px" height="40px" alt="">
                                    <div>
                                        <h4>Cao Nguyen Huy Hoang</h4>
                                        <small>CEO Friends</small>
                                    </div>
                                </div>
                                <div class="contact">
                                    <span class="la la-user-tie"></span>
                                    <span class="la la-phone"></span>
                                    <span class="la la-at"></span>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </main>
    </div>

    <script src="Admin.js"></script>
</body>
</html>