<?php
session_start();
unset($_SESSION['Team_Leader']);
session_destroy();
header("location:../admin/login.php");
?>