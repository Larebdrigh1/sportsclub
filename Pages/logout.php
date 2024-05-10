<?php
session_start(); // Start or resume a session

// Unset all of the session variables
$_SESSION = array();

// Destroy the session
session_destroy();

// Redirect to the sign-in page after logout
header("Location: sign-in.php");
exit(); // Ensure that script execution stops after redirection
?>
