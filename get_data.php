<?php  
	sleep(3);
	require_once "koneksi.php";

	$query = mysqli_query($connect, "SELECT * FROM user");

	while ($row = mysqli_fetch_assoc($query))
	{
		echo $row['username'] . "<br/>";
	}
?>