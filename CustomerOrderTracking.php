<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="AdminStyle.css">
  <link rel="stylesheet" href="CustomerOrderTracking.css">
</head>
<body>
<div> 
    <h2>Order Tracking</h2>
    <h3>Customer Information</h3>
    
    <div class = "Customer">
        <label for="Customer" class ="info-label">Name: </label>
        <div id = "Customer" class ="info-input" type = "text">Nguyen Thien Duc</div>
    </div>
    
    <br>
    
    <div class = "Customer">
        <label for="Customer" class ="info-label">Email: </label>
        <div id = "Customer" class ="info-input" type = "text">ntduc22@clc.fitus.edu.vn</div>
    </div>

    <br>

    <div class = "Customer">
        <label for="Customer" class ="info-label">Country: </label>
        <div id = "Customer" class ="info-input" type = "text">VietNam</div>
        <label for="Customer" class ="info-label">City: </label>
        <div id = "Customer" class ="info-input" type = "text">Ho Chi Minh City</div>
    </div>

    <br>
    <div class = "Customer">
        <label for="Customer" class ="info-label">Address: </label>
        <div id = "Customer" class ="info-input" type = "text"> 360A Bến Vân Đồn Lô D, c/c Khánh Hội 2 Phường 1 Quan 4</div>
    </div>

    <br>
    <div class = "Customer">
        <label for="Customer" class ="info-label">Contact Number: </label>
        <div id = "Customer" class ="info-input" type = "text"> 0931855013</div>
    </div>

    <h3>Rental Owner Information</h3>
    
    <div class = "RentalOwner">
        <label for="RentalOwner" class ="info-label">Name: </label>
        <div id = "RentalOwner" class ="info-input" type = "text">Nguyen Thien Duc</div>
    </div>
    
    <br>
    
    <div class = "Customer">
        <label for="RentalOwner" class ="info-label">Email: </label>
        <div id = "RentalOwner" class ="info-input" type = "text">ntduc22@clc.fitus.edu.vn</div>
    </div>

    <br>

    <div class = "RentalOwner">
        <label for="RentalOwner" class ="info-label">Country: </label>
        <div id = "RentalOwner" class ="info-input" type = "text">VietNam</div>
        <label for="RentalOwner" class ="info-label">City: </label>
        <div id = "RentalOwner" class ="info-input" type = "text">Ho Chi Minh City</div>
    </div>

    <br>
    <div class = "Customer">
        <label for="Customer" class ="info-label">Address: </label>
        <div id = "Customer" class ="info-input" type = "text"> 360A Bến Vân Đồn Lô D, c/c Khánh Hội 2 Phường 1 Quan 4</div>
    </div>

    <br>
    <div class = "Customer">
        <label for="Customer" class ="info-label">Contact Number: </label>
        <div id = "Customer" class ="info-input" type = "text"> 0931855013</div>
    </div>

    <h3>Package Information</h3>
    <div class = "Package">
        <label for="Package" class ="info-label">Package Number: </label>
        <div id = "Package" class = "info-input" type = "text">AVN0001</div>  
    </div>

    <br>

    <div class = "Package">
        <label for="Package" class ="info-label">Package Details: </label>
        <div id = "Package" class = "info-input" type = "text">1 pair of jeans <br> 1 pair of trousers</div>  
    </div>

    <br>

    <div class = "Package">
        <label for="Package" class ="info-label">Package Status: </label>
        <div id = "Package" class = "info-input" type = "text">Delivered</div>  
    </div>

    <br>

    <div class = "Package">
        <label for="Package" class ="info-label">Customer Confirmation Image: </label>
        <div id = "Package" class = "info-input">
            <a href ="/img/1.jpg" download="1.jpg" style="font-weight: 600;">
                Download here
            </a>
        </div>
    </div>

    <br>

    <div class = "Package">
        <label for="Package" class ="info-label">Rental Owner Confirmation Image: </label>
        <div id = "Package" class = "info-input">
            <a href ="/img/1.jpg" download="1.jpg" style="font-weight: 600;">
                Download here
            </a>
        </div>
    </div>
        
    <br> 

    <div class ="Package">
        <label for="Package" class ="info-label">Estimated Delivery Date: </label>
        <div id = "EED" class = "info-input" type = 'Date' value = '31/12/2023' >31/12/2023</div>

        <label for="Package" class ="info-label">Estimated Return Date: </label>
        <div id = "ERD" class = "info-input" type = 'Date' value = '31/12/2024'>31/12/2024</div>
    </div>

    <div class ="Package">
        <label for="Package" class ="info-label">Rental Period: </label>
        <div id = "Package" class = "info-input" >
            <?php
            $dateText1 = '31/12/2023';
            $dateText2 = '31/12/2024';

            $dateFormat = 'd/m/Y';
            $startDate = DateTime::createFromFormat($dateFormat, $dateText1);
            $endDate = DateTime::createFromFormat($dateFormat, $dateText2);

            if ($startDate && $endDate) {
                $rental_period = $startDate->diff($endDate);
                echo $rental_period->days . " Days";
            }
            ?>
        </div>
    </div>
    
    <br>

    <div class = "Package">
        <label for="Package" class ="info-label">Additional Fee (Fine included): </label>
        <div id = "Fee" class = "info-input" type = "text" >100 000 </div>  
    </div>
    
    <br>

    <div class = "Package">
        <label for="Package" class ="info-label">Total Fee: </label>
        <div id = "Total" class = "info-input">
            <?php
                $Fee = 100000;
                $Initial_Cost = 300000;
                echo $Fee + $Initial_Cost;
            ?>
        </div>  
    </div>

</body>
