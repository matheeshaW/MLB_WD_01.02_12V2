<?php

$con=new mysqli("localhost","root","","insureme");

if($con->connect_error)
{
    die("Connection Failed".$con->connect_error);
}



?>