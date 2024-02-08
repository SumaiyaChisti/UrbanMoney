

<?php
include("components/conn.php");
session_start();
$sno=0;
if(isset($_POST['id'])){
$d=mysqli_query($conn,"SELECT * FROM `staff` WHERE `zonal_sales_manager`='$_POST[email]'");

while($data=mysqli_fetch_assoc($d)){
   if($data['role']=='Branch Manager'){
    $sig="'";
    $sno=$sno+1;
    echo'
   
    <tr id="'.$data['id'].$sno.'">
          <td>+</td>
          <td>'.$data['id'].'</td>
          <td>'.$data['name'].'</td>
          <td>'.$data['email'].'</td>
          <td>'.$data['contact'].'</td>
          <td>'.$data['state'].'</td>
          <td>'.$data['city'].'</td>
          <td>'.$data['role'].'</td>
          <td>
          <button  id="'.$data['id'].$sno.'jun"  value="'.$data['id'].$sno.'"  onclick="return showData1(this.value,'.$data['id'].$sno.','.$sig.$data["email"].$sig.',event)" class="btn btn-outline-secondary btn-sm"> <i class="fa-solid fa-plus"></i></button>
        
  
          </tr>
  
    '  
    ;
 
   }

}
 
}
if(isset($_POST['id1'])){
    $d=mysqli_query($conn,"SELECT * FROM `staff` WHERE `branch_manager`='$_POST[email]'");
    
    while($data=mysqli_fetch_assoc($d)){
        if($data['role']=='Area Sales Manager'){
            $sig="'";
            $sno=$sno+1;
        echo'
      
        <tr id="'.$data['id'].$sno.'">
              <td>+</td>
              <td>'.$data['id'].'</td>
              <td>'.$data['name'].'</td>
              <td>'.$data['email'].'</td>
              <td>'.$data['contact'].'</td>
              <td>'.$data['state'].'</td>
              <td>'.$data['city'].'</td>
              <td>'.$data['role'].'</td>
              <td>
              <button  id="'.$data['id'].$sno.'jun"  value="'.$data['id'].$sno.'"  onclick="return showData2(this.value,'.$data['id'].$sno.','.$sig.$data["email"].$sig.',event)" class="btn btn-outline-secondary btn-sm"> <i class="fa-solid fa-plus"></i></button>
        
              </tr>
       
        '
        ;
        }
    }
    }
if(isset($_POST['id2'])){
    $d=mysqli_query($conn,"SELECT * FROM `staff` WHERE `area_sales_manager`='$_POST[email]'");
    
    while($data=mysqli_fetch_assoc($d)){
        if($data['role']=='Manager'){
            $sig="'";
            $sno=$sno+1;
        echo'
      
        <tr id="'.$data['id'].$sno.'">
              <td>+</td>
              <td>'.$data['id'].'</td>
              <td>'.$data['name'].'</td>
              <td>'.$data['email'].'</td>
              <td>'.$data['contact'].'</td>
              <td>'.$data['state'].'</td>
              <td>'.$data['city'].'</td>
              <td>'.$data['role'].'</td>
              <td>
              <button  id="'.$data['id'].$sno.'jun"  value="'.$data['id'].$sno.'"  onclick="return showData3(this.value,'.$data['id'].$sno.','.$sig.$data["email"].$sig.',event)" class="btn btn-outline-secondary btn-sm"> <i class="fa-solid fa-plus"></i></button>
        
              </tr>
       
        '
        ;
        }
    }
    }
    if(isset($_POST['id3'])){
        $d=mysqli_query($conn,"SELECT * FROM `staff` WHERE `manager`='$_POST[email]'");
        
        while($data=mysqli_fetch_assoc($d)){
            if($data['role']=='Team Leader'){
                $sig="'";
                $sno=$sno+1;
            echo'
          
            <tr id="'.$data['id'].$sno.'">
                  <td>+</td>
                  <td>'.$data['id'].'</td>
                  <td>'.$data['name'].'</td>
                  <td>'.$data['email'].'</td>
                  <td>'.$data['contact'].'</td>
                  <td>'.$data['state'].'</td>
                  <td>'.$data['city'].'</td>
                  <td>'.$data['role'].'</td>
                  <td>
                  <button  id="'.$data['id'].$sno.'jun"  value="'.$data['id'].$sno.'"  onclick="return showData4(this.value,'.$data['id'].$sno.','.$sig.$data["email"].$sig.',event)" class="btn btn-outline-secondary btn-sm"> <i class="fa-solid fa-plus"></i></button>
        
                  </tr>
           
            '
            ;
            }
        }
        }
        if(isset($_POST['id4'])){

            $d=mysqli_query($conn,"SELECT * FROM `staff` WHERE `team_leader`='$_POST[email]'");
            
            while($data=mysqli_fetch_assoc($d)){
               
                if($data['role']=='Group Team Leader'){
                    $sno=$sno+1;
                    $sig="'";
                echo'
              
                <tr id="'.$data['id'].$sno.'">
                      <td>+</td>
                      <td>'.$data['id'].'</td>
                      <td>'.$data['name'].'</td>
                      <td>'.$data['email'].'</td>
                      <td>'.$data['contact'].'</td>
                      <td>'.$data['state'].'</td>
                      <td>'.$data['city'].'</td>
                      <td>'.$data['role'].'</td>
                      <td>
                      <button  id="'.$data['id'].$sno.'jun"  value="'.$data['id'].$sno.'"  onclick="return showData5(this.value,'.$data['id'].$sno.','.$sig.$data["email"].$sig.',event)" class="btn btn-outline-secondary btn-sm"> <i class="fa-solid fa-plus"></i></button>
        
                      </tr>
               
                '
                ;
                }
            }
            }
            if(isset($_POST['id5'])){
                $d=mysqli_query($conn,"SELECT * FROM `staff` WHERE `group_team_leader`='$_POST[email]'");
                
                while($data=mysqli_fetch_assoc($d)){
                    if($data['role']=='Agent'){
                        $sig="'";
                    echo'
                  
                    <tr id="'.$data['id'].$sno.'">
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