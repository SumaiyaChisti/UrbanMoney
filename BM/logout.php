<?php
session_start();
unset($_SESSION['Branch_Manager']);
session_destroy();
header("location:../admin/login.php");
?>