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


<style>
  
   
</style>
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
    <h3 style="margin-left:23rem; margin-top: 1rem; font-family: fancy monospace; " > Edit Campaign</h3>
    <div style="margin-top:2rem">
    <table class="table  table-striped table-bordered table-hover " style=" border: 1px solid white;">
    <tr>
        <th class="text-info">Campain Fields</th>
        <th colspan="2" class="text-info">Enable/Disable</th>
    </tr>
    
    <tr>
   
   
  </tr>
  <tr>
    <th>Reference Number</th>
    <td><button  value="<?php echo$_GET['a_email'] ?>"  onclick="Enable1('Reference_Number',this.value);" class=" btn-outline-success btn btn-success ">enable</button> &nbsp;&nbsp;<button  value="<?php echo$_GET['a_email'] ?>"  onclick="Disable1('Reference_Number',this.value)" class="btn btn-danger btn-outline-danger">Disable</button></td>
  </tr>
  <tr>
    <th>Customer Name</th> 
    <td><button  value="<?php echo$_GET['a_email'] ?>"  onclick="Enable1('Customer_Name',this.value);"class="btn btn-success btn-outline-success">enable</button>&nbsp;&nbsp; <button  value="<?php echo$_GET['a_email'] ?>"  onclick="Disable1('Customer_Name',this.value)" class="btn btn-danger btn-outline-danger">Disable</button></td> 
    
  </tr>
  <tr>
    <th>State</th>
    <td><button value="<?php echo$_GET['a_email'] ?>"  onclick="Enable1('State',this.value);" class="btn btn-success btn-outline-success">enable</button>&nbsp;&nbsp; <button  value="<?php echo$_GET['a_email'] ?>"  onclick="Disable1('State',this.value)" class="btn btn-danger btn-outline-danger">Disable</button></td> 
  </tr>

  value="<?php echo$_GET['a_email'] ?>"   onclick="Disable1('Refrence_Number',this.value)"
  <tr>
    <th>City</th> 
    <td><button value="<?php echo$_GET['a_email'] ?>"  onclick="Enable1('City',this.value);" class="btn btn-success btn-outline-success">enable</button>&nbsp;&nbsp; <button  value="<?php echo$_GET['a_email'] ?>"   onclick="Disable1('City',this.value)"class="btn btn-danger btn-outline-danger">Disable</button></td>
  </tr>
  <tr>
    <th>Pin Code</th>  
    <td><button value="<?php echo$_GET['a_email'] ?>"  onclick="Enable1('Pin_Code',this.value);" class="btn btn-success btn-outline-success">enable</button>&nbsp;&nbsp; <button  value="<?php echo$_GET['a_email'] ?>"   onclick="Disable1('Pin_Code',this.value)"class="btn btn-danger btn-outline-danger">Disable</button></td>
  </tr>
  <tr>
    <th>Customer Contact Number</th>  
    <td><button value="<?php echo$_GET['a_email'] ?>"  onclick="Enable1('Customer_Contact_Number',this.value);" class="btn btn-success btn-outline-success">enable</button>&nbsp;&nbsp; <button  value="<?php echo$_GET['a_email'] ?>"   onclick="Disable1('Customer_Contact_Number',this.value)" class="btn btn-danger btn-outline-danger">Disable</button></td>
  </tr>
  <tr>
    <th>Customer Email ID</th>  
    <td><button value="<?php echo$_GET['a_email'] ?>"  onclick="Enable1('Customer_Email_ID',this.value);" class="btn btn-success btn-outline-success">enable</button>&nbsp;&nbsp; <button  value="<?php echo$_GET['a_email'] ?>"   onclick="Disable1('Customer_Email_ID',this.value)"class="btn btn-danger btn-outline-danger">Disable</button></td>
  </tr>
  <tr>
    <th>Annual Income</th>  
    <td><button value="<?php echo$_GET['a_email'] ?>"  onclick="Enable1('Annual_Income',this.value);" class="btn btn-success btn-outline-success">enable</button>&nbsp;&nbsp; <button  value="<?php echo$_GET['a_email'] ?>"   onclick="Disable1('Annual_Income',this.value)"class="btn btn-danger btn-outline-danger">Disable</button></td>
  </tr>
  <tr>
    <th>Max Loan Amount</th>  
    <td><button value="<?php echo$_GET['a_email'] ?>"  onclick="Enable1('Max_Loan_Amount',this.value);" class="btn btn-success btn-outline-success">enable</button>&nbsp;&nbsp; <button  value="<?php echo$_GET['a_email'] ?>"   onclick="Disable1('Max_Loan_Amount_',this.value)" class="btn btn-danger btn-outline-danger">Disable</button></td>
  </tr>
  <tr>
    <th>Min Loan Amount</th>  
    <td><button value="<?php echo$_GET['a_email'] ?>"  onclick="Enable1('Min_Loan_Amount',this.value);" class="btn btn-success btn-outline-success">enable</button>&nbsp;&nbsp; <button  value="<?php echo$_GET['a_email'] ?>"   onclick="Disable1('Min_Loan_Amount',this.value)"class="btn btn-danger btn-outline-danger">Disable</button></td>
  </tr>
  <tr>
    <th>Pan ID</th>  
    <td><button value="<?php echo$_GET['a_email'] ?>"  onclick="Enable1('Pan_ID',this.value);" class="btn btn-success btn-outline-success">enable</button>&nbsp;&nbsp; <button  value="<?php echo$_GET['a_email'] ?>"   onclick="Disable1('Pan_ID',this.value)" class="btn btn-danger btn-outline-danger">Disable</button></td>
  </tr>
  <tr>
    <th>Processing Fee</th>  
    <td><button value="<?php echo$_GET['a_email'] ?>"  onclick="Enable1('Procressing_Fee',this.value);" class="btn btn-success btn-outline-success">enable</button>&nbsp;&nbsp; <button  value="<?php echo$_GET['a_email'] ?>"   onclick="Disable1('Processing_Fee',this.value)" class="btn btn-danger btn-outline-danger">Disable</button></td>
  </tr>
  <tr>
    <th>Tenure</th>  
    <td><button  value="<?php echo$_GET['a_email'] ?>"  onclick="Enable1('Tenure',this.value);"class="btn btn-success btn-outline-success">enable</button>&nbsp;&nbsp; <button value="<?php echo$_GET['a_email'] ?>"   onclick="Disable1('Tenure',this.value)" class="btn btn-danger btn-outline-danger">Disable</button></td>
  </tr>
  <tr>
    <th>Minimun Tenure</th>
    <td><button value="<?php echo$_GET['a_email'] ?>"  onclick="Enable1('Minimum_Tenure',this.value);" class="btn btn-success btn-outline-success">enable</button>&nbsp;&nbsp; <button  value="<?php echo$_GET['a_email'] ?>"   onclick="Disable1('Minimum_Tenure',this.value)"class="btn btn-danger btn-outline-danger">Disable</button></td>
  </tr>
  <tr>
    <th>Lead Status</th>
    <td><button value="<?php echo$_GET['a_email'] ?>"  onclick="Enable1('Lead_Status',this.value);" class="btn btn-success btn-outline-success">enable</button>&nbsp;&nbsp; <button  value="<?php echo$_GET['a_email'] ?>"   onclick="Disable1('Lead_Status',this.value)" class="btn btn-danger btn-outline-danger">Disable</button></td>
  </tr>

  <tr>
    <th>Followup Date</th>  
    <td><button  value="<?php echo$_GET['a_email'] ?>"  onclick="Enable1('Followup_Date',this.value);"class="btn btn-success btn-outline-success">enable</button>&nbsp;&nbsp; <button  value="<?php echo$_GET['a_email'] ?>"   onclick="Disable1('Followup_Date',this.value)" class="btn btn-danger btn-outline-danger">Disable</button></td>
  </tr>
  <tr>
    <th>Comments</th>  
    <td><button  value="<?php echo$_GET['a_email'] ?>"  onclick="Enable1('Comments',this.value);"class="btn btn-success btn-outline-success">enable</button>&nbsp;&nbsp; <button  value="<?php echo$_GET['a_email'] ?>"   onclick="Disable1('Comments',this.value)" class="btn btn-danger btn-outline-danger">Disable</button></td>
  </tr>
  <tr>
    <th>Call</th>  
    <td><button  value="<?php echo$_GET['a_email'] ?>"  onclick="Enable1('Call',this.value);"class="btn btn-success btn-outline-success">enable</button>&nbsp;&nbsp;<button  value="<?php echo$_GET['a_email'] ?>"   onclick="Disable1('Call',this.value)" class="btn btn-danger btn-outline-danger">Disable</button></td>
  </tr>
  <tr>
    <th>Link to Customer</th>  
    <td><button  value="<?php echo$_GET['a_email'] ?>"  onclick="Enable1('Link_to_Customer',this.value);"class="btn btn-success btn-outline-success">enable</button> &nbsp;&nbsp;<button  value="<?php echo$_GET['a_email'] ?>"   onclick="Disable1('Link_To_Customer',this.value)"class="btn btn-danger btn-outline-danger">Disable</button></td>
  </tr>
  <tr>
    <th>HIT API</th>  
    <td><button  value="<?php echo$_GET['a_email'] ?>"  onclick="Enable1('HIT_API',this.value);"class="btn btn-success btn-outline-success">enable</button>&nbsp;&nbsp; <button  value="<?php echo$_GET['a_email'] ?>"   onclick="Disable1('HIT_API',this.value)" class="btn btn-danger btn-outline-danger">Disable</button></td>
  </tr>
  <tr>
    <th>Mail to</th>  
    <td><button value="<?php echo$_GET['a_email'] ?>"  onclick="Enable1('Mail_to',this.value);" class="btn btn-success btn-outline-success">enable</button> &nbsp;&nbsp;<button  value="<?php echo$_GET['a_email'] ?>"   onclick="Disable1('Mail_to',this.value)"class="btn btn-danger btn-outline-danger">Disable</button></td>
  </tr>
 
    </table>
    </div>

</main>






    <?php
      include("components/footer.php");
      ?>
      
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
  <script language="javascript">print_state("sts");</script>
  <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.7.1/jquery.min.js" integrity="sha512-v2CJ7UaYy4JwqLDIrZUI/4hqeoQieOmAZNXBeQyjo21dadnwR+8ZaIJVT8EE2iyI61OV8e6M8PP2/4hpQINQ/g==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
 
  <script>
$(function () {
  $('[data-toggle="tooltip"]').tooltip()
})

  function change(){
 var data1 = {
  'name':$("#formControlLgbb").val()
};

if($("#formControlLgbb").val()=="")
{
    alert("fill name");
    return;
}
// Make the AJAX request
$.ajax({
  url: 'newtable.php',
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

function Enable1(fieldname,tablename){
  console.log(fieldname,tablename);
  data1={
  'tablename':tablename,
  'fieldname':fieldname,
  'status':'enable'
}
  $.ajax({
  url: 'altertable.php',
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
function Disable1(fieldname,tablename){
  console.log(fieldname,tablename);
data1={
  'tablename':tablename,
  'fieldname':fieldname,
  'status':'disable'
}

  $.ajax({
  url: 'altertable.php',
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
<script>
   // toast.show();
</script>
</body>
</html>