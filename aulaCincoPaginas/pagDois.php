<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>pagina2</title>
    <?php 
        session_start();
        $_SESSION['nome'] = $_POST['name'];echo "</br>";
        $_SESSION['email'] = $_POST['email'];echo "</br>";
        $_SESSION['senha'] = $_POST['password'];echo "</br>";
     ?>
</head>
<body>
    <b>Funcionário:     </b><?php echo $_SESSION['nome']; ?><b>, logado com sucesso.</b>
    <b>Data da Conexão: </b><?php echo $_SESSION['email']; date("d/m/Y");?>
    <b>Hora da Conexão: </b><?php echo $_SESSION['senha']; date("H/i/s");?>

    <a href="./pagTres.php">Área de administrador</a>

</body>
</html>