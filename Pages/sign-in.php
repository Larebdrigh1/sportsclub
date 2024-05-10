<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sign In</title>
    <link rel="stylesheet" href="../Styles/sign-in.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
</head>

<body>
    <div class="container">
        <div class="logo">
            <img src="../Assets/JoensuuSCLogo.png" alt="Logo">
        </div>
        <h2>Login</h2>
        <p class="subtitle">Login to access your Joensuu FC account.</p>
        <form action="signin-process.php" method="post">
            <div class="input-group">
                <input type="text" placeholder="Username" name="username" required>
            </div>
            <div class="input-group">
                <input type="password" placeholder="Password" name="password" required>
            </div>
            <div class="checkbox-group">
                <input type="checkbox" id="remember" >
                <label for="remember">Remember me</label>
                <a href="#" style="color: #9F0303;">Forgot Password</a>
            </div>
            <input type="hidden" name="signin" value="1">
            <button class="sign-in-button" id="signInToDashBtn" type="submit">Sign In</button>
        </form>
        
        <p class="redirect">Don't have an account? <a href="../Pages/sign-up.php" style="color: #9F0303;">Sign Up</a></p>

    </div>
    <script src="../Script/sign-in.js"></script>
</body>
</html>
