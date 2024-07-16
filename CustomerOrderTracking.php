<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Order Tracking</title>
    <link rel="stylesheet" href="CustomerOrderTrackingStyle.css">
</head>
<body>
    <main class="order-tracking">
        <div class="content-wrapper">
            <img src="https://cdn.builder.io/api/v1/image/assets/TEMP/19b0118d58a94de15cdcd3a14ecc71f089c28565df2b219bc1b01f8a4abfe296?apiKey=06f22fa033964e85a3e6f07dc7f00b07&" alt="" class="sidebar-image">
            <div class="main-content">
                <h1 class="continue-shopping">Continue shopping</h1>
                <section class="order-details">
                    <h2 class="order-tracking-title">Order tracking</h2>
                    <h3 class="rental-owner-info">Rental owner information</h3>
                    <form>
                        <label for="ownerName" class="info-label">Name</label>
                        <input id="ownerName" class="info-input" type="text" value="Mehrab">
                        
                        <label for="ownerEmail" class="info-label">Email</label>
                        <input id="ownerEmail" class="info-input" type="email" value="Mehrabbozorgi.business@gmail.com">
                        
                        <div class="info-columns">
                            <div class="info-column">
                                <label for="ownerCountry" class="info-label">Country</label>
                                <input id="ownerCountry" class="info-input" type="text" value="Mehrab">
                            </div>
                            <div class="info-column">
                                <label for="ownerCity" class="info-label">City</label>
                                <input id="ownerCity" class="info-input" type="text" value="Mehrab">
                            </div>
                        </div>
                        
                        <label for="ownerAddress" class="info-label">Address</label>
                        <input id="ownerAddress" class="info-input" type="text" value="33062 Zboncak isle">
                        
                        <label for="ownerContact" class="info-label">Contact Number</label>
                        <input id="ownerContact" class="info-input" type="tel" value="58077.79">
                    </form>
                    
                    <h3 class="rental-owner-info">Customer information</h3>
                    <form>
                        <label for="customerName" class="info-label">Name</label>
                        <input id="customerName" class="info-input" type="text" value="Mehrab">
                        
                        <label for="customerEmail" class="info-label">Email</label>
                        <input id="customerEmail" class="info-input" type="email" value="Mehrabbozorgi.business@gmail.com">
                        
                        <div class="info-columns">
                            <div class="info-column">
                                <label for="customerCountry" class="info-label">Country</label>
                                <input id="customerCountry" class="info-input" type="text" value="Mehrab">
                            </div>
                            <div class="info-column">
                                <label for="customerCity" class="info-label">City</label>
                                <input id="customerCity" class="info-input" type="text" value="Mehrab">
                            </div>
                        </div>
                        
                        <label for="customerAddress" class="info-label">Address</label>
                        <input id="customerAddress" class="info-input" type="text" value="33062 Zboncak isle">
                        
                        <label for="customerContact" class="info-label">Contact Number</label>
                        <input id="customerContact" class="info-input" type="tel" value="58077.79">
                    </form>
                    
                    <h3 class="package-info">Package information</h3>
                    <form>
                        <label for="packageNumber" class="info-label">Package number</label>
                        <input id="packageNumber" class="info-input" type="text" value="Mehrab">
                        
                        <label for="packageDetails" class="info-label">Package details</label>
                        <textarea id="packageDetails" class="package-details">Mehrabbozorgi.business@gmail.com</textarea>
                        
                        <label for="packageStatus" class="info-label">Package Status</label>
                        <input id="packageStatus" class="package-status" type="text" value="Delivered">
                        
                        <label for="ownerConfirmation" class="info-label">Package Confirmation From Owner</label>
                        <input id="ownerConfirmation" class="confirmation-upload" type="file">
                        
                        <label for="customerConfirmation" class="info-label">Package Confirmation From Customer</label>
                        <input id="customerConfirmation" class="confirmation-upload" type="file">
                        
                        <div class="date-info">
                            <div class="date-column">
                                <label for="estimatedDelivery" class="info-label">Estimated delivered date</label>
                                <input id="estimatedDelivery" class="date-input" type="date">
                            </div>
                            <div class="date-column">
                                <label for="estimatedReturn" class="info-label">Estimated return date</label>
                                <input id="estimatedReturn" class="date-input" type="date">
                            </div>
                        </div>
                        
                        <label for="rentalPeriod" class="info-label">Rental period</label>
                        <input id="rentalPeriod" class="rental-period" type="text" placeholder="Days">
                        
                        <label for="additionalFee" class="info-label">Additional Fee (Fine included)</label>
                        <input id="additionalFee" class="fee-info" type="text" value="200000 vnd">
                        
                        <label for="totalCost" class="info-label">Total cost</label>
                        <input id="totalCost" class="fee-info" type="text" value="200000 vnd">
                    </form>
                </section>
            </div>
        </div>
    </main>
</body>
</html>
