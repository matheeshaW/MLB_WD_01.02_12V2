<!DOCTYPE html>
<head>
<?php require("Header.php");
?>
	<meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Registration</title>
    <link rel="stylesheet" href="registrationstyle.css">
	<script src="registration.js"></script>
	
</head>
<body>
    <div class="container">
        <div class="left">
            <img src="register.jpg" alt="Registration Image">
        </div>
        <div class="right">
            <h2>Registration</h2>
            <form action="submitRegistration.php" method="post" onsubmit="return validatePassword()">
                <div class="input-group">
                    <label for="fullname">First name :</label>
                    <input type="text" id="firstname" name="firstName" placeholder="john" required>
					
                </div>
				<div class="input-group">
                    <label for="fullname">Last name :</label>
                    <input type="text" id="lastname" name="lastName" placeholder="doe" required>
					
                </div>
                <div class="input-group">
                    <label for="nic">NIC :</label>
                    <input type="text" id="nic" name="nic" placeholder="123456789v" pattern="[0-9]{9}[vV]|[0-9]{12}" required>
                </div>
                <div class="input-group">
                    <label for="email">E-mail :</label>
                    <input type="email" id="email" name="email" placeholder="abg@gmail.com"
						pattern="[a-z0-9._%+-]+@[a-z]{2,3}" required>
                </div>
                <div class="input-group">
                    <label for="phone">Phone :</label>
                    <input type="tel" id="phone" name="phone" placeholder="0712345678" pattern="[0-9]{10}" required>
                </div>
                <div class="input-group">
                    <label for="address">Address :</label>
                    <input type="text" id="address" name="address" placeholder="3rd Floor, Hilton Hotel, Echelon Squere" required>
                </div>
                <div class="input-group">
                    <label>Gender :</label> &nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp
                    <label for="male" id="maleLabel">Male</label>
                    <input type="radio" id="male" name="gender" value="male" required>
                    <label for="female" id="femaleLabel">Female</label>
                    <input type="radio" id="female" name="gender" value="female" required>
                </div>
                <div class="input-group">
                    <label for="dob">Date of Birth :</label>
                    <input type="date" id="dob" name="dob" required>
                </div>
                <div class="input-group">
                    <label for="password">Password :</label>
                    <input type="password" id="password" name="password" pattern="^(?=.*[a-z])(?=.*[A-Z])(?=.*\d)(?=.*[@$!%*?&])[A-Za-z\d@$!%*?&]{8,}$" required>
					<small class="password-hint">Password should contain Uppercase letters, lowercase letters,special characters, numbers, minimum 8 characters.</small>
                </div>
                <div class="input-group">
                    <label for="confirmPassword">Re-enter Password :</label>
                    <input type="password" id="confirmPassword" name="confirmPassword" required>
                </div>
                <button type="submit">Sign up</button>
            </form>
        </div>
    </div>
</body>
<?php require("Footer.php");
?>
</html>