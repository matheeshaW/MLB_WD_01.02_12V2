<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Edit Inquiry</title>

    <link rel="stylesheet" type="text/css" href="editInqStyles.css">

    <!--header file-->
    <?php require("Header.php");
    ?>
</head>

<body>

    

    <!--edit inquiry form-->
    <fieldset>
        
        <h1>Edit Inquiry</h1>

        <form method = 'POST' action = "updateInquiry.php">
            <input type = "text" placeholder = "Inquiry Id" name = "inqid"></br></br>
            <input type = "text" placeholder = "Name" name = "name"></br></br>
            <input type = "phone" placeholder = "Phone" name = "phone"></br></br>
            <input type = "email" placeholder = "Email" name = "email"></br></br>
            <textarea placeholder = "Message" name="message" rows="4" cols="77"></textarea></br></br>
            <button type = "submit">Edit</button>
            <button type = "reset">Reset</button>
            <br><br><br><br><br><br><br><br><br><br><br><br>
        </form>
        
    </fieldset>

    <!--footer file-->
    <?php require("Footer.php");
    ?>    
</body>
</html>