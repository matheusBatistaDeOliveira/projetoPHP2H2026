<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <?php 
        session_start();
     ?>
</head>
<body>
    <b>Funcionário:     </b><?php echo $_SESSION['nome']; ?><b>, logado com sucesso.</b>
    <b>Data da Conexão: </b><?php echo $_SESSION['email']; date("d/m/Y");?>
    <b>Hora da Conexão: </b><?php echo $_SESSION['senha']; date("H/m/s");?>
</body>
</html>