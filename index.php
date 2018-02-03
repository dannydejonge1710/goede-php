<!DOCTYPE html>

<html>
<head>
	<title>Goedemorgen</title>
	<link rel="stylesheet" type="text/css" href="css.css" />
</head>
<body>

	<?php

		date_default_timezone_set("Europe/Amsterdam");
		echo "<h1>Goeden";

		if (date("H") <6) {
			echo " nacht</h1>";
			$time = "night.png" ;
			
		} else

		if (date("H") < 12) {
			echo " morgen</h1>";
			$time = "morning.png" ;
						
		} else

		if (date("H") < 18) {
			echo " middag</h1>";
			$time = "afternoon.png" ;
					
		} else

		if (date("H") < 24) {
			echo " avond</h1>";
			$time = "evening.png" ;
					
		} else 

		echo "<br><h2>Het is nu " . date("H:i</h2>");	
	?>
	
	<main>
		<style>

			body{
				background-image: url(<?php echo $time ?>);
				background-size: cover;
				background-repeat: no-repeat;
			}

		</style>
	</main>

</body>
</html>
