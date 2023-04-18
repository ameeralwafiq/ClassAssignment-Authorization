<!DOCTYPE html>
<html>
<head>
    <title>Results</title>
</head>
<body>
<?php
	// Check if the form is submitted
	if (isset($_POST['submit'])) {
		// Retrieve the form data
		$name = $_POST['name'];
		$matric_number = $_POST['matric_number'];
		$current_address = $_POST['current_address'];
		$home_address = $_POST['home_address'];
		$email = $_POST['email'];
		$mobile_number = $_POST['mobile_number'];
		$home_number = $_POST['home_number'];

        // Server-side validation using regular expressions
			if (!preg_match('/^[A-Za-z.-]+$/', $name)) {
				die("Invalid name.");
			}

			if (!preg_match('/^\d{7}$/', $matric_number)) {
				die("Invalid matric number.");
			}

			if (!preg_match('/^\w+@[a-zA-Z_]+?\.[a-zA-Z]{2,3}$/', $email)) {
				die("Invalid email address.");
			}

			if (!preg_match('/^\d{10,11}$/', $mobile_number)) {
				die("Invalid mobile phone number.");
			}

			if (!preg_match('/^\d{10,11}$/', $home_number)) {
				die("Invalid home phone number.");
			}

            if (!preg_match('/^[^<>]+$/', $current_address)) {
				die("Invalid current address.");
			}

			if (!preg_match('/^[^<>]+$/', $home_address)) {
				die("Invalid home address.");
			}

		// Display the form data
		echo "<h3>Registration Details</h3>";
		echo "Name: " . $name . "<br>";
		echo "Matric Number: " . $matric_number . "<br>";
		echo "Current Address: " . $current_address . "<br>";
		echo "Home Address: " . $home_address . "<br>";
		echo "Email: " . $email . "<br>";
		echo "Mobile Phone Number: " . $mobile_number . "<br>";
		echo "Home Phone Number: " . $home_number . "<br>";

    }
?>

<br> 
<a href = "studentDetails.php">Back to Registration Form</a>

</body>
</html>

