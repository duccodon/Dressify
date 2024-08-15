<?php
    include '../../ConnectDB.php';
    session_start();

    if(isset($_POST['update-profile'])){
      $filter_fullname = filter_var($_POST['name'], FILTER_SANITIZE_STRING);
      $new_fullname = mysqli_real_escape_string($conn, $filter_fullname);
      if (!empty($new_fullname)){
        mysqli_query($conn, "UPDATE customers SET fullname='$new_fullname' WHERE cus_id ='$_SESSION[cus_id]'") or die('Query failed');
      }

      $filter_email = filter_var($_POST['email'], FILTER_SANITIZE_STRING);
      $new_email = mysqli_real_escape_string($conn, $filter_email);
      if (!empty($new_email)){
        mysqli_query($conn, "UPDATE customers SET email='$new_email' WHERE cus_id ='$_SESSION[cus_id]'") or die('Query failed');
      }

      $filter_country = filter_var($_POST['country'], FILTER_SANITIZE_STRING);
      $new_country = mysqli_real_escape_string($conn, $filter_country);
      if (!empty($new_country)){
        mysqli_query($conn, "UPDATE customers SET country='$new_country' WHERE cus_id ='$_SESSION[cus_id]'") or die('Query failed');
      }

      $filter_city = filter_var($_POST['city'], FILTER_SANITIZE_STRING);
      $new_city = mysqli_real_escape_string($conn, $filter_city);
      if (!empty($new_city)){
        mysqli_query($conn, "UPDATE customers SET city='$new_city' WHERE cus_id ='$_SESSION[cus_id]'") or die('Query failed');
      }

      $filter_address = filter_var($_POST['address'], FILTER_SANITIZE_STRING);
      $new_address = mysqli_real_escape_string($conn, $filter_address);
      if (!empty($new_address)){
        mysqli_query($conn, "UPDATE customers SET `address`='$new_address' WHERE cus_id ='$_SESSION[cus_id]'") or die('Query failed');
      }

      $filter_number = filter_var($_POST['number'], FILTER_SANITIZE_STRING);
      $new_number = mysqli_real_escape_string($conn, $filter_number);
      if (!empty($new_number)){
        mysqli_query($conn, "UPDATE customers SET `number`='$new_number' WHERE cus_id ='$_SESSION[cus_id]'") or die('Query failed');
      }

      $filter_username = filter_var($_POST['username'], FILTER_SANITIZE_STRING);
      $new_username = mysqli_real_escape_string($conn, $filter_username);
      if (!empty($new_username)){
        mysqli_query($conn, "UPDATE customers SET username='$new_username' WHERE cus_id ='$_SESSION[cus_id]'") or die('Query failed');
      }
    }

    $user_select = mysqli_query($conn, "SELECT * FROM customers where cus_id ='$_SESSION[cus_id]'") or die('Query failed');
    if (mysqli_num_rows($user_select) > 0){
      $row = mysqli_fetch_assoc($user_select);
      $name = $row['fullname'];
      $email = $row['email'];
      $country = $row['country'];
      $city = $row['city'];
      $address = $row['address'];
      $number = $row['contact_number'];
      $username = $row['username'];
    }
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
      <form class="profile-form" method="post">
        <div class="avatar-container">
          <img src="../../img/1.jpg" class="avatar-background" alt="Profile background" style="border-radius: 50%;"/>
          <img loading="lazy" src="https://cdn.builder.io/api/v1/image/assets/TEMP/f0ff525f8f701695d4c0f9c4a79c121f4bda49dee8aec8044b7c4ed7cc911cf7?apiKey=2cbb572e4cb94131a46c507d9ddbcac0&" class="avatar-icon" alt="User avatar" />
        </div>
        <h2 class="username">Sonali.</h2>
        
        <label for="name" class="form-label">Full name</label>
        <input type="text" id="name" name="name" class="form-input" placeholder="<?php echo"$name";?>"/>
        
        <label for="email" class="form-label">Email</label>
        <input type="email" id="email" name="email" class="form-input" placeholder="<?php echo"$email";?>"/>
        
        <div class="form-row">
          <div class="form-columns">
            <div class="form-column">
              <div class="form-group">
                <label for="country" class="form-label">Country</label>
                <input type="text" id="country" name="country" class="form-input" placeholder="<?php echo"$country";?>"/>
              </div>
            </div>
            <div class="form-column">
              <div class="form-group">
                <label for="city" class="form-label">City</label>
                <input type="text" id="city" name="city" class="form-input" placeholder="<?php echo"$city";?>"/>
              </div>
            </div>
          </div>
        </div>
        
        <label for="address" class="form-label">Address</label>
        <input type="text" id="address" name="address" class="form-input" placeholder="<?php echo"$address";?>"/>
        
        <label for="contact" class="form-label">Contact Number</label>
        <input type="tel" id="contact" name="number" class="form-input" placeholder="<?php echo"$number";?>"/>
        
        <label for="username" class="form-label">Username</label>
        <input type="text" id="username" name="username" class="form-input" placeholder="<?php echo"$username";?>"/>

        <button type="submit" name="update-profile" class="submit-button">Submit</button>
      </form>
    </main>
  </section>
</body>
</html>
