<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" type="text/css" href="pagina_login.css">
    <link href="https://fonts.googleapis.com/css?family=Comfortaa" rel="stylesheet">
    <title>Login</title>
</head>
<body>
   <div class="login">
        <img src="https://assets.stickpng.com/images/585e4beacb11b227491c3399.png" class="usuario" width="100" height="100" alt="">
        <h1>Login</h1>
        <form action="" method="POST">
            <p>Email</p>
            <input type="email" name="email" placeholder="Insira seu email de Usuário">
            <p>Senha</p>
            <input type="password" name="senha" placeholder="Insira a senha"><br><br>
            <input type="submit" name="" value="login">
            <?php
            include('conexao.php');

            if(isset($_POST['email']) || isset($_POST ['senha'])){
                if(strlen($_POST ['email']) == 0){
                    echo"<p style='color:red;'>Preencha seu email</p>";
                }
                elseif((strlen($_POST ['senha']) == 0)){
                    echo"<p style='color:red;'>Preencha sua senha</p>";
                }
                else{
                    $email = $mysqli->real_escape_string($_POST['email']);
                    $senha = $mysqli->real_escape_string($_POST['senha']);

                    $sql_code = "SELECT * FROM usuarios WHERE email = '$email' AND senha = '$senha'";
                    $sql_query = $mysqli->query($sql_code) or die("Falha na execução do código SQL: ". $mysqli->error);

                    $quantidade = $sql_query->num_rows;

                    if($quantidade == 1){
                        $usuario = $sql_query->fetch_assoc();

                        if(!isset($_SESSION)){
                            session_start();
                        }
                        $_SESSION['id'] = $usuario['id'];
                        $_SESSION['nome'] = $usuario['nome'];

                        header("Location: painel.php");
                    }
                    else{
                        echo"<p font-size='12px'; style='color: red;'>Falha ao logar, email ou senha incorretos</p>";
                    }
                }
            }
            ?>
            <a href="pagina_cadastro.php">Ainda não possui conta?</a>
        </form>
   </div> 
   <div class="box-degrade"></div>
</body>
</html>