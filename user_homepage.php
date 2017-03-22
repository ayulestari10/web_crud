<?php 
	require_once("templates/header.php");
?>

<style type="text/css">
	.title{
		font-size: 60px;
		text-align: center;
		margin-bottom: 5%; margin-top: 15%;
	}
</style>

<div class="container">
	<div class="row title">
		Welcome <?= $_SESSION["username"] ?>
	</div>
	<div class="row" style="text-align:center;">
		<a href="post_biodata.php" class="btn btn-info btn-lg">Complete Biodata</a>

	</div>
</div>

<?php require_once("templates/footer.php"); ?>