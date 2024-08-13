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
                    <a href="AdminOwnerinfo.php"><span class="la la-user-tie"></span>
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
                    <a href="AdminFeedback.php" class="active"><span class="la la-bullhorn"></span>
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
    </div>
    
    <div class="container">
    <div class="inner_left_pannel">
      <div class="header-left">
        <select name="user_type">
          <option value="Inbox">Inbox</option>
          <option value="Alert">Alert</option>
          <option value="Feedback">Feedback</option>
          <option value="Order Tracking">Order Tracking</option>
        </select>
        <div>Mark all as read</div>
      </div>
      <div class="notification-list">
        <div class="notification">
          <img alt="photo" src="1.jpg">
          <div class="description">
            <div class="name">cao nguyen huy hoang</div>
            <article>ersgsergaefawefawefawefawefawefersgsergaefawefawefawefawefawefersgsergaefawefawefawefawefawefersgsergaefawefawefawefawefawefersgsergaefawefawefawefawefawef</article>
            <span>Date</span>      
          </div>  
        </div>
        <div class="notification unread">
          <img alt="photo" src="1.jpg">
          <div class="description">
            <div class="name">cao nguyen huy hoang</div>
            <article>ersgsergaefawefawefawefawefawefersgsergaefawefawefawefawefawefersgsergaefawefawefawefawefawefersgsergaefawefawefawefawefawefersgsergaefawefawefawefawefawef</article>
            <span>Date</span>      
          </div>  
        </div>
        <div class="notification">
          <img alt="photo" src="1.jpg">
          <div class="description">
            <div class="name">cao nguyen huy hoang</div>
            <article>ersgsergaefawefawefawefawefawefersgsergaefawefawefawefawefawefersgsergaefawefawefawefawefawefersgsergaefawefawefawefawefawefersgsergaefawefawefawefawefawef</article>
            <span>Date</span>      
          </div>  
        </div>
        <div class="notification">
          <img alt="photo" src="1.jpg">
          <div class="description">
            <div class="name">cao nguyen huy hoang</div>
            <article>ersgsergaefawefawefawefawefawefersgsergaefawefawefawefawefawefersgsergaefawefawefawefawefawefersgsergaefawefawefawefawefawefersgsergaefawefawefawefawefawef</article>
            <span>Date</span>      
          </div>  
        </div>
        <div class="notification">
          <img alt="photo" src="1.jpg">
          <div class="description">
            <div class="name">cao nguyen huy hoang</div>
            <article>ersgsergaefawefawefawefawefawefersgsergaefawefawefawefawefawefersgsergaefawefawefawefawefawefersgsergaefawefawefawefawefawefersgsergaefawefawefawefawefawef</article>
            <span>Date</span>      
          </div>  
        </div>
        <div class="notification">
          <img alt="photo" src="1.jpg">
          <div class="description">
            <div class="name">cao nguyen huy hoang</div>
            <article>ersgsergaefawefawefawefawefawefersgsergaefawefawefawefawefawefersgsergaefawefawefawefawefawefersgsergaefawefawefawefawefawefersgsergaefawefawefawefawefawef</article>
            <span>Date</span>      
          </div>  
        </div>
        <div class="notification">
          <img alt="photo" src="1.jpg">
          <div class="description">
            <div class="name">cao nguyen huy hoang</div>
            <article>ersgsergaefawefawefawefawefawefersgsergaefawefawefawefawefawefersgsergaefawefawefawefawefawefersgsergaefawefawefawefawefawefersgsergaefawefawefawefawefawef</article>
            <span>Date</span>      
          </div>  
        </div>
        <div class="notification">
          <img alt="photo" src="1.jpg">
          <div class="description">
            <div class="name">cao nguyen huy hoang</div>
            <article>ersgsergaefawefawefawefawefawefersgsergaefawefawefawefawefawefersgsergaefawefawefawefawefawefersgsergaefawefawefawefawefawefersgsergaefawefawefawefawefawef</article>
            <span>Date</span>      
          </div>  
        </div>
        <div class="notification">
          <img alt="photo" src="1.jpg">
          <div class="description">
            <div class="name">cao nguyen huy hoang</div>
            <article>ersgsergaefawefawefawefawefawefersgsergaefawefawefawefawefawefersgsergaefawefawefawefawefawefersgsergaefawefawefawefawefawefersgsergaefawefawefawefawefawef</article>
            <span>Date</span>      
          </div>  
        </div>
        <div class="notification">
          <img alt="photo" src="1.jpg">
          <div class="description">
            <div class="name">cao nguyen huy hoang</div>
            <article>ersgsergaefawefawefawefawefawefersgsergaefawefawefawefawefawefersgsergaefawefawefawefawefawefersgsergaefawefawefawefawefawefersgsergaefawefawefawefawefawef</article>
            <span>Date</span>      
          </div>  
        </div>
        <div class="notification">
          <img alt="photo" src="1.jpg">
          <div class="description">
            <div class="name">cao nguyen huy hoang</div>
            <article>ersgsergaefawefawefawefawefawefersgsergaefawefawefawefawefawefersgsergaefawefawefawefawefawefersgsergaefawefawefawefawefawefersgsergaefawefawefawefawefawef</article>
            <span>Date</span>      
          </div>  
        </div>
        <div class="notification">
          <img alt="photo" src="1.jpg">
          <div class="description">
            <div class="name">cao nguyen huy hoang</div>
            <article>ersgsergaefawefawefawefawefawefersgsergaefawefawefawefawefawefersgsergaefawefawefawefawefawefersgsergaefawefawefawefawefawefersgsergaefawefawefawefawefawef</article>
            <span>Date</span>      
          </div>  
        </div>
        <div class="notification">
          <img alt="photo" src="1.jpg">
          <div class="description">
            <div class="name">cao nguyen huy hoang</div>
            <article>ersgsergaefawefawefawefawefawefersgsergaefawefawefawefawefawefersgsergaefawefawefawefawefawefersgsergaefawefawefawefawefawefersgsergaefawefawefawefawefawef</article>
            <span>Date</span>      
          </div>  
        </div>
      </div>
    </div>
    <div class="inner_right_pannel">
      <h1>Detail</h1>
      <div class="message-detail">
      <div> 
        <h2>Order Number: AVN00</h2>
      </div>
      <div>
        Hi Nguyen Thien, 
      </div>
      <div>
        We have received your order and will send you a shipping confirmation with your track & trace details as soon as your order ships. We seek your kind understanding and patience in these times. 
      </div>
      <div>
        For answers to your questions, we would encourage you to send message to the administator
      </div>
      <div>
        Your adidas team
      </div>
      <div>
      <table> 
        <tr>  
        <td> DELIVERY ADDRESS </td>  
        <td> BILLING INFORMATION </td>
        <td> ORDER SUMMARY </td>  
        </tr>
        <tr>
          <td> Nguyen Thien Duc <br>
                360A Bến Vân Đồn Lô D, c/c Khánh Hội 2 Phường 1 Quan 4, 754100 Ho Chi Minh, Vietnam <br>
                0931855013 <br>
              <h4> Via: GHN Standard  <h4> </td>
          <td> Nguyen Thien Duc <br>
                360A Bến Vân Đồn Lô D, c/c Khánh Hội 2 Phường 1 Quan 4, 754100 Ho Chi Minh, Vietnam <br>
                <h4> Via: Cash on delivery <h4> </td> 
          <td> Products 	₫5,200,000 <br>
        Promo Code 	-₫2,600,000 <br>
        Delivery 	FREE <br>
        <h4>Total</h4> 	₫2,600,000 <br>
        (inclusive of tax) 	<br>
        <h4>Total Saving</h4> 	₫2,600,000 <br> 
        ULTRABOOST LIGHT SHOES <br>
          </td>
        </tr> 
        </table>  
      </div>
      <?php
        for ($i = 0; $i <= 100; $i++) {
          echo("hello"). "<br>";  // Print each number with a line break
        }
      ?>
      </div>
    </div>
  </div>

  
</body>
</html>