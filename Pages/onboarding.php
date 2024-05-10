<?php
session_start(); // Start or resume a session

// Check if user is not logged in, redirect to sign-in page
if (!isset($_SESSION['userID'])) {
    header("Location: sign-in.php");
    exit(); // Ensure that script execution stops after redirection
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Create or Join a Team</title>
  <link rel="stylesheet" href="../Styles/onboarding.css">
  <link rel="preconnect" href="https://fonts.googleapis.com">
</head>
<body>
<div class="container">
  <h2>Create or Join a Team</h2>
  <button class="btn" id="joinBtn">Join</button>
  <br>
  <button class="btn" id="createBtn">Create</button>
</div>
<script src="../Script/onboarding.js"></script>
</body>
</html>

