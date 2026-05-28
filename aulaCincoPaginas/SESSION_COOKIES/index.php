<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="" method="post">
        <label for="email"></label><input type="email" id="email"><label for="password"></label><input type="password" id="password">
        <submit></submit>
    </form>
    <?php 
        try{
        session_start();
        $_SESSION['nome'] = 'Administrador';
        

        //session_destroy();//elimina mas mantém ativa as antecessoras na cascata
        //session_unset();//elimina as variáveis

    }catch(Exception $e){
        echo "ERRO: $e";
    }?>

    <?php 
    echo "<h1>Bem Vindo: </h1> $_SESSION[nome]"; 
    echo "<h1>Bem Vindo: </h1> $_SESSION[nome]"; 
    ?>

</body>
</html>
