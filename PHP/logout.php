<?php 
session_start();
$_SESSION = array();
session_destroy();
header("location: http://localhost/sxc/SXC_Readers_Hub/login.html" );
?>