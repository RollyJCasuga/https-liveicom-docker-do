<!DOCTYPE html>
<html>
<head>
	<title>Livei.com Login</title>
	<meta name="viewport" content="width=device-width, initial-scale=1, user-scalable=no">
    <link rel = "icon" href = "liveiLogo.png" type = "image/x-icon">
	<script src="https://cdn.jsdelivr.net/npm/hls.js@latest"></script>
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
	<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.1.0/css/all.css" integrity="sha384-lKuwvrZot6UHsBSfcMvOkWwlCMgc0TaWr+30HWe3a4ltaBwTZhyTEggF5tJv8tbt" crossorigin="anonymous">
	<link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@100;200;300;400&display=swap" rel="stylesheet">
</head>
<style>
    body{
		font-family: 'Montserrat', sans-serif;
		font-size: 13px;
		color: black;
		background-color: white;
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
	#loginForm{
    	text-align: center;
    	margin-top: 10px;
    	padding: 40px;
    }
    #loginForm form{
    	text-align: left;
    }
    #loginFormContent{
    	background-color: rgba(255,255,255,0.8);
    	border-radius: 5px;
		padding: 20px;
    }
	#loginFormContent input{
		font-size: 13px;
	}
	#loginFormContent button{
		font-size: 13px;
	}
    #loginFormBottom{
    	text-align: center;
    	margin-top: 20px;
    }
	#loginFormBottom a {
		font-weight: bold;
	}
    #loginLogo{
    	height: 60px;
    	width: 180px;
    	margin-bottom: 20px;
    }
</style>
<body>
    <video id="video" muted autoplay playsinline></video>
    <div class="row">
	    <div class="col">
	    </div>
	    
	    <div id="loginForm" class="col-sm-4">
	    	<div id="loginFormContent">
	    	<img id="loginLogo" src="../liveiLogoTrans.png">
	    	<h2>Login</h2>
		      <form action="login.php" method="post">
				  <div class="form-group">
				    <label for="exampleInputEmail1">Email address</label>
				    <input name="email" type="email" class="form-control" id="" aria-describedby="emailHelp" placeholder="Enter email" required>
				  </div>
				  <div class="form-group">
				    <label for="exampleInputPassword1">Password</label>
					<!-- <input name="password" type="password" class="form-control" id="" placeholder="Password" required> -->
					<div class="input-group">
					<input type="password" name="password" id="password" class="form-control" data-toggle="password" placeholder="Password" required>
					<div class="input-group-append">
						<span class="input-group-text">
							<i class="fa fa-eye"></i>
						</span>
				   </div>
				  </div>
				  </div>
				  <button name="submit" type="submit" class="btn btn-primary form-control">Login</button>
				  <div id="loginFormBottom">
				  	  <label>Forgot Password?</label>
					  <br>
					  <label>New to Livei.com? <a href="https://livei.com/register">Register Now</a></label>
				  </div>
				</form>
			</div>
	    </div>
	    <div class="col">
	    </div>
  </div>
</body>
<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous">
</script>
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
<script type="text/javascript">
	!function ($) {
    'use strict';
    $(function () {
        $('[data-toggle="password"]').each(function () {
            var input = $(this);
            var eye_btn = $(this).parent().find('.input-group-text');
            eye_btn.css('cursor', 'pointer').addClass('input-password-hide');
            eye_btn.on('click', function () {
                if (eye_btn.hasClass('input-password-hide')) {
                    eye_btn.removeClass('input-password-hide').addClass('input-password-show');
                    eye_btn.find('.fa').removeClass('fa-eye').addClass('fa-eye-slash')
                    input.attr('type', 'text');
                } else {
                    eye_btn.removeClass('input-password-show').addClass('input-password-hide');
                    eye_btn.find('.fa').removeClass('fa-eye-slash').addClass('fa-eye')
                    input.attr('type', 'password');
                }
            });
        });
    });

	}(window.jQuery);
</script>
</html>