<?php
    include 'ConnectDB.php';

    if(isset($_POST['submit-create'])){
        $filter_username = filter_var($_POST['username'], FILTER_SANITIZE_STRING);
        $username = mysqli_real_escape_string($conn, $filter_username);

        $filter_email = filter_var($_POST['email'], FILTER_SANITIZE_STRING);
        $email = mysqli_real_escape_string($conn, $filter_email);

        $filter_password = filter_var($_POST['password'], FILTER_SANITIZE_STRING);
        $password = mysqli_real_escape_string($conn, $filter_password);

        $filter_cpassword = filter_var($_POST['cpassword'], FILTER_SANITIZE_STRING);
        $cpassword = mysqli_real_escape_string($conn, $filter_cpassword);

        $filter_fullname = filter_var($_POST['fullname'], FILTER_SANITIZE_STRING);
        $fullname = mysqli_real_escape_string($conn, $filter_fullname);

        $filter_address = filter_var($_POST['address'], FILTER_SANITIZE_STRING);
        $address = mysqli_real_escape_string($conn, $filter_address);

        $filter_country = filter_var($_POST['country'], FILTER_SANITIZE_STRING);
        $country = mysqli_real_escape_string($conn, $filter_country);

        $filter_city = filter_var($_POST['city'], FILTER_SANITIZE_STRING);
        $city = mysqli_real_escape_string($conn, $filter_city);

        $filter_phone = filter_var($_POST['phone'], FILTER_SANITIZE_STRING);
        $phone = mysqli_real_escape_string($conn, $filter_phone);

        $select_user_email = mysqli_query($conn, "SELECT * FROM customers WHERE email = '$email'") or die('Query failed');
        $select_user_username = mysqli_query($conn, "SELECT * FROM customers WHERE username = '$username'") or die('Query failed');
        if (mysqli_num_rows($select_user_email) > 0){
            $message[] = 'This email has been used for an account. Please try another email to continue!!!';
        }elseif (mysqli_num_rows($select_user_username) > 0){
            $message[] = 'This username has been used for an account. Please try another username to continue!!!';
        }
        else{
            if ($password != $cpassword){
                $message[] = 'Incorrect confirm password';
            }else{
                mysqli_query($conn, "INSERT INTO customers (`username`, `email`, `password`, `fullname`, `address`, `country`, `city`, `contact_number`) VALUES('$username', '$email', '$password', '$fullname', '$address', '$country', '$city', '$contact_number')") or die('Query failed');
                $message[] = 'Register successfully';
            }
        }
    }   


    if(isset($_POST['submit-login'])){
        $filter_email = filter_var($_POST['email'], FILTER_SANITIZE_STRING);
        $email = mysqli_real_escape_string($conn, $filter_email);

        $filter_password = filter_var($_POST['password'], FILTER_SANITIZE_STRING);
        $password = mysqli_real_escape_string($conn, $filter_password);

        $select_user = mysqli_query($conn, "SELECT * FROM customers WHERE email = '$email' AND `password` = '$password'") or die('Query failed');
        if (mysqli_num_rows($select_user) > 0){
            header('location:CustomerProfile.php');
        }
        else{
            $message[] = 'Invalid email or incorrect password. Please check again!!!';
        }
    }
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <link href = "https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css" rel = 'stylesheet'>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css">
    <link rel="stylesheet" href="join.css">
    <title>Customer Sign in|Sign up Page</title>
</head>

<body>

    <div class="container" id="container">
        <div class="form-container sign-up">
            <?php
                if (isset($message)){
                    foreach($message as $message){
                        echo'
                            <div class="message">
                                <span>'.$message.'</span>
                                <i class="fa-brands fa-trash-can" onclick="this.parentElement.remove()"></i>
                            </div>
                        ';
                    }
                }
            ?>

            <form method="post">
                <h1>Create Account</h1>
                <div class="social-icons">
                    <a class="icon"><i class="fa-brands fa-google-plus-g"></i></a>
                    <a class="icon"><i class="fa-brands fa-facebook-f"></i></a>
                    <a class="icon"><i class="fa-brands fa-github"></i></a>
                    <a class="icon"><i class="fa-brands fa-linkedin-in"></i></a>
                </div>
                <span></span>
                <input type="text" name="username" placeholder="Enter your username" id="" required>
                <input type="email" name="email" placeholder="Enter your email" id="" required>
                <input type="password" name="password" placeholder="Enter your password" id="" required>
                <input type="password" name="cpassword" placeholder="Confirm your password" required>
                <input type="text" name="fullname" placeholder="Enter your fullname" id="" required>
                <input type="text" name="address" placeholder="Enter your address" id="" required>
                <input type="text" name="country" placeholder="Enter your country" id="" required>
                <input type="text" name="city" placeholder="Enter your city" id="" required>
                <input type="tel" name="phone" placeholder="Enter your phone number" id="" required>
                <button type="submit" name="submit-create" class="">Create account</button>
            </form>
        </div>

        <div class="form-container sign-in">
            <form method="post">
                <h1>Sign In</h1>
                <div class="social-icons">
                    <a class="icon"><i class="fa-brands fa-google-plus-g"></i></a>
                    <a class="icon"><i class="fa-brands fa-facebook-f"></i></a>
                    <a class="icon"><i class="fa-brands fa-github"></i></a>
                    <a class="icon"><i class="fa-brands fa-linkedin-in"></i></a>
                </div>
                <span></span>
                <input type="email" name="email" placeholder="Enter your email" id="" required>
                <input type="password" name="password" placeholder="Enter your password" id="" required>
                <button type="submit" name="submit-login" value="Login now" class="">Sign in now</button>
            </form>
        </div>
        <div class="toggle-container">
            <div class="toggle">
                <div class="toggle-panel toggle-left">
                    <h1 class="hidden">Welcome Back!!!</h1>
                    <p>Look good, feel good, save time.  Your styles await, sign in to access.</p>
                    <p>Explore your style</p>
                    <button class="hidden" id="login">Sign In</button>
                </div>
                <div class="toggle-panel toggle-right">
                    <h1 class="hidden">Hello, Friends!!!</h1>
                    <p>Register with your personal details to explore the widest range of clothes with competitive pricing from casual outfits to high-end fashion.</p>
                    <p>Join Dressify now</p>
                    <button class="hidden" id="register">Sign Up</button>
                </div>
            </div>
        </div>
    </div>

    <script src="join.js"></script>
</body>

</html>