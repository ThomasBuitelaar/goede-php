<!DOCTYPE html>
<html>
<head>
<link rel="stylesheet" href="style/stylesheet.css">
<title></title>
</head>
<body>
<script type="text/javascript" src="javaScript.js">

		</script>
<div id=reload>
	<?php 
		date_default_timezone_set('Europe/Amsterdam');
		$time = date("H:i");
		$text = "";
		if($time >= "06:00" and $time < "12:00"){
			$text = "Good morning!";
			echo "<h1>$text</h1><p>The time is $time</p>";
		}

	?>
	</div>
</body>
</html>