<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./style.css">
    <title>pagina1</title>
</head>
<body>
    <form action="./pagDois.php" method="post">
        <label for="nome">NOME: </label>
        <input type="text" id="nome" name="name" required>
        <label for="email">EMAIL:</label>
        <input type="email" id="email" name="email" required>
        <label for="password">SENHA: </label>
        <input type="password" id="password" name="password" required>
        <input type="submit" id="submit" name="submit" value="submit">
    </form>

</body>
</html>
