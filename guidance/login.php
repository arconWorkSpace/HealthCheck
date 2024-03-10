<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    
    <title>Login Form</title>
    <link rel="stylesheet" type="text/css" href="style.css">

    <!-- Latest compiled and minified CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@3.3.7/dist/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">

    <!-- Optional theme -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@3.3.7/dist/css/bootstrap-theme.min.css" integrity="sha384-rHyoN1iRsVXV4nD0JutlnGaslCJuC7uwjduW9SVrLvRYooPp2bWYgmgJQIXwl/Sp" crossorigin="anonymous">

    <!-- Latest compiled and minified JavaScript -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@3.3.7/dist/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>
</head>
<style>
    body {
    font-family: 'Arial', sans-serif;
    margin: 0;
    padding: 0;
    display: flex;
    align-items: center;
    justify-content: center;
    height: 100vh;
}
 
.background-image {
    background-image: url('./new image/doctor.jpg');
    background-size: cover;
    background-position: center;
    width: 100%;
    height: 100%;
    display: flex;
    align-items: center; /* Center vertically */
    justify-content: center; /* Center horizontally */
}

.form_deg {
    background-color: rgba(255, 255, 255, 0.8); /* Adjust the alpha value for opacity */
    border-radius: 10px;
    box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
    padding: 20px;
    width: 300px;
    text-align: center;
}

.title_deg {
    margin-bottom: 20px;
}

h1 {
    color: #333;a
}

h4 {
    color: #e74c3c;
    margin: 0;
}

.login_form {
    display: flex;
    flex-direction: column;
}

label {
    margin-bottom: 5px;
    color: #333;
}

input, select {
    padding: 10px;
    margin-bottom: 15px;
    border: 1px solid #ddd;
    border-radius: 5px;
    width: 100%;
}

.btn {
    background-color: #3498db;
    color: #fff;
    padding: 10px;
    border: none;
    border-radius: 5px;
    cursor: pointer;
}

.btn:hover {
    background-color: #2980b9;
}

</style>
<body>
    <div class="background-image">
        <center>
            <div class="form_deg">
                <div class="title_deg">
                    <h1>Login</h1>
                    <?php
                        session_start();
                        if(isset($_SESSION['loginMessage'])) {
                            echo '<p style="color: red;">' . $_SESSION['loginMessage'] . '</p>';
                            unset($_SESSION['loginMessage']); // Clear the message after displaying it
                        }
                    ?>
                </div>
                <form action="login_check.php" method="POST" class="login_form">
                    <div>
                        <label>Username</label>
                        <input type="text" name="username" id="username" required>
                    </div>
                    <div>
                        <label>Password</label>
                        <input type="password" name="password" id="password" required>
                    </div>
                    <div>
                        <label>Login As</label>
                        <select name="logintype" id="logintype">
                            <option value="Counsellor">Counsellor</option>
                            <option value="Student">Student</option>
                            <option value="Admin">Admin</option>
                        </select>
                    </div>
                    <div>
                        <input class="btn" type="submit" name="submit" value="Login">
                    </div>
                </form>
            </div>
        </center>
    </div>
</body>
</html>
