<style type="text/css">
	.box_login{
		width: 400px; height: 600px;
		margin-left: 70%; 
		border: 2px solid black;
	}
	.love {
		width: 1000px; height: 600px;
		background-image: url("assets/img/bgrn.jpg");
		background-size: cover;
	}
	.box{
		width: 916px; height: 200px;
		margin-top: 20%;
		background-color: rgba(0,0,0, 0.3);
		text-align: center; font-family: cursive; 
		float: left; color : white; font-weight: bold;
	}
	.login{
		margin-top: 8%; margin-left: 3%;
		background-color: rgba(0,0,0, 0.3);
		height :345px;
	}
	.title{
		text-align: center; 
		width: 315px; height: 50px;
		color: #fff;
		background-color: #31b0d5;
		border-color: #269abc;
		margin-bottom: 15%;
	}
</style>

<?php require_once("templates/header.php"); ?>

<div class="row">
	<div class="col-md-8 love" style="float:left;" >
		<div class="box">
			<br/>
			<h1>SELAMAT DATANG DI WEBSITE KESAYANAGAN</h1>
			<h2>SILAHKAN MENDAFTAR UNTUK KASIH SAYANG</h2>
		</div>
	</div>
	<div class="col-md-3 login">
		<div class="title">
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

        <div style="margin-top: 10%;text-align :center;">
        	<input type="submit" value="Sign Up" class="btn btn-info" name="regist">
        	<input type="submit" value="Sign In" class="btn btn-success" name="regist">
        </div>
	</div>
</div>