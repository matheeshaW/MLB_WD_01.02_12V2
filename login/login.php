<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
    <link rel="stylesheet" type="text/css" href="loginStyles.css">
    <link rel="stylesheet" type="text/css" href=../Styles.css>
    <?php require("Header.php");
    ?>
</head>
<body>
    <filedset align ="center">
        <h1>Log in</h1>
        </br></br>
    <form method="POST" action="login_validation.php">
        <input type="email" placeholder="Email" name="Email" required></br>
        <input type="password" placeholder="Password" name="pwd" required></br>
        </br></br></br>
        <button type="submit" name="login">Log In</button>
        </br></br></br></br>
        <h3>Don't you have an account?</h3>
        </br>
    </form>
    <div>
        <a href="../register/registration.php"> <button type="submit">Sign Up</button></a>
    </div>
        </br></br></br></br></br><br><br><br><br><br><br><br>
</fieldset>
    <?php require("Footer.php");
    ?>
</body>
</html>
