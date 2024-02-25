
<?php
    $host = "localhost";
    $user = "root";
    $password = "";
    $db = "guidance";
    
    $data = mysqli_connect($host, $user, $password, $db);
 
    // Assuming you have a database connection established

    if ($_SERVER["REQUEST_METHOD"] == "POST" && isset($_POST["update_profile"])) {
        // Retrieve form data
        $email = $_POST["email"];
        $counselor = $_POST["counselor"];
        $week = $_POST["week"];
        $timing = $_POST["timing"]; // Make sure to add 'name' attribute to your timing input field
        $checkup_for = $_POST["checkup"]; // Make sure to add 'name' attribute to your checkup input field

        // Insert data into the database
        $insertQuery = "INSERT INTO appointment_details (email, counselor, week, timing, checkup_for) VALUES ('$email', '$counselor', '$week', '$timing', '$checkup_for')";

        if (mysqli_query($data, $insertQuery)) {
            echo "Data inserted successfully!";
        } else {
            echo "Error: " . mysqli_error($data);
        }
    }
?>