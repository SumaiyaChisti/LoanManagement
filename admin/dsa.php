
<?php
   session_start();
include("components/conn.php");
if(isset($_POST['submit'])) {
  
    $q = "INSERT INTO `dsa`(`name`,`dob`,`gender`,`contact`,`email`,`address`,`pan_id`,`property_ownership`,`marital_status`,`place_of_work`,`job_title`,`work_address`,`years_employed`,`monthly_net_income`,`bank_name`,`branch_name`,`account_number`,`account_type`,`purpose_of_loan`,`requested_loan_amount`,`terms_in`)VALUES ('$_POST[name]','$_POST[dob]','$_POST[gender]','$_POST[contact]','$_POST[email]','$_POST[address]','$_POST[pan_id]','$_POST[property_ownership]','$_POST[marital_status]','$_POST[place_of_work]','$_POST[job_title]','$_POST[work_address]','$_POST[years_employed]','$_POST[monthly_net_income]','$_POST[bank_name]','$_POST[branch_name]','$_POST[account_number]','$_POST[account_type]','$_POST[purpose_of_loan]','$_POST[requested_loan_amount]','$_POST[terms_in]')";
    $d = mysqli_query($conn,$q);
    
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
<link href="https://unpkg.com/vanilla-datatables@latest/dist/vanilla-dataTables.min.css" rel="stylesheet" type="text/css">
<script src="https://unpkg.com/vanilla-datatables@latest/dist/vanilla-dataTables.min.js" type="text/javascript"></script>

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
         error_reporting(0);
         ?>
        
         <div class="page-wrapper mdc-toolbar-fixed-adjust">
        <main class="content-wrapper">
        <main >
  <div class="container pt-4">
    <h3 style="font-family: fancy monospace;" >View </h3>
    <br>
    
    <table class="table  table-responsive table-bordered table-hover " style=" border: 1px solid white;">
<tr>
  <th>Sno</th>
    <th>Id</th>
    <th>Name</th>
    <th>DOB</th>
    <th>Gender</th>
    <th>Contact</th>
    <th>Email</th>
    <th>Address</th>
    <th>Pan ID</th>
    <th>Property Ownership</th>
    <th>Marital Status</th>
    <th>Place Of Work</th>
    <th>Job Title</th>
    <th>Work Address</th>
    <th>Years Employed</th>
    <th>Monthly Net Income</th>
    <th>Bank Name</th>
    <th>Branch Name</th>
    <th>Account Nmuber</th>
    <th>Account Type</th>
    <th>Purpose Of Loan</th>
    <th>Requested Loan Ammount</th>
    <th>Terms In</th>
    <th>Status</th>
    <th colspan="2">Option</th>

    
</tr>

<?php
include("components/conn.php");
$q = "SELECT * FROM `dsa`";
$d=mysqli_query($conn, $q);
$co=mysqli_num_rows($d);
while($data=mysqli_fetch_assoc($d))
{
  $sno=$sno+1;
    echo '<tr>
          <td>'.$sno.'</td>
          <td>'.$data['id'].'</td>
          <td>'.$data['name'].'</td>
          <td>'.$data['dob'].'</td>
          <td>'.$data['gender'].'</td>
          <td>'.$data['contact'].'</td>
          <td>'.$data['email'].'</td>
          <td>'.$data['address'].'</td>
          <td>'.$data['pan_id'].'</td>
          <td>'.$data['property_ownership'].'</td>
          <td>'.$data['marital_status'].'</td>
          <td>'.$data['place_of_work'].'</td>
          <td>'.$data['job_title'].'</td>
          <td>'.$data['work_address'].'</td>
          <td>'.$data['years_employed'].'</td>
          <td>'.$data['monthly_net_income'].'</td>
          <td>'.$data['bank_name'].'</td>
          <td>'.$data['branch_name'].'</td>
          <td>'.$data['account_number'].'</td>
          <td>'.$data['account_type'].'</td>
          <td>'.$data['purpose_of_loan'].'</td>
          <td>'.$data['requested_loan_amount'].'</td>
          <td>'.$data['terms_in'].'</td>
          <td><span class="badge '.$data["class"].'">'.$data['status'].'</span></td>
          <td><button type="button" onclick="change('.$data["id"].');" class="btn btn-secondary" data-toggle="tooltip" data-placement="top" title="Approve">
          <i class="fa-solid fa-check"></i>
</button></td>
<td><button type="button" onclick="change2('.$data["id"].');" class="btn btn-secondary" data-toggle="tooltip" data-placement="top" title="Reject">
          <i class="fa-solid fa-xmark"></i>
</button></td>
          

          </tr>';
}

//echo"Total Number of rows are " .$co;
?>

</table>
</div>

</main>
<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.7.1/jquery.min.js" integrity="sha512-v2CJ7UaYy4JwqLDIrZUI/4hqeoQieOmAZNXBeQyjo21dadnwR+8ZaIJVT8EE2iyI61OV8e6M8PP2/4hpQINQ/g==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
<script>
  function change(Id){
 var data1 = {
  id: Id,
  status:'Approved',
  class:'badge-success'
};

// Make the AJAX request
$.ajax({
  url: 'updatestatus.php',
  type: 'POST',
  // Set the content type if sending JSON data
  data:data1, // Convert data to JSON string
  success: function(response) {
    if(response==='ok')
    {
window.location.reload();
    }
    // Handle the success response here
    
  },
  error: function(xhr, status, error) {
    // Handle errors here
    console.log('Error: ' + error);
  }
}); 

}










function change2(Id){
 var data1 = {
  id: Id,
  status:'Rejected',
  class:'badge-danger'
};

// Make the AJAX request
$.ajax({
  url: 'updatestatus.php',
  type: 'POST',
  // Set the content type if sending JSON data
  data:data1, // Convert data to JSON string
  success: function(response) {
    if(response==='ok')
    {
window.location.reload();
    }
    // Handle the success response here
    
  },
  error: function(xhr, status, error) {
    // Handle errors here
    console.log('Error: ' + error);
  }
}); 

}
</script>

<!--Main layout-->
          
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous"></script>
      <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js" integrity="sha384-cVKIPhGWiC2Al4u+LWgxfKTRIcfu0JTxR+EQDz/bgldoEyl4H0zUF0QKbrJ0EcQF" crossorigin="anonymous"></script>
      <script> var table = new DataTable("table")</script>

   
      
          </body>
          <?php
      include("components/footer.php");
      ?>
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
<script>
$(function () {
  $('[data-toggle="tooltip"]').tooltip()
})
</script>

</html>