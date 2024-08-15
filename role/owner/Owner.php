<?php
session_start();
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "dressify_db";

$conn = new mysqli($servername, $username, $password, $dbname);

if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

//if (!isset($_SESSION['cus_id'])) {
//    header("Location: login.php");
//    exit();
//}

$_SESSION['cus_id'] = 3; // For testing purposes
$owner_id = $_SESSION['cus_id'];

$customerCount = $conn->query("SELECT COUNT(DISTINCT cus_id) as count FROM orders WHERE owner_id = $owner_id")->fetch_assoc()['count'];

$totalOrders = $conn->query("SELECT COUNT(*) as count FROM orders WHERE owner_id = $owner_id")->fetch_assoc()['count'];

$totalRevenue = $conn->query("SELECT SUM(p.price) as total FROM orders o JOIN products p ON o.product_id = p.product_id WHERE o.owner_id = $owner_id")->fetch_assoc()['total'];

?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="OwnerStyle.css">
  <title>DashBoard</title>
</head>
<body>
  <?php include 'OwnerSidebar.php'; ?>
  <div class="main-content">
        <main>
            <div class="cards">
                <div class="card-single">
                    <div>
                        <h1><?php echo $customerCount; ?></h1>
                        <span>Customers</span>
                    </div>
                    <div>
                        <span class="la la-users"></span>
                    </div>
                </div>

                <div class="card-single">
                    <div>
                        <h1>122</h1>
                        <span>Rating</span>
                    </div>
                    <div>
                        <span class="las la-star"></span>
                    </div>
                </div>

                <div class="card-single">
                    <div>
                        <h1>122</h1>
                        <span>Comments</span>
                    </div>
                    <div>
                        <span class="la la-comments"></span>
                    </div>
                </div>

                <div class="card-single">
                    <div>
                        <h1><?php echo $totalOrders; ?></h1>
                        <span>Total Orders</span>
                    </div>
                    <div>
                        <span class="la la-shopping-bag"></span>
                    </div>
                </div>

                <div class="card-single">
                    <div>
                        <h1><?php echo number_format($totalRevenue, 2); ?></h1>
                        <span>Revenue</span>
                    </div>
                    <div>
                        <span class="la la-money-bill-wave"></span>
                    </div>
                </div>

                <div class="card-single">
                    <div>
                        <h1>122</h1>
                        <span>Total Visit</span>
                    </div>
                    <div>
                        <span class="la la-globe"></span>
                    </div>
                </div>
            </div>

            <section class="charts">
                <div class="chart-row">
                    <div class="chart-container1">
                        <h3>Top kênh nhận tin nhắn</h3>
                        <canvas id="messageChannelChart"></canvas>
                    </div>
                    <div class="chart-container2">
                        <h3>Top thiết bị khách hàng sử dụng</h3>
                        <canvas id="deviceUsageChart"></canvas>
                    </div>
                </div>
            </section>

        </main>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/chart.js"></script>
    <script src="OwnerScript.js"></script>
</body>
  
</body>
</html>
