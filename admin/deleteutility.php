<?php
 session_start();
  if (isset($_SESSION['admin'])) {
  
include("components/conn.php");
if(isset($_GET['id']))
{
    $q = "DELETE FROM `umutility` WHERE `id`='$_GET[id]'";
    mysqli_query($conn, $q);
    echo "<script>alert('data deleted');</script>";
    header("refresh:1,viewutility.php");
}
else{
    header("location:viewutility.php");
}
?>
<?php

  }
  else
  header("location:login.php");


?>