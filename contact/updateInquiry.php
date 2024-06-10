<!--update an inquiry-->
<?php

    //linking configuration file
    require 'config.php';

    $inqid = $_POST["inqid"];
    $name = $_POST["name"];
    $phone = $_POST["phone"];
    $email = $_POST["email"];
    $message = $_POST["message"];

    $sql = "UPDATE contact set Name = '$name', Phone = '$phone', Email = '$email', Message = '$message' where InqID = '$inqid'";

    if ($con->query($sql))
    {
        header('Location: inquiry.php');
    }
    else{
        echo "Not updated";
    }

?>