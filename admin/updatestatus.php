<?php
include("components/conn.php");
session_start();

if(isset($_POST["status"])=='Approved'){
mysqli_query($conn,"UPDATE `dsa` SET `status`='$_POST[status]',`class`='$_POST[class]' WHERE `id`='$_POST[id]'");
echo "ok";
}
else if(isset($_POST["status"])== "Rejected"){
    mysqli_query($conn,"UPDATE `dsa` SET `status`='$_POST[status]',`class`='$_POST[class]' WHERE `id`='$_POST[id]'");
    echo "ok";
}
?>