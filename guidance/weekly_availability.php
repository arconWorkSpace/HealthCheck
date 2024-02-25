<?php

session_start();

  if (!isset($_SESSION['username']))
   {
  	header("location:login.php");
  }

  elseif($_SESSION['usertype']=='staff')
  {

  	header("location:login.php");
  	
  }

  $host="localhost";
  $user="root";
  $password="";
  $db="guidance";

  $data=mysqli_connect($host,$user,$password,$db);

  if(isset($_POST['weekly_availability']))
  {
 $username=$_POST['username']; 	
$week=$_POST['week'];
$monday=$_POST['monday'];
$tuesday=$_POST['tuesday'];
$wednesday=$_POST['wednesday'];
$thursday=$_POST['thursday'];
$friday=$_POST['friday'];
  	

  	$usertype="admin";


  	$check="SELECT * FROM user WHERE username='$username' ";

  	$check_user=mysqli_query($data,$check);

  	$row_count=mysqli_num_rows($check_user);

  	if($row_count==1)
  	{
  		echo "<script type='text/javascript'> 
  		alert('Username already Exist. Try Another One');

  		 </script>";
		
  	}
  	    else
  	{

  	$sql="INSERT INTO user(username,week,monday,tuesday,wednesday,thursday,friday) VALUES ('$username','$week','$monday','$tuesday','$wednesday','$thursday','$friday')";

  	$result=mysqli_query($data,$sql);

  	if($result)
  	{
  		echo "<script type='text/javascript'> 
  		alert('Data Upload Succees');



  		 </script>";
  	}

  	else
  	{
  		echo "Upload Failed";
  	}
  }

  }

?>


<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	
	<title>Add your availability for the week</title>

	<style type="text/css">
		label
		{
			display: inline-block;
			text-align: right;
			width: 100px;
			padding-top: 10px;
			padding-bottom: 10px;

		}

		.div_deg
		{
			background-color: skyblue;
			width: 400px;
			padding-top: 70px;
			padding-bottom: 70px;

		}

	</style>
	<?php

	include 'admin_css.php';
	
   ?>

	
</head>
<body>

	<?php

	include 'admin_sidebar.php';

	?>

	<div class="content">

		<center>
		<h1>Date and time available</h1>

		<div class="div_deg">
			<form action="" method="POST">

<div>
					<label>user</label>
					<input type="text" name="username" value="<?php echo "{$info['username']}"; ?>">
				</div>

<div>
					<label>Week</label>
					<input type="number" name="week" placeholder="current school week/13">
				</div>
				<div>
					<label>Monday</label>
					<input type="time" name="monday" placeholder="Time available">
				</div>
				<div>
					<label>Tuesday</label>
					<input type="time" name="tuesday" placeholder="Time available">
				</div>
				<div>
					<label>Wednesday</label>
					<input type="time" name="wednesday"placeholder="Time available">
				</div>
				<div>
					<label>Thursday</label>
					<input type="time" name="thursday"placeholder="Time available">
				</div>
				<div>
					<label>Friday</label>
					<input type="time" name="friday"placeholder="Time available">
				</div>
				<div>
					<input type="submit" class="btn btn-primary" name="weekly_availability" value="Submit">
				</div>
			</form>
		</div>
		

		</center>
	</div>


</body>
</html>