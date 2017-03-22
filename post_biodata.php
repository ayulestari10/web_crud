<?php 
	include("koneksi.php");
	require_once("templates/header.php"); 

	$data = mysqli_query($connect, 'SELECT * FROM biodata WHERE id_user="'.$_SESSION["id_user"].'"');

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
	<form action="proses_biodata.php" method="POST">
		<div class="row">
			<div class="col-md-6 col-md-offset-3">
				<h1>Complete Biodata</h1>
				<div class="form-group">
					<label for="Name">Name</label>
					<input type="text" name="name" value="<?= $name ?>" class="form-control" />
				</div>

				<div class="form-group">
					<label for="Gender">Gender</label><br/>
					<?php if($gender == 'Male'): ?>
						<input type="radio" value="Male" name="gender" checked/> Male<br/>
						<input type="radio" value="Female" name="gender"/> Female
					<?php elseif($gender == 'Perempuan'): ?>
						<input type="radio" value="Male" name="gender"/> Male<br/>
						<input type="radio" value="Female" name="gender" checked/> Female
					<?php else: ?>
						<input type="radio" value="Male" name="gender"/> Male<br/>
						<input type="radio" value="Female" name="gender"/> Female
					<?php endif; ?>	
				</div>

				<div class="form-group">
					<label for="Birthplace">Birthplace</label>
					<input type="text" name="birthplace" value="<?= $birthplace ?>" class="form-control" />
				</div>

				<div class="form-group">
					<label for="Birtdate">Birthdate <span style="color: #511;">(dd-mm-yyyy)</span></label>
					<input type="text" name="birthdate" value="<?= $birthdate ?>" class="form-control" />
				</div>

				<div class="form-group">
					<label for="Address">Address</label>
					<input type="text" name="address" value="<?= $address ?>" class="form-control" />
				</div>
			</div>
		</div>
		<div class="row">
			<div class="col-md-1 col-md-offset-3">
				<input type="submit" name="input_biodata" value="Save" class="btn btn-success"/>	
			</div>
		</div>
	</form>
</div>

<?php require_once("templates/footer.php"); ?>