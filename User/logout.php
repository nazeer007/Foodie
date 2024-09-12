<?php
include("../Connection/connection.php");
session_start();
unset($_SESSION['user_name']);
session_destroy();
header('location:../home_page.php');
mysqli_close($conn);
?>

