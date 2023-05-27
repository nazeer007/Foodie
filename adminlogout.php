<?php
session_start();
unset($_SESSION["AdminLoginId"]);
header('location: home_page.php');
?>