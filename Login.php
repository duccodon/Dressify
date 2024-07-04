<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login Page</title>

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.2/css/all.min.css">
    <link rel="stylesheet" href="join.css">
</head>
<body>
    
    <div class="container" id="container">
        <div class="form-container sign-up">
            <form method="post">
                <h1>Create Account</h1>
                <input type="text" name="username" placeholder="Enter your username" id="" required>
                <input type="email" name="email" placeholder="Enter your email" id="" required>
                <input type="password" name="password" placeholder="Enter your password" id="" required>
                <input type="password" name="cpassword" placeholder="Confirm your password" required>
                <input type="text" name="fullname" placeholder="Enter your fullname" id="" required>
                <input type="text" name="address" placeholder="Enter your address" id="" required>
                <input type="text" name="country" placeholder="Enter your country" id="" required>
                <input type="text" name="city" placeholder="Enter your city" id="" required>
                <input type="tel" name="phone" placeholder="Enter your phone number" id="" required>
                <input type="reset" value="Cancel">
                <button type="submit" name="submit-create" class="">Create account</button>
                <span>Already have an account?Login now</span>
            </form>
        </div>

        <div class="form-container sign-in">
            <form method="post">
                <h1>Sign In</h1>
                <input type="email" name="email" placeholder="Enter your email" id="" required>
                <input type="password" name="password" placeholder="Enter your password" id="" required>
                <input type="reset" value="Cancel">
                <button type="submit" name="submit-login" value="Login now" class="">Sign in now</button>
                <span>Do not have an account?Register now</span>
            </form>
        </div>
        <div class="toggle-container">
            <div class="toggle">
                <div class="toggle-panel toggle-left">
                    <h1>Welcome back!!!</h1>
                    <p>Look good, feel good, save time.  Your styles await, sign in to access.</p>
                    <button class="hidden" id="login">Sign in</button>
                </div>
                <div class="toggle-panel toggle-right">
                    <h1>Hello friend!!!</h1>
                    <p>Register with your personal details to explore the widest range of clothes with competitive pricing</p>
                    <button class="hidden" id="register">Sign Up</button>
                </div>
            </div>
        </div>
    </div>
    <script src="join.js"></script>
</body>
</html>