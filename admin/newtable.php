<?php
include('components/conn.php');
mysqli_query($conn,"INSERT INTO `campaign` (`name`) VALUES('$_POST[name]')");
echo"ok";
?>