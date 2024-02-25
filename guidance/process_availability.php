<?php
session_start();

$host = "localhost";
$user = "root";
$password = "";
$db = "guidance";

$data = mysqli_connect($host, $user, $password, $db);

if (isset($_POST['weekly_availability'])) {
    $username = $_POST['username'];
    $week = $_POST['week'];

    $days = ['Monday', 'Tuesday', 'Wednesday', 'Thursday', 'Friday'];

    $success = true;  // Assume success initially

    foreach ($days as $day) {
        $from = $_POST[$day . '_from'];
        $to = $_POST[$day . '_to'];

        // Construct your SQL query
        $sql = "INSERT INTO user_availability (username, week, day, from_time, to_time)
                VALUES ('$username', '$week', '$day', '$from', '$to')";

        // Execute the query
        $result = mysqli_query($data, $sql);

        // Check for success
        if (!$result) {
            // If any query fails, set success to false
            $success = false;
            echo "Upload Failed for $day: " . mysqli_error($data) . "<br>";
        }
    }

    // Add individual queries for each day
    $monday_from = $_POST['Monday_from'];
    $monday_to = $_POST['Monday_to'];
    $tuesday_from = $_POST['Tuesday_from'];
    $tuesday_to = $_POST['Tuesday_to'];
    $wednesday_from = $_POST['Wednesday_from'];
    $wednesday_to = $_POST['Wednesday_to'];
    $thursday_from = $_POST['Thursday_from'];
    $thursday_to = $_POST['Thursday_to'];
    $friday_from = $_POST['Friday_from'];
    $friday_to = $_POST['Friday_to'];

    $sql_monday = "INSERT INTO user_availability (username, week, day, from_time, to_time)
                   VALUES ('$username', '$week', 'Monday', '$monday_from', '$monday_to')";
    $sql_tuesday = "INSERT INTO user_availability (username, week, day, from_time, to_time)
                    VALUES ('$username', '$week', 'Tuesday', '$tuesday_from', '$tuesday_to')";
    $sql_wednesday = "INSERT INTO user_availability (username, week, day, from_time, to_time)
                      VALUES ('$username', '$week', 'Wednesday', '$wednesday_from', '$wednesday_to')";
    $sql_thursday = "INSERT INTO user_availability (username, week, day, from_time, to_time)
                     VALUES ('$username', '$week', 'Thursday', '$thursday_from', '$thursday_to')";
    $sql_friday = "INSERT INTO user_availability (username, week, day, from_time, to_time)
                   VALUES ('$username', '$week', 'Friday', '$friday_from', '$friday_to')";

    // Execute individual queries
    $result_monday = mysqli_query($data, $sql_monday);
    $result_tuesday = mysqli_query($data, $sql_tuesday);
    $result_wednesday = mysqli_query($data, $sql_wednesday);
    $result_thursday = mysqli_query($data, $sql_thursday);
    $result_friday = mysqli_query($data, $sql_friday);

    // Check for success of individual queries
    if (!$result_monday || !$result_tuesday || !$result_wednesday || !$result_thursday || !$result_friday) {
        // If any individual query fails, set success to false
        $success = false;
        echo "Upload Failed for individual days: " . mysqli_error($data) . "<br>";
    }

    if ($success) {
        echo "<script type='text/javascript'> 
            alert('Data Upload Success');
        </script>";
    }
}
?>
