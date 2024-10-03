<?php 

// Criando a conexão
  $pdo = new PDO("mysql:dbname=test;host=localhost:3306","root","");

 /* Teste de conexão
  if ($pdo){
    echo "Banco conectado!";
  }
    
   
/*
$sql = $pdo->query('SELECT *FROM usuario');

$dados = $sql->fetchAll(pdo::FETCH_ASSOC);

echo '<pre>';

print_r($dados);
*/
?>