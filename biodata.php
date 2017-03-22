<?php  
	include('koneksi.php');
	require_once('templates/header.php');

	$data = mysqli_query($connect, 'SELECT * FROM biodata WHERE id_user="'.$_SESSION["id_user"].'" ');

	if(mysqli_num_rows($data) == 1){
		while($row = mysqli_fetch_array($data)){
			$name 		= $row['name'];
			$gender 	= $row['gender'];
			$birthplace = $row['birthplace'];
			$birthdate 	= $row['birthdate'];
			$address 	= $row['address'];
		}
	}
?>

<div class="container">
	<div class="row">
		<div class="col-md-5 col-md-offset-3">
			<div style="margin-bottom: 5%;">
				<h2><strong>My Biodata</strong></h2>
			</div>
			<table class="table table-straped"> 
				<tr>
					<td>Name</td>
					<td>:</td>	
					<td><?= $name ?></td>
				</tr>
				<tr>
					<td>Gender</td>
					<td>:</td>	
					<td><?= $gender ?></td>
				</tr>
				<tr>
					<td>Birthplace</td>
					<td>:</td>	
					<td><?= $birthplace ?></td>
				</tr>
				<tr>
					<td>Birthdate</td>
					<td>:</td>	
					<td><?= $birthdate ?></td>
				</tr>
				<tr>
					<td>Address</td>
					<td>:</td>	
					<td><?= $address ?></td>
				</tr>
			</table>
		</div>
		<div class="col-md-1" style="margin-top: 3%;">
			<a href="post_biodata.php">
				<button class="btn btn-info"><i class="glyphicon glyphicon-pencil"></i></button>
			</a>
		</div>
	</div>
</div>

<?php require_once('templates/footer.php'); ?>