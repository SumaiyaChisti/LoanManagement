<?php
session_start();
include("components/conn.php");
$sno=0;


if(isset($_POST['id'])){
    $d=mysqli_query($conn,"SELECT * FROM `staff` WHERE `zonal_sales_manager` ='$_SESSION[Zonal_Sales_Manager]'");
    
    while($data=mysqli_fetch_assoc($d)){
        if($data['role']=='Area Sales Manager'){
            $sno=$sno+1;
        echo'
      
        <tr id="'.$data['id'].$sno.'">
              <td></td>
              <td>'.$data['id'].'</td>
              <td>'.$data['name'].'</td>
              <td>'.$data['email'].'</td>
              <td>'.$data['contact'].'</td>
              <td>'.$data['state'].'</td>
              <td>'.$data['city'].'</td>
              <td>'.$data['role'].'</td>
              <td><button id="'.$data['id'].$sno.'jun1" value="'.$data['id'].$sno.'"  onclick="return showData1(this.value,'.$data['id'].$sno.',event)" type="button" class="btn btn-outline-secondary btn-sm"  > <i class="fa-solid fa-plus"></i></button>
        </tr>
       
        '
        ;
        }
    }
    }
    if(isset($_POST['id1'])){
        $d=mysqli_query($conn,"SELECT * FROM `staff` WHERE `zonal_sales_manager` ='$_SESSION[Zonal_Sales_Manager]'");
        
        while($data=mysqli_fetch_assoc($d)){
            if($data['role']=='Manager'){
                $sno=$sno+1;
            echo'
          
            <tr id="'.$data['id'].$sno.'">
                  <td></td>
                  <td>'.$data['id'].'</td>
                  <td>'.$data['name'].'</td>
                  <td>'.$data['email'].'</td>
                  <td>'.$data['contact'].'</td>
                  <td>'.$data['state'].'</td>
                  <td>'.$data['city'].'</td>
                  <td>'.$data['role'].'</td>
                  <td><button id="'.$data['id'].$sno.'jun2" value="'.$data['id'].$sno.'"  onclick="return showData2(this.value,'.$data['id'].$sno.',event)" type="button" class="btn btn-outline-secondary btn-sm"  > <i class="fa-solid fa-plus"></i></button>
            </tr>
           
            '
            ;
            }
        }
        }
        if(isset($_POST['id2'])){

            $d=mysqli_query($conn,"SELECT * FROM `staff` WHERE `zonal_sales_manager` ='$_SESSION[Zonal_Sales_Manager]'");
            
            while($data=mysqli_fetch_assoc($d)){
               
                if($data['role']=='Team Leader'){
                    $sno=$sno+1;
                echo'
              
                <tr id="'.$data['id'].$sno.'">
                      <td></td>
                      <td>'.$data['id'].'</td>
                      <td>'.$data['name'].'</td>
                      <td>'.$data['email'].'</td>
                      <td>'.$data['contact'].'</td>
                      <td>'.$data['state'].'</td>
                      <td>'.$data['city'].'</td>
                      <td>'.$data['role'].'</td>
                      <td><button id="'.$data['id'].$sno.'jun3" value="'.$data['id'].$sno.'"  onclick="return showData3(this.value,'.$data['id'].$sno.',event)" type="button" class="btn btn-outline-secondary btn-sm"  > <i class="fa-solid fa-plus"></i></button>
                </tr>
               
                '
                ;
                }
            }
            }
            if(isset($_POST['id3'])){

                $d=mysqli_query($conn,"SELECT * FROM `staff` WHERE `zonal_sales_manager` ='$_SESSION[Zonal_Sales_Manager]'");
                
                while($data=mysqli_fetch_assoc($d)){
                   
                    if($data['role']=='Group Team Leader'){
                        $sno=$sno+1;
                    echo'
                  
                    <tr id="'.$data['id'].$sno.'">
                          <td></td>
                          <td>'.$data['id'].'</td>
                          <td>'.$data['name'].'</td>
                          <td>'.$data['email'].'</td>
                          <td>'.$data['contact'].'</td>
                          <td>'.$data['state'].'</td>
                          <td>'.$data['city'].'</td>
                          <td>'.$data['role'].'</td>
                          <td><button id="'.$data['id'].$sno.'jun4" value="'.$data['id'].$sno.'"  onclick="return showData4(this.value,'.$data['id'].$sno.',event)" type="button" class="btn btn-outline-secondary btn-sm"  > <i class="fa-solid fa-plus"></i></button>
                    </tr>
                   
                    '
                    ;
                    }
                }
                }
            if(isset($_POST['id4'])){
                $d=mysqli_query($conn,"SELECT * FROM `staff` WHERE `zonal_sales_manager` ='$_SESSION[Zonal_Sales_Manager]'");
                
                while($data=mysqli_fetch_assoc($d)){
                    if($data['role']=='Agent'){
                    echo'
                  
                    <tr id="'.$data['name'].'">
                          <td></td>
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