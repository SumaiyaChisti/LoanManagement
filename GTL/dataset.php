<?php
include("components/conn.php");



    
       

            if(isset($_POST['id5'])){
                $d=mysqli_query($conn,"SELECT * FROM `staff` WHERE `group_team_leader`='$_POST[id5]'");
                
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