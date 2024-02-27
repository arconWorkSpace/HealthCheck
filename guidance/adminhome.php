<?php

session_start();

  if (!isset($_SESSION['username']))
   {
  	header("location:login.php");
  }

  elseif($_SESSION['usertype']=='student')
  {

  	header("location:login.php");
  	
  }




?>





<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	
	<title>Admin Dashboard</title>
	<?php

include 'admin_sidebar.php';

?>


</head>
<style>
    body {
            font-family: 'Arial', sans-serif;
            margin: 0;
            padding: 0;
            background-image: url('./new image/doctor.jpg');
            background-size: contain;
            background-repeat: no-repeat;
            background-position: center;
        }
</style>
<body>

<h1>Counselor Dashboard</h1>

</body>
</html>