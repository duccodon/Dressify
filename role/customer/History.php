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
                <div class="card-list-single">
                    <div>
                        <a class="wish"><i class="fa-solid fa-heart"></i></a>
                        <img src = "../../img/download (1).jpg">
                        <div class="list-content">Ao cua hoang</div>
                        <div class="list-content">Date: 10/10/2010</div>
                        <div>
                            <a href="AdminProductlisting.php?view=" class="edit">View <i class="fa-solid fa-eye"></i></a>
                            <a href="AdminProductlisting.php?delete=" class="delete" onclick="return confirm('Are you sure to delete this product');">Delete <i class="fa-solid fa-trash"></i></a>
                        </div>
                    </div>
                </div>

                <div class="card-list-single">
                    <div>
                        <a class="wish"><i class="fa-solid fa-heart"></i></a>
                        <img src="../../img/download (1).jpg">
                        <div class="list-content">Ao cua hoang</div>
                        <div class="list-content">Date: 10/10/2010</div>
                        <div>
                            <a href="AdminProductlisting.php?view=" class="edit">View <i class="fa-solid fa-eye"></i></a>
                            <a href="AdminProductlisting.php?delete=" class="delete" onclick="return confirm('Are you sure to delete this product');">Delete <i class="fa-solid fa-trash"></i></a>
                        </div>
                    </div>
                </div>

                <div class="card-list-single">
                    <div>
                        <a class="wish"><i class="fa-solid fa-heart"></i></a>
                        <img src = "../../img/download (1).jpg">
                        <div class="list-content">Ao cua hoang</div>
                        <div class="list-content">Date: 10/10/2010</div>
                        <div>
                            <a href="AdminProductlisting.php?view=" class="edit">View <i class="fa-solid fa-eye"></i></a>
                            <a href="AdminProductlisting.php?delete=" class="delete" onclick="return confirm('Are you sure to delete this product');">Delete <i class="fa-solid fa-trash"></i></a>
                        </div>
                    </div>
                </div>

                <div class="card-list-single">
                    <div>
                        <img src = "../../img/download (1).jpg">
                        <div class="list-content">Ao cua hoang</div>
                        <div class="list-content">Date: 10/10/2010</div>
                        <div>
                            <a href="AdminProductlisting.php?view=" class="edit">View <i class="fa-solid fa-eye"></i></a>
                            <a href="AdminProductlisting.php?delete=" class="delete" onclick="return confirm('Are you sure to delete this product');">Delete <i class="fa-solid fa-trash"></i></a>
                        </div>
                    </div>
                </div>

                <div class="card-list-single">
                    <div>
                        <img src = "../../img/download (1).jpg">
                        <div class="list-content">Ao cua hoang</div>
                        <div class="list-content">Date: 10/10/2010</div>
                        <div>
                            <a href="AdminProductlisting.php?view=" class="edit">View <i class="fa-solid fa-eye"></i></a>
                            <a href="AdminProductlisting.php?delete=" class="delete" onclick="return confirm('Are you sure to delete this product');">Delete <i class="fa-solid fa-trash"></i></a>
                        </div>
                    </div>
                </div>

                <div class="card-list-single">
                    <div>
                        <img src = "../../img/download (1).jpg">
                        <div class="list-content">Ao cua hoang</div>
                        <div class="list-content">Date: 10/10/2010</div>
                        <div>
                            <a href="AdminProductlisting.php?view=" class="edit">View <i class="fa-solid fa-eye"></i></a>
                            <a href="AdminProductlisting.php?delete=" class="delete" onclick="return confirm('Are you sure to delete this product');">Delete <i class="fa-solid fa-trash"></i></a>
                        </div>
                    </div>
                </div>
            </div>
        </main>
    </div>

    <script src="Admin.js"></script>
</body>
</html>