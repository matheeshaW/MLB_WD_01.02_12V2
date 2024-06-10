<!--create data-->
<?php

    //linking configuration file
    require 'config.php';

    $inqid = $_POST["inqid"];
    $name = $_POST["name"];
    $phone = $_POST["phone"];
    $email = $_POST["email"];
    $message = $_POST["message"];

    $sql = "INSERT INTO contact VALUES ('$inqid', '$name', '$phone', '$email', '$message')";
    $result = $con->query($sql);

    if($result)
    {   
        header('Location: ../home.php');
    }

    else{
        echo "Error".$con->error;
    }

    $con->close();

?>
