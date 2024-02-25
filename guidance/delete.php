<?php

session_start();

$host="localhost";
$user="root";
$password="";
$db="guidance";


$data=mysqli_connect($host,$user,$password,$db);

if($_GET['staff_id'])
{
	$user_id=$_GET['staff_id'];

	$sql="DELETE FROM user WHERE id='$user_id' ";

	$result=mysqli_query($data,$sql);

	if($result)
	{
		$_SESSION['message']='Student Attended successfully ';
		header("location:view_student.php");
	}
}




?>