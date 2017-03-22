<?php  
	session_unset($_SESSION['id_user']);
	session_unset($_SESSION['username']);

	header("Location: index.php");
	exit;
?>
