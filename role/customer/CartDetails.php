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

// Initialize the cart if it doesn't exist
if (!isset($_SESSION['cart'])) {
    $_SESSION['cart'] = [];
}

// Handle form submissions
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    if (isset($_POST['add_to_cart'])) {
        $productId = $_POST['product_id'];
        $quantity = $_POST['quantity'];

        if (isset($_SESSION['cart'][$productId])) {
            $_SESSION['cart'][$productId] += $quantity;
        } else {
            $_SESSION['cart'][$productId] = $quantity;
        }

        header("Location: CartDetails.php");
        exit();
    }

    if (isset($_POST['update_quantity'])) {
        foreach ($_POST['quantity'] as $productId => $quantity) {
            if (isset($_SESSION['cart'][$productId])) {
                $_SESSION['cart'][$productId] = max(1, (int)$quantity);
            }
        }
        header("Location: CartDetails.php");
        exit();
    }

    if (isset($_POST['remove_item'])) {
        $productId = $_POST['product_id'];
        unset($_SESSION['cart'][$productId]);
        header("Location: CartDetails.php");
        exit();
    }
}

// Fetch products from the database
$stmt = $conn->prepare("SELECT * FROM products");
$stmt->execute();
$products = $stmt->get_result()->fetch_all(MYSQLI_ASSOC);

// Fetch products in the cart
$cartItems = $_SESSION['cart'] ?? [];
$productDetails = [];

if (!empty($cartItems)) {
    $productIds = implode(',', array_keys($cartItems));
    $stmt = $conn->prepare("SELECT * FROM products WHERE product_id IN ($productIds)");
    $stmt->execute();
    $productDetails = $stmt->get_result()->fetch_all(MYSQLI_ASSOC);
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="CartDetails.css">
</head>
<body>
<div> 
  <h2>List of order:</h2>
  <div class="recent-grid">
    <div class="orders">
      <div class="card">
        <div class="card-body">
          <div class="table-responsive">
            <form method="POST" action="">
              <table width="100%"> 
                <thead>
                  <tr>
                    <td>Product Image</td>
                    <td>Product Name</td>
                    <td>Quantity</td>
                    <td>Price per product</td>
                    <td>Action</td>
                  </tr>
                </thead>
                <tbody>
                  <?php foreach ($productDetails as $product): ?>
                  <tr>
                    <td>
                      <img src="/img/<?php echo htmlspecialchars($product['image']); ?>" class="product-image">
                    </td>
                    <td><?php echo htmlspecialchars($product['name']); ?></td>
                    <td>
                      <input type="number" name="quantity[<?php echo htmlspecialchars($product['product_id']); ?>]" value="<?php echo htmlspecialchars($cartItems[$product['product_id']]); ?>" min="1" max="1000" step="1">
                    </td>
                    <td><?php echo htmlspecialchars($product['price']); ?></td>
                    <td>
                      <input type="hidden" name="product_id" value="<?php echo htmlspecialchars($product['product_id']); ?>">
                      <button type="submit" name="update_quantity" value="Update">Update</button>
                      <button type="submit" name="remove_item" value="Remove">Remove</button>
                    </td>
                  </tr>
                  <?php endforeach; ?>
                </tbody>
              </table>
              <button type="submit" name="update_quantity">Update Quantities</button>
            </form>
          </div>
        </div> 
      </div>
    </div>
  </div>
</div>
<div class="submit-button-container">   
  <a href="CheckOut.php">
    <button type="button" class="submit-button">Check out</button>
  </a>
</div>
</body>
</html>
