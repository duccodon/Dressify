<?php
    include '../../ConnectDB.php';
    session_start();

    if (isset($_GET['agree'])){
        $view_id = $_GET['agree'];
        $view_query = mysqli_query($conn, "SELECT * FROM orders where id='$view_id'") or die('Query failed');
        if (mysqli_num_rows($view_query) > 0){ 
           mysqli_query($conn, "UPDATE orders SET `status` = 'accepted' WHERE id = '$view_id'") or die('Query failed');
        }
        header('location:OwnerOrder.php');
    }

    if (isset($_GET['decline'])){
        $view_id = $_GET['decline'];
        $view_query = mysqli_query($conn, "SELECT * FROM orders where product_id='$view_id'") or die('Query failed');
        if (mysqli_num_rows($view_query) > 0){ 
           mysqli_query($conn, "DELETE FROM orders WHERE id = '$view_id'") or die('Query failed');
        }
        header('location:OwnerOrder.php');
    }
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Friends Admin</title>

    <link rel="stylesheet" href="../admin/AdminStyle.css">
    <link rel= "stylesheet" href= "https://maxst.icons8.com/vue-static/landings/line-awesome/line-awesome/1.3.0/css/line-awesome.min.css" >
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css">
</head>
<body>
    <?php include 'OwnerSidebar.php'; ?>
    <div class="main-content">
        <main>
            <div class="recent-grid">
                <div class="orders">
                    <div class="card">
                        <div class="card-header">
                            <h3 style="font-size: 30px;">Recent orders</h3>
                        </div>

                        <div class="card-body">
                            <div class="table-responsive">
                                <table width="100%"> 
                                    <thead>
                                        <tr>
                                            <td>Order ID</td>
                                            <td>Customer name</td>
                                            <td>Total price</td>
                                            <td>Approve</td>
                                        </tr>
                                    </thead>
            <?php
                $select_orders = mysqli_query($conn, "SELECT * FROM orders WHERE owner_id='$_SESSION[cus_id]'") or die('Query failed');
                if (mysqli_num_rows($select_orders) > 0){
                    while($fetch_orders = mysqli_fetch_assoc($select_orders)){
                        if ($fetch_orders['status'] == 'in progress'){
                            $customer = mysqli_fetch_assoc(mysqli_query($conn, "SELECT * FROM customers WHERE cus_id='$fetch_orders[cus_id]' "));
            ?>
                                    <tbody>
                                        <tr>
                                            <td><?php echo $fetch_orders['id'] ?></td>
                                            <td><?php echo $customer['fullname'] ?></td>
                                            <td><?php echo $fetch_orders['total'] ?></td>
                                            <td>
                                                <a href="OwnerOrder.php?agree=<?php echo $fetch_orders['id']; ?>">Agree</a>
                                                <a href="OwnerOrder.php?decline=<?php echo $fetch_orders['id']; ?>">Decline</a>
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


            </div>
        </main>
    </div>

</body>
</html>