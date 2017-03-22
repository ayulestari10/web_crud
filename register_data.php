<?php  
	require_once 'koneksi.php';

	mysqli_query($connect, 'INSERT INTO user(username, password) VALUES("'.$_POST['username'].'", "'.$_POST['password'].'")') or die(mysql_error());
?>