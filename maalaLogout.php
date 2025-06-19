<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Log out</title>
	
</head>
<body>
	<?php
	$_SESSION =[];

	session_unset();
	session_destroy();
	header("location: maalaIndex.php");
	?>
</body>
</html>