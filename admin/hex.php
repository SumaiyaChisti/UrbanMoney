<?php
include("./components/conn.php");
session_start();



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
    session_destroy();
    session_abort();
    header("location:newleads.php");

}
?>