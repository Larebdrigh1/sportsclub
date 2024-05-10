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
  <title>Join Team</title>
  <link rel="stylesheet" href="../Styles/join.css">
  <link rel="preconnect" href="https://fonts.googleapis.com">
</head>
<body>
<div class="container">
  <h2>Join Team</h2>
  <form>
    <label><input type="radio" name="team" value="team101"> Team 101</label><br>
    <label><input type="radio" name="team" value="xteam"> X-Team</label><br>
    <label><input type="radio" name="team" value="abc"> ABC</label><br>
    <label><input type="radio" name="team" value="team-a"> Team-A</label><br>
    <label><input type="radio" name="team" value="champions">
      Champions</label><br>
    <label><input type="radio" name="team" value="pafc"> PA FC</label><br>
  </form>
  <button class="btn" id="joinTeamBtn">Join</button>
</div>
<script src="../Script/joinGoToDashboard.js"></script>
</body>
</html>
