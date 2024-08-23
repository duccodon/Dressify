<?php
include '../../ConnectDB.php';

//if (!isset($_SESSION['cus_id'])) {
//    header("Location: login.php");
//    exit();
//}


$_SESSION['cus_id'] = 3; // For testing purposes
$cus_id = $_SESSION['cus_id'];

// Fetch current user data
$sql = "SELECT * FROM customers WHERE cus_id = ?";
$stmt = $conn->prepare($sql);
$stmt->bind_param("i", $cus_id);
$stmt->execute();
$result = $stmt->get_result();

if ($result->num_rows > 0) {
    $row = $result->fetch_assoc(); 
    $avatar = !empty($row['avatar']) ? $row['avatar'] : 'img/default_avatar.jpg';
} else {
    echo "No user found";
}

$stmt->close();
$conn->close();
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Friends Admin</title>

    <link rel="stylesheet" href="../admin/AdminStyle.css">
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
                    <a href="ProductOwner.php"><span class="la la-home"></span>
                    <span>Home</span></a>
                </li>
                <li>
                    <a href="InfoOwner.php"><span class="la la-user"></span>
                    <span>Information</span></a>
                </li>
                <li>
                    <a href="OwnerNotification.php"><span class="la la-bell" id = "notifcount">5</span>
                    <span>Notification</span></a>
                </li>
                <li>
                    <a href="OwnerHistory.php"><span class="la la-history"></span>
                    <span>History</span></a>
                </li>
                <li>
                    <a href="ViewFeedback.php"><span class="la la-bullhorn"id = "fbcount">5</span>
                    <span>Feedback</span></a>
                </li>
                <li>
                    <a href="join.php"><span class="la la-sign-out"></span>
                    <span>Log out</span></a>
                </li>
            </ul>
        </div>
    </div>

    <div class="main-content">
        <header>
            <h2 style ="all: initial; font-size: 1.5em; font-weight: bold; font-family: inherit;">
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
                <img src="<?php echo htmlspecialchars($avatar); ?>">
                <div>
                    <h4>Friends</h4>
                    <small>Admin</small>
                </div>
            </div>
        </header>
    </div>
<script>
    function loadDoc() {
        setInterval(function(){
            const xhttp = new XMLHttpRequest();
            xhttp.onload = function() {
            document.getElementById("notifcount").innerHTML = this.responseText;
            }
            xhttp.open("GET", "incomeCount.php", true);
            xhttp.send();
        }, 10);
}

function loadDoc2() {
        setInterval(function(){
            const xhttp = new XMLHttpRequest();
            xhttp.onload = function() {
            document.getElementById("fbcount").innerHTML = this.responseText;
            }
            xhttp.open("GET", "fbcount.php", true);
            xhttp.send();
        }, 10);
}


loadDoc();
loadDoc2();
</script>
</body>
</html>
