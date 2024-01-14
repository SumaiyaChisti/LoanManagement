<?php
include("components/conn.php");
session_start();

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
   
  <div class="container pt-4">
    <h3 style="font-family: fancy monospace;" >My Team</h3>
    <br>
    
    <table  class="table  table-responsive table-bordered table-hover " style=" border: 1px solid white;">
<tr>
  <th>Sno</th>
    <th>Id</th>
    <th>Name</th>
    <th>Email</th>
    <th>Contact</th>
    <th>State</th>
    <th>City</th>
    <th>Role</th>
    <th></th>
</tr >

<?php

include("components/conn.php");
$q = "SELECT * FROM `staff` WHERE `manager`='$_SESSION[Manager]' AND `role`='Team Leader'" ;
$d=mysqli_query($conn,$q);
$co=mysqli_num_rows($d);
while($data=mysqli_fetch_assoc($d))
{
  $sno=$sno+1;
    echo '<tr id="'.$data['id'].$sno.'">
          <td>'.$sno.'</td>
          <td>'.$data['id'].'</td>
          <td>'.$data['name'].'</td>
          <td>'.$data['email'].'</td>
          <td>'.$data['contact'].'</td>
          <td>'.$data['state'].'</td>
          <td>'.$data['city'].'</td>
          <td>'.$data['role'].'</td>
          <td><button  id="'.$data['id'].$sno.'jun"  value="'.$data['id'].$sno.'"  onclick="return showData(this.value,'.$data['id'].$sno.',event)" type="button" class="btn btn-outline-secondary btn-sm"  > <i class="fa-solid fa-plus"></i></button>
         </tr>
          ';

}



//echo"Total Number of rows are " .$co;
?>
</table>
    

</div>

</main>

<!--Main layout-->
          
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous"></script>
      <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js" integrity="sha384-cVKIPhGWiC2Al4u+LWgxfKTRIcfu0JTxR+EQDz/bgldoEyl4H0zUF0QKbrJ0EcQF" crossorigin="anonymous"></script>
      <script> var table = new DataTable("table")</script>

   
      
          
          <?php
      include("components/footer.php");
      ?>
  
  <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/mdb-ui-kit/6.0.1/mdb.min.js"></script>
  <script src="assets/vendors/js/vendor.bundle.base.js"></script>
  <script src="assets/vendors/chartjs/Chart.min.js"></script>
  <script src="assets/vendors/jvectormap/jquery-jvectormap.min.js"></script>
  <script src="assets/vendors/jvectormap/jquery-jvectormap-world-mill-en.js"></script>
  <script src="assets/js/material.js"></script>
  <script src="assets/js/misc.js"></script>
  <script src="assets/js/dashboard.js"></script>




  <script type="text/javascript"> 

   

   
    



 









   
    


function showData(id,btn,event)
{
  $("#"+id+"jun").prop("disabled",true);
 
    event.preventDefault();
    

    
$.ajax(
    {
        url: "dataset.php",
        type: 'POST',
        data: {
            "id": id, 
        },
        success: function (data){
       $('#'+id).after(data);
      //  console.log(data);
        }
    });

    return false;
}



</script>


<script>
function showData1(id1,btn,event)
{
  $("#"+id1+"jun1").prop("disabled",true);
  

event.preventDefault(); 

$.ajax(
    {
        url: "dataset.php",
        type: 'POST',
        data: {
            "id1": id1, 
        },
        success: function (data){
       $('#'+id1).after(data);
        }
    });
    return false;
}
</script>

<script>
function showData2(id2,btn,event)
{

  $("#"+id2+"jun2").prop("disabled",true);
event.preventDefault(); 

$.ajax(
    {
        url: "dataset.php",
        type: 'POST',
        data: {
            "id2": id2, 
        },
        success: function (data){
       $('#'+id2).after(data);
        }
    });
    return false;
}
</script>


<script>
function showData3(id3,btn,event)
{
  $("#"+id3+"jun3").prop("disabled",true);
  

event.preventDefault(); 


$.ajax(
    {
        url: "dataset.php",
        type: 'POST',
        data: {
            "id3": id3, 
        },
        success: function (data){
       $('#'+id3).after(data);
        }
    });
    return false;
}
</script>
<script>
function showData4(id4,btn,event)
{
  $("#"+id4+"jun4").prop("disabled",true);
event.preventDefault(); 


$.ajax(
    {
        url: "dataset.php",
        type: 'POST',
        data: {
            "id4": id4, 
        },
        success: function (data){
       $('#'+id4).after(data);
        }
    });
    return false;
}
</script>




</body>
</html>
