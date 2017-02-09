<!DOCTYPE html>
<html>
<head>
<link rel="stylesheet" href="style/stylesheet.css">
<link rel="icon" href="img/sun.png" type="image/png" size="16x16">
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>
<title>How are you doing?</title>
</head>
<body id = "background">
<script type="text/javascript">
var timeout = setTimeout(reload, 1000);
	function reload(){
		$("#reload").load('index.php #reload', function(){
			timeout = setTimeout(reload, 1000);
		});
	}
		</script>
<div id="reload">
	<?php 
		date_default_timezone_set('Europe/Amsterdam');
		$time = date("H:i:s");
		$text = "";
		if($time >= "06:00" and $time < "12:00"){
			$text = "Good morning!";
			echo "<h1>$text</h1><p>The time is $time</p>";
			echo "<style>#background{background-image:url(backgrounds/morning.png); background-attachment: fixed;  background-size: cover;}</style>";
		} elseif ($time >= "12:00" and $time < "18:00") {
			$text = "Good afternoon!";
			echo "<h1>$text</h1><p>The time is $time</p>";
			echo "<style>#background{background-image url(backgrounds/afternoon.png); background-attachment: fixed; background-size: cover;}</style>";
		} elseif ($time >= "18:00" and $time < "24:00") {
			$text = "Good evening!";
			echo "<h1>$text</h1><p>The time is $time</p>";echo "<style>#background{background-image url(backgrounds/evening.png); background-attachment: fixed; background-size: cover;}</style>";
		} elseif ($time >= "00:00" and $time < "06:00") {
			$text = "Good night!";
			echo "<h1>$text</h1><p>The time is $time</p>";
			echo "<style>#background{background-image url(backgrounds/night.png); background-attachment: fixed; background-size: cover;}</style>";
		}

	?>
	</div>
</body>
</html>