<?php
   session_start();
include("components/conn.php");
if($_POST['status']=='enable')
{
$sql="ALTER TABLE $_POST[tablename]
ADD COLUMN  $_POST[fieldname] VARCHAR(100);";
mysqli_query($conn,$sql);
echo "ok";
}
if($_POST['status']=='disable')
{
$sql="ALTER TABLE $_POST[tablename]
DROP $_POST[fieldname] ";
mysqli_query($conn,$sql);
echo "ok";
}
?>