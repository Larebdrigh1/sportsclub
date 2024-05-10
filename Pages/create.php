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
  <title>Create Team</title>
  <link rel="stylesheet" href="../Styles/create.css">
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <style>
    input {
      width: 100%;
      box-sizing: border-box;
    }
  </style>
</head>
<body>
<div class="container">
  <h2>Create team</h2>
  <p>
  <fieldset>
    <legend> Team Name: </legend> <input placeholder="Enter your team name"
                                         type="text">
  </fieldset>
  </p>
  <p>
  <fieldset>
    <legend> Sports:</legend> <input placeholder="E.g Football/Basketball"
                                     type="text">
  </fieldset>
  </p>
  <p>
  <fieldset>
    <legend> Location: </legend> <input type="text">
  </fieldset>
  </p>
  <p>
  <fieldset>
    <legend> Max. no of Members </legend> <input type="text">
  </fieldset>
  </p>
  <br> <br>
  <button class="btn" id="createTeamBtn">Create</button>
</div>
<script src="../Script/createGoToDashboard.js"></script>
</body>
</html>
