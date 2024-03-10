<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <title>All'z Well - Counsellor Home</title>
  <style>
    .navbar-default {
      background-color: #3498db; /* Blue background color */
      border-color: #3498db; /* Matching border color */
    }
    .navbar-default .navbar-brand,
    .navbar-default .navbar-nav > li > a {
      color: white; /* Set text color to white */
    }
    .navbar-brand {
      display: flex;
      align-items: center;
    }
    .navbar-brand img {
      max-height: 50px;
      width: auto;
      margin-right: 10px; /* Adjust as needed */
    }
 
  </style>
</head>
<body>

<nav class="navbar navbar-default">
  <div class="container-fluid">
    <div class="navbar-header">
      <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar-collapse" aria-expanded="false">
        <span class="sr-only">Toggle navigation</span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
      </button>
      <a class="navbar-brand" href="adminhome.php">
        <img src="./new image/favicon.jpeg" alt="All'z Well">
        All'z Well <!-- Brand name text -->
      </a>

    </div>

    <div class="collapse navbar-collapse" id="navbar-collapse">
      <ul class="nav navbar-nav">
        <li><a href="adminhome.php" data-target="#home">Home</a></li>
        <li><a href="weekly_availability.php" data-target="#doctor-timings">Counsellor Timing</a></li>
        <li><a href="view_bookings.php" data-target="#book-appointment">Book Appointment</a></li>
        <li><a target="_blank" href="resource.html" data-target="#book-appointment">Add Resource</a></li>
      </ul>

      <ul class="nav navbar-nav navbar-right">
        <li><a href="#" class="logout-button" data-toggle="modal" data-target="#confirmLogoutModal">Logout</a></li>
      </ul>
    </div>
  </div>
</nav>

<!-- Logout Confirmation Modal -->
<div id="confirmLogoutModal" class="modal fade" role="dialog">
  <div class="modal-dialog">

    <!-- Modal content-->
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal">&times;</button>
        <h4 class="modal-title">Confirm Logout</h4>
      </div>
      <div class="modal-body">
        <p>Are you sure you want to logout?</p>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-default" data-dismiss="modal">Cancel</button>
        <a href="logout.php" class="btn btn-primary">Logout</a>
      </div>
    </div>

  </div>
</div>

<!-- Your page content goes here -->
 
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>

</body>
</html>
