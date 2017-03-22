<?php session_start(); ?>

<!DOCTYPE html>
<html>
<head>
	<title>Website CRUD</title>
	<link rel="stylesheet" type="text/css" href="assets/css/bootstrap.css"/>
	<link rel="stylesheet" type="text/css" href="assets/css/bootstrap-theme.css" />
	<script type="text/javascript" src="assets/js/bootstrap.js"></script>
	<script type="text/javascript" src="assets/js/jquery.js"></script>
  <script type="text/javascript" src="assets/js/jquery-3.1.1.min.js"></script>
  <link rel="stylesheet" type="text/css" href="assets/typeahead/src/jquery.typeahead.css">
  <script type="text/javascript" src="assets/typeahead/src/jquery.typeahead.js"></script>
</head>

<nav class="navbar navbar-default">
  <div class="container-fluid">
    <!-- Brand and toggle get grouped for better mobile display -->
    <div class="navbar-header">
      <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
        <span class="sr-only">Toggle navigation</span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
      </button>
      <a class="navbar-brand" href="#">CRUD</a>
    </div>

    <!-- Collect the nav links, forms, and other content for toggling -->
    <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
      <ul class="nav navbar-nav navbar-right">
        <li>
          <div class="typeahead__container"  style="margin-top: 5%;">
            <div class="typeahead__field">
              <span class="typeahead__query">
                <input class="js-typeahead-country_v1" name="country_v1[query]" placeholder="Search" autocomplete="off" type="seacrh"/>
              </span>
              <span class="typeahead__button">
                <button type="submit">
                  <i class="typeahead__search-icon"></i>
                </button>
              </span>
            </div>
          </div>
        </li>
        <li>
          <?php if(isset($_SESSION['id_user'])): ?>
            <a href="logout.php">Logout</a>
          <?php else: ?>
            <a href="index.php">Sign In</a>
          <?php endif; ?>
        </li>
      </ul>
    </div><!-- /.navbar-collapse -->
  </div><!-- /.container-fluid -->
</nav>

  <?php
    include('koneksi.php');

    $result = mysqli_query($connect, 'SELECT * FROM biodata');

    $hasil = array();

    while($row = mysqli_fetch_assoc($result)){
      $name     = $row['name'];
      $gender   = $row['gender'];
      $birthplace = $row['birthplace'];
      $birthdate  = $row['birthdate'];
      $address  = $row['address'];

      $hasil[]  = "'".$name."', '".$gender."', '".$birthplace."', '".$birthdate."', '".$address."' ";
    }   
    
    $data   = implode(',' , $hasil);

  ?>

  <script type="text/javascript">
    $(document).ready(function(){
      $.typeahead({
          input: '.js-typeahead-country_v1',
          order: "desc",
          source: {
              data: [
                  <?= $data ?>
              ]
          },
          callback: {
              onInit: function (node) {
                  console.log('Typeahead Initiated on ' + node.selector);
              }
          }
      });
    });
  </script>

<body>