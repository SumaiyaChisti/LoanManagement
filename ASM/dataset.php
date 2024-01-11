<?php
include("components/conn.php");

    

    
        if(isset($_POST['id4'])){
            $d=mysqli_query($conn,"SELECT * FROM `staff` WHERE `team_leader`='$_POST[id4]' AND `area_sales_manager`='$_SESSION[area_sales_manager]'");
            
            while($data=mysqli_fetch_assoc($d)){
                if($data['role']=='Group Team Leader'){
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
                      <td><button value="'.$data['name'].'"  onclick="return showData5(this.value,event)" type="button" class="btn btn-outline-secondary btn-sm"  > <i class="fa-solid fa-plus"></i></button>
                </tr>
               
                '
                ;
                }
            }
            }
            if(isset($_POST['id5'])){
                $d=mysqli_query($conn,"SELECT * FROM `staff` WHERE `group_team_leader`='$_POST[id5]' AND `area_sales_manager`='$_SESSION[area_sales_manager]'");
                
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