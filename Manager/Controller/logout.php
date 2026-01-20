<?php 

session_start();

session_destroy();

Header("Location: ..\View\m_login.php");

?>