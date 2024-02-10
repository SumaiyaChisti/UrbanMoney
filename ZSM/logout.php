<?php
session_start();
if (isset($_SESSION['Zonal_Sales_Manager'])) {

unset($_SESSION['admin']);
session_destroy();
header("location:../admin/login.php");
}
else
header("location:../admin/login.php");
?>