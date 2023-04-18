<!DOCTYPE html>
<html>
<head>
	<title>Registration Form</title>
	<script src="js/validation.js"></script>
</head>
<body>

	<?php 
		// Start session and check if user is authorized
		session_start();
		if (!isset($_SESSION['email']) || !isset($_SESSION['password'])) {
			echo "You are not authorized to access this page. Please log in first.";
	?>
		<a href="login.php"><button>Log In</button></a>
	<?php
			exit();
		}
	?>

	<h2>Registration Form</h2>
	<form name="registration_form" method="post" action="submit_details.php" onsubmit="return validateInput();">

        <!-- 1 -->
		<label>Name:</label><br>
		<input type="text" name="name" required><br><br>

        <!-- 2 -->
		<label>Matric Number:</label><br>
		<input type="number" name="matric_number" required><br><br>

        <!-- 3 -->
		<label>Current Address:</label><br>
		<textarea name="current_address" required></textarea><br><br>

        <!-- 4 -->
		<label>Home Address:</label><br>
		<textarea name="home_address" required></textarea><br><br>

        <!-- 5 -->
		<label>Email:</label><br>
		<input type="email" name="email" required><br><br>
                
        <!-- 6 -->
		<label>Mobile Phone Number:</label><br>
		<input type="number" name="mobile_number" required><br><br>

        <!-- 7 -->
		<label>Home Phone Number:</label><br>
		<input type="number" name="home_number" required><br><br>

		<input type="submit" name="submit" value="Submit">
	</form>
</body>
</html>