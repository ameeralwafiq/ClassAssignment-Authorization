<?php
// Start session
session_start();

// Check if the login form has been submitted
if (isset($_POST['login_user'])) {
    
    // Get the username and password from the login form
    $username = mysqli_real_escape_string($db, $_POST['username']);
    $password = mysqli_real_escape_string($db, $_POST['password']);
    
    // Validate username and password (e.g., check against a database record)
    $query = "SELECT * FROM users WHERE username='$username' AND password='$password'";
    $results = mysqli_query($db, $query);
    
    if (mysqli_num_rows($results) == 1) {
        // If the username and password are valid, store them in session variables
        $_SESSION['username'] = $username;
        $_SESSION['password'] = $password;
        
        // Redirect to the protected page
        header('Location: studentDetails.php');
        exit();
    } else {
        // If the username and password are not valid, display an error message
        array_push($errors, "Wrong username/password combination");
    }
}
?>
