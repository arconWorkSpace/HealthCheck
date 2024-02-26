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
<body>



</body>
</html>