<?php
include("components/conn.php");
mysqli_query($conn,"DELETE FROM `campaign` WHERE `id`='$_GET[id]'");
header("location:viewcampaign.php");
?>