<?php
session_start();
include_once("protect.php");
include_once("conexao.php");

if(!isset($_POST['email']) || isset($_POST ['senha'])){
	$nome = filter_input(INPUT_POST, 'nome', FILTER_SANITIZE_STRING);
	$idade = filter_input(INPUT_POST, 'idade', FILTER_SANITIZE_NUMBER_INT);
	$peso = filter_input(INPUT_POST, 'peso', FILTER_SANITIZE_NUMBER_FLOAT, FILTER_FLAG_ALLOW_FRACTION);
	$altura = filter_input(INPUT_POST, 'altura', FILTER_SANITIZE_NUMBER_FLOAT, FILTER_FLAG_ALLOW_FRACTION);
	$imc = $peso/($altura*$altura);

	$result_usuario = "INSERT INTO pacientes (nome, idade, peso, altura, imc) VALUES ('$nome', '$idade', '$peso', '$altura', $imc)";
	$resultado_usuario = mysqli_query($mysqli, $result_usuario);

	if(mysqli_insert_id($mysqli)){
		$_SESSION['msg'] = "<p style='color:green;'>Usuário cadastrado com sucesso</p>";
		header("Location: pagina_cadastro_paciente.php");
	}else{
		$_SESSION['msg'] = "<p style='color:red;'>Usuário não foi cadastrado com sucesso</p>";
		header("Location: pagina_cadastro_paciente.php");
	}
}


?>