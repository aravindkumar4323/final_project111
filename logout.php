<?php 
	session_start();
	session_destroy();
	header('location: index.php?signed_out');

?>