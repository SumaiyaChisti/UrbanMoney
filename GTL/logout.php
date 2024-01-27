<?php
session_start();
unset($_SESSION['Group_Team_Leader']);
session_destroy();
header("location:../admin/login.php");
?>