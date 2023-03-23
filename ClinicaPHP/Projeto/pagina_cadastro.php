<?php
session_start();
include_once("conexao.php");
?>
<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" type="text/css" href="pagina_login.css">
    <link href="https://fonts.googleapis.com/css?family=Comfortaa" rel="stylesheet">
    <title>Cadastro</title>
</head>
<body>
   <div class="cadastro">
        <img src="https://assets.stickpng.com/images/585e4beacb11b227491c3399.png" class="usuario" width="100" height="100" alt="">
        <h1>Cadastro</h1>
        <?php
        if(isset($_SESSION['msg'])){
            echo $_SESSION['msg'];
            unset($_SESSION['msg']);
        }
        ?>
        <form action="cadastrar.php" method="POST">
            <p>Email</p>
            <input type="email" name="email" placeholder="Insira seu email">
            <p>Senha</p>
            <input type="password" name="senha" placeholder="Digite a senha">
            <p>Confirme sua senha</p>
            <input type="password" name="senha" placeholder="Confirme a senha"><br><br>
            <input type="submit" value="Cadastrar">
        </form>
        <form action="pagina_login.php">
             <input type="submit" value="Voltar">
        </form>
        <br>
        <br>
        <br>
        <br>
        <?php
            include_once("footer.html");
        ?>
   </div> 
   <div class="box-degrade"></div>
</body>
</html>

