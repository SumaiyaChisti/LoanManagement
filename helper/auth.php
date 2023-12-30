<?php

function auth_gaurd($email,$p,$role){
    include('../admin/components/conn.php');
    $d=mysqli_query($conn,"SELECT * FROM `staff` WHERE `email`='$email' AND `password`='$p' AND `role`='$role'");
  if(mysqli_num_rows($d)==1)
    return 1;
    else
    return 0;
}


?>