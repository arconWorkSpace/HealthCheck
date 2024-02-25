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
            background-color: #f4f4f4;
            margin: 0;
            padding: 0;
            display: flex;
            align-items: center;
            justify-content: center;
            height: 100vh;
        }

        .form_deg {
            background-color: #fff;
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
            color: #333;
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

        @keyframes fadeIn {
            from {
                opacity: 0;
                transform: translateY(-20px);
            }
            to {
                opacity: 1;
                transform: translateY(0);
            }
        }

        .form_deg {
            animation: fadeIn 0.5s ease-out;
        }
</style>
<body>
     <center>
     <div class="form_deg">
    <div class="title_deg">
        <h1>Login</h1>
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
            <select name=" " id="logintype">
                <option value="Doctor">Doctor</option>
                <option value="Student">Student</option>
            </select>
        </div>
        <div>
            <input class="btn" type="submit" name="submit" value="Login">
        </div>
    </form>
</div>



     </center>


</body>
</html>