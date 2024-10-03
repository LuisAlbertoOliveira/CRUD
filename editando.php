<?php 
    require 'conexao.php'; // chama arquivo que cria a 
    $nome = $_POST['nome'];
    $email = $_POST['email'];
    $id = $_POST['id'];
    
    $sql = $pdo->prepare("UPDATE usuario SET nome = :nome , email = :email WHERE id = $id");
    $sql->bindValue(':nome',$nome);
    $sql->bindValue(':email',$email);
    // escrevendo na tabela
    $sql->execute();
    
header("Location:index.php");

?>