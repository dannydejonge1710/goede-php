<?php

	date_default_timezone_set("Europe/Amsterdam");
	echo "<h1>Goede";

	if (date("H") <6) {
		echo " nacht";
		$time = "img/night.png" ;
		$color = red ;	
	} 
		
	else if (date("H") < 12) {
		echo " morgen";
		$time = "img/morning.png" ;	
		$color = green ;		
	} 

	else if (date("H") < 18) {
		echo " middag";
		$time = "img/afternoon.png" ;
		$color = yellow ;			
	}

	else if (date("H") < 24) {
		echo " avond";
		$time = "img/evening.png" ;	
		$color = blue ;		
	}

	echo "<br>Het is nu " . date("H:i") . "</h1>" ;	
?>

<!DOCTYPE html>

<html>
<head>
	<style><?php include 'css/style.css'; ?></style>
	<title>Goedemorgen</title>
</head>

<body>


</body>

</html>
