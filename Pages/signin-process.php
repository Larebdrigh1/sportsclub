<?php
session_start();
require_once '../Database/db.php';

// Function to verify hashed passwords
function verifyPassword($password, $hashedPassword) {
    return password_verify($password, $hashedPassword);
}

 	if(isset($_POST['signin'])) {
        $username = $_POST['username'];
        $password = $_POST['password'];

        // SQL statement to fetch user data by username
        $sql = "SELECT UserID, Password FROM [user] WHERE Username = ?";
        
        // Prepare and execute the statement
        $stmt = $conn->prepare($sql);
        $stmt->execute([$username]);

        // Fetch user data
        $row = $stmt->fetch(PDO::FETCH_ASSOC);

        // Verify password
        if($row && verifyPassword($password, $row['Password'])) {
            $_SESSION['userID'] = $row['UserID'];
            header("Location: dashboard.php");
                exit();
        } else {
            echo "Invalid username or password.";
            header("Location: sign-in.php?success=0");
            exit();
        }
    }

?>