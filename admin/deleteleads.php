<?php
  session_start();
  if (isset($_SESSION['admin'])) {
 
include("components/conn.php");
if(isset($_GET['id']))
{
    $q = "DELETE FROM `leads` WHERE `id`='$_GET[id]'";
    mysqli_query($conn, $q);
    
    header("refresh:1,newleads.php");
}
else{
    header("location:newleads.php");
}
?>
<?php

  }
  else
  header("location:login.php");


?>