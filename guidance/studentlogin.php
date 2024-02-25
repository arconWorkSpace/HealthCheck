<?php
session_start();

// Check if the form is submitted
if (isset($_POST['submit'])) {
    // Get form inputs
    $username = $_POST['username'];
    $password = $_POST['password'];

    // Database connection parameters
    $host = "localhost";
    $username_db = "root";
    $password_db = "";
    $database = "students";

    // Create a database connection
    $conn = new mysqli($host, $username_db, $password_db, $database);

    // Check connection
    if ($conn->connect_error) {
        die("Connection failed: " . $conn->connect_error);
    }

    // SQL query to check if the username and password match a record in the "students" table
    $query = "SELECT * FROM students WHERE username='$username' AND password='$password'";
    $result = $conn->query($query);

    // Check if a matching record is found
    if ($result->num_rows > 0) {
        // Successful login, set session variables
        $_SESSION['username'] = $username;
        // Add other session variables if needed

        // Redirect to the student dashboard or another page
        header("location: student_dashboard.php");
    } else {
        // Invalid login, set error message
        $_SESSION['loginMessage'] = "Invalid username or password.";
        header("location: student_login.php");
    }

    // Close the database connection
    $conn->close();
} else {
    // If the form is not submitted, redirect to the login page
    header("location: student_login.php");
}
?>
