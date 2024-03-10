<?php

error_reporting(0);
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

  
  if($_SERVER["REQUEST_METHOD"]=="POST")
	{
		$name = $_POST['username'];

		$pass = $_POST['password'];
		$usertype = $_POST['logintype'];

  	echo $name;
	$sql = "SELECT * FROM user WHERE username='$name' AND password='$pass' AND usertype='$usertype'";

  	$result=mysqli_query($data,$sql);

  	$row=mysqli_fetch_array($result);


  	if($row["usertype"]=="Student")
  	{

  		$_SESSION['studentname']=$name;

  		$_SESSION['usertype']="Student";

  		header("location:studenthome.php");
  	}

  	elseif($row["usertype"]=="Counsellor")
  	{
  		$_SESSION['counsellorname']=$name;

  		$_SESSION['usertype']="Counsellor";

  		header("location:adminhome.php");
  	}
	  elseif($row["usertype"]=="Admin")
  	{
  		$_SESSION['adminname']=$name;

  		$_SESSION['usertype']="Admin";

  		header("location:adminhomepage.php");
  	}

  	else
  	{
  		


  		$message= "Incorrect Username or Password";

  		$_SESSION['loginMessage']=$message;

  		header("location:login.php");
  	}



  

  }
?>


















