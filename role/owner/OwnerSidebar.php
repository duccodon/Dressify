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
                    <a href="Owner.php"><span class="la la-chalkboard"></span>
                    <span>Dashboard</span></a>
                </li>
                <li>
                    <a href="ProductOwner.php"><span class="la la-home"></span>
                    <span>Home</span></a>
                </li>
                <li>
                    <a href="InfoOwner.php"><span class="la la-user"></span>
                    <span>Information</span></a>
                </li>
                <li>
                    <a href="OwnerNotification.php"><span class="la la-bell"></span>
                    <span>Notification</span></a>
                </li>
                <li>
                    <a href="OwnerHistory.php"><span class="la la-history"></span>
                    <span>History</span></a>
                </li>
                <li>
                    <a href="OwnerOrder.php"><span class="la la-shipping-fast"></span>
                    <span>Orders</span></a>
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
                <img src="../../img/default_avatar.jpg">
                <div>
                    <h4>Friends</h4>
                    <small>Owner</small>
                </div>
            </div>
        </header>
    </div>
</body>
</html>
