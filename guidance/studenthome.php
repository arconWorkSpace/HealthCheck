<?php

session_start();

  if (!isset($_SESSION['username']))
   {
  	header("location:login.php");
  }

  elseif($_SESSION['usertype']=='admin')
  {

  	header("location:login.php");
  	
  }

?>

<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	
	<title>Admin Dashboard</title>
</head>

<body>
 
<?php

include 'student_sidebar.php';

?>

	 

</body>
</html>


<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <title>Your Website</title>
</head>
<body>


<!-- Your page content goes here -->

<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
</body>
</html>
