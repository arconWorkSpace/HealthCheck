<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <title>Your Website</title>
</head>
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
      <a class="navbar-brand" href="studenthome.php">MindCheckUp</a>
    </div>

    <!-- Collect the nav links, forms, and other content for toggling -->
    <div class="collapse navbar-collapse" id="navbar-collapse">
      <ul class="nav navbar-nav">
        <li <?php echo (basename($_SERVER['PHP_SELF']) == 'studenthome.php') ? 'class="active"' : ''; ?>><a href="studenthome.php" data-target="#home">Home</a></li>
        <li <?php echo (basename($_SERVER['PHP_SELF']) == 'student_list.php') ? 'class="active"' : ''; ?>><a href="student_list.php" data-target="#doctor-timings">Doctor Timings</a></li>
        <li <?php echo (basename($_SERVER['PHP_SELF']) == 'student_profile.php') ? 'class="active"' : ''; ?>><a href="student_profile.php" data-target="#book-appointment">Book Appointment</a></li>
      </ul>
    </div><!-- /.navbar-collapse -->
  </div><!-- /.container-fluid -->
</nav>

<!-- Your page content goes here -->
 
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>

</body>
</html>
