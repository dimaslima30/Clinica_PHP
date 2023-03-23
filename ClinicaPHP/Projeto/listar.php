

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" type="text/css" href="pagina_login.css">
    <link href="https://fonts.googleapis.com/css?family=Comfortaa" rel="stylesheet">
    <title>Lista</title>

</head>
<body>
    <div class="cadastro">
    <h2>Pacientes cadastrados:</h2>
    <br>
    <table width="467" border="1px">
        <thead>
            <tr>
                <th width="200" height="40">Nome</th>    
                <th width="113">Idade</th> 
                <th width="140">Peso</th> 
                <th width="85">Altura</th> 
                <th width="100">IMC</th> 
            </tr>
        </thead>
        <tbody>
        <?php
        include_once("conexao.php");
        
        $sql = "SELECT * FROM pacientes";
        $result = $mysqli->query($sql);

        if(!$result){
            die("Invalid query: " . $connection->error);
        }

        while($row = $result->fetch_assoc()){
            echo "<tr>
                    <td>" . $row["nome"] . "</td>    
                    <td>" . $row["idade"] . "</td> 
                    <td>" . $row["peso"] . "</td> 
                    <td>" . $row["altura"] . "</td>  
                    <td>" . $row["imc"] . "</td>  
                </tr>";
        }

            
            ?>
        </tbody>
    </table>
    <br>
    <form action="painel.php">
             <input type="submit" value="Voltar">
    </form>
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
<div class="box-degrade"></div>
</body>
</html>