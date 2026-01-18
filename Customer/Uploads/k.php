<?php 

session_start();

session_destroy();

Header("Location: ..\View\a_login.php");

?>
