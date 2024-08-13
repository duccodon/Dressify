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
<?php include 'CustomerSidebar.php'; ?>
<div class="main-content">
    <main>
        <div class="cards-list">
            <div class="card-list-single">
                <div>
                    <a class="wish" onclick = "return confirm('Added to wishlist');"><i class="fa-solid fa-heart"></i></a>
                    <img src = "../../img/download (1).jpg">
                    <div class="list-content">Ao cua hoang</div>
                    <div class="list-content">Price: 1000</div>
                    <div>
                        <a href="CustomerProductlising.php?view=" class="view">View <i class="fa-solid fa-eye"></i></a>
                        <a href="CustomerProductlisting.php?Add-to-cart=" class="atc" onclick="return confirm('Added to cart');">Cart <i class="fa-solid fa-shopping-cart"></i></a>
                    </div>
                </div>
            </div>

            <div class="card-list-single">
                <div>
                    <a class="wish" onclick = "return confirm('Added to wishlist');"><i class="fa-solid fa-heart"></i></a>
                    <img src="img/1.jpg">
                    <div class="list-content">Ao da den</div>
                    <div class="list-content">Price: 100</div>
                    <div>
                        <a href="CustomerProductlisting.php?view=" class="edit">View <i class="fa-solid fa-eye"></i></a>
                        <a href="CustomerProductlisting.php?Add-to-cart=" class="atc" onclick="return confirm('Added to cart!!');">Cart <i class="fa-solid fa-shopping-cart"></i></a>
                    </div>
                </div>
            </div>
        </div>
    </main>
</div>
</body>
</html>