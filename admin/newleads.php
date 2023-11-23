
<?php
include("components/conn.php");
if(isset($_POST['submit'])) {
  
    $q = "INSERT INTO `leads`(`Reference_Number`,`Campaign_Name`,`Customer_Name`,`State`,`City`,`Pin_code`,`Customer_Contact_number`,`Custome_Email_Id`,`Cibil`,`Report`,`Annual_Income`,`Max_Loan_Amount`,`Min_Loan_Amount`,`Pan_ID`,`Processing_Fee`,`Tenure`,`Minimun_Tenure`,`Lead_Status`,`FollowUp_Date`,`Comments`,`Phone_Call`,`LINK_TO_CUSTOMER`,`HIT_API`)VALUES ('$_POST[Reference_Number]','$_POST[Campaign_Name]','$_POST[Customer_Name]','$_POST[State]','$_POST[City]','$_POST[Pin_Code]','$_POST[Customer_Contact_Number]','$_POST[Customer_Email_ID]','$_POST[Cibil]','$_POST[Report]','$_POST[Annual_Income]','$_POST[Max_Loan_Amount]','$_POST[Min_Loan_Amount]','$_POST[Pan_ID]','$_POST[Processing_Fee]','$_POST[Tenure]','$_POST[Minimum_Tenure]','$_POST[Lead_Status]','$_POST[FollowUp_Date]','$_POST[Comments]','$_POST[Phone_Call]','$_POST[LINK_TO_CUSTOMER]','$_POST[HIT_API]')";
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
         error_reporting(0);
         ?>
         <div class="page-wrapper mdc-toolbar-fixed-adjust">
        <main class="content-wrapper">
        <main style="margin-top: 58px">
  <div class="container pt-4">
    <h3>New Leads</h3>
    <table class="table  table-responsive">
<tr>
  <th>S.no</th>
    <th>Id</th>
    <th>Refrence Number</th>
    <th>Campaign Name</th>
    <th>Customer Name</th>
    <th>State</th>
    <th>City</th>
    <th>Pin Code</th>
    <th>Customer Contact Number</th>
    <th>Customer Email ID</th>
    <th>Cibil</th>
    <th>Report</th>
    <th>Annual Income</th>
    <th>Max Loan Amount</th>
    <th>Min Loan Amount</th>
    <th>Pan ID</th>
    <th>Processing Fee</th>
    <th>Tenure</th>
    <th>Minimun Tenure</th>
    <th>Lead Status</th>
    <th>Follow Up Date</th>
    <th>Comments</th>
    <th>Phone Call</th>
    <th>Link To Customer</th>
    <th>HIT API</th>



    <th colspan="2">Options</th>
    
</tr>

<?php
include("components/conn.php");
$q = "SELECT * FROM `leads`";
$d=mysqli_query($conn, $q);
$co=mysqli_num_rows($d);
while($data=mysqli_fetch_assoc($d))
{
  $sno=$sno+1;
    echo '<tr>
          <td>'.$sno.'</td>
          <td>'.$data['id'].'</td>
          <td>'.$data['Reference_Number'].'</td>
          <td>'.$data['Campaign_Name'].'</td>
          <td>'.$data['Customer_Name'].'</td>
         <td>'.$data['State'].'</td>
         <td>'.$data['City'].'</td>
         <td>'.$data['Pin_Code'].'</td>
         <td>'.$data['Customer_Contact_Number'].'</td>
         <td>'.$data['Customer_Email_ID'].'</td>
         <td>'.$data['Cibil'].'</td>
         <td>'.$data['Report'].'</td>
         <td>'.$data['Annual_Income'].'</td>
         <td>'.$data['Max_Loan_Amount'].'</td>
         <td>'.$data['Min_Loan_Amount'].'</td>
         <td>'.$data['Pan_ID'].'</td>
         <td>'.$data['Processing_Fee'].'</td>
         <td>'.$data['Tenure'].'</td>
         <td>'.$data['Minimum_Tenure'].'</td>
         <td>'.$data['Lead_Status'].'</td>
         <td>'.$data['FollowUp_Date'].'</td>
         <td>'.$data['Comments'].'</td>
         <td>'.$data['Phone_Call'].'</td>
         <td>'.$data['LINK_TO_CUSTOMER'].'</td>
         <td>'.$data['HIT_API'].'</td>

         
         <td><a class="btn btn-primary"href="update.php?id='.$data['id'].'"><i class="fa-solid fa-pen"></i></a></td>
         <td><a class="btn btn-primary" href="delete.php?id='.$data['id'].'"><i class="fa-solid fa-trash"></i></a></td>
         
     </tr>';
}

//echo"Total Number of rows are " .$co;
?>

</table>
</div>

</main>

<!--Main layout-->
          



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

</html>