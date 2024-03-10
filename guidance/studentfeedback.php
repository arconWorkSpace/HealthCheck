<?php
// fetch_appointment_details.php
session_start();
include "student_sidebar.php";
// Check if the form is submitted
if ($_SERVER["REQUEST_METHOD"] === "POST" && isset($_POST['appointmentId'])) {
    $appointmentId = $_POST['appointmeantId'];
    $_SESSION['appointmentId'] = $appointmentId;

    // Database connection parameters
    $servername = "localhost";
    $username = "root";
    $password = "";
    $dbname = "guidance";

    // Create connection
    $conn = new mysqli($servername, $username, $password, $dbname);

    // Check connection
    if ($conn->connect_error) {
        die("Connection failed: " . $conn->connect_error);
    }

    // Retrieve appointment ID from session
    $feedbackId = $_SESSION['appointmentId'];

    // SQL query to retrieve appointment details
    $sql = "SELECT counselor, checkup_for, day, timing FROM appointment_details WHERE id = ?";
    $stmt = $conn->prepare($sql);
    $stmt->bind_param("i", $feedbackId);
    $stmt->execute();
    $stmt->bind_result($counselor, $checkupFor, $day, $timing);

    // Fetch the result
    $stmt->fetch();

    // Close statement
    $stmt->close();

    // Close connection
    $conn->close();
} else {
    header("location: mybooking.php");
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Checkup Form</title>
  <!-- Add your CSS links here -->
</head>
<style>
    body {
      font-family: 'Arial', sans-serif;
      background-color: #f4f4f4;
      color: #333;
    }

    .container {
      max-width: 600px;
      margin: auto;
      padding: 20px;
      background-color: #fff;
      border-radius: 8px;
      box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
    }

    h2 {
      color: #007bff;
    }

    .form-group {
      margin-bottom: 20px;
    }

    .form-control, textarea {
      width: 100%;
      padding: 10px;
      box-sizing: border-box;
      border: 1px solid #ddd;
      border-radius: 4px;
    }

    .form-row {
      display: flex;
    }

    .form-group.col-md-6 {
      flex: 0 0 50%;
      max-width: 50%;
      padding-right: 15px;
    }

    .btn-primary {
      background-color: #007bff;
      color: #fff;
      padding: 10px 20px;
      border: none;
      border-radius: 4px;
      cursor: pointer;
    }

    .btn-primary:hover {
      background-color: #0056b3;
    }
  </style>
<body>

<div class="container mt-4">
  <h2>Checkup Form</h2>
  <form id="checkupForm" action="">
    <!-- Add a hidden input field to store the appointment ID -->
    <input type="hidden" id="appointmentId" name="appointmentId" value="<?php echo $appointmentId; ?>">

    <div class="form-group">
    <label for="counselorName">Counselor Name:</label>
    <input type="text" class="form-control" id="counselorName" value="<?php echo $counselor; ?>" readonly>
</div>

<div class="form-group">
    <label for="checkupFor">Checkup For:</label>
    <input type="text" class="form-control" id="checkupFor" value="<?php echo $checkupFor; ?>" readonly>
</div>

<div class="form-row">
    <div class="form-group col-md-6">
        <label for="day">Day:</label>
        <input type="text" class="form-control" id="day" value="<?php echo $day; ?>" readonly>
    </div>

    <div class="form-group col-md-6">
        <label for="time">Time:</label>
        <input type="text" class="form-control" id="time" value="<?php echo $timing; ?>" readonly>
    </div>
</div>

    <div class="form-group">
      <label for="feedback">Feedback:</label>
      <textarea class="form-control" id="feedback" rows="4" placeholder="Enter your feedback"></textarea>
    </div>

    <button type="submit" class="btn btn-primary">Submit</button>
  </form>
</div>

<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>

</body>
</html>
