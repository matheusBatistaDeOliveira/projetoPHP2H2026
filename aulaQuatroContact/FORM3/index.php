<!DOCTYPE html>
<html lang="pt-br">
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>FORMs</title>
</head>
<body>

	<img src="./imgs/download.png" alt="">

	<h1>Formuláriod PHP - Introdução 2</h1>
		<form action="BackExterno.php" method="post">
			<label for="senha">PESO: </label></br>
			<input type="text" name="peso" required maxlenght="5" autocomplete="off" size="30" placeholder="Digite aqui seu peso"></br> 
			<label for="senha">ALTURA: </label></br>
			<input type="text" name="altura" required maxlenght="5" autocomplete="off" size="30" placeholder="Digite aqui sua altura"></br></br>

			<input type="submit" name="entrar">
			<input type="reset" name="limpar">
		</form>
</body>
</html>
<?php  ?>