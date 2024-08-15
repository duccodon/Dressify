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
                    <small>Admin</small>
                </div>
            </div>
        </header>
    <main>
        <div class="cards-list">
            <div class="card-list-single-owner">
                <div>
                    <div class="list-content">Order from Duc</div>
                    <div class="list-content">Date: 10/08/2013</div>
                    <div>
                        <a href="ViewOrder.php?view=" class="edit">View <i class="fa-solid fa-eye"></i></a>
                        <a href="Feedback.php?view=" class="delete">View Feedback <i class="fa-solid fa-trash"></i></a>
                    </div>
                </div>
            </div>

            <div class="card-list-single-owner">
                <div>
                    <div class="list-content">Order from Hoang</div>
                    <div class="list-content">Date: 10/10/2010</div>
                    <div>
                        <a href="ViewOrder.php?view=" class="edit">View <i class="fa-solid fa-eye"></i></a>
                        <a href="Feedback.php?view=" class="delete">View Feedback <i class="fa-solid fa-trash"></i></a>
                    </div>
                </div>
            </div>

            <div class="card-list-single-owner">
                <div>
                    <div class="list-content">Order from Khoa</div>
                    <div class="list-content">Order date: 10/10/2010</div>
                    <div>
                        <a href="ViewOrder.php?view=" class="edit">View <i class="fa-solid fa-eye"></i></a>
                        <a href="Feedback.php?view=" class="delete">View Feedback <i class="fa-solid fa-trash"></i></a>
                    </div>
                </div>
            </div>

            <div class="card-list-single-owner">
                <div>
                    <div class="list-content">Order from Thinh</div>
                    <div class="list-content">Date: 10/10/2010</div>
                    <div>
                        <a href="ViewOrder.php?view=" class="edit">View <i class="fa-solid fa-eye"></i></a>
                        <a href="Feedback.php?view=" class="edit">View Feedback <i class="fa-solid fa-trash"></i></a>
                    </div>
                </div>
            </div>

            <div class="card-list-single-owner">
                <div>
                    <div class="list-content">Order from Han</div>
                    <div class="list-content">Date: 10/10/2010</div>
                    <div>
                        <a href="ViewOrder.php?view=" class="edit">View <i class="fa-solid fa-eye"></i></a>
                        <a href="Feedback.php?view=" class="edit">View Feedback <i class="fa-solid fa-trash"></i></a>
                    </div>
                </div>
            </div>

            <div class="card-list-single-owner">
                <div>
                    <div class="list-content">Order from Duc</div>
                    <div class="list-content">Date: 10/10/2010</div>
                    <div>
                        <a href="ViewOrder.php?view=" class="edit">View <i class="fa-solid fa-eye"></i></a>
                        <a href="Feedback.php?view=" class="edit">View Feedback <i class="fa-solid fa-trash"></i></a>
                    </div>
                </div>
            </div>
        </div>
    </main>
</body>
</html>