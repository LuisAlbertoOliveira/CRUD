<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Editar</title>
</head>
<body>
    <h1>Editar Usuário</h1>
    <?php 
        require 'conexao.php';
        $id = $_REQUEST["id"];
        $dados = []; // criando variavel vetor
       $sql = $pdo->prepare("SELECT * FROM usuario WHERE id = :id");
       $sql->bindValue(":id",$id);
       $sql->execute();

       if($sql->rowCount() > 0){
            $dados = $sql->fetch(PDO::FETCH_ASSOC);
       }else{
            header("Location:index.php");
            exit;
       }     
    ?>
    <form action="editando.php" method="POST" >
        <input  type="hidden" name="id" id="id" value="<?=$dados['id']; ?>">
        <label for="Nome">
            Nome <input type="text" name="nome" value="<?=$dados['nome']; ?>">
        </label>        
        <label for="Email">
            Email <input type="text" name="email" value="<?=$dados['email']; ?>">
        </label>
        <button type="submit">Salvar</button>
    </form>
</body>
</html>