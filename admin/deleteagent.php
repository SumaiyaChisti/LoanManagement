<?php
include("components/conn.php");
if(isset($_GET['id']))
{
    $q = "DELETE FROM `agents` WHERE `id`='$_GET[id]'";
    mysqli_query($conn, $q);
    echo "<script>alert('data deleted');</script>";
    header("refresh:1,viewagent.php");
}
else{
    header("location:viewagent.php");
}
?>