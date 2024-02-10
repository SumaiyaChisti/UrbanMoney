<?php
session_start();
if (isset($_SESSION['admin'])) {
   
include('components/conn.php');
mysqli_query($conn,"INSERT INTO `campaign` (`name`) VALUES('$_POST[name]')");
echo"ok";
?>
<?php

}
else
header("location:login.php");

?>