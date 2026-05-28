<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="./style.css" rel="stylesheet">
    <title>pagina3</title>
    <?php 
        if($_POST){
            session_start();
            $_SESSION['nome'] = $_POST['nome'];
            $_SESSION['senha'] = $_POST['senha'];

            header("location:pagCinco.php");
        }
     ?>
</head>
<body>
    <form action="#" method="post">
        <label for="nome">NOME: </label>
        <input type="text" id="nome" name="nome" required>
        <label for="email">EMAIL:</label>
        <input type="email" id="email" name="email" required>
        <label for="password">SENHA: </label>
        <input type="password" id="password" name="senha" required>
        <input type="submit" id="submit" name="enviar" value="submit">
    </form>
</body>
</html>