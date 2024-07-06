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