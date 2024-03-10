<?php
session_start(); // Start the session if it's not already started
$NAME = $_SESSION['counsellorname'];

// Check if the id is set in the POST request
if(isset($_POST['id'])) {
    $id = $_POST['id'];
    
    // Database connection
    $host = "localhost";
    $user = "root";
    $password = "";
    $db = "guidance";

    $conn = mysqli_connect($host, $user, $password, $db);

    // Check connection
    if (!$conn) {
        die("Connection failed: " . mysqli_connect_error());
    }
    $sql1 = "SELECT * FROM appointment_details WHERE id = ?";
    $stmt1 = $conn->prepare($sql1);
    $stmt1->bind_param("i", $id);
    $stmt1->execute();
    $result1 = $stmt1->get_result();
    $row = $result1->fetch_assoc();
    
    $addRow = "INSERT INTO history_appointment_details (historyid, name, email, counselor, day, class, timing, checkup_for) VALUES (?, ?, ?, ?, ?, ?, ?, ?)";
    $stmt2 = $conn->prepare($addRow);
    $stmt2->bind_param("isssssss", $row["id"], $row["name"], $row["email"], $row["counselor"], $row["day"], $row["class"], $row["timing"], $row["checkup_for"]);
    $stmt2->execute();
    
    // Check for successful insertion
    if ($stmt2->affected_rows > 0) {
        $sql = "DELETE FROM appointment_details WHERE id = ?";
        $stmt = $conn->prepare($sql);
        
        // Bind the id parameter
        $stmt->bind_param("i", $id);
        
        // Execute the statement
        if ($stmt->execute()) {
            echo "success"; // Send success response to the client
        } else {
            echo "Error: " . $stmt->error;
        }
    } else {
        echo "Error: " . $stmt2->error;
    }
    
   
    
   
   
    // Close the statements
    $stmt1->close();
    $stmt2->close();
 
} else {
    echo "No id received";
}
?>
