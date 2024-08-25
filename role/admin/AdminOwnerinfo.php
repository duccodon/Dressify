<?php
    include '../../ConnectDB.php';
    session_start();

    require 'check.php';
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Friends Admin</title>

    <link rel="stylesheet" href="AdminStyle.css">
    <link rel= "stylesheet" href= "https://maxst.icons8.com/vue-static/landings/line-awesome/line-awesome/1.3.0/css/line-awesome.min.css" >
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
                    <a href="AdminOwnerinfo.php" class="active"><span class="la la-user-tie"></span>
                    <span>Rental owner</span></a>
                </li>
                <li>
                    <a href="AdminOrder.php"><span class="la la-shipping-fast"></span>
                    <span>Orders</span></a>
                </li>
                <li>
                    <a href="AdminProductlisting.php"><span class="la la-warehouse"></span>
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
            <div class="recent-grid">
                <div class="orders">
                    <div class="card">
                        <div class="card-header">
                            <h3>Recent Orders</h3>
                        </div>
                        <div class="card-body">
                        <div class="table-responsive">
                            <table width="100%"> 
                                <thead>
                                    <tr>
                                        <td>Owner ID</td>
                                        <td>Full name</td>
                                        <td>Email</td>
                                        <td>City</td>
                                        <td>Country</td>
                                        <td>Contact Number</td>
                                    </tr>
                                </thead>
            <?php
                $select_owner = mysqli_query($conn, "SELECT * FROM customers WHERE user_type = 'Rental Owner'") or die('Query failed');
                if (mysqli_num_rows($select_owner) > 0){
                    while($fetch_owner = mysqli_fetch_assoc($select_owner)){
            ?>
                <tbody>
                    <tr>
                        <td><?php echo $fetch_owner['cus_id'] ?></td>
                        <td><?php echo $fetch_owner['fullname'] ?></td>
                        <td><?php echo $fetch_owner['email'] ?></td>
                        <td><?php echo $fetch_owner['city'] ?></td>
                        <td><?php echo $fetch_owner['country'] ?></td>
                        <td><?php echo $fetch_owner['contact_number'] ?></td>
                    </tr>
                </tbody>
            <?php
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
                    </div>
                        <div class="card-body">
            <?php
                $select_cus = mysqli_query($conn, "SELECT * FROM customers WHERE user_type = 'Customer' ORDER BY cus_id DESC LIMIT 3") or die('Query failed');
                if (mysqli_num_rows($select_cus) > 0){
                    while($fetch_cus = mysqli_fetch_assoc($select_cus)){
            ?>
                    
                <div class="customer">
                <?php
                    if(empty($fetch_cus['avatar'])) {
                ?>
                <img src="../../img/default_avatar.jpg" width="40px" height="40px" style="border-radius: 50%; display: block; float: left; margin-right: 25px;"  alt="Avatar">

                <?php } else {?>
                <img src = "../../img/ <?php echo $fetch_cus['avatar'];?>" width="40px" height="40px" alt="Avatar">
                <?php
                    }
                ?>
                    <div class="info">
                        <h4><?php echo $fetch_cus['fullname'] ?></h4>
                        <small><?php echo $fetch_cus['email'] ?></small>
                    </div>
                    <div class="contact">
                                <span class="la la-user-circle"></span>
                                <span class="la la-at"></span>
                    </div>
                </div>    
                    
            <?php
                
                }
                }
            ?>
                        </div>
                </div>
            </div>
            <div class="owners">
            <div class="card">
                    <div class="card-header">
                        <h3>New customers</h3>
                    </div>
                        <div class="card-body">
            <?php
                $select_cus = mysqli_query($conn, "SELECT * FROM customers WHERE user_type = 'Rental Owner' ORDER BY cus_id DESC LIMIT 3") or die('Query failed');
                if (mysqli_num_rows($select_cus) > 0){
                    while($fetch_cus = mysqli_fetch_assoc($select_cus)){
            ?>
                    
                <div class="customer">
                <?php
                    if(empty($fetch_cus['avatar'])) {
                ?>
                <img src="../../img/default_avatar.jpg" width="40px" height="40px" style="border-radius: 50%; display: block; float: left; margin-right: 25px;"  alt="Avatar">

                <?php } else {?>
                <img src = "../../img/ <?php echo $fetch_cus['avatar'];?>" width="40px" height="40px" alt="Avatar">
                <?php
                    }
                ?>
                    <div class="info">
                        <h4><?php echo $fetch_cus['fullname'] ?></h4>
                        <small><?php echo $fetch_cus['email'] ?></small>
                    </div>
                    <div class="contact">
                                <span class="la la-user-circle"></span>
                                <span class="la la-at"></span>
                    </div>
                </div>    
                    
            <?php
                
                }
                }
            ?>
                        </div>
                </div>
        </div>
            </div>
        </main>
    </div>
</body>
</html>