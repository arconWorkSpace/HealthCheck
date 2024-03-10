<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Create and Update with Bootstrap Tabs</title>
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
  <style>
     /* Background style */
     body {
      background-color: #f2f2f2; /* Set the background color */
    }

    /* Add animation to the container */
    .container {
      animation: fadeInAnimation ease 1s forwards;
    }

    @keyframes fadeInAnimation {
      0% {
        opacity: 0;
      }
      100% {
        opacity: 1;
      }
    }

    /* Additional form styles */
    .container form {
      max-width: 400px;
      background-color: #ffffff; /* Set form background color */
      padding: 20px; /* Add padding to the form */
      border-radius: 8px; /* Add border radius to the form */
      box-shadow: 0 0 10px rgba(0, 0, 0, 0.1); /* Add box shadow for a better visual */
    }
    .fade-in {
      animation: fadeInAnimation ease 1s forwards;
    }

    @keyframes fadeInAnimation {
      0% {
        opacity: 0;
      }
      100% {
        opacity: 1;
      }
    }

    /* Additional form styles */
    .container form {
      max-width: 400px;
    }

    .container form label {
      font-weight: bold;
    }

    .container form input[type="text"],
    .container form input[type="email"],
    .container form select,
    .container form input[type="password"] {
      width: 100%;
      padding: 8px;
      margin: 6px 0;
      box-sizing: border-box;
      border: 1px solid #ccc;
      border-radius: 4px;
      resize: vertical;
    }

    .container form input[type="submit"] {
      background-color: #0062cc
      color: white;
      padding: 12px 20px;
      border: none;
      border-radius: 4px;
      cursor: pointer;
      width: 100%;
    }

    .container form input[type="submit"]:hover {
      background-color: #45a049;
    }

    /* Update form specific styles */
    #updateForm {
      margin-top: 20px;
    }

    #updateForm .form-group {
      margin-bottom: 20px;
    }

    #updateButton,
    #cancelButton {
      margin-right: 10px;
    }

    h1 {
      text-align: center; /* Center align the text */
      margin-top: 50px; /* Adjust top margin for spacing */
    }
  </style>
</head>
<body>
<h1>User Profile Detail</h1>
<!-- Success Modal -->
<div class="modal fade" id="successModal" tabindex="-1" role="dialog" aria-labelledby="successModalLabel" aria-hidden="true">
  <div class="modal-dialog modal-dialog-centered" role="document">
    <div class="modal-content">
      <div class="modal-header bg-success text-white">
        <h5 class="modal-title" id="successModalLabel">Success</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <i class="fas fa-check-circle fa-3x d-block text-success text-center mb-3"></i>
        <p class="text-center">User data updated successfully.</p>
      </div>
      <div class="modal-footer justify-content-center">
        <button type="button" class="btn btn-success" data-dismiss="modal">Close</button>
      </div>
    </div>
  </div>
</div>
<!-- Do Username Found Modal -->
<div class="modal fade" id="errorModal" tabindex="-1" role="dialog" aria-labelledby="errorModalLabel" aria-hidden="true">
  <div class="modal-dialog modal-dialog-centered" role="document">
    <div class="modal-content">
      <div class="modal-header bg-danger text-white">
        <h5 class="modal-title" id="errorModalLabel">Error</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <!-- Error message will be displayed here -->
      </div>
      <div class="modal-footer justify-content-center">
        <button type="button" class="btn btn-danger" data-dismiss="modal">Close</button>
      </div>
    </div>
  </div>
</div>





<div class="container mt-5">
  <ul class="nav nav-tabs" id="myTab" role="tablist">
    <li class="nav-item">
      <a class="nav-link active" id="create-tab" data-toggle="tab" href="#create" role="tab" aria-controls="create" aria-selected="true">Add User Detail</a>
    </li>
    <li class="nav-item">
      <a class="nav-link" id="update-tab" data-toggle="tab" href="#update" role="tab" aria-controls="update" aria-selected="false">Update User Detail</a>
    </li>
  </ul>
  <div class="tab-content" id="myTabContent">
    <div class="tab-pane fade show active fade-in" id="create" role="tabpanel" aria-labelledby="create-tab">
      <div class="container">
        <form action="adduser.php" method="POST" class="container form">
        
          <div class="form-group">
            <label for="username">Username:</label>
            <input type="text" id="username" name="username" required class="form-control">
          </div>
          <div class="form-group">
            <label for="email">Email:</label>
            <input type="email" id="email" name="email" required class="form-control">
          </div>
          <div class="form-group">
            <label for="usertype">User Type:</label>
            <select id="usertype" name="usertype" required class="form-control">
              <option value="Counsellor">Counsellor</option>
              <option value="Student">Student</option>
            </select>
          </div>
          <div class="form-group">
            <label for="password">Password:</label>
            <input type="password" id="password" name="password" required class="form-control">
          </div>
          <input type="submit" id="AddUserButton" value="Submit" class="btn btn-primary">
        </form>
      </div>
    </div>
    <div class="tab-pane fade fade-in" id="update" role="tabpanel" aria-labelledby="update-tab">
      <form id="userForm" class="container form">
   
        <div class="form-group">
          <label for="updateName">Username</label>
          <input type="text" class="form-control" id="updateName" placeholder="Enter username">
        </div>
        <button type="button" class="btn btn-primary" id="getButton">Show Profile</button>
      </form>
      <form id="updateForm" style="display:none" class="container form">
        <div class="form-group">
          <label for="updateEmail">Email</label>
          <input type="email" class="form-control" id="updateEmail" placeholder="Enter email">
        </div>
        <div class="form-group">
          <label for="updateUserType">User Type</label>
          <select class="form-control" id="updateUserType">
            <option value="Counsellor">Counsellor</option>
            <option value="Student">Student</option>
          </select>
        </div>
        <div class="form-group">
          <label for="updatePassword">Password</label>
          <input type="password" class="form-control" id="updatePassword" placeholder="Enter password">
        </div>
        <button type="button" class="btn btn-primary" id="updateButton">Update</button>
        <button type="button" class="btn btn-primary" id="cancelButton">Cancel</button>
      </form>
    </div>


<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
<script>
    // Inside the success function of the AJAX call for adding user


  $(document).ready(function(){
    $('#getButton').click(function(){
      var username = $('#updateName').val();
      if(username.trim() === '') {
        $('#errorModal .modal-body').text('Please enter a username.');
        $('#errorModal').modal('show');
        return; // Exit the function if the username is empty
      }
      $.ajax({
        url: 'fetchUserData.php',
        method: 'POST',
        data: { username: username },
        success: function(response){
          var responseData = JSON.parse(response);
          if (responseData.error) {
            // If there's an error message, display it in a modal
            $('#errorModal .modal-body').text(responseData.error);
            $('#errorModal').modal('show');
          } else {
            var userData = responseData.data;
            // Populate rest of the form fields
            $('#updateEmail').val(userData.email);
            $('#updateUserType').val(userData.usertype);
            $('#updatePassword').val(userData.password);
            // Disable username field
            $('#updateName').prop('readonly', true);
            // Show update form
            $('#updateForm').show();
          }
        },
        error: function(xhr, status, error) {
          // Handle errors here
          console.error(xhr.responseText);
        }
      });
    });

    $('#updateButton').click(function() {
      var username = $('#updateName').val();
      var email = $('#updateEmail').val();
      var userType = $('#updateUserType').val();
      var password = $('#updatePassword').val();
      console.log(username,email,userType,password);
      $.ajax({
        url: 'updateUserData.php',
        method: 'POST',
        data: {
          username: username,
          email: email,
          userType: userType,
          password: password
        },
        success: function(response) {
          // Handle success response here
          console.log(response);
          // Optionally, you can hide the update form after successful update
          $('#updateForm').hide();
       
     
          // Enable username field
          $('#updateName').prop('readonly', false);
          $('#successModal').modal('show');
        },
        error: function(xhr, status, error) {
          // Handle errors here
          console.error(xhr.responseText);
        }
      });
    });

    $('#cancelButton').click(function() {
      // Enable username field
      $('#updateName').prop('readonly', false);
      // Hide update form
      $('#updateForm').hide();
    });
    


  });
  $('#errorModal').on('hidden.bs.modal', function () {
      $(this).find('.modal-body').text(''); // Clear modal body content
    });
</script>
</body>
</html>
