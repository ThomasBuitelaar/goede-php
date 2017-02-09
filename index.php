<!DOCTYPE html>
<html>
<head>
<link rel="stylesheet" href="style/stylesheet.css">
<title></title>
</head>
<body id =  "background">
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
			echo "<style>#background{background-image:url(backgrounds/morning.png); background-attachment: fixed;  background-size: cover;}</style>";
		} elseif ($time >= "12:00" and $time < "18:00") {
			$text = "Good afternoon!";
			echo "<h1>$text</h1><p>The time is $time</p>";
		} elseif ($time >= "18:00" and $time < "24:00") {
			$text = "Good evening!";
			echo "<h1>$text</h1><p>The time is $time</p>";
		} elseif ($time >= "00:00" and $time < "06:00") {
			$text = "Good night!"
			echo "<h1>$text</h1><p>The time is $time</p>"
		}
		

	?>
	</div>
</body>
</html>