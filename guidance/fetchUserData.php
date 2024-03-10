<?php
// Database connection parameters
$servername = "localhost";
$username = "root";
$password = "";
$database = "guidance";

// Create connection
$conn = new mysqli($servername, $username, $password, $database);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// Check if username is provided
if(isset($_POST['username'])) {
    $username = $_POST['username'];
    // SQL query to fetch user data based on username
    $sql = "SELECT * FROM user WHERE username='$username'";
    $result = $conn->query($sql);

    if ($result->num_rows > 0) {
        // Fetch the first row only
        $row = $result->fetch_assoc();
        
        // Output user data as JSON
        echo json_encode(array('data' => $row));
    } else {
        // Send error message if username not found
        echo json_encode(array('error' => 'Username not found'));
    }
} else {
    // Send error message if username is not provided
    echo json_encode(array('error' => 'Username not provided'));
}

$conn->close();
?>
