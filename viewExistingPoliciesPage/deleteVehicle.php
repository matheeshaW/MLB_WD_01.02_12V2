<?php 
	
	
	require 'config.php';
	
	$vehicleId = $_GET['id'];
	
	$sql = "DELETE FROM vehicle WHERE VID = $vehicleId";


	if($con -> query($sql))
	{
		echo "<script>alert('Deleted successfully !!')</script>";
		
		echo "<script>window.setTimeout(function(){window.location.href='viewExistingPolicies.php';}, 250);</script>";

		
		
	}
	
	else
		
	{
		echo "<script >alert('Delete UnSuccessful !!')</script>";
	}

	$con -> close();




?>