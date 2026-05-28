<!DOCTYPE html>
<html lang="pt-br">
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>FORMs</title>
</head>
<body>
	<h1>Formuláriod PHP - Introdução 2</h1>
		<form action="BackExterno.php" method="post">
			<label for="senha">E-mail: </label>
			<input type="email" name="email" required maxlenght="50" autocomplete="off" autofocus size="30">
			<label for="senha">Senha: </label>
			<input type="password" name="senha" required maxlenght="16" autocomplete="off" autofocus size="30">

			<input type="number" name="numeroCaixa" size="1">
			<input type="submit" name="entrar">
			<input type="reset" name="limpar">
		</form>
</body>
</html>
<?php 	 ?>