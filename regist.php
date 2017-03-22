<?php
	require_once('templates/header.php'); 
?>
<?php  
	// $string = "AzharyAyuela45645manya";
	// $punyaHurufBesar = preg_match("/[A-Z]/", $string);
	// $punyaHurufKecil = preg_match("/[a-z]/", $string);
	// $punyaAngka = preg_match("/\d/", $string);

	// if ($punyaHurufBesar and $punyaHurufKecil and $punyaAngka) echo 1;
	// else echo 0;
?>
<div class="container">
	<form action="proses_regist.php" method="POST"> 
		<div class="row">
			
			<div class="col-md-5 col-md-offset-3">
		    	<div style="margin-bottom:7%; text-align: center;">
		    		<h1><strong>Sign Up</strong></h1>
		    	</div>

		    	<div class="form-group">
		          <label for="username">Username</label>
		          <input class="form-control" type="text" name="username"/>
		        </div>

		        <div class="form-group">
		          <label for="password">Password</label>
		          <input class="form-control" type="password" name="password"/>
		        </div>
		    </div>
		</div>

		<div class="row">
		    <div class="col-md-1 col-md-offset-3">
		      <input type="submit" value="Sign Up" class="btn btn-success" name="regist">
		    </div>
		   	<div class="col-md-4" style="font-size:22px;">
		   		 Have account ? Click <a href="index.php"> Sign In </a>
		   	</div>
		</div>
	</form>
</div>

<?php require_once('templates/footer.php'); ?>