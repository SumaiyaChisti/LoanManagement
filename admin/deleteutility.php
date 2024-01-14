<?php
   session_start();
include("components/conn.php");
if(isset($_GET['id']))
{
    $q = "DELETE FROM `umutility` WHERE `id`='$_GET[id]'";
    mysqli_query($conn, $q);
    echo "<script>alert('data deleted');</script>";
    header("refresh:1,viewutility.php");
}
else{
    header("location:viewutility.php");
}
?>