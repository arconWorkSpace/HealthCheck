<?php
// Database connection parameters
$servername = "localhost"; // Change this if your MySQL server is hosted elsewhere
$username = "root"; // Your MySQL username
$password = ""; // Your MySQL password
$dbname = "guidance"; // Your MySQL database name

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Retrieve data from form
    $title = $_POST["title"];
    $description = $_POST["content"];

    if($title!="" && $description!=""){
        $sql = "INSERT INTO resource (Title, Description) VALUES ('$title', '$description')";

        if ($conn->query($sql) === TRUE) {
        } else {
            echo "Error: " . $sql . "<br>" . $conn->error;
        }
        
    }
    header("Location: resource.html");
   
}

 
// Close connection
$conn->close();
?>



