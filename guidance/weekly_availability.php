<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Add Your Availability for the Week</title>
    <style type="text/css">
        body {
            font-family: 'Arial', sans-serif;
            background-color:  ;
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
            width: 700px;
            padding: 30px;
            margin: 0 auto;
            border-radius: 8px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.2);
        }

        form {
            text-align: center;
        }

        label {
            display: inline-block;
            text-align: center;
            width: 80px;
            padding: 10px;
            color: #fff;
            transition: background-color 0.3s, transform 0.3s;
        }

        label:hover {
            background-color: #2ecc71;
            transform: scale(1.1);
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
            transition: box-shadow 0.3s;
        }

        input[type="time"]:hover {
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.2);
        }

        input[type="submit"] {
            background-color: #2ecc71;
            color: #fff;
            padding: 10px 20px;
            border: none;
            border-radius: 5px;
            cursor: pointer;
            font-size: 16px;
            transition: background-color 0.3s;
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

    <div class="content">
        <center>
            <h1>Date and Time Availability</h1>
            <div class="div_deg">
              

    <form action="process_availability.php"  method="POST">

        <label for="Monday_timeIn">Monday</label>
        <input type="time" id="Monday_timeIn" name="Monday_timeIn" required>
        <label for="Monday_timeOut">to</label>
        <input type="time" id="Monday_timeOut" name="Monday_timeOut" required><br>

        <label for="Tuesday_timeIn">Tuesday </label>
        <input type="time" id="Tuesday_timeIn" name="Tuesday_timeIn" required>
        <label for="Tuesday_timeOut">to</label>
        <input type="time" id="Tuesday_timeOut" name="Tuesday_timeOut" required><br>

        <label for="Wednesday_timeIn">Wednesday </label>
        <input type="time" id="Wednesday_timeIn" name="Wednesday_timeIn" required>
        <label for="Wednesday_timeOut">to</label>
        <input type="time" id="Wednesday_timeOut" name="Wednesday_timeOut" required><br>

        <label for="Thursday_timeIn">Thursday </label>
        <input type="time" id="Thursday_timeIn" name="Thursday_timeIn" required>
        <label for="Thursday_timeOut">to</label>
        <input type="time" id="Thursday_timeOut" name="Thursday_timeOut" required><br>

        <label for="Friday_timeIn">Friday </label>
        <input type="time" id="Friday_timeIn" name="Friday_timeIn" required>
        <label for="Friday_timeOut">to</label>
        <input type="time" id="Friday_timeOut" name="Friday_timeOut" required><br>

        <input type="submit" value="Submit">
    </form>
            </div>
        </center>
    </div>

</body>
</html>
