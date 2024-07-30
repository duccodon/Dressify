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
            <div id = "form" class ="form-content">
                <div class="form-left">
                  <label for="item-name" class="form-label">Item Name</label>
                  <input type="text" id="item-name" class="form-input" />
        
                  <label for="price" class="form-label">Price</label>
                  <input type="number" id="price" class="form-input" />
        
                  <label for="category" class="form-label">Category</label>
                  <input type="text" id="category" class="form-input" />
        
                  <label for="description" class="form-label">Description</label>
                  <textarea id="description" class="form-textarea"></textarea>
        
                  <div class="model-count">
                    <label for="model-count" class="model-count-label">Number of models</label>
                    <input type="number" id="model-count" class="model-count-input" value="1" min="1" />
                  </div>
                </div>
        
                <div class="form-right">
                  <label for="image-upload" class="image-upload-label">Add Image</label>
                  <div class="image-upload-area">
                    <label for="image-upload" class="image-upload-button" tabindex="0" role="button">+</label>
                    <input type="file" id="image-upload" accept="image/*" style="display: none;" />
                  </div>
                  <button type="submit" class="submit-button" onclick ="openPopup()">Submit</button>
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
