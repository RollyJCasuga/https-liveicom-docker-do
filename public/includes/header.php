<?php session_start(); ?>
<!DOCTYPE html>
<html>
<head>
	<meta name="viewport" content="width=device-width, initial-scale=1, user-scalable=no">
	<title>Livei.com</title>
	<link rel = "icon" href = "liveiLogo.png" type = "image/x-icon">
	<script src="https://cdn.jsdelivr.net/npm/hls.js@latest"></script>
	<link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@100;200;300;400&display=swap" rel="stylesheet">
	<link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">
	<!-- <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous"> -->
	<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.1.0/css/all.css" integrity="sha384-lKuwvrZot6UHsBSfcMvOkWwlCMgc0TaWr+30HWe3a4ltaBwTZhyTEggF5tJv8tbt" crossorigin="anonymous">
	<link rel="stylesheet" type="text/css" href="css/main.css">
	<link href="https://fonts.googleapis.com/css2?family=Ubuntu:wght@300;400;500;700&display=swap" rel="stylesheet">
</head>
<body>
	<!-- BACKGROUND LIVE -->
	<video id="video" muted autoplay playsinline onclick="hideNav();"></video>

        	<!-- NAVBAR -->
	<!-- <nav class="navbar navbar-expand-lg navbar-dark bg-translucent-light"> -->
	<nav class="navbar navbar-dark bg-translucent-light">

	<!-- <div class="container"> -->
	<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
	    <span class="navbar-toggler-icon"></span>
	</button>

	  <!-- <a class="navbar-brand" href="index.php"></a> -->
	  	<!-- <div id="navbar-brand">
		  	<img src="liveiLogo.png" width="30" height="30" class="d-inline-block align-top" alt="">
			<a class="navbar-brand" href="#">Livei.com
			</a>
		</div> -->

	  <div class="collapse navbar-collapse" id="navbarNavDropdown">
	    <ul class="navbar-nav">

		  <li class="nav-item">
	        <a class="nav-link" href="#" data-toggle="collapse" data-target=".navbar-collapse.show">HomeCam4k<span class="sr-only">(current)</span></a>
	      </li>
	      <li class="nav-item dropdown">
	        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdownMenuLink" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
	          Cameras
	        </a>
	        <div class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
	          <a class="dropdown-item" href="#">Training</a>
	        </div>
	      </li>
	      <li class="nav-item">
	        <a class="nav-link">Contact</a>
	      </li>
	      <li class="nav-item dropdown">
	        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdownMenuLink" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
	          Downloads
	        </a>
	        <div class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
	          <a class="dropdown-item" href="http://108.184.71.172:81/Backup/ecommerce.zip">Rasbian LEMP 64bit with Wordpress</a>
	        </div>
	      </li>
		  <li class="nav-item">
	        <a class="nav-link" onclick="toggleServices();">Services</a>
	      </li>
		</ul>
		<ul id="nav-right" class="navbar-nav ml-auto">
			<?php
				$loginStaus = $_SESSION['loginStatus'];
				if($loginStaus){
					echo "<li id='profile-item' class='nav-item dropdown'>
						<div id='profile' class='nav-link dropdown-toggle' href='#' id='navbarDropdownMenuLink' role='button' data-toggle='dropdown' aria-haspopup='true' aria-expanded='false'>
							<img id='profileIcon' src='".$_SESSION["profilepicture"]."'>
							<a>".$_SESSION["firstname"]."
							</a>
						</div>
						<div class='dropdown-menu' aria-labelledby='navbarDropdownMenuLink'>
							<a class='dropdown-item' onclick='toggleDashboard();'>Dashboard</a>
						</div>
					</li>
					<li class='nav-item'>
								<div id='profile'>
									<a class='nav-link' onclick='logout();'>Logout</a>
								</div>
					</li>";
				}
				else{
					echo "<li class='nav-item'>
								<div id='profile'>
									<a class='nav-link' onclick='toggleLogin();'>Login</a>
								</div>
						</li>";
				}
			?>
        </ul>
	  </div>
	  <!-- </div> -->
	</nav>
	
