
<?php
include("components/conn.php");
if(isset($_GET['id'])){
    $Q="SELECT * FROM `agents` WHERE `id`='$_GET[id]'";
    $D=mysqli_query($conn,$Q) ;
    $DATA=mysqli_fetch_assoc($D);
}
if(isset($_POST['submit']))
{
  
    $name = $_POST['name'];
    $email = $_POST['email'];
    $contact= $_POST['contact'];
    $team_leader = $_POST['team_leader'];
    $manager = $_POST['manager'];
    $branch_manager = $_POST['branch_manager'];
    $sales_manager = $_POST['area_sales_manager'];
    $zonalsales_manager = $_POST['zonal_sales_manager'];
    $campaign = $_POST['campaign'];

    
    $q="UPDATE `agents` SET `name`='$name',`email`='$email',`contact`='$contact',`team_leader`='$team_leader',`manager`='$manager',`branch_manager`='$branch_manager',`area_sales_manager`='$area_sales_manager',`zonal-sales_manager`='$zonal_sales_manager',`campaign`='$campaign'   WHERE `id`='$_GET[id]'";
    $d= mysqli_query($conn, $q);
    if ($d){
    echo "<script>alert('Updated Successfully');</script>";
    header("refresh:1,viewagent.php");
    }
    else
        echo "data not inserted";
    mysqli_close($conn);

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
          <a href="javascript:;">Logout</a>
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

<!--Main layout-->
<main class="content-wrapper">
  <div class="container pt-4">
    <h3>Update Details</h3>
    <form enctype="multipart/form-data" action="" method="post">
  <div class="form-outline mt-4">
  <input type="text" value="<?php echo $DATA['name'];?>" id="formControlLg" name="name"  class="form-control form-control-lg" required />
  <label class="form-label" for="formControlLg"> Name</label>
    </div>

    <div class="form-outline mt-4">
  <input type="email"  value="<?php echo $DATA['email'];?>" id="formControlLg" name="email" class="form-control form-control-lg"  required/>
  <label class="form-label" for="formControlLg">Email</label>
    </div>
    <div class="form-outline mt-4">
  <input type="tel" value="<?php echo $DATA['contact'];?>" id="formControlLg" name="contact"  class="form-control form-control-lg" required />
  <label class="form-label" for="formControlLg"> Contact</label>
    </div>
    <div class="form-outline mt-4">
  <input type="text" value="<?php echo $DATA['team_leader'];?>" id="formControlLg" name="team_leader"  class="form-control form-control-lg" required />
  <label class="form-label" for="formControlLg"> Team leader</label>
    </div>
    <div class="form-outline mt-4">
  <input type="text" value="<?php echo $DATA['manager'];?>" id="formControlLg" name="manager"  class="form-control form-control-lg" required />
  <label class="form-label" for="formControlLg"> Manager</label>
    </div>
    <div class="form-outline mt-4">
  <input type="text" value="<?php echo $DATA['branch_manager'];?>" id="formControlLg" name="branch_manager"  class="form-control form-control-lg" required />
  <label class="form-label" for="formControlLg"> Branch Manager</label>
    </div>
    <div class="form-outline mt-4">
  <input type="text" value="<?php echo $DATA['area_sales_manager'];?>" id="formControlLg" name="sales_manager"  class="form-control form-control-lg" required />
  <label class="form-label" for="formControlLg"> Area Sales Manager</label>
    </div>
    <div class="form-outline mt-4">
  <input type="text" value="<?php echo $DATA['zonal_sales_manager'];?>" id="formControlLg" name="zonalsales_manager"  class="form-control form-control-lg" required />
  <label class="form-label" for="formControlLg"> Zonal Sales Manager</label>

    </div>
    <div class="form-outline mt-4">
  <input type="text" value="<?php echo $DATA['campaign'];?>" id="formControlLg" name="campaign"  class="form-control form-control-lg" required />
  <label class="form-label" for="formControlLg"> Campaign</label>

    </div>
    

<div class="form-outline mt-4">
  <input type="submit" name="submit" id="formControlLg" class="btn btn-primary form-control-lg" value="Update" />
 
    </div>
    </form>
   













</div>
</main>



          </body>
          <script
  type="text/javascript"
  src="https://cdnjs.cloudflare.com/ajax/libs/mdb-ui-kit/6.0.1/mdb.min.js"
></script>
  <!-- plugins:js -->
  <script src="assets/vendors/js/vendor.bundle.base.js"></script>
  <!-- endinject -->
  <!-- Plugin js for this page-->
  <script src="assets/vendors/chartjs/Chart.min.js"></script>
  <script src="assets/vendors/jvectormap/jquery-jvectormap.min.js"></script>
  <script src="assets/vendors/jvectormap/jquery-jvectormap-world-mill-en.js"></script>
  <!-- End plugin js for this page-->
  <!-- inject:js -->
  <script src="assets/js/material.js"></script>
  <script src="assets/js/misc.js"></script>
  <!-- endinject -->
  <!-- Custom js for this page-->
  <script src="assets/js/dashboard.js"></script>
  <!-- End custom js for this page-->

<script>
    toast.show();
</script>

</html>