<?php
 
$dataPoints = array(
	array("label"=> "Food + Drinks", "y"=> 590),
	array("label"=> "Activities and Entertainments", "y"=> 261),
	array("label"=> "Health and Fitness", "y"=> 158),
	array("label"=> "Shopping & Misc", "y"=> 72),
	array("label"=> "Transportation", "y"=> 191),
	array("label"=> "Rent", "y"=> 573),
	array("label"=> "Travel Insurance", "y"=> 126)
);
	
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Friends Admin</title>

    <link rel="stylesheet" href="AdminStyle.css">
    <link rel= "stylesheet" href= "https://maxst.icons8.com/vue-static/landings/line-awesome/line-awesome/1.3.0/css/line-awesome.min.css" >

    <!-- chart -->
    <script>
        window.onload = function () {
 
        var chart = new CanvasJS.Chart("chartContainer", {
	    animationEnabled: true,
	    exportEnabled: true,
        backgroundColor: "#D6DAC8",
	    title:{
		    text: "User"
	    },
	    data: [{
		    type: "pie",
		    indexLabelFontSize: 16,
		    indexLabel: "{label} - #percent%",
		    yValueFormatString: "##0 $",
		    dataPoints: <?php echo json_encode($dataPoints, JSON_NUMERIC_CHECK); ?>
	    }]
        });
        chart.render();


        var barchart = new CanvasJS.Chart("barchartContainer", {
	    animationEnabled: true,
	    exportEnabled: true,
        backgroundColor: "#D6DAC8",
	    title:{
		    text: "Average Expense for categories"
	    },
	    data: [{
		    type: "bar",
            lineColor: "#817373",
            markerColor: "#9CAFAA",
		    indexLabelFontSize: 16,
		    indexLabel: "{y}",
		    yValueFormatString: "##0 $",
		    dataPoints: <?php echo json_encode($dataPoints, JSON_NUMERIC_CHECK); ?>
	    }]
        });
        barchart.render();


        var linechart = new CanvasJS.Chart("linechartContainer", {
	    animationEnabled: true,
	    exportEnabled: true,
        backgroundColor: "#D6DAC8",
	    title:{
		    text: "Average Expense for categories"
	    },
	    data: [{
		    type: "line",
            lineColor: "#817373",
            markerColor: "#9CAFAA",
		    indexLabelFontSize: 16,
		    indexLabel: "{y}",
		    yValueFormatString: "##0 $",
		    dataPoints: <?php echo json_encode($dataPoints, JSON_NUMERIC_CHECK); ?>
	    }]
        });
        linechart.render();
        }
    </script>
</head>
<body>

    <div class="sidebar">
        <div class="sidebar-brand">
            <h2><span class=""></span>Dressify</h2>
        </div>

        <div class="sidebar-menu">
            <ul>
                <li>
                    <a href="Admin.php" class="active"><span class="la la-chalkboard"></span>
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
                    <a href="AdminFeedback.php"><span class="la la-bullhorn"></span>
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

            <div class="chart-grid">
                <div style="display: flex; padding-top: 50px;">
                <div id="chartContainer" style="height: 370px; width: 40%; padding-left: 25px;"></div>
                <div id="barchartContainer" style="height: 370px; width: 50%; padding-left: 105px;"></div>
                </div>  
                <div id="linechartContainer" style="height: 370px; width: 50%; padding: 50px 0 0 25px;"></div>
            </div>
        </main>
    </div>


    <script src="https://cdn.canvasjs.com/canvasjs.min.js"></script>
    <!---->
    
    <script src="Admin.js"></script>
</body>
</html>