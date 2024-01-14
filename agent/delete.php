<?php
session_start();
include("components/conn.php");
if(isset($_GET['id']))
{
    $q = "DELETE FROM `leads` WHERE `id`='$_GET[id]'";
    mysqli_query($conn, $q);
    echo "<script>alert('data deleted');</script>";
    header("refresh:1,leadagent.php");
}
else{
    header("location:leadagent.php");
}
?>