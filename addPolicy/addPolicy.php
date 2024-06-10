<!DOCTYPE html>
<head>
<?php require("Header.php");
?>

    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Add new policy</title>
    <link rel="stylesheet" href="addPolicyStyle.css">


</head>
<body>

    <div class="title-box">
        <h1 class="title">Add New Policy</h1>
    </div>
	
    <div class="container">

        <div class="left">
            <img src="vehicleInsurance4.jpeg" alt="Vertical Picture">
        </div>
        <div class="right">
            <form action="submitPolicy.php" method="post">
                <div class="form-group">
                    <label for="vehicle_make">Vehicle Make:</label>
                    <input type="text" id="vehicle_make" name = "make" placeholder="e.g., Toyota" required>
                </div>
                <div class="form-group">
                    <label for="vehicle_model">Vehicle Model:</label>
                    <input type="text" id="vehicle_model" name = "model" placeholder="e.g., Camry" required>
                </div>
                <div class="form-group">
                    <label for="vin">Vehicle Identification Number (VIN):</label>
                    <input type="text" id="vin" name="vin" placeholder="17 characters" required>
                </div>
                <div class="form-group">
                    <label for="registration_number">Registration Number:</label>
                    <input type="text" id="registration_number" name = "regNo" placeholder="e.g., ABC123" required>
                </div>
                <div class="form-group">
                    <label for="engine_capacity">Engine Capacity:</label>
                    <input type="text" id="engine_capacity" name ="capacity" placeholder="e.g., 2000CC" required>
                </div>
                <div class="form-group">
                    <label for="fuel_type">Fuel Type:</label>
                    <input type="text" id="fuel_type" name ="fuel" placeholder="e.g., Petrol" required>
                </div>
                <div class="form-group">
                    <label for="year_manufacture">Year of Manufacture:</label>
                    <input type="Text" id="year_manufacture" name = "yom" required>
                </div>
                <div class="form-group">
                    <label for="coverage_options">Coverage Options:</label>
                    <select id="coverage_options" name = "coverage" required>
                        <option value="" disabled selected>Select coverage option</option>
                        <option value="third_party">Third-party Liability</option>
                        <option value="comprehensive">Comprehensive Coverage</option>
                    </select>
                </div>
                <div class="form-group">
                    <label for="terms_conditions">Accept Terms and Conditions:</label>
                    <input type="checkbox" id="terms_conditions" required>
                </div>
                <div class="form-group">
                    <button type="submit">Submit</button>
                </div>
            </form>
        </div>
    </div>
</body>
<?php require("Footer.php");
?>
</html>