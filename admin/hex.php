<?php
use ZipStream\Test\EndlessCycleStream;
session_start();
include("./components/conn.php");

if (isset($_SESSION['admin'])) {




if(isset($_POST['lead_id'])){
    $_SESSION['email'][] = $_POST['lead_id'];
    print_r($_SESSION);
}

if(isset($_POST['lead_agent'])){
   
    for($i=0;$i<count($_SESSION['email']);$i++)
    {
        $x=$_SESSION['email'][$i];
         mysqli_query($conn,"UPDATE  `leads` SET `agent_name`='$_POST[lead_agent]' WHERE `id`='$x'");

    }
   
    header("location:newleads.php");

}
?>
<?php

}

else
header("location:login.php");

?>