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
                    <a href="" class="active"><span class="la la-chalkboard"></span>
                    <span>Dashboard</span></a>
                </li>
                <li>
                    <a href=""><span class="la la-user-circle"></span>
                    <span>Customers</span></a>
                </li>
                <li>
                    <a href=""><span class="la la-user-tie"></span>
                    <span>Rental owner</span></a>
                </li>
                <li>
                    <a href=""><span class="la la-shipping-fast"></span>
                    <span>Orders</span></a>
                </li>
                <li>
                    <a href=""><span class="la la-warehouse"></span>
                    <span>Inventory</span></a>
                </li>
                <li>
                    <a href=""><span class="la la-bullhorn"></span>
                    <span>Feedback</span></a>
                </li>
                <li>
                    <a href=""><span class="la la-sign-out"></span>
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
                <img>
                <div>
                    <h4>Friends</h4>
                    <small>Admin</small>
                </div>
            </div>
        </header>

        <main>
            <div class="cards">
                <div class="card-single">
                    <div>
                        <h1>54</h1>
                        <span>Customers</span>
                    </div>
                    <div>
                        <span class="la la-users"></span>
                    </div>
                </div>

                <div class="card-single">
                    <div>
                        <h1>122</h1>
                        <span>Rental owners</span>
                    </div>
                    <div>
                        <span class="la la-user-tie"></span>
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
                        <h1>122</h1>
                        <span>Total Orders</span>
                    </div>
                    <div>
                        <span class="la la-shopping-bag"></span>
                    </div>
                </div>

                <div class="card-single">
                    <div>
                        <h1>122</h1>
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

            <div class="recent-grid">
                <div class="orders">
                    <div class="card">
                        <div class="card-header">
                            <h3>Recent Orders</h3>
                            <button>See all <span class="la la-arrow-right">                              
                            </span></button>
                        </div>

                        <div class="card-body">
                            <div class="table-responsive">
                                <table width="100%"> 
                                    <thead>
                                        <tr>
                                            <td>Order ID</td>
                                            <td>Order Customer</td>
                                            <td>Order Owner</td>
                                            <td>Status</td>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <tr>
                                            <td>1</td>
                                            <td>UI/UX design</td>
                                            <td>UI Team</td>
                                            <td>
                                                <span class="status finish"></span>
                                                Finish
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>1</td>
                                            <td>UI/UX design</td>
                                            <td>UI Team</td>
                                            <td>
                                                <span class="status deli-cus"></span>
                                                Delivering to customer
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>1</td>
                                            <td>UI/UX design</td>
                                            <td>UI Team</td>
                                            <td>
                                                <span class="status used"></span>
                                                In used
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>1</td>
                                            <td>UI/UX design</td>
                                            <td>UI Team</td>
                                            <td>
                                                <span class="status deli-owner"></span>
                                                Delivering to owner
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>1</td>
                                            <td>UI/UX design</td>
                                            <td>UI Team</td>
                                            <td>
                                                <span class="status packaging"></span>
                                                Packaging
                                            </td>
                                        </tr>
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="customers">
                    <div class="card">
                        <div class="card-header">
                            <h3>New customers</h3>
                            <button>See all <span class="la la-arrow-right">                              
                            </span></button>
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
                            <button>See all <span class="la la-arrow-right">                              
                            </span></button>
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
</body>
</html>