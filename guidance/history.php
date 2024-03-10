<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>History Appointment Details</title>
    <style>
        table {
            border-collapse: collapse;
            width: 100%;
            text-align: center;
            margin-top: 20px;
            opacity: 0;
            animation: fadeIn 1s ease-in-out forwards;
        }

        th, td {
            border: 1px solid #dddddd;
            padding: 8px;
        }

        th {
            background-color: #f2f2f2;
        }

        .feedback-cell {
            max-height: 100px; /* Set a fixed height */
            overflow-y: auto; /* Enable vertical scrolling */
            position: relative; /* Position relative for ellipsis */
            cursor: pointer; /* Add cursor pointer for feedback interaction */
        }

        .feedback-content {
            overflow-wrap: break-word; /* Wrap long words */
        }

        @keyframes fadeIn {
            from {
                opacity: 0;
            }
            to {
                opacity: 1;
            }
        }

        /* Popup styles */
        .popup {
            display: none;
            position: fixed;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            background-color: rgba(0, 0, 0, 0.5);
            z-index: 9999;
        }

        .popup-content {
            background-color: white;
            width: 50%;
            margin: 10% auto;
            padding: 20px;
            border-radius: 5px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.3);
        }

        .popup-close {
            float: right;
            cursor: pointer;
        }
    </style>
</head>
<body>

<?php
session_start();
include "sidebar.php";
?>
<style>
    th{
        text-align:center;
    }
</style>
<h1 style='background-color: #f2f2f2; font-size: 24px; text-align: center; padding: 10px; margin-bottom: 20px; border: 1px solid #dddddd; border-radius: 5px; box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1); animation: slideIn 1s ease-in-out forwards;'>Appointment Detail History</h1>
<table border='1'>
    <tr style='background-color: #f2f2f2;'>
        <th>Index</th>
        <th>Student Name</th>
        <th>Student Email</th>
        <th>Counsellor</th>
        <th>Day</th>
        <th>Timing</th>
        <th>Intervention</th>
        <th style='width: 200px;'>Feedback</th>
    </tr>

    <?php
    // Fetch and display data
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

    // Fetch data from the history_appointment_table
    $sql = "SELECT * FROM history_appointment_details";
    $result = $conn->query($sql);

    // Check if any rows are returned
    if ($result->num_rows > 0) {
        $index = 1;

        // Output data of each row
        while ($row = $result->fetch_assoc()) {
            echo "<tr><td>" . $index++ . "</td><td>" . $row["name"] . "</td><td>" . $row["email"] . "</td><td>" . $row["counselor"] . "</td><td>" . $row["day"] . "</td><td>" . $row["timing"] . "</td><td>" . $row["checkup_for"] . "</td><td class='feedback-cell'><div class='feedback-content'>" . $row["feedback"] . "</div></td></tr>";
        }
    } else {
        echo "<tr><td colspan='8'>No records found</td></tr>";
    }

    // Close connection
    $conn->close();
    ?>

</table>

<!-- Popup -->
<div id="popup" class="popup">
    <div class="popup-content">
        <span class="popup-close" onclick="closePopup()">✖</span>
        <h2>Feedback</h2>
        <div id="popup-feedback"></div>
    </div>
</div>

</body>
</html>
