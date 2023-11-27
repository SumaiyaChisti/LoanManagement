<?php
include("components/conn.php");
if(isset($_GET['id']))
{
    $q = "DELETE FROM `leads` WHERE `id`='$_GET[id]'";
    mysqli_query($conn, $q);
    echo "<script>alert('data deleted');</script>";
    header("refresh:1,leads.php");
}
else{
    header("location:leads.php");
}
?>