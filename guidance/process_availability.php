<?php

$host = "localhost";
$user = "root";
$password = "";
$db = "guidance";
session_start();
$Name = $_SESSION["counsellorname"];
 
$data = mysqli_connect($host, $user, $password, $db);

// Check connection
if (!$data) {
    die("Connection failed: " . mysqli_connect_error());
}
$query = "SELECT email FROM user WHERE username = '$Name'";

// Perform the query
$result = mysqli_query($data, $query);
$row = mysqli_fetch_assoc($result);
$Email = $row['email'];
$success = isset($_POST['Monday_timeIn']) &&
isset($_POST['Monday_timeOut']) &&
isset($_POST['Tuesday_timeIn']) &&
isset($_POST['Tuesday_timeOut']) &&
isset($_POST['Wednesday_timeIn']) &&
isset($_POST['Wednesday_timeOut']) &&
isset($_POST['Thursday_timeIn']) &&
isset($_POST['Thursday_timeOut']) &&
isset($_POST['Friday_timeIn']) &&
isset($_POST['Friday_timeOut']);
// Process form data
if ($success ) {
    // Retrieve values from the form
    $mondayTimeIn = $_POST["Monday_timeIn"];
    $mondayTimeOut = $_POST["Monday_timeOut"];

    $tuesdayTimeIn = $_POST["Tuesday_timeIn"];
    $tuesdayTimeOut = $_POST["Tuesday_timeOut"];

    $wednesdayTimeIn = $_POST["Wednesday_timeIn"];
    $wednesdayTimeOut = $_POST["Wednesday_timeOut"];

    $thursdayTimeIn = $_POST["Thursday_timeIn"];
    $thursdayTimeOut = $_POST["Thursday_timeOut"];

    $fridayTimeIn = $_POST["Friday_timeIn"];
    $fridayTimeOut = $_POST["Friday_timeOut"];
  
    

    $checkQuery = "SELECT * FROM availability WHERE Name = '$Name'";
    $checkResult = mysqli_query($data, $checkQuery);

    if (mysqli_num_rows($checkResult) > 0) {
        // If the name exists, perform an UPDATE query
        $updateQuery = "UPDATE availability SET
                        email = '$Email', 
                        Monday_timeIn = '$mondayTimeIn', 
                        Monday_timeOut = '$mondayTimeOut', 
                        Tuesday_timeIn = '$tuesdayTimeIn', 
                        Tuesday_timeOut = '$tuesdayTimeOut', 
                        Wednesday_timeIn = '$wednesdayTimeIn', 
                        Wednesday_timeOut = '$wednesdayTimeOut', 
                        Thursday_timeIn = '$thursdayTimeIn', 
                        Thursday_timeOut = '$thursdayTimeOut', 
                        Friday_timeIn = '$fridayTimeIn', 
                        Friday_timeOut = '$fridayTimeOut' 
                        WHERE Name = '$Name'";
        
        if (mysqli_query($data, $updateQuery)) {
            header("location: timing.html");
        } else {
            echo "Error updating record: " . mysqli_error($data);
        }
    } else {
        // If the name doesn't exist, perform an INSERT query
        $sql = "INSERT INTO availability (name, email, Monday_timeIn, Monday_timeOut, Tuesday_timeIn, Tuesday_timeOut, Wednesday_timeIn, Wednesday_timeOut, Thursday_timeIn, Thursday_timeOut, Friday_timeIn, Friday_timeOut)
                VALUES ('$Name', '$Email', '$mondayTimeIn', '$mondayTimeOut', '$tuesdayTimeIn', '$tuesdayTimeOut', '$wednesdayTimeIn', '$wednesdayTimeOut', '$thursdayTimeIn', '$thursdayTimeOut', '$fridayTimeIn', '$fridayTimeOut')";

        if (mysqli_query($data, $sql)) {
            header("location: timing.html");
        } else {
            echo "Error: " . mysqli_error($data);
        }
    }
}
// Close the database connection
mysqli_close($data);

?>
