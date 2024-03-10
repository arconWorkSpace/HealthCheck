<?php
error_reporting(0);
session_start();

  if (!isset($_SESSION['studentname']))
   {
  	header("location:login.php");
    exit();
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

  $sql="SELECT * FROM availability";

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

	include 'student_sidebar.php';
	
   ?>

	
</head>
<body>

 

	<div class="content">

		<center>
		
		<h1>Counsellor Available Time</h1>
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
        <th class="table_th">Name</th>
        <th class="table_th">Email</th>
        
        <th class="table_th" colspan="2">Monday</th>
        <th class="table_th" colspan="2">Tuesday</th>
        <th class="table_th" colspan="2">Wednesday</th>
        <th class="table_th" colspan="2">Thursday</th>
        <th class="table_th" colspan="2">Friday</th>
    </tr>
    <tr>
        <td class="table_td"></td>
        <td class="table_td"></td>
     
        <td class="table_td">From</td>
        <td class="table_td">To</td>
        <td class="table_td">From</td>
        <td class="table_td">To</td>
        <td class="table_td">From</td>
        <td class="table_td">To</td>
        <td class="table_td">From</td>
        <td class="table_td">To</td>
        <td class="table_td">From</td>
        <td class="table_td">To</td>
    </tr>
    <?php
    while($info = $result->fetch_assoc()) {
    ?>
        <tr>
            <td class="table_td"><?php echo "{$info['name']}"; ?></td>
            <td class="table_td"><?php echo "{$info['email']}"; ?></td>
            
            <td class="table_td"><?php echo "{$info['Monday_timeIn']}"; ?></td>
            <td class="table_td"><?php echo "{$info['Monday_timeOut']}"; ?></td>
            <td class="table_td"><?php echo "{$info['Tuesday_timeIn']}"; ?></td>
            <td class="table_td"><?php echo "{$info['Tuesday_timeOut']}"; ?></td>
            <td class="table_td"><?php echo "{$info['Wednesday_timeIn']}"; ?></td>
            <td class="table_td"><?php echo "{$info['Wednesday_timeOut']}"; ?></td>
            <td class="table_td"><?php echo "{$info['Thursday_timeIn']}"; ?></td>
            <td class="table_td"><?php echo "{$info['Thursday_timeOut']}"; ?></td>
            <td class="table_td"><?php echo "{$info['Friday_timeIn']}"; ?></td>
            <td class="table_td"><?php echo "{$info['Friday_timeOut']}"; ?></td>
        </tr>
    <?php 
    }
    ?>
</table>


</center>
		
	</div>


</body>
</html>