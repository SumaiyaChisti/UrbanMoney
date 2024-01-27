<?php
session_start();
unset($_SESSION['Manager']);
session_destroy();
header("location:../admin/login.php");
?>