<?php
    include '../../ConnectDB.php';
    session_start();

?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="CustomerProfileStyle.css">
  <title>Profile  </title>
</head>
<body>
  <?php include 'CustomerSidebar.php'; ?>
  <section class="profile-container">
    <main class="main-content">
      <form class="profile-form">
        <div class="avatar-container">
          <img src="../../img/1.jpg" class="avatar-background" alt="Profile background" style="border-radius: 50%;"/>
          <img loading="lazy" src="https://cdn.builder.io/api/v1/image/assets/TEMP/f0ff525f8f701695d4c0f9c4a79c121f4bda49dee8aec8044b7c4ed7cc911cf7?apiKey=2cbb572e4cb94131a46c507d9ddbcac0&" class="avatar-icon" alt="User avatar" />
        </div>
        <h2 class="username">Sonali.</h2>
        
        <label for="name" class="form-label">Name</label>
        <input type="text" id="name" class="form-input" />
        
        <label for="email" class="form-label">Email</label>
        <input type="email" id="email" class="form-input" />
        
        <div class="form-row">
          <div class="form-columns">
            <div class="form-column">
              <div class="form-group">
                <label for="country" class="form-label">Country</label>
                <input type="text" id="country" class="form-input" />
              </div>
            </div>
            <div class="form-column">
              <div class="form-group">
                <label for="city" class="form-label">City</label>
                <input type="text" id="city" class="form-input" />
              </div>
            </div>
          </div>
        </div>
        
        <label for="address" class="form-label">Address</label>
        <input type="text" id="address" class="form-input" />
        
        <label for="contact" class="form-label">Contact Number</label>
        <input type="tel" id="contact" class="form-input" />
        
        <label for="username" class="form-label">Username</label>
        <input type="text" id="username" class="form-input" />
        
        <label for="password" class="form-label">Password</label>
        <input type="password" id="password" class="form-input" />

        <button type="submit" class="submit-button">Submit</button>
      </form>
    </main>
  </section>
</body>
</html>
