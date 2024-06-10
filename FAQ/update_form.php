<!-- Amarasekara D.I-->
<!DOCTYPE html>
<head>
<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.4.1/css/all.css" integrity="sha384-5sAR7xN1Nv6T6+dT2mhtzEpVJvfS3NScPQTrOxhwjIuvcA67KV2R5Jz6kr4abQsz" crossorigin="anonymous">
    <link href="https://fonts.googleapis.com/css?family=Roboto:300,400,500,700" rel="stylesheet">
    
</head>
<body>
<style>
    /* Modal content */
    .modal-content {
        background-color: #fefefe;
        margin: 10% auto;
        padding: 20px;
        border: 1px solid #888;
        width: 80%;
        border-radius: 5px;
    }

    /* Close button */
    .close {
        color: #aaa;
        float: right;
        font-size: 28px;
        font-weight: bold;
    }

    .close:hover,
    .close:focus {
        color: black;
        text-decoration: none;
        cursor: pointer;
    }

    /* Form inputs and labels */
    label {
        font-weight: bold;
    }

    .form-control {
        width: 100%;
        padding: 8px;
        margin-bottom: 10px;
        border: 1px solid #ccc;
        border-radius: 4px;
        box-sizing: border-box;
    }

    .form-control:focus {
        border-color: #4CAF50;
    }

    textarea {
        resize: vertical;
        min-height: 100px;
    }

    /* Submit button */
    input[type="submit"] {
        background-color: #4CAF50;
        color: white;
        padding: 10px 20px;
        border: none;
        border-radius: 4px;
        cursor: pointer;
        font-size: 16px;
    }

    input[type="submit"]:hover {
        background-color: #45a049;
    }
</style>


<?php
require 'config.php';

// Check if the ID parameter is set
if (isset($_GET['id'])) {
    $id = $_GET['id'];

    // Fetch data for the selected record
    $sql = "SELECT * FROM insures WHERE id = $id";
    $result = $con->query($sql);

    if ($result->num_rows > 0) {
        $row = $result->fetch_assoc();
        $name = $row['name'];
        $email = $row['email'];
        $message = $row['message'];

        // Output the update form
        echo "
        <div class='modal-content'>
            <span class='close' onclick='closeModal()'>&times;</span>
            <h2>Update Record</h2>
            <form id='updateForm' action='update_record.php' method='post'>
                <input type='hidden' name='id' value='$id'>
                <label for='name'>Name:</label><br>
                <input type='text' id='name' name='name' value='$name' class='form-control'><br>
                <label for='email'>Email:</label><br>
                <input type='email' id='email' name='email' value='$email' class='form-control'><br>
                <label for='message'>Message:</label><br>
                <textarea id='message' name='message' class='form-control'>$message</textarea><br>
                <input type='submit' value='Update' class='btn btn-update'>
            </form>
        </div>";
    } else {
        echo "Record not found.";
    }
} else {
    echo "Invalid request.";
}

$con->close();
?>

</body>
</html>