<?php
session_start();
unset($_SESSION['dsa']);
session_destroy();
header("location:../admin/login.php");
?>