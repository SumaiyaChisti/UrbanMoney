<?php
session_start();


if (isset($_SESSION['agent'])) {
include("components/conn.php");
if(isset($_GET['id']))
{
    $q = "DELETE FROM `leads` WHERE `id`='$_GET[id]'";
    mysqli_query($conn, $q);
    echo "<script>alert('data deleted');</script>";
    header("refresh:1,leadagent.php");
}
else{
    header("location:leadagent.php");
}
?>
<?php
}
else
header("location:../admin/login.php");



?>