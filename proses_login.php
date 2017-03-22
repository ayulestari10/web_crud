<?php 
	session_start();
	include('koneksi.php');

	$username = $_POST['username']; 
	$password = $_POST['password'];
	//$STR = 'Namaku adalah ' . $username;

	$query = mysqli_query($connect, "SELECT * FROM user WHERE username='".$username."' AND password = '".md5($password)."'");


	if(mysqli_num_rows($query) == 1){
		while($row = mysqli_fetch_array($query)){
			$_SESSION['id_user'] = $row['id_user'];
		}

		$_SESSION["username"]	= $username;
		header("Location: user_homepage.php");
		exit;
	} else {
		header("Location: index.php");
		exit;
	}
?>