
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
        $week = ucfirst($_POST["week"]);
        

        $checkup_for = $_POST["checkup"]; // Make sure to add 'name' attribute to your checkup input field
        $timing_query = "SELECT * FROM availability WHERE Name = '$counselor'";
        $timing_result = mysqli_query($data, $timing_query);
        $weekWithTimeIn = $week . "_timeIn";
        $weekWithTimeIOut = $week . "_timeOut";

        if ($timing_result) {
            // Check if any rows were returned
            if (mysqli_num_rows($timing_result) > 0) {
                $row = mysqli_fetch_assoc($timing_result);
                $timing1 = $row[$weekWithTimeIn];
                $timing2 = $row[$weekWithTimeIOut];
                $timing = $timing1 ."-". $timing2;
                // Insert data into the database
                $insertQuery = "INSERT INTO appointment_details (email, counselor, week, timing, checkup_for) VALUES ('$email', '$counselor', '$week', '$timing', '$checkup_for')";
    
                if (mysqli_query($data, $insertQuery)) {
                    echo "Data inserted successfully!";
                } else {
                    echo "Error: " . mysqli_error($data);
                }
            } else {
                echo "No available timing found for the selected counselor and week.";
            }
        } else {
            echo "Error: " . mysqli_error($data);
        }
    }
    
?>