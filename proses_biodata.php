<?php  
	session_start();
	require_once("koneksi.php");

	if(isset($_POST['input_biodata'])){
		mysqli_query($connect, "UPDATE biodata SET name = '".$_POST['name']."', gender ='".$_POST['gender']."', birthplace='".$_POST['birthplace']."', birthdate='".$_POST['birthdate']."', address='".$_POST['address']."' WHERE id_user = '".$_SESSION['id_user']."' ") or die(mysql_error());
		header("Location: biodata.php");
		exit;
	} else {
		header("Location : user_homepage.php");
		exit;
	}

?>