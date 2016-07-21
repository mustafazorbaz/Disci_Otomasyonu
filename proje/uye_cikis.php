<?php
session_start();
//$_SESSION=array();
session_destroy();		//oturumu sonlandırmak
header("Location:index.php");
?>