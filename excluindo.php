<?php 
    require 'conexao.php'; // chama arquivo que cria a conexão
     //$nome = filter_input(INPUT_POST, 'nome');

    $nome = $_POST['nome'];
    $email = $_POST['email'];
    $id = $_POST['id'];

    // preparando meu comando 
   // $sql = $pdo->prepare("UPDATE usuario SET nome = '$nome' , email = '$email' WHERE id = $id");

    $sql = $pdo->prepare("DELETE from usuario WHERE id = :id");
    $sql->bindValue(':id',$id);
   // $sql->bindValue(':email',$email);
    
    // escrevendo na tabela
    $sql->execute();
    
header("Location:index.php");

?>