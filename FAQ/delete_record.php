<!--Amarasekara D.I.-->
<?php

require 'config.php';

// Check if ID is provided
if(isset($_GET['id'])) {
    $id = $_GET['id'];

    // Delete record from the database
    $sql = "DELETE FROM insures WHERE id = $id";

    if ($con->query($sql) === TRUE) {
        // Record deleted successfully
        echo "Record deleted successfully";
    } else {
        // Error deleting record
        echo "Error deleting record: " . $con->error;
    }

    // Close database connection
    $con->close();
} else {
    echo "ID not provided.";
}

?>
