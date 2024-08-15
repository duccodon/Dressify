<?php
include '../../ConnectDB.php';


//if (!isset($_SESSION['cus_id'])) {
//    header("Location: login.php");
//    exit();
//}

$_SESSION['cus_id'] = 3; // For testing purposes
$cus_id = $_SESSION['cus_id'];

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $username = $_POST['username'];
    $email = $_POST['email'];
    $fullname = $_POST['shop_name']; 
    $country = $_POST['country'];
    $city = $_POST['city'];
    $address = $_POST['address'];
    $contact_number = $_POST['contact'];
    if (!empty($_POST['password'])) {
        //Neu em muon hash password thi
        //$password = password_hash($_POST['password'], PASSWORD_BCRYPT);
        $password = $_POST['password'];
        $update_password = true;
    } else {
        $update_password = false;
    }

    $avatar = "";
    if (isset($_FILES['avatar-upload']) && $_FILES['avatar-upload']['error'] == 0) {
        $file_name = uniqid() . '_' . basename($_FILES['avatar-upload']['name']);
        
        // Validate file type
        $allowed_types = ['image/jpeg', 'image/png', 'image/gif'];
        if (!in_array($_FILES['avatar-upload']['type'], $allowed_types)) {
            echo "Error: Invalid file type. Only JPG, PNG, and GIF are allowed.";
        } elseif ($_FILES['avatar-upload']['size'] > 5000000) {
            echo "Error: File size exceeds limit (5MB).";
        } elseif (move_uploaded_file($_FILES['avatar-upload']['tmp_name'], $file_name)) {
            $avatar = $file_name;
            echo "File uploaded successfully as $file_name.";
        } else {
            echo "Failed to move uploaded file. Error: " . error_get_last()['message'];
            $avatar = "";
        }
    }

    // Prepare SQL statement
    $sql = "UPDATE customers SET username=?, email=?, fullname=?, country=?, city=?, address=?, contact_number=?";
    $params = [$username, $email, $fullname, $country, $city, $address, $contact_number];
    $types = "sssssss";

    if ($update_password) {
        $sql .= ", password=?";
        $params[] = $password;
        $types .= "s";
    }

    // Add avatar to SQL and params if it's not empty
    if (!empty($avatar)) {
        $sql .= ", avatar=?";
        $params[] = $avatar;
        $types .= "s";
    }
    
    $sql .= " WHERE cus_id=?";
    $params[] = $cus_id;
    $types .= "i";

    $stmt = $conn->prepare($sql);
    $stmt->bind_param($types, ...$params);

    if ($stmt->execute()) {
        echo "Record updated successfully";
    } else {
        echo "Error updating record: " . $stmt->error;
    }

    $stmt->close();
}

// Fetch current user data
$sql = "SELECT * FROM customers WHERE cus_id = ?";
$stmt = $conn->prepare($sql);
$stmt->bind_param("i", $cus_id);
$stmt->execute();
$result = $stmt->get_result();

if ($result->num_rows > 0) {
    $row = $result->fetch_assoc();
    $username = $row['username'];
    $email = $row['email'];
    $fullname = $row['fullname'];
    $country = $row['country'];
    $city = $row['city'];
    $address = $row['address'];
    $contact_number = $row['contact_number'];
    $password = $row['password'];   
    $avatar = !empty($row['avatar']) ? $row['avatar'] : 'img/default_avatar.jpg';
} else {
    echo "No user found";
}

$stmt->close();
$conn->close();
?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="InfoOwnerStyle.css">
  <title>Profile</title>
</head>
<body>
  <?php include 'OwnerSidebar.php'; ?>
  <section class="profile-container">
    <main class="main-content">
    <form class="profile-form" enctype="multipart/form-data" method="POST" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>">
        <div class="avatar-container">
            <img src="<?php echo htmlspecialchars($avatar); ?>" class="avatar-background" alt="Profile background" style="border-radius: 50%;"/>
            <label for="avatar-upload" class="avatar-icon-label">
                <img loading="lazy" src="https://cdn.builder.io/api/v1/image/assets/TEMP/f0ff525f8f701695d4c0f9c4a79c121f4bda49dee8aec8044b7c4ed7cc911cf7?apiKey=2cbb572e4cb94131a46c507d9ddbcac0&" class="avatar-icon" alt="User avatar" />
            </label>
            <input type="file" id="avatar-upload" name="avatar-upload" accept="image/*" style="display: none;">
        </div>
        <h2 class="username"><?php echo htmlspecialchars($username); ?>.</h2>

        <label for="username" class="form-label">Name</label>
        <input type="text" id="username" name="username" class="form-input" value="<?php echo htmlspecialchars($username); ?>" />

        <label for="email" class="form-label">Email</label>
        <input type="email" id="email" name="email" class="form-input" value="<?php echo htmlspecialchars($email); ?>" />

        <div class="form-row">
            <div class="form-columns">
                <div class="form-column">
                    <div class="form-group">
                        <label for="country" class="form-label">Country</label>
                        <input type="text" id="country" name="country" class="form-input" value="<?php echo htmlspecialchars($country); ?>" />
                    </div>
                </div>
                <div class="form-column">
                    <div class="form-group">
                        <label for="city" class="form-label">City</label>
                        <input type="text" id="city" name="city" class="form-input" value="<?php echo htmlspecialchars($city); ?>" />
                    </div>
                </div>
            </div>
        </div>

        <label for="address" class="form-label">Address</label>
        <input type="text" id="address" name="address" class="form-input" value="<?php echo htmlspecialchars($address); ?>" />

        <label for="contact" class="form-label">Contact Number</label>
        <input type="tel" id="contact" name="contact" class="form-input" value="<?php echo htmlspecialchars($contact_number); ?>" />

        <label for="shop_name" class="form-label">Shop Name</label>
        <input type="text" id="shop_name" name="shop_name" class="form-input" value="<?php echo htmlspecialchars($fullname); ?>" />

        <label for="password" class="form-label">Password</label>
        <input type="password" id="password" name="password" class="form-input" placeholder="Enter new password">

        <button type="submit" class="submit-button">Submit</button>
    </form>
    <script src="InfoOwnerScript.js"></script>
    </main>
  </section>
</body>
</html>
