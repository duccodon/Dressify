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
          <form action="formdata.php" method="POST" enctype="multipart/form-data" class="form-container" id = "formid" onsubmit="validateForm(event)">
            <div id = "form" class ="form-content">
                <div class="form-left">
                  <label for="item-name"  class="form-label">Item Name</label>
                  <input type="text" id="item-name" name ="itemname" class="form-input" placeholder="Enter item name"/>
        
                  <label for="price" class="form-label">Price</label>
                  <input type="number" id="price" class="form-input" name ="price" placeholder="Enter price (vnd)"/>
        
                  <label for="category" class="form-label">Category</label>
                  <input type="text" id="category" class="form-input" name ="category" placeholder="Enter category"/>
        
                  <label for="description" class="form-label">Description</label>
                  <textarea id="description" class="form-textarea" name="description" placeholder="Enter here"></textarea>
        
                  <div class="model-count">
                    <label for="model-count" class="model-count-label">Stock</label>
                    <input type="number" id="model-count" name="stock" class="model-count-input" value="1" min="1" />
                  </div>
                </div>
        
                <div class="form-right">
                  <label for="image-upload" class="image-upload-label">Add Image</label>
                  <div class="image-upload-area">
                    <label for="image-upload" class="image-upload-button" tabindex="0" role="button">+</label>
                    <input type="file" id="image-upload" name ="image-upload[]" accept="image/*" multiple style="display: none;" />
                    <div class="image-preview">
                        <div id="image1" src="" alt="Image 1"></div>
                        <div id="image2" src="" alt="Image 2"></div>
                        <div id="image3" src="" alt="Image 3"></div>
                    </div>
                  </div>
                  <button type="submit" class="submit-button">Submit</button>
                  <fieldset id="field" class="hidden">
                  <legend>Error</legend>
                  <div id = "error" class = "error"></div>
                  </fieldset>
                  </div>
                </div>
            </div>
            <div id = "popup" class ="hidden" >
                      <img loading="lazy" src="https://cdn.builder.io/api/v1/image/assets/TEMP/d0e191efb051c29ac58b2440c4b843f808769d0b265adf73f0391bff563469a6?apiKey=ef65c1600ab64517b49ba8fffd8c443f&" class="upload-icon" alt="Upload success icon" />
                      <p class="upload-status">Upload successful</p>
                      <a href="OwnerForm.php" class="new-upload-link">New Upload</a>
            </div>
          </form>
      </section>
    </main>
    </body>
    <script src="submit.js"></script>
</head>
</html>
