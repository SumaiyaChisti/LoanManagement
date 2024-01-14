<?php
include("components/conn.php");
session_start();
if(isset($_GET['id']))
{
    $q = "DELETE FROM `staff` WHERE `id`='$_GET[id]'";
    mysqli_query($conn, $q);
    echo "<script>alert('data deleted');</script>";
    header("refresh:1,viewstaff.php");
}
else{
    header("location:viewstaff.php");
}
?>