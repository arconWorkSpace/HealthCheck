<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Student Counseling Information</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <style>
        body {
            font-family: 'Arial', sans-serif;
            background-color: #f9f9f9; /* Light background color */
            margin: 0;
            padding: 0;
            animation: fadeIn 0.5s ease-in-out; /* Adding fade-in animation */
        }

        h1 {
            text-align: center;
            margin-top: 20px;
            color: #007bff; /* Blue color */
        }

        .container {
            margin-top: 50px;
        }

        .card {
            margin-bottom: 20px;
            border: 1px solid #ddd; /* Add a border to the card */
            border-radius: 10px;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1); /* Add a subtle box shadow */
        }

        .card-header {
            background-color: #f8f9fa; /* Light gray background color for header */
        }

        .btn-link {
            color: #007bff; /* Blue color for the collapsible button text */
        }

        .btn-link:hover {
            text-decoration: none;
        }

        .card-body {
            background-color: #fff; /* White background color for card body */
            padding: 15px;
        }

        ul {
            list-style-type: none; /* Remove list bullets */
            padding: 0;
        }

        li {
            margin-bottom: 10px;
        }

        @keyframes fadeIn {
            from { opacity: 0; }
            to { opacity: 1; }
        }
    </style>
</head>
<body>
    <h1>Mental Health Information</h1>
    <div class="container">
        <div id="accordion">
            <?php
            // Database connection
            $servername = "localhost";
            $username = "root";
            $password = "";
            $dbname = "guidance";

            $conn = new mysqli($servername, $username, $password, $dbname);

            // Check connection
            if ($conn->connect_error) {
                die("Connection failed: " . $conn->connect_error);
            }

            // SQL query
            $sql = "SELECT * FROM resource";
            $result = $conn->query($sql);

            if ($result->num_rows > 0) {
                // Output data of each row
                while($row = $result->fetch_assoc()) {
                    echo '<div class="card">';
                    echo '<div class="card-header">';
                    echo '<h5 class="mb-0">';
                    echo '<button class="btn btn-link collapsed" data-toggle="collapse" data-target="#collapse' . $row["id"] . '" aria-expanded="false" aria-controls="collapse' . $row["id"] . '">';
                    echo $row["Title"];
                    echo '</button>';
                    echo '</h5>';
                    echo '</div>';
                    echo '<div id="collapse' . $row["id"] . '" class="collapse" aria-labelledby="heading' . $row["id"] . '" data-parent="#accordion">';
                    echo '<div class="card-body">';
                    echo '<ul>';
                    echo '<li>' . $row["Description"] . '</li>';
                    echo '</ul>';
                    echo '</div>';
                    echo '</div>';
                    echo '</div>';
                    
                }
            } else {
                echo '<h1>No Information</h1>';
            }
            $conn->close();
            ?>
        </div>
    </div>

    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</body>
</html>
