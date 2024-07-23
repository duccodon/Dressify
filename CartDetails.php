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
              <table width="100%"> 
              <thead>
                <tr>
                  <td>Product Image</td>
                  <td>Product Name</td>
                  <td>Quantity</td>
                  <td>Price per product</td>
                </tr>
              </thead>

              <tbody>
                <tr>
                  <td>
                    <img src = "/img/1.jpg" class = "product-image">
                  </td>
                  <td>Anh da den...</td>
                  <td>
                    <form>
                      <input type="number" name="quantity" value="1" min="1" max="1000" step="1">
                      <input type="hidden" name="product_id" value="1">
                      <input type="submit" value="Update">
                    </form>
                  </td>
                  <td>100 000</td>
                </tr>

                <tr>
                  <td>
                    <img src = "/img/1.jpg" class = "product-image">
                  </td>
                  <td>Anh da den premium</td>
                  <td>
                    <form>
                      <input type="number" name="quantity" value="1" min="1" max="1000" step="1">
                      <input type="hidden" name="product_id" value="1">
                      <input type="submit" value="Update">
                    </form>
                  </td>
                  <td>1 000 000</td>
                </tr>

                <tr>
                  <td>
                    <img src = "/img/1.jpg" class = "product-image">
                  </td>
                  <td>Anh da den++</td>
                  <td>
                    <form>
                      <input type="number" name="quantity" value="1" min="1" max="1000" step="1">
                      <input type="hidden" name="product_id" value="1">
                      <input type="submit" value="Update">
                    </form>
                  </td>
                  <td>100 000 000</td>
                </tr>
              </tbody>
            </table>
          </div>
        </div> 
      </div>
    </div>
  </div>
</div>
    <div class ="submit-button-container">   
      <button type="submit" class ="submit-button">Check out</button>
    </div>
</body>
