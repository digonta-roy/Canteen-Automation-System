<?php
	session_destroy();
	unset($_SESSION['mycart']);
				  ?>
				<script>
					location.replace("index.php");
				</script>