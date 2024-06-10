<!--Amarasekara D.I-->
<?php

    require 'config.php';

    $fName = $_POST["name"];
    $fEmail = $_POST["email"];
    $fMessage = $_POST["message"];

    $sql = "INSERT INTO insures VALUES ('$fName','','$fEmail','$fMessage')";

    if($con->query($sql))
    {
        echo"Insert Sucessful";
    }

    else
    {
        echo"Error".$con->error;
    }

    $con->close();

?>