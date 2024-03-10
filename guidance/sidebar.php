<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <title>All'z Well - Admin Home</title>
  <style>
    /* Your custom styles */
    .logout-button {
      display: inline-block;
      padding: 10px 20px;
      color: white;
      text-decoration: none;
      border: none;
      border-radius: 5px;
      cursor: pointer;
      transition: background-color 0.3s;
    }

    .navbar {
      background-color: #3498db; /* Change to blue color */
      border-radius: 0;
      border: none;
      animation: fadeInDown 0.5s ease; /* Add animation */
    }

    .navbar-default .navbar-brand {
      color: #fff;
    }

    .navbar-default .navbar-brand:hover,
    .navbar-default .navbar-brand:focus {
      color: #fff;
    }

    .navbar-default .navbar-nav > li > a {
      color: #fff;
    }

    .navbar-default .navbar-nav > li > a:hover,
    .navbar-default .navbar-nav > li > a:focus {
      color: #fff;
    }

    .navbar-toggle .icon-bar {
      background-color: #fff;
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
      color: white;
      background-color: red;
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


    /* Add fade-in animation */
    @keyframes fadeInDown {
      from {
        opacity: 0;
        transform: translateY(-20px);
      }
      to {
        opacity: 1;
        transform: translateY(0);
      }
    }
  </style>
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
      <a class="navbar-brand" href="adminhomepage.php">
        <img src="./new image/favicon.jpeg" alt="All'z Well">
        All'z Well <!-- Brand name text -->
      </a>
    </div>

    <!-- Collect the nav links, forms, and other content for toggling -->
    <div class="collapse navbar-collapse" id="navbar-collapse">
      <ul class="nav navbar-nav">
        <li <?php echo (basename($_SERVER['PHP_SELF']) == 'c.php') ? 'class="active"' : ''; ?>><a href="adminhomepage.php" data-target="#home">Home</a></li>
        <li <?php echo (basename($_SERVER['PHP_SELF']) == 'counsellor.php') ? 'class="active"' : ''; ?>>
    <a href="counsellor.php" data-target="#AddUser" target="_blank">Profile</a>
</li>

        <li <?php echo (basename($_SERVER['PHP_SELF']) == 'history.php') ? 'class="active"' : ''; ?>><a href="history.php" data-target="#AddUser">Case History</a></li>
      </ul>

      <!-- Add a logout button -->
      <ul class="nav navbar-nav navbar-right">
        <li><a id="logout" href="#" class="logout-button" data-toggle="modal" data-target="#confirmLogoutModal">Logout</a></li>
      </ul>
    </div><!-- /.navbar-collapse -->
  </div><!-- /.container-fluid -->
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
