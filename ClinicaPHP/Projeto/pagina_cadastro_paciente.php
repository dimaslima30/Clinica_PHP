<?php
session_start();
include_once("conexao.php");
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" type="text/css" href="pagina_login.css">
    <link href="https://fonts.googleapis.com/css?family=Comfortaa" rel="stylesheet">
    <title>Document</title>
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
        <form action="cadastrar_paciente.php" method="POST">
            <p>Nome</p>
            <input type="text" name="nome" placeholder="Insira seu nome">
            <p>Peso</p>
            <input type="number" step= "0.01" name="peso" placeholder="Insira seu peso">
            <p>Altura</p>
            <input type="number" step= "0.01" name="altura" placeholder="Insira sua altura">
            <p>Idade</p>
            <input type="number" name="idade" placeholder="Insira sua idade">
            <input type="submit" value="Cadastrar">
        </form>
        <form action="painel.php">
             <input type="submit" value="Voltar">
        </form>
        
    
   </div> 
   <div class="box-degrade"></div>
</body>
</html>