<?php
include("components/conn.php");

if(isset($_POST['id1'])){
    $d=mysqli_query($conn,"SELECT * FROM `staff` WHERE `branch_manager`='$_POST[id1]' AND `zonal_sales_manager`='$_SESSION[zonal_sales_manager]'");
    
    while($data=mysqli_fetch_assoc($d)){
        if($data['role']=='Area Sales Manager'){
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
              <td><button value="'.$data['name'].'"  onclick="return showData2(this.value,event)" type="button" class="btn btn-outline-secondary btn-sm"  > <i class="fa-solid fa-plus"></i></button>
        </tr>
       
        '
        ;
        }
    }
    }
if(isset($_POST['id2'])){
    $d=mysqli_query($conn,"SELECT * FROM `staff` WHERE `area_sales_manager`='$_POST[id2]'");
    
    while($data=mysqli_fetch_assoc($d)){
        if($data['role']=='Manager'){
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
              <td><button value="'.$data['name'].'"  onclick="return showData3(this.value,event)" type="button" class="btn btn-outline-secondary btn-sm"  > <i class="fa-solid fa-plus"></i></button>
        </tr>
       
        '
        ;
        }
    }
    }
    if(isset($_POST['id3'])){
        $d=mysqli_query($conn,"SELECT * FROM `staff` WHERE `manager`='$_POST[id3]'");
        
        while($data=mysqli_fetch_assoc($d)){
            if($data['role']=='Team Leader'){
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
                  <td><button value="'.$data['name'].'"  onclick="return showData4(this.value,event)" type="button" class="btn btn-outline-secondary btn-sm"  > <i class="fa-solid fa-plus"></i></button>
            </tr>
           
            '
            ;
            }
        }
        }
        if(isset($_POST['id4'])){
            $d=mysqli_query($conn,"SELECT * FROM `staff` WHERE `team_leader`='$_POST[id4]'");
            
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