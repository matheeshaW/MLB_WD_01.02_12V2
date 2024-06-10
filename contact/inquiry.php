<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>Inquiry</title>

    <link rel="stylesheet" type="text/css" href="inquiryStyles.css">

    <!--configuration file-->
    <?php require 'config.php';
    ?>

    <!--header file-->
    <?php require ("Header.php");
    ?>
</head>

<body>
    <h1>Inquiries</h1>

    <div class='part1'>
    <table>
    <tr>
        <th>InqID</th>
        <th>Name</th>
        <th>Phone</th>
        <th>Email</th>
        <th>Message</th>
        <th>Action</th>
    </tr>
    <tr>
    

<!--read data-->
<?php

    $sql = "SELECT InqID, Name, Phone, Email, Message FROM contact";

    $result = $con-> query($sql);

    if($result->num_rows>0)
    {
        while($row=$result->fetch_assoc())
        {
            echo "<tr>";
            echo "<td>".$row ["InqID"]."</td>";
            echo "<td>".$row ["Name"]."</td>";
            echo "<td>". $row ["Phone"]."</td>";
            echo "<td>". $row ["Email"]."</td>";
            echo "<td>". $row ["Message"]."</td>";
            echo "<td>";
            echo "<a href= 'editInquiry.php'><button id = 'btn1'>Edit</button></a>";
            echo " ";
            echo "<a href= 'deleteInquiry.php?inqid={$row['InqID']}'><button id = 'btn2'>Delete</button></a>";
            echo "</td>";
            echo "</tr>";
        }
    }

    else{
        echo "No result";
    }

    $con->close();
?>

</table>
</div>

<div class='part2'>

<!--footer file-->
<?php require("Footer.php");
?> 
</div>

</body>
</html>
