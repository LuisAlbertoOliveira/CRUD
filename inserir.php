<?php 
    require 'conexao.php'; // chama arquivo que cria a conexão
    $nome = $_POST['nome'];
    //$nome = filter_input(INPUT_POST, 'nome');
    $email = $_POST['email'];
    $sql = $pdo->prepare("INSERT INTO usuario (nome, email) VALUES (:nome, :email)");
    $sql->bindValue(':nome',$nome);
    $sql->bindValue(':email',$email);
    // escrevendo na tabela
    $sql->execute();    
header("Location:index.php");
?>