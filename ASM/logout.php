<?php
session_start();
unset($_SESSION['Area_Sales_Manager']);
session_destroy();
header("location:../admin/login.php");
?>