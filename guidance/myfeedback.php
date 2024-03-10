<?php
include "student_sidebar.php";
session_start();
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <style>
       <style>
        body {
            font-family: 'Arial', sans-serif;
            background-color: #f4f4f4;
            margin: 0;
            padding: 0;
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
        }

        form {
            margin-top: 20px;
            width: 80%;
            max-width: 800px;
            margin-left: auto;
            margin-right: auto;
        }

        table {
            width: 100%;
            border-collapse: collapse;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
            background-color: #fff;
            margin-top: 20px;
        }

        th, td {
            padding: 15px;
            text-align: left;
            border-bottom: 1px solid #ddd;
        }

        th {
            background-color: #f2f2f2;
        }

        textarea {
            width: calc(100% - 16px);
            margin: 8px;
            padding: 8px;
            box-sizing: border-box;
            border: 1px solid #ddd;
            border-radius: 5px;
        }

        button {
            background-color: #4caf50;
            color: #fff;
            padding: 12px 18px;
            border: none;
            border-radius: 5px;
            cursor: pointer;
            box-shadow: 0 2px 4px rgba(0, 0, 0, 0.1);
        }

        button:hover {
            background-color: #45a049;
        }
    </style>
</head>
<body>

<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "guidance";

$conn = new mysqli($servername, $username, $password, $dbname);

if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

$nameToSearch = 'JaneSmith';

$sql = "SELECT * FROM history_appointment_details WHERE name = ? AND feedback IS NULL";
$stmt = $conn->prepare($sql);
$stmt->bind_param("s", $nameToSearch);
$stmt->execute();

$result = $stmt->get_result();

if ($result->num_rows > 0) {
    echo "<form method='post' action='submit_feedback.php'>";
    echo "<table>";
    echo "<tr><th>Name</th><th>Day</th><th>Timing</th><th>Intervention</th><th>Feedback</th><th>Activity</th></tr>";

    while ($row = $result->fetch_assoc()) {
        echo "<tr>";
        echo "<td>" . $row['counselor'] . "</td>";
        echo "<td>" . $row['day'] . "</td>";
        echo "<td>" . $row['timing'] . "</td>";
        echo "<td>" . $row['checkup_for'] . "</td>";
        echo "<td><textarea name='feedback_" . $row['id'] . "' id='feedback_" . $row['id'] . "'></textarea></td>";
        echo "<td><button type='submit' name='submit_feedback' value='" . $row['id'] . "'>Submit Feedback</button></td>";
        echo "</tr>";
    }
    

    echo "</table>";
    echo "</form>";
} else {
    echo "No records found for the given name.";
}

$stmt->close();
$conn->close();
?>

</body>
</html>
