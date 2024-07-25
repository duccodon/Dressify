<?php
session_start();
$servername = "localhost";
$username = "root"; 
$password = ""; 
$dbname = "dressify"; 

$conn = new mysqli($servername, $username, $password, $dbname);

if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

//if (!isset($_SESSION['user_id'])) {
//    header("Location: login.php");
//    echo "Error updating record: " . $stmt->error;
//    exit();
//}

$_SESSION['user_id'] = 1; // For testing purposes
$user_id = $_SESSION['user_id']; 

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $name = $_POST['name'];
    $email = $_POST['email'];
    $country = $_POST['country'];
    $city = $_POST['city'];
    $address = $_POST['address'];
    $contact = $_POST['contact'];
    $shop_name = $_POST['shop_name'];
    $password = password_hash($_POST['password'], PASSWORD_BCRYPT);

    $avatar_path = "";
    if (isset($_FILES['avatar-upload']) && $_FILES['avatar-upload']['error'] == 0) {
        $file_name = uniqid() . '_' . basename($_FILES['avatar-upload']['name']);
        $avatar_path = $file_name; // Store just the filename
        
        // Validate file type
        $allowed_types = ['image/jpeg', 'image/png', 'image/gif'];
        if (!in_array($_FILES['avatar-upload']['type'], $allowed_types)) {
            echo "Error: Invalid file type. Only JPG, PNG, and GIF are allowed.";
        } elseif ($_FILES['avatar-upload']['size'] > 5000000) {
            echo "Error: File size exceeds limit (5MB).";
        } elseif (move_uploaded_file($_FILES['avatar-upload']['tmp_name'], $file_name)) {
            echo "File uploaded successfully as $file_name.";
        } else {
            echo "Failed to move uploaded file.";
            $avatar_path = "";
        }
    }

    // Prepare SQL statement
    $sql = "UPDATE rental_owners SET name=?, email=?, country=?, city=?, address=?, contact_number=?, shop_name=?, password=?";
    $params = [$name, $email, $country, $city, $address, $contact, $shop_name, $password];
    $types = "ssssssss";

    // Add avatar_path to SQL and params if it's not empty
    if (!empty($avatar_path)) {
        $sql .= ", avatar_path=?";
        $params[] = $avatar_path;
        $types .= "s";
    }

    $sql .= " WHERE id=?";
    $params[] = $user_id;
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
$sql = "SELECT * FROM rental_owners WHERE id = ?";
$stmt = $conn->prepare($sql);
$stmt->bind_param("i", $user_id);
$stmt->execute();
$result = $stmt->get_result();

if ($result->num_rows > 0) {
    $row = $result->fetch_assoc();
    $name = $row['name'];
    $email = $row['email'];
    $country = $row['country'];
    $city = $row['city'];
    $address = $row['address'];
    $contact = $row['contact_number'];
    $shop_name = $row['shop_name'];
    $password = $row['password'];
    $avatar_path = $row['avatar_path'];
    
    // If avatar_path is empty, set it to the default avatar
    if (empty($avatar_path)) {
        $avatar_path = 'avatar.jpg';
    }
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
    <link rel="stylesheet" type="text/css" href="style.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.2/css/all.min.css" integrity="sha512-SnH5WK+bZxgPHs44uWIX+LLJAJ9/2PkPKZ5QiAj6Ta86w+fsb2TkcmfRyVX3pBnMFcV7oQPJkl9QevSCWr3W6A==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel= "stylesheet" href= "https://maxst.icons8.com/vue-static/landings/line-awesome/line-awesome/1.3.0/css/line-awesome.min.css" >
    <link href="https://fonts.googleapis.com/css2?family=Text+Me+One&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Rubik:wght@400;500;700&display=swap" rel="stylesheet">
    <title>Dressify Profile</title>
</head>
<body>
    <div class="container">
        <div class="sidebar">
            <div class="sidebar-brand">
                <h2><span class=""></span>Dressify</h2>
            </div>
    
            <div class="sidebar-menu">
                <ul>
                    <li>
                        <a href="Admin.php"><span class="la la-chalkboard"></span>
                        <span>Dashboard</span></a>
                    </li>
                    <li>
                        <a href="AdminCustomerinfo.php"><span class="la la-user-circle"></span>
                        <span>Customers</span></a>
                    </li>
                    <li>
                        <a href="AdminOwnerinfo.php" class="active"><span class="la la-user-tie"></span>
                        <span>Rental owner</span></a>
                    </li>
                    <li>
                        <a href="AdminOrder.php"><span class="la la-shipping-fast"></span>
                        <span>Orders</span></a>
                    </li>
                    <li>
                        <a href="AdminProductlisting.php"><span class="la la-warehouse"></span>
                        <span>Inventory</span></a>
                    </li>
                    <li>
                        <a href="AdminFeedback.php"><span class="la la-bullhorn"></span>
                        <span>Feedback</span></a>
                    </li>
                    <li>
                        <a href="join.php"><span class="la la-sign-out"></span>
                        <span>Log out</span></a>
                    </li>
                </ul>
            </div>
        </div>
    
        <div class="main-content">
            <header>
                <h2>
                    <label for="">
                        <span class="la la-bars"></span>
                    </label>
                    <div class="rent">Rental Owner</div>
                </h2>
    
                <div class="search-wrapper">
                    <span class="la la-search"></span>
                    <input type="search" placeholder="Search"/>
                </div>
    
                <div class="user-wrapper">
                    <div class="user-info">
                        <h4>Friends</h4>
                        <small>Admin</small>
                    </div>
                    <img src="<?php echo $avatar_path; ?>" alt="Avatar">
                </div>
            </header>
    
        </nav>
        <main class="content">
            <section class="profile">
                <form enctype="multipart/form-data" method="POST" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>">
                    <div class="black-header"></div>
                    <div class="avatar-wrapper">
                        <div class="avatar">
                            <img src="<?php echo $avatar_path; ?>" alt="avatar">
                        </div>
                        <input type="file" id="avatar-upload" name="avatar-upload" accept="image/*" style="display: none;">
                        <label for="avatar-upload" class="avatar-edit-icon"><i class="fas fa-pencil-alt"></i></label>
                    </div>
                    <h2>Sonali.</h2>
                    <div class="form-group">
                      <label for="name" class="custom-label">Name</label>
                      <input type="text" id="name" name="name" value="<?php echo $name; ?>">
                    </div>
                    
                    <div class="form-group">
                      <label for="email" class="custom-label">Email</label>
                      <input type="email" id="email" name="email" value="<?php echo $email; ?>">
                    </div>
                    
                    <div class="form-row">
                      <div class="form-group half">
                        <label for="country" class="custom-label">Country</label>
                        <input type="text" id="country" name="country" value="<?php echo $country; ?>">
                      </div>
                      <div class="form-group half">
                        <label for="city" class="custom-label">City</label>
                        <input type="text" id="city" name="city"  value="<?php echo $city; ?>">
                      </div>
                    </div>
                    
                    <div class="form-group">
                      <label for="address" class="custom-label">Address</label>
                      <input type="text" id="address" name="address" value="<?php echo $address; ?>">
                    </div>
                    
                    <div class="form-group">
                      <label for="contact" class="custom-label">Contact Number</label>
                      <input type="tel" id="contact" name="contact" value="<?php echo $contact; ?>">
                    </div>
                    
                    <div class="form-group">
                      <label for="username" class="custom-label">Shop name</label>
                      <input type="text" id="shop_name" name="shop_name"value="<?php echo $shop_name; ?>">
                    </div>
                    
                    <div class="form-group">
                      <label for="password" class="custom-label">Password</label>
                      <input type="password" id="password" name="password" value="<?php echo $password; ?>">
                    </div>

                    <div class="form-group">
                      <input type="submit" value="Submit">
                    </div>
                    
                  </form>
            </section>
        </main>
    </div>
    <script src="InfoOwnerScript.js"></script>
</body>
</html>
