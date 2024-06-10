<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    
    <title>Home</title>
    <link rel="stylesheet" type="text/css" href="homeStyless.css">

    <!--header file-->
    <?php require("Header.php");
    ?> 

</head>

    <body>
	
	<div class="top-buttons">
        <button onclick="window.location.href='userprofile/userprofile.php'">User Profile</button>
        <button onclick="window.location.href='logout.php'">Log Off</button>
    </div>

    <div class="part1">
        <div class = "image-container">
        <img src = "images/home.jpg" id='image' class="rounded-image">
        </div>

        <div class="part2 ">
        <aside>
        <h1>Insure Me</h1>

        <p>Welcome to <b>"Insure Me"</b> Vehicle Insurance Management System!</p>
        <p>We are providing you the best coverage options for your vehicle under two types of coverage options which are
        "Third Party Liability" and "Comprehensive Coverage"
        </P></br>

        <ul type= square align = left>

            <li>Third Party Liability</li>
            <p><i>Covers damage to third party's vehicle or property or injury to third party.</i></p>
            <li>Comprehensive Coverage</li>
            <p><i>Covers the cost of damages caused by non-collision events that are outside of your control.</i></p></br>
        </ul>

        <h2>Join with Us to find the best insurace for your vehicle!</h2>

        </aside>
        </div>
    </div>

    <!--footer file-->
    <?php require("Footer.php");
    ?>

    </body>
</html>