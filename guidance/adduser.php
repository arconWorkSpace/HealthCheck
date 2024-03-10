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
		$email = $_POST['email'];
        $usertype = $_POST['usertype'];

  	
	$sql =  "INSERT INTO `user` (`username`, `email`, `usertype`, `password`) VALUES ('$name', '$email', '$usertype', '$pass')";

  	$result=mysqli_query($data,$sql);

  	if($result){
		header("Location: addusersucess.html");
	}

 
 
  }
?>


















