<!-- <?php
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
        $email = $_POST['email'];
        $selectedCounselor = $_POST['counselor'];
        $selectedWeek = $_POST['week'];

        // Updated SQL UPDATE statement
        $sql2 = "UPDATE user SET counsellor=?, week=?, monday=?, tuesday=?, wednesday=?, thursday=?, friday=? WHERE username=?";
        $stmt2 = mysqli_prepare($data, $sql2);
        mysqli_stmt_bind_param($stmt2, "ssssssss", $selectedCounselor, $selectedWeek, $selectedWeek, $selectedWeek, $selectedWeek, $selectedWeek, $selectedWeek, $name);
        mysqli_stmt_execute($stmt2);

        if ($stmt2) {
            header('location: student_profile.php');
            exit();
        } else {
            echo "Error updating profile: " . mysqli_error($data);
        }
    }

    // Check if the user is a student
    if ($info['usertype'] == 'student') {
        if (isset($_POST['book_appointment'])) {
            alert("Data");
        }
    }
} else {
    // Handle the case where user information is not available
    echo "Error fetching user information.";
}
?> -->



<!-- Your HTML code follows... -->

<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <title>Student Dashboard</title>


    <style type="text/css">
        body {
      background-color: #f8f9fa;
    }

    .div_deg {
      max-width: 400px;
      margin: 50px auto;
      background-color: #fff;
      padding: 20px;
      border-radius: 10px;
      box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
    }

    label {
      font-weight: bold;
      margin-bottom: 5px;
    }

    select, input {
      width: 100%;
      padding: 8px;
      margin-bottom: 15px;
      border: 1px solid #ced4da;
      border-radius: 4px;
      box-sizing: border-box;
    }

    input[type="submit"] {
      background-color: #28a745;
      color: #fff;
      cursor: pointer;
    }

    /* Simple animation */
    @keyframes fadeIn {
      from {
        opacity: 0;
      }
      to {
        opacity: 1;
      }
    }

    /* Apply the animation to the form */
    .div_deg {
      animation: fadeIn 1s ease-in-out;
     padding-bottom: 70px;
}
    </style>
</head>

<body>
<?php

include 'student_sidebar.php';

?>

    <div class="content">
        <center>
            <h1>Book Appointment</h1>
            <br><br>
            <form action="sent.php" method="POST" class="div_deg">
                <div>
                    <label>Email</label>
                    <input type="text" name="email" value="<?php echo $info['email']; ?>" readonly class="form-control">
                </div>

                <div>
                    <label>Counselor</label>
                    <select name="counselor" class="form-control">
                    <?php
                    // Fetch and display the list of admin users
                    $adminUsersQuery = "SELECT username FROM user WHERE usertype='admin'";
                    $adminUsersResult = mysqli_query($data, $adminUsersQuery);
                    while ($adminUser = mysqli_fetch_assoc($adminUsersResult)) {
                        echo "<option value='" . $adminUser['username'] . "'>" . $adminUser['username'] . "</option>";
                    }
                    ?>
                    </select>
                </div>

                <div>
                    <label>Select Day:</label>
                    <select name="week" class="form-control">
                    <option value="monday">Monday</option>
                    <option value="tuesday">Tuesday</option>
                    <option value="wednesday">Wednesday</option>
                    <option value="thursday">Thursday</option>
                    <option value="friday">Friday</option>
                    </select>
                </div>

                <div id="setDoctorTime">
                    <label for="timing">Timing</label>
                    <input type="text" name="timing" class="form-control">
                </div>

                <div>
    <label for="checkup">CheckUp For:</label>
    <select name="checkup" class="form-control">
        <option value="headache">Headache</option>
        <option value="depression">Depression</option>
        <option value="anxiety">Anxiety</option>
        <option value="stress">Stress</option>
        <!-- Add more options as needed -->
    </select>
</div>


                <div>
                    <input type="submit" class="btn btn-success" name="update_profile" value="Update Profile">
                </div>
            </form>
        </center>
    </div>
</body>

</html>
