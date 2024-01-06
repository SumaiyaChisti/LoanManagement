<?php
$host="localhost";
$user="root";
$password="";
$db="urban_money";
$conn=mysqli_connect($host,$user,$password,$db);
if(mysqli_connect_errno()){echo "not connect".mysqli_connect_error();}
?>