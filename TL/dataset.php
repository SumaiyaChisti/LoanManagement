<?php
include("components/conn.php");
session_start();



    
        
            if(isset($_POST['id'])){
                $d=mysqli_query($conn,"SELECT * FROM `staff` WHERE `team_leader`='$_SESSION[Team_Leader]'");
                
                while($data=mysqli_fetch_assoc($d)){
                    if($data['role']=='Agent'){
                    echo'
                  
                    <tr id="'.$data['name'].'">
                          <td>+</td>
                          <td>'.$data['id'].'</td>
                          <td>'.$data['name'].'</td>
                          <td>'.$data['email'].'</td>
                          <td>'.$data['contact'].'</td>
                          <td>'.$data['state'].'</td>
                          <td>'.$data['city'].'</td>
                          <td>'.$data['role'].'</td>
                    </tr>
                   
                    '
                    ;
                    }
                }
                }
?>