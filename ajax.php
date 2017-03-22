<?php require_once('templates/header.php'); ?>

<div class="container">
	<button id="ambil_data">Ambil data</button>
	<div id="keluaran">
		
	</div>

	<input type="text" name="angka" id="angka" />
	<button id="post_data">Post data</button>
	<div id="keluaran_post">
		
	</div>
	<input type="text" name="username" id="username" placeholder="username" />
	<input type="text" name="password" id="password" placeholder="password" />
	<button id="register">Register</button>

	<div id="daftar_nama">

	</div>
	<script type="text/javascript">
	$(document).ready(function() {

		$("#ambil_data").click(function() {

			$.ajax({
				method: "GET",
				url: "get_data.php",
				beforeSend: function() {
					$("#keluaran").html('<img src="ajax-loader.gif" />');
				},
				success: function(response) {
					$("#keluaran").html(response);
				}
			});

		});

		$("#post_data").on("click", function() {
			$.ajax({
				method: 'POST',
				url: 'post_data.php',
				data: {
					angka: $("#angka").val()
				},
				beforeSend: function() {
					$("#keluaran_post").html('<img src="ajax-loader.gif" />');
				},
				success: function(response) {
					$("#keluaran_post").html(response);
				}
			});
		});

		$("#register").click(function() {
			$.ajax({
				method: 'POST',
				url: 'register_data.php',
				data: {
					username: $("#username").val(),
					password: $("#password").val()
				},
				success: function(response) {

				}
			});
		});

		setInterval(function() {
			$("#daftar_nama").load('get_data.php');
		}, 3000);

	});
	</script>
</div>

<?php require_once('templates/footer.php'); ?>