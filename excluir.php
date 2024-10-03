<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Editar</title>
</head>
<body>
    <h1>Excluindo Usuário</h1>
    <?php 
        require 'conexao.php';
        $id = $_REQUEST["id"];

        $dados = [];

       // var_dump($id);
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
    <h2>Tem certeza que quer excluir o usuario abaixo?</h2>
    
    <form action="excluindo.php" method="POST" >
        <input  type="hidden" name="id" id="id" value="<?=$dados['id']; ?>">
        <label for="Nome">
            Nome <input type="text" name="nome" value="<?=$dados['nome']; ?>">
        </label>
        <label for="Email">
            Email <input type="text" name="email" value="<?=$dados['email']; ?>">
        </label>

        <button type="submit">Excluir</button>


    </form>

    <a href="index.php">Voltar</a>

</body>
</html>