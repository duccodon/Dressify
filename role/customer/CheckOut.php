<?php
$servername = "localhost";
$username = "username";
$password = "password";
$dbname = "dressify_db";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

session_start();

// Fetch products in the cart to display on checkout page
$cartItems = $_SESSION['cart'] ?? [];
$productDetails = [];

if (!empty($cartItems)) {
    $productIds = implode(',', array_keys($cartItems));
    $stmt = $conn->prepare("SELECT * FROM products WHERE product_id IN ($productIds)");
    $stmt->execute();
    $productDetails = $stmt->get_result()->fetch_all(MYSQLI_ASSOC);
}

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $name = $_POST['name'];
    $address = $_POST['address'];
    $email = $_POST['email'];

    // Validate the information
    if (empty($name) || empty($address) || !filter_var($email, FILTER_VALIDATE_EMAIL)) {
        $error = "Please fill in all fields correctly.";
    } else {
        // Insert the order into the database
        $stmt = $conn->prepare("INSERT INTO customers (fullname, address, email) VALUES (?, ?, ?)");
        $stmt->bind_param("sss", $name, $address, $email);
        $stmt->execute();
        $orderId = $stmt->insert_id;

        // Insert the ordered products
        foreach ($cartItems as $productId => $quantity) {
            $stmt = $conn->prepare("INSERT INTO order_items (order_id, product_id, quantity) VALUES (?, ?, ?)");
            $stmt->bind_param("iii", $orderId, $productId, $quantity);
            $stmt->execute();
        }

        // Clear the cart and redirect to the confirmation page
        $_SESSION['cart'] = [];
        header("Location: CustomerOrderConfirmation.php?order_id=" . $orderId);
        exit();
    }
}

// Calculate dynamic values
$totalPrice = 0;
$discount = 0.02; // 2% discount
$deliveryCost = 7.00; // Fixed delivery cost
foreach ($productDetails as $product) {
    $quantity = $cartItems[$product['product_id']];
    $productTotal = $product['price'] * $quantity;
    
    // Apply discount if more than 2 units of a product
    if ($quantity > 2) {
        $productTotal -= $productTotal * $discount;
    }
    
    $totalPrice += $productTotal;
}

$grandTotal = $totalPrice + $deliveryCost;

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="CheckoutStyle.css">
    <title>Checkout</title>
</head>
<body>
    <?php include 'CustomerSidebar.php'; ?>
    <main class="checkout-container">
        <div class="checkout-content">
            <section class="product-section">
                <div class="product-details">
                    <div class="logo-container">
                        <img loading="lazy" src="https://cdn.builder.io/api/v1/image/assets/TEMP/c30996d5703da71b9f16896489382a2dca74474011131c05ba13ce2a9ac40fe9?apiKey=2cbb572e4cb94131a46c507d9ddbcac0&" class="logo" alt="Company logo" />
                    </div>
                    <div class="product-info">
                        <?php foreach ($productDetails as $product): ?>
                            <div class="product-card">
                                <div class="product-content">
                                    <div class="product-image-container">
                                        <div class="product-image-wrapper">
                                            <img loading="lazy" src="<?php echo htmlspecialchars($product['image_url']); ?>" class="product-image" alt="Product image" />
                                            <div class="product-text">
                                                <h2 class="product-name"><?php echo htmlspecialchars($product['product_name']); ?></h2>
                                                <p class="product-details"><?php echo htmlspecialchars($product['product_description']); ?></p>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="product-price-container">
                                        <div class="product-price-wrapper">
                                            <p class="product-quantity">Amount: <?php echo htmlspecialchars($cartItems[$product['product_id']]); ?></p>
                                            <div class="product-price">
                                                <span class="price-value">$<?php echo htmlspecialchars($product['price']); ?></span>
                                                <img loading="lazy" src="https://cdn.builder.io/api/v1/image/assets/TEMP/a9c518354bf85cc83ba0aac5609761f02d9d835923ef34f5a4187c32476b0720?apiKey=2cbb572e4cb94131a46c507d9ddbcac0&" class="price-icon" alt="Price icon" />
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        <?php endforeach; ?>
                    </div>
                </div>
            </section>
            <section class="order-section">
                <div class="order-content">
                    <h2 class="section-title">Shipping Address</h2>
                    <form class="address-form" id="addressForm" method="POST" action="">
                        <div class="form-row">
                            <div class="form-column">
                                <div class="form-group">
                                    <label for="name">Full Name</label>
                                    <input type="text" id="name" name="name" class="form-input" required />
                                    <label for="address">Street Address</label>
                                    <input type="text" id="address" name="address" class="form-input" required />
                                    <label for="email">Email</label>
                                    <input type="email" id="email" name="email" class="form-input" required />
                                </div>
                            </div>
                        </div>
                        <div class="form-actions">
                            <button type="button" class="btn btn-cancel">Cancel</button>
                            <button type="submit" class="btn btn-save">Save this Address</button>
                        </div>
                    </form>
                    <h2 class="section-title">Package Note</h2>
                    <form class="note-form" id="noteForm">
                        <label for="packageNote" class="visually-hidden">Leave your note here</label>
                        <textarea id="packageNote" name="packageNote" class="note-input" placeholder="Leave your note here"></textarea>
                        <div class="form-actions">
                            <button type="button" class="btn btn-cancel">Cancel</button>
                            <button type="submit" class="btn btn-save">Save this Note</button>
                        </div>
                    </form>
                    <h2 class="section-title">Order Confirmation</h2>
                    <div class="order-summary">
                        <button type="submit" class="place-order-btn" id="placeOrderBtn">Place Order</button>
                        <p class="terms">
                            By placing your order, you agree to our company
                            <a href="#" style="color: rgba(0, 0, 0, 1)">Privacy policy</a> and
                            <a href="#" style="color: rgba(0, 0, 0, 1)">Conditions of use.</a>
                        </p>
                        <hr class="divider" />
                        <h3 class="section-title">Order Summary</h3>
                        <div class="summary-details">
                            <div class="summary-labels">
                                <p>Items (<?php echo count($cartItems); ?>)</p>
                                <p>Delivery</p>
                                <p>Discount</p>
                            </div>
                            <div class="summary-values">
                                <p>$<?php echo number_format($totalPrice, 2); ?></p>
                                <p>$<?php echo number_format($deliveryCost, 2); ?></p>
                                <p>$<?php echo number_format($totalPrice * $discount, 2); ?></p>
                            </div>
                        </div>
                        <hr class="divider" />
                        <div class="total">
                            <p>Order Total:</p>
                            <p>$<?php echo number_format($grandTotal, 2); ?></p>
                        </div>
                    </div>
                </div>
            </section>
        </div>
    </main>
    <script>
        document.getElementById('placeOrderBtn').addEventListener('click', function() {
            const form = document.getElementById('addressForm');
            if (form.checkValidity()) {
                form.submit();
            } else {
                alert('Please fill out all required fields.');
            }
        });
    </script>
</body>
</html>
