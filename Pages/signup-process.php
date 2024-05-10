<?php
require_once '../Database/db.php';

// Function to hash passwords
function hashPassword($password) {
    return password_hash($password, PASSWORD_DEFAULT);
}

// Function to verify hashed passwords
function verifyPassword($password, $hashedPassword) {
    return password_verify($password, $hashedPassword);
}


// print_r($_POST);

	if(isset($_POST['signup'])) {

        try {
            $username = $_POST['username'];
            $password = $_POST['password'];
            $email = $_POST['email'];
            $role = $_POST['role'];
            $firstName = $_POST['firstName'];
            $lastName = $_POST['lastName'];

            // Hash the password
            $hashedPassword = hashPassword($password);

            // SQL statement for inserting user data
            $sql = "INSERT INTO [user] (Username, Password, Email, FirstName, LastName) 
                    VALUES (?, ?, ?, ?, ?)";
            
            // Prepare and execute the statement
            $stmt = $conn->prepare($sql);
            $stmt->execute([$username, $hashedPassword, $email, $firstName, $lastName]);

            // print_r($stmt);

            if($stmt) {
                // echo "User registered successfully!";
                header("Location: sign-up.php?success=1");
                exit();
            } else {
                // If execute() returns false, display an error message
                echo "Error: Failed to register user.";
            }
        } catch (PDOException $e) {
            // Handle errors
            echo "Error: " . $e->getMessage();
        }
        
    }

    // Sign-in functionality
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
            echo "Sign-in successful! UserID: " . $row['UserID'];
        } else {
            echo "Invalid username or password.";
        }
    }
?>
