<?php
session_start();
unset($_SESSION['agent']);
session_destroy();
header("location:../admin/login.php");
?>