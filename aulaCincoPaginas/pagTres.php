<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="./style.css" rel="stylesheet">
    <title>pagina3</title>
    <?php 
    	session_start();

        if ($_SESSION['nome'] != 'master') {
    	session_destroy();
    	
    	header("location:index.php");//sessao_bloqueando_paginas 
    	//bloqueia o acesso a terceira página
    	};
    ?>
</head>
<body>
    <h1>ACESSO CONCEDIDO!</h1>
</body>
</html>
<?php
	header("location:pagQuatro.php.php");
 ?>