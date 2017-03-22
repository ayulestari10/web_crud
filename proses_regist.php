<?php  
	include('koneksi.php');

	$msg = "";

	if(isset($_POST['regist'])){
		if(isset($_POST['username'], $_POST['password'])){
			$username = preg_match('/ /', $_POST['username']);

			if($username)
				$username = 1;
			else 
				$username = 0;

			if($username == 1){
				$_SESSION["msg"] = "Username cant contain space!";
				header("Location: regist.php");
				exit;
			} else {
				mysqli_query($connect, 'INSERT INTO user(username, password) VALUES ("'.$_POST["username"].'", md5("'.$_POST["password"].'"))');
				$id = mysqli_insert_id($connect);
				mysqli_query($connect, 'INSERT INTO biodata(id_user) VALUES ("'.$id.'")');
				$_SESSION["msg"] = "Registration Success!";
				header("Location: index.php");
				exit;	
			}
		} else {
			$_SESSION["msg"] = "Username and Password cant be empty!";
			header("Location: regist.php");
			exit;
		}
	} else {
		$_SESSION["msg"] = "try again";
		header("Location: regist.php");
		exit;
	}

	
	header("Location: regist.php");
	exit;
?>