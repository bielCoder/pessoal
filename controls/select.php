<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title></title>
	

	<style>


		p.contador{
			position: relative;
			top: -30px;
			margin: 0;
			padding: 0;
			font-size: 30pt;
			text-align: center;
		}

		p.contador2 {
    position: relative;
    top: -77px;
    margin: 0;
    left: 322px;
    padding: 0;
    font-size: 30pt;
    text-align: center;
    z-index: 9999;
}

		
    p.contador3 {
    position: relative;
    top: -124px;
    margin: 0;
    left: 645px;
    padding: 0;
    font-size: 30pt;
    text-align: center;
    z-index: 9999;
}

	</style>
</head>
<body>
<?php

		include_once('config.php');

		$result = mysqli_query($connexao,"SELECT * FROM nome WHERE website = website");
		if($result){
			$contador = mysqli_num_rows($result )-1;
			echo "<p class='contador'>$contador</p>";
		}

		$result = mysqli_query($connexao,"SELECT * FROM nome2 WHERE lading = lading");
		if($result){
			$contador = mysqli_num_rows($result )-1;
			echo "<p class='contador2'>$contador</p>";
		}

		$result = mysqli_query($connexao,"SELECT * FROM nome3 WHERE maintenance = maintenance");
		if($result){
			$contador = mysqli_num_rows($result )-1;
			echo "<p class='contador3'>$contador</p>";
		}
	

?>
</body>
</html>






