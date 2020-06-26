<?php include 'includes/header.php';?>
<?php include 'includes/modals.php';?>
<?php //include 'dashboard/loadshipping.php';?>
<?php include 'includes/footer.php';?>

<script src="js/main.js"></script>
<script src="js/jquery-3.5.1.slim.min.js"></script>
<script src="js/bootstrap.bundle.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
<script scandir>
<!-- AUTOCLOSE NAVBAR TOGGLER -->
<script>
    function logout(){
      location.href = "logout.php";
    }
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



