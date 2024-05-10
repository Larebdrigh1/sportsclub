<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sign Up</title>
    <link rel="stylesheet" href="../Styles/sign-up.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
</head>

<body>
    <div class="container">
        <div class="logo">
            <img src="../Assets/JoensuuSCLogo.png" alt="Logo">
        </div>
        <h2>Sign Up</h2>
        <p class="subtitle">Let's get you all set up so you can access your personal account.</p>

        <?php 
            if(isset($_GET['success'])){
                echo '<span>User Registered Successfully</span>';
            }
        ?>
        <form action="signup-process.php" method="post">
            <div class="input-group">
                <input type="text" placeholder="First Name" name="firstName" required>
                <input type="text" placeholder="Last Name" name="lastName" required>
            </div>
            <div class="input-group">
                <input type="text" placeholder="Username" name="username" required>
                <input type="email" placeholder="Email Address" name="email" required>
            </div>
            <div class="input-group">
                <input type="password" placeholder="Password" name="password" required>
            </div>
            <div class="input-group">
                <input type="password" placeholder="Confirm Password" name="cpassword" required>
            </div>
            <input type="hidden" name="signup" value="1">
            <div class="checkbox-group">
                <input type="checkbox" id="terms" required>
                <label for="terms">I agree to all the <span style="color: #9F0303;">Terms</span> and <span style="color: #9F0303;">Privacy Policy</span></label>
            </div>
            <button class="create-account-button" id="createAccountBtn" type="submit" >Create Account</button>
        </form>
        <p class="redirect">Already have an account? <a href="../Pages/sign-in.php" style="color: #9F0303;">Sign In</a></p>
    </div>
    <script src="../Script/sign-up.js"></script>
</body>
</html>
