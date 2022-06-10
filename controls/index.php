<!DOCTYPE html>


<?php session_start();
		if(!isset($_SESSION['login'])){
					header('location:login.php');
				}
?>

<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>layla arrumou</title>
</head>
<body>
		<form method="get" action="index.php">
			<?php

				include_once('create.php');

			


			

			
				

				$website = isset($_GET['website'])?$_GET['website']:"";
				$lading = isset($_GET['lading'])?$_GET['lading']:"";
				$maintenance = isset($_GET['maintenance'])?$_GET['maintenance']:"";

			
		

			?>
				<input type='url' name='website' placeholder='Website'/>
				<input type='url' name='lading' placeholder='Lading Page'/>
				<input type='url' name='maintenance' placeholder='Maintenance'/>
			<input type="submit" value="adicionar"/>
			<a href="system.php?logout" name="logout">Logout</a>


		</form>

</body>
</html>