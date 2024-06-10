<!--Amarasekara D.I.-->
<?php
require 'config.php';

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Get form data
    $id = $_POST['id'];
    $name = $_POST['name'];
    $email = $_POST['email'];
    $message = $_POST['message'];

    // Prepare and bind parameters
    $stmt = $con->prepare("UPDATE insures SET name=?, email=?, message=? WHERE id=?");
    $stmt->bind_param("sssi", $name, $email, $message, $id);

    // Execute the update statement
    if ($stmt->execute()) {
        echo "Record updated successfully";
    } else {
        echo "Error updating record: " . $stmt->error;
    }
    
    // Close statement and database connection
    $stmt->close();
    $con->close();
} else {
    echo "Invalid request";
}
?>
