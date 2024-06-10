<?php
// Start session
session_start();

require 'config.php'; // establishing a database connection

// Retrieve email and password from the login form
$email = $_POST['Email']; 
$password = $_POST['pwd'];



// Prepare and execute a query to retrieve CID based on email and password
$stmt = $con->prepare("SELECT CID FROM customer WHERE Email = ? AND pwd = ?");
$stmt->bind_param("ss", $email, $password);
$stmt->execute();
$result = $stmt->get_result();

// Check if a user with provided credentials exists
if ($result->num_rows === 1)
 {
    // User authenticated successfully
    // Fetch the CID
    $user = $result->fetch_assoc();
    
    // Set CID as a session value
    $_SESSION['CID'] = $user['CID'];

    header("Location:../home.php");
    exit();
} 
else
 {
    // Invalid credentials
    echo "<script>alert('Invalid email or password')</script>";
    echo "<script>window.setTimeout(function(){window.location.href='login.php';}, 50);</script>";  
}
?>
