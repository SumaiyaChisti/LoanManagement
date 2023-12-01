<?php
include("components/conn.php");
if(isset($_GET['id']))
{
    $q = "DELETE FROM `dsa` WHERE `id`='$_GET[id]'";
    mysqli_query($conn, $q);
    echo "<script>alert('data deleted');</script>";
    header("refresh:1,dsa.php");
}
else{
    header("location:dsa.php");
}
?>