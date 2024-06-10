<?php 


	session_start();
	
	
	
	$cid = "" ; 
	
	if(isset($_SESSION["CID"]))
	{
		$cid = $_SESSION["CID"];
	}
	
	else
	{
		header("Location:../login/login.php");  
	}
	
	


?>


<?php
	//configuration file
	
	require 'config.php';

?>





<!DOCTYPE html>
<head>
<?php require("Header.php");
?>

<link rel="stylesheet" href="viewExistingPoliciesStyles.css">

</head>
<body>


	<div 
		class = "existingPolicies"
	
    >
	<?php
	
	$sqli = "SELECT * FROM customer_policy WHERE CID= $cid";
	
	$outcome = $con -> query($sqli);
	
	$hasPID1 = false;
	$hasPID2 = false;

if ($outcome->num_rows > 0) 
	{
		while ($row = $outcome->fetch_assoc()) 
		{
			$pid = $row['PID'];
			// Set the corresponding flag if PID is found
			if ($pid == 1) 
			{
				$hasPID1 = true;
			}
			elseif ($pid == 2)
			{
				$hasPID2 = true;
			}
		}
	}
    // Display the result based on PID values
	echo '<div style="padding-left: 20px;">';
    if ($hasPID1 && $hasPID2)
		{
        echo '<p style="font-size: 18px; color: #007bff;">Policy type : both Comprehensive Insurance Coverage and Third party liability Coverage.</p>';
    }
	elseif ($hasPID1) 
	{
        echo '<p style="font-size: 18px; color: #007bff;">Policy type :  has Comprehensive Insurance Coverage.</p>';
    }
	elseif ($hasPID2) 
	{
        echo '<p style="font-size: 18px; color: #007bff;">Policy type :   Third party liability Coverage.</p>';
    } 
	else 
	{
        echo '<p style="font-size: 18px; color: #007bff;">No policies found for this customer.</p>';
    }
    echo '</div>';

		
	?>

	
	<table width="70%" border="1" class="vehicleTable">
        <tr>
          <th >Make</th>
          <th >Model</th>
		  <th >Registration no</th>
		  <th >Manufacture Year</th>
		  <th >Fuel type</th>
		  <th>Engine capacity</th>
		  <th>VIN number</th>
		  <th >EDIT</th>
		  <th >DELETE</th>
        </tr>
	
	

	
	<?php 
	
	

	
	
		$sql = "SELECT * FROM vehicle WHERE CID = $cid"; 
		
		$result = $con -> query ($sql);  //exucute that($sql) and put it inside the results variable
		
		//checking whether it has number of raws
			
		if( $result -> num_rows > 0)
			
			{
				while($row = $result -> fetch_assoc() )
				{
					$id = $row ["VID"]; //id to recognise what row should be edited or deleted
					echo "<tr>";
					echo "<td>" . $row ["Make"] ."</td>";
					echo "<td>" . $row ["Model"] ."</td>";
					echo "<td>" . $row ["RegNo"] ."</td>";
					echo "<td>" . $row ["Manu_Year"] ."</td>";
					echo "<td>" . $row ["Fuel_type"] ."</td>";
					echo "<td>" . $row["Engine_capacity"]."</td>" ;
					echo "<td>" . $row ["VIN"] ."</td>";
					echo "<td><button type='submit'><a href = 'EditVehicles.php?id=$id'>Edit</a></button></td>";  //notice the ?id= thing
					echo "<td><button type= 'sumbit'><a href = 'deleteVehicle.php?id=$id'>Delete</a></td>";
					echo "</tr>";
									
				}
				
				
			}
	
	
	
	
	
	
	
	
	
	?>
	
	     </table>
    </div>


</body>
<?php require("Footer.php");
?>
</html>