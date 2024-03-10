<?php
session_start();

$servername = "localhost";
$username = "root";
$password = "";
$dbname = "guidance";

$conn = new mysqli($servername, $username, $password, $dbname);

if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

if (isset($_POST['submit_feedback'])) {
    $appointmentId = $_POST['submit_feedback'];
    $feedback = $_POST['feedback_' . $appointmentId];
    if($feedback==""){
        header("location:feedbackfail.html");
    }
    else{
        $sql = "UPDATE history_appointment_details SET feedback = ? WHERE id = ?";
        $stmt = $conn->prepare($sql);
        $stmt->bind_param("si", $feedback, $appointmentId);
        $stmt->execute();
        $stmt->close();
    
        header("location:success.html");
    }
   
} else {
    echo "Invalid request";
}

$conn->close();
?>
