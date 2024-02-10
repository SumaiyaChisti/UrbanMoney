<?php
  if (isset($_SESSION['admin'])) {
   session_start();
include("components/conn.php");
if(isset($_GET['id']))
{
    $q = "DELETE FROM `dsa` WHERE `id`='$_GET[id]'";
    mysqli_query($conn, $q);
    echo "<script>alert('data deleted');</script>";
    header("refresh:1,dsa.php");
}
else{
    header("location:dsa.php");
}
?>
<?php
  }
  else
  header("location:login.php");


?>