<?php
  include '../../ConnectDB.php';
  session_start();

$uploadsDir = '../../img/product/';
if (!file_exists($uploadsDir)) {
    mkdir($uploadsDir, 0775, true);
}
if ($_SERVER['REQUEST_METHOD'] == 'POST'){
$itemname = $_POST["itemname"];
$price = $_POST["price"];
$ownerid = $_SESSION['cus_id'];
$category = $_POST["category"];
$description = $_POST["description"];
$stock = $_POST["stock"];
$image1 = '';
$image2 = '';
$image3 = '';

$images = ['image1', 'image2', 'image3'];
$imagePaths = [];

foreach ($_FILES['image-upload']['tmp_name'] as $key => $tmp_name) {
  $filename = basename($_FILES['image-upload']['name'][$key]);
  $targetFilePath = $uploadsDir . $filename;

  // Kiểm tra xem tệp có phải là hình ảnh không
  $check = getimagesize($tmp_name);
  if ($check !== false) {
      if (move_uploaded_file($tmp_name, $targetFilePath)) {
          $imagePaths[] = $filename;
      } else {
          echo "Sorry, there was an error uploading your file.";
      }
  } else {
      echo "File is not an image.";
  }
}


// Đảm bảo rằng có đủ hình ảnh để lưu vào cơ sở dữ liệu
$image1 = isset($imagePaths[0]) ? $imagePaths[0] : '';
$image2 = isset($imagePaths[1]) ? $imagePaths[1] : '';
$image3 = isset($imagePaths[2]) ? $imagePaths[2] : '';

$sql = "INSERT INTO products (product_name, owner_id, `description`, price, category, stock, image1, image2, image3)
        VALUES (?, ?, ?, ?, ?, ?, ?, ?, ?)";
$stmt = $conn->prepare($sql);

$stmt = mysqli_stmt_init($conn);

if (!mysqli_stmt_prepare($stmt, $sql)) {
    die(mysqli_error($conn));
}

mysqli_stmt_bind_param($stmt, "sssssssss", $itemname,$ownerid, $description, $price, $category, $stock, $image1, $image2, $image3);

if (!mysqli_stmt_execute($stmt)) {
    echo "Error: " . $sql . "<br>" . $conn->error;
}
}
?>



<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="OwnerForm.css">
</head>
<body>
  <?php include 'OwnerSidebar.php'; ?>
  <main class="main-content1">
    <section class="features">
      <h2 class="feature-title">Widely express your custom</h2>
      <p class="feature-item">Fast Access</p>
      <p class="feature-item">Easy Transaction</p>
      <p class="feature-item">Neat and Safe</p>
      <img loading="lazy" src="https://cdn.builder.io/api/v1/image/assets%2Fef65c1600ab64517b49ba8fffd8c443f%2F0b2b2d1390bb4c34bfc292a56ff7ad7c" class="feature-image" alt="Feature illustration" /> 
    </section>
      
    <section class="product-form">
          <h2 class="form-title">Product registration form</h2>
          <form class="form-container" id = "formid">
            <div id = "popup" class ="upload-column" >
                      <img loading="lazy" src="https://cdn.builder.io/api/v1/image/assets/TEMP/d0e191efb051c29ac58b2440c4b843f808769d0b265adf73f0391bff563469a6?apiKey=ef65c1600ab64517b49ba8fffd8c443f&" class="upload-icon" alt="Upload success icon" />
                      <p class="upload-status">Upload successful</p>
                      <a href="OwnerForm.php" class="new-upload-link">New Upload</a>
            </div>
          </form>
      </section>
    </main>
    </body>
</head>
</html>

