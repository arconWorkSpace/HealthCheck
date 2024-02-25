<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Add Your Availability for the Week</title>

    <style type="text/css">
        body {
            font-family: 'Arial', sans-serif;
            background-color: #3498db;
            margin: 0;
            padding: 0;
        }

        .content {
            margin: 50px auto;
            max-width: 800px;
            background-color: #fff;
            padding: 20px;
            border-radius: 8px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
        }

        h1 {
            color: #3498db;
            text-align: center;
        }

        .div_deg {
            background-color: #3498db;
            color: #fff;
            width: 400px;
            padding: 30px;
            margin: 0 auto;
            border-radius: 8px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.2);
        }

        form {
            text-align: left;
        }

        label {
            display: inline-block;
            text-align: right;
            width: 120px;
            padding: 10px;
            color: #fff;
        }

        input[type="text"],
        input[type="number"],
        input[type="time"] {
            padding: 10px;
            margin-bottom: 10px;
            width: 150px;
            border: 1px solid #ddd;
            border-radius: 5px;
            box-sizing: border-box;
        }

        input[type="time"] {
            width: 80px; /* Adjusted size for time inputs */
        }

        input[type="submit"] {
            background-color: #2ecc71;
            color: #fff;
            padding: 10px 20px;
            border: none;
            border-radius: 5px;
            cursor: pointer;
            font-size: 16px;
        }

        input[type="submit"]:hover {
            background-color: #27ae60;
        }
		.form-submit {
            text-align: center;
        }
    </style>
</head>
<body>

    <?php include 'admin_sidebar.php'; ?>

    <div class="content">
        <center>
            <h1>Date and Time Availability</h1>
            <div class="div_deg">
                <form action="process_availability.php" method="POST">
                    <div>
                        <label>User</label>
                        <input type="text" name="username" value="<?php echo "{$info['username']}"; ?>">
                    </div>
                    <div>
                        <label>Week</label>
                        <input type="number" name="week" placeholder="Current school week/13">
                    </div>

                    <!-- Day-wise availability input -->
                    <?php
					$days = ['Monday', 'Tuesday', 'Wednesday', 'Thursday', 'Friday'];
					foreach ($days as $day) {
						echo '<div>';
						echo "<label>{$day}</label>";
						echo '<input type="time" name="' . $day . '_from" placeholder="From">';
						echo '<input type="time" name="' . $day . '_to" placeholder="To">';
						echo '</div>';
					}
					?>

                    <div>
                        <input type="submit" class="btn btn-primary form-submit" name="weekly_availability" value="Submit">
                    </div>
                </form>
            </div>
        </center>
    </div>

</body>
</html>
