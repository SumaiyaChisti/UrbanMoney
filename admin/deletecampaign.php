<?php
  if (isset($_SESSION['admin'])) {
   session_start();
include("components/conn.php");
mysqli_query($conn,"DELETE FROM `campaign` WHERE `id`='$_GET[id]'");
header("location:viewcampaign.php");
?>
<?php
}

else
header("location:login.php");

?>