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
  $NAME = $_SESSION['username'];
  $host="localhost";
  $user="root";
  $password="";
  $db="guidance";

  $data=mysqli_connect($host,$user,$password,$db);

  $sql = "SELECT * FROM appointment_details WHERE counselor = '$NAME'";

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

 
	
</head>
<style>
      body {
            font-family: Arial, sans-serif;
            background-color: #f4f4f4;
            margin: 0;
            padding: 0;
        }

        .content {
            max-width: 800px;
            margin: 50px auto;
            background-color: #fff;
            padding: 20px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
            border-radius: 8px;
        }

        h1 {
            text-align: center;
            color: #333;
        }

        table {
            width: 100%;
            border-collapse: collapse;
            margin-top: 20px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
            border-radius: 8px;
            overflow: hidden;
        }

        th, td {
            border: 1px solid #dddddd;
            text-align: left;
            padding: 15px;
            transition: background-color 0.3s ease;
        }

        th {
            background-color: #f2f2f2;
        }

        tr:hover {
            background-color: #e0f7fa;
        }
    </style>
<body>

<?php

include 'admin_sidebar.php';

?>

	<div class="content">

		<center>
		
		<h1>My bookings</h1>
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
                <th>Index</th>
                <th>Email</th>
                <th>Timing</th>
                <th>Checkup</th>
            </tr>
			<?php
			$index = 0;
			
			while($info=$result->fetch_assoc())
			{
				$index++;
			?>
			<tr>
				<td class="table_td">
					<?php echo $index ?>
				</td>
				<td class="table_td">
					<?php echo "{$info['email']}"; ?>
				</td>
				<td class="table_td">
					<?php echo "{$info['timing']}"; ?>
				</td>
				<td class="table_td">
					<?php echo "{$info['checkup_for']}"; ?>
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