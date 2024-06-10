<?php

$con = new mysqli ("localhost", "root", "", "insureme");

if ($con->connect_error)
{
    
    die ("Connection failed ".$con->connect_error);
}
else
{
    
}

?>