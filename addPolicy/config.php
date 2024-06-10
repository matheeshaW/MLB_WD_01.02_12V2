<?php



	// Create connection
	$con = new mysqli("localhost", "root", "" ,"insureme");
	
	
	// Check connection
	if ($con -> connect_error)
	{
			
		die("Connection failed: " .connect_error);   
		
	}
	
	else
	{
		
	
	
	}
?>