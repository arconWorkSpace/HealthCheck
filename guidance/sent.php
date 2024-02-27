
<?php

session_start();

if (!isset($_SESSION['username'])) {
    header("location: login.php");
    exit();
}

    $host = "localhost";
    $user = "root";
    $password = "";
    $db = "guidance";
    
    $data = mysqli_connect($host, $user, $password, $db);
 
    // Assuming you have a database connection established

    if ($_SERVER["REQUEST_METHOD"] == "POST" && isset($_POST["update_profile"])) {
        // Retrieve form data
        $Name = $_SESSION["username"];
        $email = $_POST["email"];
        $counselor = $_POST["counselor"];
        $day = ucfirst($_POST["week"]);
        $standard = $_POST["standard"];
        $division = $_POST["division"];
        if($standard!=-1 && $division!="-1"){
            $class = $standard . $division;
            $checkup_for = $_POST["checkup"]; // Make sure to add 'name' attribute to your checkup input field
        $timing_query = "SELECT * FROM availability WHERE Name = '$counselor'";
        $timing_result = mysqli_query($data, $timing_query);
        $weekWithTimeIn = $day . "_timeIn";
        $weekWithTimeIOut = $day . "_timeOut";

        if ($timing_result) {
            // Check if any rows were returned
            if (mysqli_num_rows($timing_result) > 0) {
                $row = mysqli_fetch_assoc($timing_result);
                $timing1 = $row[$weekWithTimeIn];
                $timing2 = $row[$weekWithTimeIOut];
                $timing = $timing1 ." - ". $timing2;
                // Insert data into the databases
                $insertQuery = "INSERT INTO appointment_details (name,email, counselor, day,class, timing, checkup_for) VALUES ('$Name','$email', '$counselor', '$day','$class', '$timing', '$checkup_for')";
    
                if (mysqli_query($data, $insertQuery)) {
                    header("Location: success.html");
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
        else{
            header("Location: faliure.html");
        }
        
    }
    
?>