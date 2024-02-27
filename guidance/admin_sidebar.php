<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <title>Your Website</title>
</head>
<style>
     .logout-button {
        display: inline-block;
        padding: 10px 20px; /* Adjust padding as needed */
       /* Button background color */
        color: white; /* Text color */
        text-decoration: none; /* Remove underline */
        border: none; /* Remove border */
        border-radius: 5px; /* Add border radius for rounded corners */
        cursor: pointer; /* Change cursor on hover */
        transition: background-color 0.3s; /* Smooth transition for background color change */
    }
</style>
<body>

<nav class="navbar navbar-default">
  <div class="container-fluid">
    <!-- Brand and toggle get grouped for better mobile display -->
    <div class="navbar-header">
      <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar-collapse" aria-expanded="false">
        <span class="sr-only">Toggle navigation</span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
      </button>
      <a class="navbar-brand" href="adminhome.php">MindCheckUp</a>
    </div>

    <!-- Collect the nav links, forms, and other content for toggling -->
    <div class="collapse navbar-collapse" id="navbar-collapse">
      <ul class="nav navbar-nav">
       
       
        <li><a href="adminhome.php" data-target="#home">Home</a></li>
        <li><a href="weekly_availability.php" data-target="#doctor-timings">Doctor Timings</a></li>
        <li><a href="view_bookings.php" data-target="#book-appointment">Book Appointment</a></li>
      </ul>

      <!-- Add a logout button -->
      <ul class="nav navbar-nav navbar-right">
        <li><a href="logout.php" class="logout-button">Logout</a></li>
      </ul>
    </div><!-- /.navbar-collapse -->
  </div><!-- /.container-fluid -->
</nav>

<!-- Your page content goes here -->
 
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>

</body>
</html>
