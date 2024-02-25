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

$name = $_SESSION['username'];

$sql = "SELECT * FROM user WHERE username=?";
$stmt = mysqli_prepare($data, $sql);
mysqli_stmt_bind_param($stmt, "s", $name);
mysqli_stmt_execute($stmt);

$result = mysqli_stmt_get_result($stmt);

// Check if user information is fetched successfully
if ($result && $info = mysqli_fetch_assoc($result)) {
    if (isset($_POST['update_profile'])) {
        $counsellor = $_POST['counsellor'];

        $sql2 = "UPDATE user SET counsellor=? WHERE username=?";
        $stmt2 = mysqli_prepare($data, $sql2);
        mysqli_stmt_bind_param($stmt2, "ss", $counsellor,  $name);
        mysqli_stmt_execute($stmt2);

        if ($stmt2) {
            header('location: student_profile.php');
            exit();
        }
     

    }

    // Check if the user is an 
    if ($info['usertype'] == 'student') {
        if (isset($_POST['book_appointment'])) {
            // Copy and submit the entire row to the user table
            $sql3 = "INSERT INTO user (username, counsellor) SELECT username, counsellor FROM user WHERE username=?";
            $stmt3 = mysqli_prepare($data, $sql3);
            mysqli_stmt_bind_param($stmt3, "s", $name);
            mysqli_stmt_execute($stmt3);

            if ($stmt3) {
                // Successful appointment booking
                echo "<script>alert('Appointment booked successfully!');</script>";
            } else {
                // Failed to book appointment
                echo "<script>alert('Failed to book appointment.');</script>";
            }
        }
    }
} else {
    // Handle the case where user information is not available
    echo "Error fetching user information.";
}
?>
<!-- Your HTML code follows... -->

<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <title>Student Dashboard</title>

    <?php include 'student_css.php' ?>

    <style type="text/css">
        label {
            display: inline-block;
            text-align: right;
            width: 100px;
            padding-top: 10px;
            padding-bottom: 10px;
        }

        .div_deg {
            background-color: skyblue;
            width: 500px;
            padding-top: 70px;
            padding-bottom: 70px;
        }
    </style>
</head>

<body>
    <?php include 'student_sidebar.php' ?>

    <div class="content">
        <center>
            <h1>Update Profile</h1>
            <br><br>
           <form action="<?php echo $_SERVER['PHP_SELF']; ?>" method="POST">

                <div class="div_deg">
                    <div>
                        <label>Counsellor</label>
                        <input type="text" name="counsellor" value="<?php echo "{$info['email']}"; ?>">
                    </div>
                    

                    <!-- Display additional features for studentss -->
<table border="1px">
			<tr>
				<th class="table_th">UserName</th>
				<th class="table_th">Email</th>
<th class="table_th">Week</th>
<th class="table_th">Monday</th>
<th class="table_th">Tuesday</th>
<th class="table_th">Wednesday</th>
<th class="table_th">Thursday</th>
<th class="table_th">Friday</th>
					
					
			</tr>
			<?php
			while($info=$result->fetch_assoc())
			{
			?>
			<tr>
				<td class="table_td">
					<?php echo "{$info['username']}"; ?>
				</td>
				<td class="table_td">
					<?php echo "{$info['email']}"; ?>
				</td>
					
					<td class="table_td">
					<?php echo "{$info['week']}"; ?>
				</td>
</td>
					
					<td class="table_td">
					<?php echo "{$info['monday']}"; ?>
				</td>
</td>
					
					<td class="table_td">
					<?php echo "{$info['tuesday']}"; ?>
				</td>
</td>
					
					<td class="table_td">
					<?php echo "{$info['wednesday']}"; ?>
				</td>
</td>
					
					<td class="table_td">
					<?php echo "{$info['thursday']}"; ?>
				</td>
</td>
					
					<td class="table_td">
					<?php echo "{$info['friday']}"; ?>
				</td>
			</tr>
			<?php 

		}

			?>
		</table>

                    
                        <div>
                            <input type="submit" class="btn btn-success" name="book_appointment" value="Book Appointment">
                        </div>
                    
                </div>
            </form>
        </center>
    </div>
</body>

</html>
