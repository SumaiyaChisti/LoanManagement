
<?php
session_start();
include("components/conn.php");
if(isset($_POST['submit'])) {
  $dir = "uploads/";
  $fullpath = $dir . basename($_FILES['pan_card']['name']);
  move_uploaded_file($_FILES['pan_card']['tmp_name'],$fullpath);
  $fullpath1 = $dir . basename($_FILES['aadhaar_card']['name']);
  move_uploaded_file($_FILES['aadhaar_card']['tmp_name'],$fullpath1);
  $fullpath2 = $dir . basename($_FILES['bill']['name']);
  move_uploaded_file($_FILES['bill']['tmp_name'],$fullpath2);
  $fullpath3 = $dir . basename($_FILES['salary_slip']['name']);
  move_uploaded_file($_FILES['salary_slip']['tmp_name'],$fullpath3);
  $fullpath4 = $dir . basename($_FILES['id_card']['name']);
  move_uploaded_file($_FILES['id_card']['tmp_name'],$fullpath4);
  $fullpath5 = $dir . basename($_FILES['six_months_banking']['name']);
  move_uploaded_file($_FILES['six_months_banking']['tmp_name'],$fullpath5);
  $fullpath6 = $dir . basename($_FILES['two_years_form16']['name']);
  move_uploaded_file($_FILES['two_years_form16']['tmp_name'],$fullpath6);
  $fullpath7 = $dir . basename($_FILES['official_email']['name']);
  move_uploaded_file($_FILES['official_email']['tmp_name'],$fullpath7);
    $q = "INSERT INTO `form1`(`name`,`dob`,`gender`,`contact`,`email`,`address`,`pan_id`,`property_ownership`,`marital_status`,`place_of_work`,`job_title`,`work_address`,`years_employed`,`monthly_net_income`,`pan_card`,`aadhar_card`,`bill`,`salary_slip`,`id_card`,`six_months_banking`,`two_years_form16`,`official_email`,,`bank_name`,`branch_name`,`account_number`,`account_type`,`purpose_of_loan`,`requested_loan_amount`,`terms_in`,`status`,`class`)VALUES ('$_POST[name]','$_POST[dob]','$_POST[gender]','$_POST[contact]','$_POST[email]','$_POST[address]','$_POST[pan_id]','$_POST[property_ownership]','$_POST[marital_status]','$_POST[place_of_work]','$_POST[job_title]','$_POST[work_address]','$_POST[years_employed]','$_POST[monthly_net_income]','$fullpath','$fullpath1','$fullpath2','$fullpath3','$fullpath4','$fullpath5','$fullpath6','$fullpath7','$_POST[bank_name]','$_POST[branch_name]','$_POST[account_number]','$_POST[account_type]','$_POST[purpose_of_loan]','$_POST[requested_loan_amount]','$_POST[terms_in]','pending','badge-warning')";
    $d = mysqli_query($conn,$q);
    if ($d) {
        echo '
<div class="position-fixed bottom-0 end-0 p-3" style="z-index: 11">
<div id="liveToast" class="toast show" role="alert" aria-live="assertive" aria-atomic="true">
  <div class="toast-header">
    
    <strong class="me-auto">UrbanMoney</strong>
    
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
    
    <h3 style="color:blue; font-family:fancy monospace">Personal Loan-Salaried</h3>

    <form enctype="multipart/form-data" action="" method="post">
  <div class="form-outline mt-4">
  <input type="text" id="formControlLg" name="name"  class="form-control form-control-lg" required />
  <label class="form-label" for="formControlLg">Name</label>
    </div>
    <div class="form-outline mt-4">
  <input type="date" id="formControlLg" name="dob"  class="form-control form-control-lg" required />
  <label class="form-label" for="formControlLg">DOB</label>
    </div>
    <div class="form-outline mt-4">
    <p>Gender</p>
  <input type="radio" id="formControlLg" name="gender" value="Male">
  <label for="male">Male</label><br>
  <input type="radio" id="formControlLg" name="gender" value="Female">
  <label for="female">Female</label><br>
&nbsp;&nbsp;<input type="radio" id="formControlLg" name="gender" value="Others">
 <label for="others">Others</label><br>
    </div>
    <div class="form-outline mt-4">
  <input type="tel" id="formControlLg" name="contact"  class="form-control form-control-lg" required />
  <label class="form-label" for="formControlLg">Phone no</label>
    </div>
    <div class="form-outline mt-4">
  <input type="email" id="formControlLg" name="email"  class="form-control form-control-lg" required />
  <label class="form-label" for="formControlLg">Email</label>
</div>
    <div class="form-outline mt-4">
  <input type="text" id="formControlLg" name="address"  class="form-control form-control-lg" required />
  <label class="form-label" for="formControlLg">Address</label>
    </div>

    <!-- <div class="form-outline mt-4"> 
    <label class="form-label" for="formControlLg">State</label>
    <select name="state" onchange="print_city('state', this.selectedIndex);" id="sts" name ="stt" class="form-select" required></select>

      </select>
 
    </div>
    
    <div class="form-outline mt-4">
    <label class="form-label" for="formControlLg">City</label>
      <select id ="state" name="city" class="form-select" required></select>
    </div>-->
    
    <div class="form-outline mt-4">
  <input type="text" id="formControlLg" name="pan_id"  class="form-control form-control-lg" required />
  <label class="form-label" for="formControlLg">Pan ID</label>
    </div>
    <div class="form-outline mt-4">
    <p>Property ownership</p>
  <input type="radio" id="formControlLg" name="property_ownership" value="owned">
  <label for="owned">Owned</label><br>
  <input type="radio" id="formControlLg" name="property_ownership" value="CSS">
  <label for="rented">Rented</label><br>
 </div>
    <div class="form-outline mt-4">
    <p>Marital Status</p>
  <input type="radio" id="formControlLg" name="marital_status" value="single">
  <label for="single">Single</label><br>
  <input type="radio" id="formControlLg" name="marital_status" value="married">
  <label for="married">Married</label><br>
&nbsp;&nbsp;<input type="radio" id="formControlLg" name="marital_status" value="widowed">
  <label for="widowed">Widowed</label><br>
&nbsp;&nbsp;<input type="radio" id="formControlLg" name="marital_status" value="divorced">
  <label for="divorced">Divorced</label><br>
</div>

<div class="form-outline mt-4">
  <input type="text" id="formControlLg" name="place_of_work"  class="form-control form-control-lg" required />
  <label class="form-label" for="formControlLg">Place of Work</label>
    </div>
    <div class="form-outline mt-4">
  <input type="text" id="formControlLg" name="job_title"  class="form-control form-control-lg" required />
  <label class="form-label" for="formControlLg">Job Title</label>
    </div>
    <div class="form-outline mt-4">
  <input type="text" id="formControlLg" name="work_address"  class="form-control form-control-lg" required />
  <label class="form-label" for="formControlLg">Work Address</label>
    </div>
    <div class="form-outline mt-4">
  <input type="text" id="formControlLg" name="years_employed"  class="form-control form-control-lg" required />
  <label class="form-label" for="formControlLg">Years Employed</label>
    </div>
    <div class="form-outline mt-4">
  <input type="text" id="formControlLg" name="monthly_net_income"  class="form-control form-control-lg" required />
  <label class="form-label" for="formControlLg">Monthly Net Income</label>
    </div>
    <h4 style="margin-top: 15px; color:blue" >Upload Documents</h4><br>
    <h6 style="margin-top: 15px; color:blue" class="form-label" for="formControlLg">Pan Card Copy</h6>
    <div class="form-outline mt-4">
  <input type="file" id="formControlLg" name="pan_card"  class="form-control form-control-lg" required />
    </div>
    <h6 style="margin-top: 15px; color:blue" class="form-label" for="formControlLg">Aadhaar Card Copy</h6>
    <div class="form-outline mt-4">
  <input type="file" id="formControlLg" name="aadhar_card"  class="form-control form-control-lg" required />
    </div>
    <h6 style="margin-top: 15px; color:blue" class="form-label" for="formControlLg">Residential light Bill and telephone Bill of latest month (if rental then rental agreement)</h6>
    <div class="form-outline mt-4">
  <input type="file" id="formControlLg" name="bill"  class="form-control form-control-lg" required />
    </div>
    <h6 style="margin-top: 15px; color:blue" class="form-label" for="formControlLg">Last 3 months Salary Slip</h6>
    <div class="form-outline mt-4">
  <input type="file" id="formControlLg" name="salary_slip"  class="form-control form-control-lg" required />
    </div>
    <h6 style="margin-top: 15px; color:blue" class="form-label" for="formControlLg">Offer letter And Id Card Copy</h6>
    <div class="form-outline mt-4">
  <input type="file" id="formControlLg" name="id_card"  class="form-control form-control-lg" required />
    </div>
    <h6 style="margin-top: 15px; color:blue" class="form-label" for="formControlLg">Last 6 months banking in which salary is credited</h6>
    <div class="form-outline mt-4">
  <input type="file" id="formControlLg" name="six_months_banking"  class="form-control form-control-lg" required />
    </div>
    <h6 style="margin-top: 15px; color:blue" class="form-label" for="formControlLg">Last 2 years Form 16 </h6>
    <div class="form-outline mt-4">
  <input type="file" id="formControlLg" name="two_years_form16"  class="form-control form-control-lg" required />
    </div>
    <h6 style="margin-top: 15px; color:blue" class="form-label" for="formControlLg">Official Email Id</h6>
    <div class="form-outline mt-4">
  <input type="file" id="formControlLg" name="official_email"  class="form-control form-control-lg" required />
    </div>
    
<h4 style="margin-top: 15px; color:blue" >Financial Refrences</h4>
    <div class="form-outline mt-4">
  <input type="text" id="formControlLg" name="bank_name"  class="form-control form-control-lg" required />
  <label class="form-label" for="formControlLg">Bank Name</label>
    </div>
    <div class="form-outline mt-4">
  <input type="text" id="formControlLg" name="branch_name"  class="form-control form-control-lg" required />
  <label class="form-label" for="formControlLg">Branch Name</label>
    </div>
    <div class="form-outline mt-4">
  <input type="text" id="formControlLg" name="account_number"  class="form-control form-control-lg" required />
  <label class="form-label" for="formControlLg">Account Number</label>
    </div>
    <div class="form-outline mt-4">
    <p>Account Type</p>
  <input type="radio" id="formControlLg" name="account_type" value="savings">
  <label for="savings">Saving Account</label><br>
  <input type="radio" id="formControlLg" name="account_type" value="current">
  <label for="current">Current</label><br>
&nbsp;&nbsp;<input type="radio" id="formControlLg" name="account_type" value="other">
  <label for="other">Other</label><br>
    </div>
    <h4 style="margin-top: 15px; color:blue" >Loan Details</h4>
    <div class="form-outline mt-4">
    <p>Purpose of Personal Loan</p>
  <input type="radio" id="formControlLg" name="purpose_of_loan" value="vehicle">
  <label for="vehicle">Purchase Of Vehicle</label><br>
  <input type="radio" id="formControlLg" name="purpose-of_loan" value="office">
  <label for="office"> Purchase of Office Equipment</label><br>
&nbsp;&nbsp;<input type="radio" id="formControlLg" name="purpose_of_loan" value="education">
  <label for="education">Education</label><br>
&nbsp;&nbsp;<input type="radio" id="formControlLg" name="purpose_of_loan" value="personal">
  <label for="personal">Take over of existing personal loan</label><br>
&nbsp;&nbsp;<input type="radio" id="formControlLg" name="purpose_of_loan" value="other">
  <label for="other">Other</label><br>
    </div>
    <div class="form-outline mt-4">
  <input type="text" id="formControlLg" name="requested_loan_amount"  class="form-control form-control-lg" required />
  <label class="form-label" for="formControlLg">Requested Personal Loan Amount </label>
    </div>
    <div class="form-outline mt-4">
  <input type="text" id="formControlLg" name="terms_in"  class="form-control form-control-lg" required />
  <label class="form-label" for="formControlLg">Terms In(months)</label>
    </div>
<div class="form-outline mt-4">
  <input type="submit" name="submit" id="formControlLg" class="btn btn-primary form-control-lg" value="Submit" />
 
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
  <script language="javascript">print_state("sts");</script>

<script>
   // toast.show();
</script>

</html>