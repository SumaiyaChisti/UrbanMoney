<?php
if (isset($_SESSION['admin'])) {
session_start();
unset($_SESSION['admin']);
session_destroy();
header("location:login.php");
?>
<?php
}

else
header("location:login.php");
?>