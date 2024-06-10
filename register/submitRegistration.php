<?php

	require 'config.php';
	
	$first = $_POST["firstName"];
	$last = $_POST["lastName"];
	$Nic = $_POST["nic"];
	$email= $_POST["email"];  
	$phone =$_POST["phone"]; 
	$addrs = $_POST["address"];
	$gender = $_POST['gender'];
	$date = $_POST['dob'];
	$pass = $_POST['password'];
	
	
	$sql = "INSERT INTO customer( CID , NIC , FName , LName ,DOB , Gender , Email , Address , pwd , phone )
			VALUES ('' , '$Nic' , '$first' , '$last' , '$date' , '$gender' , '$email' , '$addrs' ,'$pass' , '$phone' ) " ;
			
			
			
	if ($con-> query($sql))
	{
		echo "<script> alert('Account Created SuccessFully')</script>";
		echo "<script>window.setTimeout(function(){window.location.href='../login/login.php';}, 250);</script>";
		//header("Location: ../login/login.php");    //redirect this to log in page
		
	}
	else
	{
		echo "<script> alert('Error in Inserting')</script>";
	}		
		
	$con -> close (); //closing the connetion


?>