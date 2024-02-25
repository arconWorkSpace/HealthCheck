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
            // Handle booking appointment here
            // ...
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
                    <!-- Displaying the current user's email in the "Email" field -->
                    <div>
                        <label>Email </label>
                        <input type="text" name="email" value="<?php echo $info['email']; ?>" readonly>
                    </div>

                    <!-- Dropdown for selecting counselor -->
                    <div>
                        <label>Counselor</label>
                        <select name="counselor">
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

                    <!-- Dropdown for selecting week -->
                    <div>
                        <label>Week</label>
                        <select name="week">
                            <option value="monday">Monday</option>
                            <option value="tuesday">Tuesday</option>
                            <option value="wednesday">Wednesday</option>
                            <option value="thursday">Thursday</option>
                            <option value="friday">Friday</option>
                        </select>
                    </div>

                    <!-- Display additional features for students -->
                    <div>
                        <!-- Use the correct button name for form submission -->
                        <input type="submit" class="btn btn-success" name="update_profile" value="Update Profile">
                    </div>

                </div>
            </form>
        </center>
    </div>
</body>

</html>
