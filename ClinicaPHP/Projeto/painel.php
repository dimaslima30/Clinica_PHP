<?php
   include("protect.php");
   include("conexao.php");
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" type="text/css" href="pagina_login.css">
    <link href="https://fonts.googleapis.com/css?family=Comfortaa" rel="stylesheet">
    <title>Painel</title>
</head>
<body>

   <div class="painel">
   <div class="cadastro">
    <h2 id="success">Bem-Vindo ao Painel, <?php echo $_SESSION['nome'];?></h2>
    <form action="pagina_cadastro_paciente.php" method="POST">
        <input type="submit" value="Cadastrar" placeholder="Cadastre seus dados">
    </form>
    <br>
    <form action="listar.php" method="POST">
        <input type="submit" value="Listar" placeholder="Listar pacientes">
        
    </form>
    <p>
        <a href="logout.php">Sair</a>
    </p>
    <br>
    <br>
    <br>
    <br>
    <br>
    <br>
    <br>
    <br>
    <br>
    <br>
    <br>
    <br>
    <br>
    
    <?php
        include_once("footer.html");
    ?>
    </div>
    </div>
    <div class="box-degrade"></div>
</body>
</html>