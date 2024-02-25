<?php

error_reporting(0);
session_start();
session_destroy();

if($_SESSION['message'])
{
	$message=$_SESSION['message'];

	echo "<script type='text/javascript'> 

	alert('$message');

	</script>";
}

$host="localhost";
$user="root";
$password="";
$db="guidance";

$data=mysqli_connect($host,$user,$password,$db);

$sql="SELECT * FROM user WHERE usertype= 'student'&& counsellor='mrs.xx' ";

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
table{
	marginTop:100px
}
</style>

<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	
	<title>Guidance System</title>
	<link rel="stylesheet" type="text/css" href="style.css">

	<!-- Latest compiled and minified CSS -->
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@3.3.7/dist/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">

<!-- Optional theme -->
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@3.3.7/dist/css/bootstrap-theme.min.css" integrity="sha384-rHyoN1iRsVXV4nD0JutlnGaslCJuC7uwjduW9SVrLvRYooPp2bWYgmgJQIXwl/Sp" crossorigin="anonymous">

<!-- Latest compiled and minified JavaScript -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@3.3.7/dist/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>
</head>
<body>
	
	<nav>

		<ul>
		
			<li><a href="./login.php" class="btn btn-success">login</a></li>
		</ul>
	</nav>
<br/><br/><br/><br/><br/><br/><br/><br/><br/>
	<table border="1px">
			<tr>
				<th class="table_th">UserName</th>
				<th class="table_th">Email</th>
				<th class="table_th">Commits</th>
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
					<?php echo "{$info['commits']}"; ?>
				</td>	
			</tr>
			<?php 
		}
			?>
		</table>
<footer>
	<h4 class="footer_text">ALL @Copyright Resereved </h4>
</footer>
</body>
</html>
