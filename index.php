<!DOCTYPE html>
<html lang="en">
<head>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login and Register System</title>
</head>
<body>
   <!-- message  -->
    <p class="msg">Successfully Registered!</p>

   <!-- form -->
    <div class="forms">
        <!-- login form -->
        <form action="" class="login">
            <h2>Login</h2>
            <input type="text" name="email" placeholder="Entr your email...">
            <input type="password" name="password" placeholder="Entr your password...">
            <div class="rem">
                <input type="checkbox" name="re-check" id="re-check">
                <label for="re-check">remember me</label>
            </div>
            <button type="submit" name="login-btn">Login</button>
        </form>

        <!-- Register form -->
        <form action="" class="register">
            <h2>Register</h2>
            <input type="text" name="fname" placeholder="Entr your first Name...">
            <input type="text" name="lname" placeholder="Entr your Last Name...">
            <input type="text" name="email" placeholder="Entr your email...">
            <input type="text" name="mobile" placeholder="Entr your mobile no...">
            <input type="password" name="password" placeholder="Enter your password...">
            <input type="password" name="re-pass" placeholder="Enter your password again...">
            
            <button type="submit" name="register-btn">Register</button>
        </form>
    </div>
</body>
</html>
