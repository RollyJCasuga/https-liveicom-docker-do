<!DOCTYPE html>
<html>
<head>
	<title>Livei.com Registration</title>
	<meta name="viewport" content="width=device-width, initial-scale=1, user-scalable=no">
    <link rel = "icon" href = "liveiLogo.png" type = "image/x-icon">
	<script src="https://cdn.jsdelivr.net/npm/hls.js@latest"></script>
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css" integrity="sha384-9aIt2nRpC12Uk9gS9baDl411NQApFmC26EwAOH8WgZl5MYYxFfc+NcPb1dKGj7Sk" crossorigin="anonymous">
	<link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@100;200;300;400&display=swap" rel="stylesheet">
</head>
<style>
    body{
		font-family: 'Montserrat', sans-serif;
		color: black;
		background-color: white;
		font-size: 13px;
		font-weight: 400;
	}
	video {
        position: fixed;
        right: 0;
        bottom: 0;
        width: 100%;
        height: 100%;
        object-fit: fill;
    }
    #registerForm{
    	text-align: center;
    	margin-top: 10px;
    	padding: 40px;
    }
    #registerForm form{
    	text-align: left;
    }
    #registerFormContent{
    	background-color: rgba(255,255,255,0.8);
    	border-radius: 5px;
		padding: 20px;
		padding-bottom: 10px;
    }
	#registerFormContent input{
		font-size: 13px;
	}
	#registerFormContent button{
		font-size: 13px;
	}
    #registerFormBottom{
    	text-align: center;
    	margin-top: 20px;
    }
	#registerFormBottom a {
		font-weight: bold;
	}
    #registerLogo{
    	height: 60px;
    	width: 180px;
    	margin-top: 10px;
	}
	label{
		margin-bottom: 5px;
	}
	.form-group {
    	margin-bottom: 8px;
	}
	#password-notification{
        margin-top: 8px;
        margin-bottom: 5;
        margin-left: 10px;
    }
</style>
<body>
    <video id="video" muted autoplay playsinline></video>
    <div class="row">
	    <div class="col">
	    </div>
	    
	    <div id="registerForm" class="col-sm-4">
	    	<div id="registerFormContent">
	    	<img id="registerLogo" src="../liveiLogoTrans.png">
	    	<h3>Join Livei.com Now!</h3>
		      <form action="register.php" method="post">
                  <div class="form-group">
				    <label for="exampleInputEmail1">First Name</label>
				    <input type="text" class="form-control" id="" name="firstname" placeholder="Enter first name" required>
				  </div>
                  <div class="form-group">
				    <label for="exampleInputEmail1">Last Name</label>
				    <input type="text" class="form-control" id="" name="lastname" placeholder="Enter last name" required>
				  </div>
				  <div class="form-group">
				    <label for="exampleInputEmail1">Email address</label>
				    <input type="email" class="form-control" id="" name="email" placeholder="Enter email" required>
				  </div>
				  <div class="form-group">
				    <label for="">Password</label>
				    <input type="password" class="form-control" id="rpassword" name="password" onkeyup="inputPassword();" placeholder="Password" required>
				  </div>
				  <div class="form-group">
				    <label for="">Confirm Password</label>
					<input type="password" class="form-control" id="confirmpassword" name="confirmpassword" onkeyup="checkPassword();" placeholder="Confirm Password" required>
					<label id="password-notification"></label>
				  </div>
				  <button id="register-btn" name = "submit" type="submit" class="btn btn-primary form-control">Join</button>
				  <div id="registerFormBottom">
					  <label>Registered already? <a href="https://livei.com/login">Sign in Now</a></label>
				  </div>
				</form>
			</div>
	    </div>
	    <div class="col">
	    </div>
  </div>
</body>
<!-- LIVESTREAM -->
<script>
  var video = document.getElementById('video');
  var videoSrc = 'https://livestream.livei.com/hls/stream01.m3u8';
  if (Hls.isSupported()) {
    var hls = new Hls();
    hls.loadSource(videoSrc);
    hls.attachMedia(video);
    hls.on(Hls.Events.MANIFEST_PARSED, function() {
      video.play();
    });
  }
  else if (video.canPlayType('application/vnd.apple.mpegurl')) {
    video.src = videoSrc;
    video.addEventListener('loadedmetadata', function() {
      video.play();
    });
  }
</script>
<script>
	function inputPassword() {
		document.getElementById('password-notification').innerHTML = '';
	}
    function checkPassword() {
		if (document.getElementById('rpassword').value == document.getElementById('confirmpassword').value) {
		    document.getElementById('password-notification').style.color = 'green';
		    document.getElementById('password-notification').innerHTML = 'Password match!';
		    document.getElementById('register-btn').disabled = false;
		}
		else {
		    document.getElementById('password-notification').style.color = 'red';
		    document.getElementById('password-notification').innerHTML = 'Password not match!';
		    document.getElementById('register-btn').disabled = true;
	  }
	}
</script>
</html>