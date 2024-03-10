<?php
include "student_sidebar.php";
session_start();

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

// Get the username from the session
$name = $_SESSION["studentname"];
// SQL query to retrieve data for the logged-in user
$sql = "SELECT * FROM appointment_details WHERE name = '$name'";
$result = $conn->query($sql);

// Start HTML and CSS styling
// Start HTML and CSS styling
echo "<style>
        body {
            font-family: 'Arial', sans-serif;
        }
        table {
            border-collapse: collapse;
            width: 100%;
            font-size: 16px;
        }
        th, td {
            border: 1px solid #dddddd;
            text-align: left;
            padding: 12px;
            opacity: 0;
            animation: fadeInUp 0.75s forwards;
        }
        th {
            background-color: #f2f2f2;
            font-weight: bold;
        }
        tr:hover {
            background-color: #f5f5f5;
            transition: background-color 0.3s ease;
        }
        .feedback-btn {
            background-color: #4caf50;
            color: white;
            padding: 10px 14px;
            text-align: center;
            text-decoration: none;
            display: inline-block;
            border-radius: 4px;
            cursor: pointer;
            font-weight: bold;
            animation: pulse 1s infinite;
            transition: background-color 0.3s ease;
        }
        .feedback-btn:hover {
            background-color: #45a049;
            animation: none; /* Stop the pulse animation on hover */
        }
        
        @keyframes fadeInUp {
            to {
                opacity: 1;
                transform: translateY(0);
            }
        }

        @keyframes pulse {
            0% {
                transform: scale(1);
            }
            50% {
                transform: scale(1.1);
            }
            100% {
                transform: scale(1);
            }
        }
    </style>";

// HTML table start
echo "<table>";
echo "<tr><th>Index</th><th>Counsellor</th><th>Day</th><th>Timing</th><th>Intervention</th></tr>";

if ($result) {
    $index = 1;
    // Output data of each row
    while ($row = $result->fetch_assoc()) {
        echo "<tr>";
        echo "<td>" . $index++ . "</td>";
        echo "<td>" . $row["counselor"] . "</td>";
        echo "<td>" . $row["day"] . "</td>";
        echo "<td>" . $row["timing"] . "</td>";
        echo "<td>" . $row["checkup_for"] . "</td>";
        echo "</tr>";
    }
} else {
    echo "<tr><td colspan='6'>Error: " . $conn->error . "</td></tr>";
} 

// HTML table end
echo "</table>";

// Close connection
$conn->close();
?>
