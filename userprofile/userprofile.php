<?php


		session_start();
		require 'config.php'; //database connection 
		
			if(isset($_SESSION["CID"])) 
			{
				$cid = $_SESSION["CID"];
			} 
			else
			{
				header("Location:../login/login.php"); // Redirect if session is not set
			}



?>




<!DOCTYPE html>
<html lang="en">
	<head>
		<?php require("Header.php");
		?>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>User Profile</title>
    <link rel="stylesheet" href="userprofilestyles.css">
</head>
<body>


		<div class="tabs">
        <button class="tab-button" onclick="location.href='../addPolicy/addPolicy.php'">Add New Policy</button>
        <button class="tab-button" onclick="location.href='#'">Add New Vehicle</button>
        <button class="tab-button" onclick="location.href='../viewExistingPoliciesPage/viewExistingPolicies.php'">Existing Policies</button>
		</div>
		
    <div class="container">
		
        <div class="profile">
            <img src="dummy_user_image.png" alt="User Image">
            <div class="welcome">
               <?php
					

						// to fetch the user's name based on CID
						$sql = "SELECT FName, LName FROM customer WHERE CID = $cid";

						// Execute the query
						$result = $con->query($sql);

						if ($result->num_rows > 0)
						{
							// Fetch the result as an associative array
							$row = $result->fetch_assoc();
							$username = $row["FName"] . " " . $row["LName"]; 
							echo "<h2>Welcome, $username!</h2>";
						} 
						else 
						{
							echo "<h2>Welcome!</h2>"; // Display a generic welcome message if user not found
						}
					
				?>
                <p>Here you can add new policy , add a new vehicle to your existing policy and view your insured vehicles.</p>
            </div>
        </div>
        
    </div>
</body>
<?php require("Footer.php");
		?>
</html>
