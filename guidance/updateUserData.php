
<?php
// Assuming you have already established a database connection
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
 
// Assuming you have already established a database connection

// Check if the request method is POST
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Retrieve data from POST request
    $username = $_POST["username"];
    $email = $_POST["email"];
    $userType = $_POST["userType"];
    $password = $_POST["password"];
    
    // Validate the data if needed
    
    // Prepare an SQL statement to update the user data
    $sql = "UPDATE user SET email=?, usertype=?, password=? WHERE username=?";
    
    // Prepare the statement
    $stmt = $conn->prepare($sql);
    
    if ($stmt === false) {
        // If there was an error in preparing the statement, handle the error
        echo json_encode(array("status" => "error", "message" => $conn->error));
    } else {
        // Bind parameters
        $stmt->bind_param("ssss", $email, $userType, $password, $username);
        
        // Execute the statement
        if ($stmt->execute()) {
            // If the update was successful
            echo json_encode(array("status" => "success", "message" => "User data updated successfully"));
        } else {
            // If there was an error in the execution of the statement
            echo json_encode(array("status" => "error", "message" => "Error updating user data: " . $stmt->error));
        }
        
        // Close the statement
        $stmt->close();
    }
} else {
    // If the request method is not POST, return an error
    echo json_encode(array("status" => "error", "message" => "Invalid request method"));
}

// Close the database connection
$conn->close();
?>
