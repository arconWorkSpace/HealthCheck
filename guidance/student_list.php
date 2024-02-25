<?php
error_reporting(0);
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

  $sql="SELECT * FROM user WHERE usertype= 'admin' ";

  $result=mysqli_query($data,$sql);



?>

<style type="text/css">
.table_th
{
	padding: 20px;
	font-size: 20px;

}

.table_td
{
	padding: 20px;
	background-color: skyblue;

}

</style>





<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	
	<title>Admin Dashboard</title>

	<?php

	include 'student_css.php';
	
   ?>

	
</head>
<body>

	<?php

	include 'student_sidebar.php';

	?>

	<div class="content">

		<center>
		
		<h1>Available timings</h1>
		<?php

			 	if($_SESSION['message'])
			 	{
			 		echo$_SESSION['message'];
			 	}
			 	 unset($_SESSION['message']);


		?>
		<br><br>
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

</center>
		
	</div>


</body>
</html>