<?php
 session_start();
// session_destroy();
// session_abort();
// print_r($_SESSION);


for($i=0;$i<count($_SESSION['names']);$i++)
{
    echo $_SESSION['names'][$i];
}

if(isset($_POST['lead_id'])){
    $_SESSION['names'][] = $_POST['lead_id'];
    print_r($_SESSION);
}

if(isset($_POST['lead_agent'])){
   
   
    $_POST['lead_agent'];
}
?>