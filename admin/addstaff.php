
<?php
include("components/conn.php");
if(isset($_POST['submit'])) {
  
    $q = "INSERT INTO `users`(`name`,`email`,`password`,`role`,`city`,`state`)VALUES ('$_POST[name]','$_POST[email]','$_POST[password]','$_POST[role]','$_POST[city]','$_POST[state]')";
    $d = mysqli_query($conn,$q);
    if ($d) {
        echo '
<div class="position-fixed bottom-0 end-0 p-3" style="z-index: 11">
<div id="liveToast" class="toast show" role="alert" aria-live="assertive" aria-atomic="true">
  <div class="toast-header">
    
    <strong class="me-auto">UrbanMoney</strong>
    <small>11 mins ago</small>
    <button type="button" class="btn-close" data-bs-dismiss="toast" aria-label="Close"></button>
  </div>
  <div class="toast-body">
    Added successfully
  </div>
</div>
</div>
    ';
    }
    else
    {
        echo '
        <div class="position-fixed bottom-0 end-0 p-3" style="z-index: 11">
        <div id="liveToast" class="toast show" role="alert" aria-live="assertive" aria-atomic="true">
          <div class="toast-header">
            <img src="..." class="rounded me-2" alt="...">
            <strong class="me-auto">UrbanMoney</strong>
            <small>11 mins ago</small>
            <button type="button" class="btn-close" data-bs-dismiss="toast" aria-label="Close"></button>
          </div>
          <div class="toast-body">
            Error while adding
          </div>
        </div>
        </div>
            ';
    }
}


?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>Urbanmoney</title>
  <!-- plugins:css -->
  <link rel="stylesheet" href="assets/vendors/mdi/css/materialdesignicons.min.css">
  <link rel="stylesheet" href="assets/vendors/css/vendor.bundle.base.css">
  <!-- endinject -->
  <!-- Plugin css for this page -->
  <link rel="stylesheet" href="assets/vendors/flag-icon-css/css/flag-icon.min.css">
  <link rel="stylesheet" href="assets/vendors/jvectormap/jquery-jvectormap.css">
  <!-- End plugin css for this page -->
  <!-- Layout styles -->
  <link rel="stylesheet" href="assets/css/demo/style.css">
  <!-- End layout styles -->
  <link rel="shortcut icon" href="assets/images/favicon.png" />
  <link
  href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css"
  rel="stylesheet"
/>
<!-- Google Fonts -->
<link
  href="https://fonts.googleapis.com/css?family=Roboto:300,400,500,700&display=swap"
  rel="stylesheet"
/>
<!-- MDB -->
<link
  href="https://cdnjs.cloudflare.com/ajax/libs/mdb-ui-kit/6.0.1/mdb.min.css"
  rel="stylesheet"
/>
</head>

<body>
<script src="assets/js/preloader.js"></script>
  <div class="body-wrapper">
    <!-- partial:partials/_sidebar.html -->
    <aside class="mdc-drawer mdc-drawer--dismissible mdc-drawer--open">
      <div class="mdc-drawer__header">
        <a href="index.html" class="brand-logo">
          <img src="assets/images/logo.svg" alt="logo">
        </a>
      </div>
      <div class="mdc-drawer__content">
        <div class="user-info">
          <p class="name"></p>
          <p class="email"></p>
        </div>
        <div class="mdc-list-group">
         <!-- nav yaha hai -->
         <?php
         include("components/sidenav.php");
         ?>
        </div>
        <div class="profile-actions">
          <a href="javascript:;">Settings</a>
          <span class="divider"></span>
          <a href="logout.php">Logout</a>
        </div>
        
      </div>
    </aside>
    <!-- partial -->
    <div class="main-wrapper mdc-drawer-app-content">
      <!-- partial:partials/_navbar.html -->
      <?php
         include("components/header.php");
         ?>
         <div class="page-wrapper mdc-toolbar-fixed-adjust">
        <main class="content-wrapper">
  <div class="container pt-4">
    <h3 style="font-family: fancy monospace;" >Add Staff</h3>
    <form enctype="multipart/form-data" action="" method="post">
  <div class="form-outline mt-4">
  <input type="text" id="formControlLg" name="name"  class="form-control form-control-lg" required />
  <label class="form-label" for="formControlLg">Name</label>
    </div>
    <div class="form-outline mt-4">
  <input type="email" id="formControlLg" name="email"  class="form-control form-control-lg" required />
  <label class="form-label" for="formControlLg">Email</label>
    </div>
    <div class="form-outline mt-4">
  <input type="password" id="formControlLg" name="password"  class="form-control form-control-lg" required />
  <label class="form-label" for="formControlLg">Password</label>
    </div>
    
    
    <div class="form-outline mt-4">
    <label class="form-label" for="formControlLg">Role</label>
  <select  id="formControlLg" name="role" class="form-select form-control-lg"  required>
  <option value="">Role</option> 
  <option value="Team_Leader">Team Leader</option>
   <option value="Manager">Manager</option>
   <option value="Branch_Manager">Branch Manager</option>
   <option value="Area_Sales_Manager">Area Sales Manager</option>
   <option value="Zonal_Sales_Manager">Zonal Sales Manager</option>
  </select>
 
    </div>

    <div class="form-outline mt-4">
    <label class="form-label" for="formControlLg">State</label>
    <select name="state" onchange="print_city('state', this.selectedIndex);" id="sts" name ="stt" class="form-select" required></select>

      </select>
 
    </div>
    
    <div class="form-outline mt-4">
    <label class="form-label" for="formControlLg">City</label>
      <select id ="state" name="city" class="form-select" required></select>
    </div>

   
<div class="form-outline mt-4">
  <input type="submit" name="submit" id="formControlLg" class="btn btn-primary form-control-lg" value="Add" />
 
    </div>
    
    </form>
         </div>
         </div>
</main>
<!--Main layout-->
          



          </body>
          <script
  type="text/javascript"
  src="https://cdnjs.cloudflare.com/ajax/libs/mdb-ui-kit/6.0.1/mdb.min.js"
></script>
<script src="assets/vendors/js/vendor.bundle.base.js"></script>
  <!-- endinject -->
  <!-- Plugin js for this page-->
  <script src="assets/vendors/chartjs/Chart.min.js"></script>
  <script src="assets/vendors/jvectormap/jquery-jvectormap.min.js"></script>
  <script src="assets/vendors/jvectormap/jquery-jvectormap-world-mill-en.js"></script>
  <script src="../all_states/cities.js"></script>
  <!-- End plugin js for this page-->
  <!-- inject:js -->
  <script src="assets/js/material.js"></script>
  <script src="assets/js/misc.js"></script>
  <!-- endinject -->
  <!-- Custom js for this page-->
  <script src="assets/js/dashboard.js"></script>

<script>
    toast.show();

</script>
<script language="javascript">print_state("sts");</script>
</html>