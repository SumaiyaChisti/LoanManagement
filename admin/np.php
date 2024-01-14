<?php
session_start();
?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Login Page</title>
    <!-- Bootstrap CSS link -->
    <link
      rel="stylesheet"
      href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" />
    <style>
      body {
        background-color: #000;
        color: #fff;
      }
      .login-section {
        /* background-color: #fff; */
        border-radius: 8px;
        box-shadow: 0 0 10px rgba(0, 0, 0, 0.3);
      }
    </style>
  </head>
  <body>
    <!-- Image Section -->
    <form action="" method="post">
    <div class="container">
      <div class="row mx-0 py-5 align-items-center">
        <div class="col-md-6">
          <!-- You can replace this image source with your own -->
          <img
            src="./assets/images/welcome_middle.gif" 
            alt="Login"
            class="img-fluid rounded" />
        </div>

        <!-- Login Form Section -->
        
        <div class="col-md-6">
          <div class="p-5 login-section">
            <!-- <img src="" alt="Small Logo" class="img-fluid rounded mb-3" /> -->

            <h2 class="text-start text-success mb-4" style="font-family: fancy monospace;" >Reset Password</h2>

            <!-- Email Input -->
            <div class="form-group">
              <label for="email" class="text-gray-600">Old Password:</label>
              <input
                type="email"
                class="form-control"
                id="email"
                name="email"
                placeholder="Enter your Old Password" />
            </div>
            <div class="form-group">
              <label for="email" class="text-gray-600">New Password:</label>
              <input
                type="email"
                class="form-control"
                id="email"
                name="email"
                placeholder="Enter your New Password" />
            </div>

            <!-- Password Input -->
           
            <div class="form-group mb-4">
            <div class="d-flex justify-content-between">
              <a href="forgotpassword.php">
                <small></small>
              </a>
    </div>
            </div>

            <!-- Login Button -->
            
            <input type="submit" name="submit" value="Change Password" class="btn py-2 btn-success btn-block">
            
    </form>
          </div>
        </div>
      </div>
    
    </div>

    <!-- Bootstrap JS and Popper.js scripts -->
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.1/dist/umd/popper.min.js"></script>
    <!-- Bootstrap JS script -->
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
  </body>
</html>