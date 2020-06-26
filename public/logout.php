<?php
session_start();
session_destroy();
?>
<script>
	setTimeout(backHome, 1000);
	function backHome() {
	  window.location.replace("/");
	}
</script>
