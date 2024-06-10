

<?php 


	session_start();
	
	
	
	$cid = "" ; 
	
	if(isset($_SESSION["CID"]))
	{
		$cid = $_SESSION["CID"];
	}
	
	else
	{
		header("Location:../login.php");  // EDIT this to go for log in page
	}
	
	


?>





<?php 

	require 'config.php'; 
	
	
	
	$make = $_POST["make"];
	$model = $_POST["model"];
	$vin = $_POST["vin"];
	$regino = $_POST["regNo"];
	$cap = $_POST["capacity"];
	$fueltype = $_POST["fuel"];
	$year = $_POST["yom"];
	$covoption = $_POST['coverage']; //for customer policy table
	
	$sql = "INSERT INTO vehicle( VID , VIN , RegNo , Make , Model , Engine_capacity , Fuel_type , Manu_Year , CID  )
			VALUES ('' , '$vin' , '$regino' ,'$make' , '$model' , '$cap' , '$fueltype' , '$year' , '$cid'  ) ";
	
	
	if( $con -> query($sql)) 
	{
		
	
		
	}
	
	else
	{
		echo "<script> alert('Error in Inserting to vehicle table')</script>";
	}


	//assigning the pid number

	if($covoption == "third_party")
	{
		$pid = "2";
	}
	
	else if ($covoption == "comprehensive")
	{
		$pid = "1";
	}
	else
	{
		echo "<script> alert('Error in assigning value to PID (policy id)')</script>";
	}
	
	
	
	$sqli = "INSERT INTO customer_policy(CID , PID , Policy_startDate , Policy_endDate)
			VALUES ('$cid' , '$pid' , '' , '' )";
			
	if( $con -> query($sqli)) 
	{
		
		
		echo "<script> alert('Policy added SuccessFully')</script>";
		echo "<script>window.setTimeout(function(){window.location.href='../userprofile/userprofile.php';}, 250);</script>";

		//header("Location:../userprofile/userprofile.php");      // redirect to user page
		
	}
	
	else
	{
		echo "<script> alert('Error in Inserting to policy table')</script>";
	}
	


	$con -> close (); //closing the connetion
?>