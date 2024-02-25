<?php

session_start();

$host="localhost";

$user="root";

$password="";

$db="guidance";

$data=mysqli_connect($host,$user,$password,$db);

if($data===false)
{
	die("connection error");
}

if(isset($_POST['apply']))


{
	$data_name=$_POST['name'];
	$data_email=$_POST['email'];
	$data_commits=$_POST['commits'];
	$data_message=$_POST['message'];

	$sql="INSERT INTO admission(name,email,commits,message)VALUES ('$data_name','$data_email','$data_commits','$data_message')";
	$result=mysqli_query($data,$sql);

	if($result)
	{

		$_SESSION['message']="application sent sussesful";

		header("location:index.php");


	}

	else
	{
		echo "Apply Failed";
	}


}








?>