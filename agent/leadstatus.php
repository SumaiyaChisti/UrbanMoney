<?php

session_start();
if (isset($_SESSION['agent'])) {
include("components/conn.php");
// echo$_POST['id'],$_POST['status'];
mysqli_query($conn,"UPDATE `leads` SET `Lead_Status`='$_POST[status]' WHERE `id`='$_POST[id]'");
echo "ok";
?>
<?php
}
else
header("location:../admin/login.php");



?>