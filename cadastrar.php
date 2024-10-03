<?php 
//require 'conexao.php'
?>
<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Prática de Cadastro</title>
 
</head>
<body>
    <h1>Cadastro </h1>
    <form action="inserir.php" method="post">
            <div>
            <input type="text" name="nome" id="nome" placeholder="Nome" required><br><br>
            <input type="email" name="email" id="email" placeholder="Email" required><br><br>
            <button type="submit">Salvar</button>
            </div>   
    </form>

</body>
</html>