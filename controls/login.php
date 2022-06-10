

		
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Painel de Controle</title>
	<style type="text/css">
		body{
			background-color: #f2f2f2;
			margin: 0;
			padding: 0;
			max-width: 100%;
			align-items: center;

		}
		div.painel {
    background-color: #626262;
    height: 190px;
    width: 285px;
    position: relative;
    top: 166px;
    left: 558px;
    text-align: center;
    border-radius: 20px;
    color: white;
    font-size: 19pt;
    margin: 0;
    padding: 0;

					}

		img.logo {
    			width: 32%;
  		  		height: 39%;
  		  		position: relative;
  		  		left: 5px;

				}

		input.login {
    text-align: center;
    position: absolute;
    top: 82px;
    left: 89px;
    border-radius: 20px;
    width: 110px;
}

input.senha {
    text-align: center;
    position: absolute;
    top: 112px;
    left: 89px;
    border-radius: 20px;
    width: 110px;
}

input.acao {
    position: absolute;
    top: 152px;
    left: 123px;
   	border-radius: 2px;
}

input::-webkit-outer-spin-button,
				input::-webkit-inner-spin-button{
					-webkit-appearance: none;
					margin: 0;}

					input[type=number]{
						-moz-appearance: textfield;
					}

	</style>
</head>
<body>

	<form method="post" action="system.php">
	

		<aside>
			<div class ="painel">
			<img class="logo" src="../img/logo.png">
			<input type="number" name="login" class="login" placeholder="Login"/>
			<input type="password" name="senha" class="senha" placeholder="Senha"/>
			<input type="submit" name="acao" class="acao" value="Entrar"/>
			</div>

		</aside>
	</form>

</body>
</html>