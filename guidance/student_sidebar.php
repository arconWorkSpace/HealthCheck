<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <title>All'z Well - Student Home</title>
</head>
<style>
   /* Updated color scheme */
  .navbar {
    background-color: #3498db; /* Blue color */
    border-radius: 0;
    border: none;
  }

  .navbar-default .navbar-brand {
    color: #ffffff; /* White color */
  }

  .navbar-default .navbar-brand:hover,
  .navbar-default .navbar-brand:focus {
    color: #ffffff;
  }

  .navbar-default .navbar-nav > li > a {
    color: #ffffff;
  }

  .navbar-default .navbar-nav > li > a:hover,
  .navbar-default .navbar-nav > li > a:focus {
    color: #ffffff;
  }

  .navbar-toggle .icon-bar {
    background-color: #ffffff;
  }

  .navbar-collapse {
    transition: max-height 0.4s ease;
    max-height: 0;
    overflow: hidden;
  }

  .navbar-collapse.in {
    max-height: 1000px;
  }

  #logout:hover {
    color: #ffffff;
    background-color: #e74c3c; /* Red color */
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
       
      <a class="navbar-brand" href="studenthome.php">
        <img src="./new image/favicon.jpeg" alt="All'z Well">
        All'z Well <!-- Brand name text -->
      </a>
    </div>

    <div class="collapse navbar-collapse" id="navbar-collapse">
      <ul class="nav navbar-nav">
        <li <?php echo (basename($_SERVER['PHP_SELF']) == 'studenthome.php') ? 'class="active"' : ''; ?>><a href="studenthome.php" data-target="#home">Home</a></li>
        <li <?php echo (basename($_SERVER['PHP_SELF']) == 'mybooking.php') ? 'class="active"' : ''; ?>><a href="mybooking.php" data-target="#home">My Booking </a></li>
        <li <?php echo (basename($_SERVER['PHP_SELF']) == 'myfeedback.php') ? 'class="active"' : ''; ?>><a href="myfeedback.php" data-target="#book-appointment">Feedback</a></li>
        <li <?php echo (basename($_SERVER['PHP_SELF']) == 'student_list.php') ? 'class="active"' : ''; ?>><a href="student_list.php" data-target="#doctor-timings">Counsellor Timing</a></li>
        <li <?php echo (basename($_SERVER['PHP_SELF']) == 'student_profile.php') ? 'class="active"' : ''; ?>><a href="student_profile.php" data-targset="#book-appointment">Book Appointment</a></li>
        <li <?php echo (basename($_SERVER['PHP_SELF']) == 'Information.php') ? 'class="active"' : ''; ?>><a target="_blank" href="Information.php" data-target="#book-appointment">Resources</a></li>
      </ul>

      <ul class="nav navbar-nav navbar-right">
        <li><a id="logout" href="#" class="logout-button" data-toggle="modal" data-target="#confirmLogoutModal">Logout</a></li>
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
