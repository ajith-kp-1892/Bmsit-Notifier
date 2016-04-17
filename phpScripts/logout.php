<?php
	session_start();
	
	unset($_SESSION["email"]);
	unset($_SESSION["h_id"]);
	
	header("Location:../index.php");
?>