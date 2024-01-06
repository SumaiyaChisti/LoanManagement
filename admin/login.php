<?php
session_start();
include("components/conn.php");
include("../helper/auth.php");
if(isset($_POST['submit']))
{
    $email=$_POST['email'];
    $password=$_POST['password'];



    // echo auth_gaurd($email,$password,'Zonal Sales Manager');
    if($r=auth_gaurd($email,$password,'admin'))
    {
       
        $_SESSION['admin']=$email;
        header("location:index.php");
    }
    else if ($r=auth_gaurd($email,$password,'Agent'))
    {
      $_SESSION['agent']=$email;
        header("location:../agent/index.php");
    }
    else if($r=auth_gaurd($email,$password,'Zonal Sales Manager'))
    {
      // echo $r;
      $_SESSION['Zonal_Sales_Manager']=$email;
      header("location:../ZSM/index.php");
    }
    else if($r=auth_gaurd($email,$password,'Branch Manager'))
    {
      $_SESSION["Branch_Manager"]=$email;
      header("location:../BM/index.php");
    }
    else if($r=auth_gaurd($email,$password,'Area Sales Manager'))
    {
      $_SESSION["Area_Sales_Manager"]=$email;
      header("location:../ASM/index.php");
    }
    if($r=auth_gaurd($email,$password,'Manager'))
    {
      $_SESSION["Manager"]=$email;
      header("location:../manager/index.php");
    }
    else if($r=auth_gaurd($email,$password,'Group Team Leader'))
    {
      $_SESSION["Group_Team_Leader"]=$email;
      header("location:../GTL/index.php");
    }
    else if($r=auth_gaurd($email,$password,'Team Leader'))
    {
      $_SESSION["Team_Leader"]=$email;
      header("location:../TL/index.php");
    }
    else
    echo'<script>alert("wrong email or password");</script>';
}
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

            <h2 class="text-start text-success mb-4" style="font-family: fancy monospace;" >Login</h2>

            <!-- Email Input -->
            <div class="form-group">
              <label for="email" class="text-gray-600">Email:</label>
              <input
                type="email"
                class="form-control"
                id="email"
                name="email"
                placeholder="Enter your email" />
            </div>

            <!-- Password Input -->
            <div class="form-group mb-4">
              <label for="password" class="text-gray-600">Password:</label>
              <input
                type="password"
                class="form-control"
                id="password"
                name="password"
                placeholder="Enter your password" />
            </div>
            <div class="form-group mb-4">
            <div class="d-flex justify-content-between">
              <a href="forgot">
                <small>Forgot Password?</small>
              </a>
    </div>
            </div>

            <!-- Login Button -->
            
            <input type="submit" name="submit" value="Login" class="btn py-2 btn-success btn-block">
            
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