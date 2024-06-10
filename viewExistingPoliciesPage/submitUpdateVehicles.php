







<?php

	require 'config.php';
	
	$id = $_POST["vid"];
	$make = $_POST["make"];
	$model = $_POST["model"];
	$vin = $_POST["vin"];
	$regino = $_POST["regNo"];
	$cap = $_POST["capacity"];
	$fueltype = $_POST["fuel"];
	$year = $_POST["yom"];
	
	
	$sql = "UPDATE vehicle SET VIN = '$vin' , RegNo ='$regino' , Make = '$make' ,
			Model = '$model' , Engine_capacity='$cap' ,Fuel_type='$fueltype' ,Manu_Year='$year' 
			WHERE VID = '$id'";

	if($con -> query($sql))
		
	{
		echo "<script> alert ('Updated successfully') </script>";
		echo "<script>window.setTimeout(function(){window.location.href='viewExistingPolicies.php';}, 250);</script>";
		//header("Location:viewExistingPolicies.php");
		
	}
	else
	{
		echo "<script> alert('Update unsuccessful !! ')</script>";
		
		
	}
	
	$con -> close();

?>