<?php
    include '../../ConnectDB.php';
    session_start();    
?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Friends Admin</title>

    <link rel= "stylesheet" href= "https://maxst.icons8.com/vue-static/landings/line-awesome/line-awesome/1.3.0/css/line-awesome.min.css" >
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css">
</head>
<body>
<?php include 'OwnerSidebar.php'; ?>
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
                <img src="../../img/1.jpg">
                <div>
                    <h4>Friends</h4>
                    <small>Owner</small>
                </div>
            </div>
        </header>
    <main>
        <div class="cards-list">
        <?php
                $select_orders = mysqli_query($conn, "SELECT * FROM orders WHERE owner_id='$_SESSION[cus_id]'") or die('Query failed');
                if (mysqli_num_rows($select_orders) > 0){
                    while($fetch_orders = mysqli_fetch_assoc($select_orders)){
                        if ($fetch_orders['status'] == 'accepted'){
                            $customer = mysqli_fetch_assoc(mysqli_query($conn, "SELECT * FROM customers WHERE cus_id='$fetch_orders[cus_id]' "));
        ?>
            <div style="width: 200px; height: 150px;" class="card-list-single">
                <div>
                    <div class="list-content">Order from <?php echo $customer['fullname'];?></div>
                    <div class="list-content">Date: <?php echo $fetch_orders['date_start'];?> </div>
                    <div>
                        <a style="margin-left: 10px;" href="ViewOrder.php?view=<?php echo $fetch_orders['id']?>" class="delete">View Order<i class="fa-solid fa-eye"></i></a>
                    </div>
                </div>
            </div>
        <?php
                        }
                    }
                }
        ?>
        </div>
    </main>
</body>
</html>