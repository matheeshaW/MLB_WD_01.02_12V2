<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Contact Us</title>

    <link rel="stylesheet" type="text/css" href="contactStyle.css">
    <script src="contact.js"></script>

    <!--header file-->
    <?php require("Header.php");
    ?>

</head>

<body>

    <!--contact details-->
    <aside>
        <h2>Contact Details</h2></br></br>
            <b>Telephone</b></br></br>+947627272828</br>+947426309330</br></br></br></br></br></br>
            <b>Email</b></br></br>
            <a href= "https://mail.google.com/mail/">insureme@gmail.com</a></br></br></br></br></br></br>
            <b>Social Media</b></br></br>
            <a href="https://www.facebook.com/">
            <img class = "img1" src = "../images/facebook.png" alt = "Facebook">           
            </a>
            <a href="https://twitter.com/">
            <img class = "img2" src = "../images/twitter.png" alt = "Twitter">         
            </a>
            <a href="https://www.instagram.com/">
            <img class = "img1" src = "../images/insta.png" alt = "Instagram">          
            </a>
            <a href="https://www.whatsapp.com/">
            <img class = "img2" src = "../images/whatsapp.png" alt = "Whatsapp">          
            </a>
            </br></br></br></br></br></br></br></br></br>
    </aside>

    <!--contact us form-->
    <fieldset>
        
        <h1>Contact Us</h1>

        <form method = 'POST' action = "insertInquiry.php">
            <input type = "text" placeholder = "Inquiry Id" name = "inqid" required></br></br>
            <input type = "text" placeholder = "Name" name = "name" required></br></br>
            <input type = "phone" placeholder = "Phone" name = "phone" required></br></br>
            <input type = "email" placeholder = "Email" name = "email" required></br></br>
            <textarea placeholder = "Message" name="message" rows="4" cols="77" required></textarea></br></br>
            <button type = "submit" onclick = "successalert()">Submit</button>
            <button type = "reset">Reset</button>
            <br> <br> <br> <br> <br> <br> <br> <br>
        </form>
        
    </fieldset>

    <!--footer file-->
    <?php require("Footer.php");
    ?>    
</body>
</html>
