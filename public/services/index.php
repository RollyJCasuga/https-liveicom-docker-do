<?php

include '../db_connect.php';

if (mysqli_connect_errno()) {

	exit('Failed to connect to MySQL: ' . mysqli_connect_error());
}
else{
    
  session_start();
  $email = $_SESSION["email"];
	$query = "SELECT * FROM orders WHERE Email='$email'";
	$result = mysqli_query($dbcon,$query);


	if($row = mysqli_fetch_assoc($result)){

		if($row["payment_response"] == 1){

			//echo "<script>alert('This account is subscribed already.');</script>";
		}

		else{

			echo "not subscribed";

   			}
	   		mysqli_close($dbcon);

        }
    else{
        echo "<script>location.href = '../login/';</script>";
    }
    }

?>

<!DOCTYPE html>
<html>
<head>
	<title>Livei.com Login</title>
	<meta name="viewport" content="width=device-width, initial-scale=1, user-scalable=no">
    <link rel = "icon" href = "liveiLogo.png" type = "image/x-icon">
	<script src="https://cdn.jsdelivr.net/npm/hls.js@latest"></script>
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css" integrity="sha384-9aIt2nRpC12Uk9gS9baDl411NQApFmC26EwAOH8WgZl5MYYxFfc+NcPb1dKGj7Sk" crossorigin="anonymous">
	<link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@100;200;300;400&display=swap" rel="stylesheet">
</head>
<style>
	video {
        position: fixed;
        right: 0;
        bottom: 0;
        width: 100%;
        height: 100%;
        object-fit: fill;
    }
</style>
<body>
    <video id="video" muted autoplay playsinline></video>
</body>
<!-- LIVESTREAM -->
<script>
  var video = document.getElementById('video');
  var videoSrc = 'https://livestream.livei.com/hls/stream03.m3u8';
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

</html>