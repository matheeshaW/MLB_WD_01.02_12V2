<!--delete an inquiry-->
<?php

//linking the configuration file
require 'config.php';

if (isset($_GET['inqid'])) {

    $inqid = $_GET['inqid'];
    $sql = "DELETE FROM contact where InqID = '$inqid' LIMIT 1";
    $result = mysqli_query($con, $sql);

    if ($result) {
      header('Location: inquiry.php');
    }
    else{
      echo "Error".$con->error;
    }
    }

?>