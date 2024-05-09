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
        <form action="">
            <div class="input-group">
                <input type="text" placeholder="First Name">
                <input type="text" placeholder="Last Name">
            </div>
            <div class="input-group">
                <input type="text" placeholder="Username">
                <input type="email" placeholder="Email Address">
            </div>
            <!-- <div class="input-group">
                <select>
                    <option value="team-member">Team Member</option>
                    <option value="team-leader">Team Leader</option>
                </select>
            </div> -->
            <div class="input-group">
                <input type="password" placeholder="Password">
            </div>
            <div class="input-group">
                <input type="password" placeholder="Confirm Password">
            </div>
            <div class="checkbox-group">
                <input type="checkbox" id="terms">
                <label for="terms">I agree to all the <span style="color: #9F0303;">Terms</span> and <span style="color: #9F0303;">Privacy Policy</span></label>
            </div>
            <button class="create-account-button" id="createAccountBtn">Create Account</button>
        </form>
        <p class="redirect">Already have an account? <a href="../Pages/sign-in.php" style="color: #9F0303;">Sign In</a></p>
    </div>
    <script src="../Script/sign-up.js"></script>
</body>
</html>
