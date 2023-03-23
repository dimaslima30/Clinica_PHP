<?php
session_start();
include_once("conexao.php");

$nome = filter_input(INPUT_POST, 'nome', FILTER_SANITIZE_STRING);
$email = filter_input(INPUT_POST, 'email', FILTER_SANITIZE_EMAIL);
$senha = filter_input(INPUT_POST, 'senha', FILTER_SANITIZE_ENCODED);


$result_usuario = "INSERT INTO usuarios (nome, email, senha, created) VALUES ('$nome', '$email', '$senha', NOW())";
$resultado_usuario = mysqli_query($mysqli, $result_usuario);

if(mysqli_insert_id($mysqli)){
	$_SESSION['msg'] = "<p style='color:green;'>Usuário cadastrado com sucesso</p>";
	header("Location: pagina_login.php");
}else{
	$_SESSION['msg'] = "<p style='color:red;'>Usuário não foi cadastrado com sucesso</p>";
	header("Location: pagina_login.php");
}
?>