<?php

require 'config.php';   



?>


<!DOCTYPE html>
<head>
<?php require("Header.php");
?>
 <title>Update vahicle details</title>
<link rel="stylesheet" href="EditVehiclesStyles.css">
</head>
<body>

	<?php
	
	
		$recordID = $_GET["id"];  //need to get that id we passed with the edit button in the url 
		
		$sql = "SELECT * FROM vehicle WHERE VID= $recordID";
		
		$result = $con -> query($sql);
		
		if($result -> num_rows > 0)
		{
			while( $row = $result -> fetch_assoc()) //theres only one row so theres no need for a while loop actually
			{
				$make = $row["Make"];
				$model = $row ["Model"];
				$vin = $row["VIN"];
				$regino = $row["RegNo"];
				$cap = $row["Engine_capacity"];
				$fueltype = $row["Fuel_type"];
				$year = $row["Manu_Year"];
				$vid = $row["VID"];
				
				
			}
				
		}
		
	
	
	?>

	<br>
	
	
	    <div class="title-box">
        <h1 class="title">Update Vehicle details</h1>
    </div>
	
    <div class="container">

        <div class="left">
            <img src="EditVehiclesImage.jpg" alt="Vertical Picture">
        </div>
        <div class="right">
            <form action="submitUpdateVehicles.php" method="post">
				<div class="form-group">
                    <label for="VID">Vehicle Make:</label>
                    <input type="text" id="vid" name = "vid" value=<?php echo $vid ?> readonly>
                </div>
                <div class="form-group">
                    <label for="vehicle_make">Vehicle Make:</label>
                    <input type="text" id="vehicle_make" name = "make"  value=<?php echo $make ?> required>
                </div>
                <div class="form-group">
                    <label for="vehicle_model">Vehicle Model:</label>
                    <input type="text" id="vehicle_model" name = "model"  value=<?php echo $model ?> required>
                </div>
                <div class="form-group">
                    <label for="vin">Vehicle Identification Number (VIN):</label>
                    <input type="text" id="vin" name="vin"  value=<?php echo $vin ?> required>
                </div>
                <div class="form-group">
                    <label for="registration_number">Registration Number:</label>
                    <input type="text" id="registration_number" name = "regNo"  value=<?php echo $regino ?> required>
                </div>
                <div class="form-group">
                    <label for="engine_capacity">Engine Capacity:</label>
                    <input type="text" id="engine_capacity" name ="capacity"  value=<?php echo $cap ?> required>
                </div>
                <div class="form-group">
                    <label for="fuel_type">Fuel Type:</label>
                    <input type="text" id="fuel_type" name ="fuel"  value=<?php echo $fueltype ?> required>
                </div>
                <div class="form-group">
                    <label for="year_manufacture">Year of Manufacture:</label>
                    <input type="Text" id="year_manufacture" name = "yom"  value=<?php echo $year ?> required>
                </div>
                
                
                <div class="form-group">
                    <button type="submit" name="btnsubmit" >Update</button>
                </div>
            </form>
        </div>
    </div> 
	
	







</body>
<?php require("Footer.php");
?>
</html>