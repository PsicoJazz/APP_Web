<?php
session_start();
require 'conexao.php';

if (isset($_POST['create_usuario'])) 
{
	$nome = mysqli_real_escape_string($conexao, trim($_POST['nome']));
	$celular = mysqli_real_escape_string($conexao, trim($_POST['celular']));
	$rota = mysqli_real_escape_string($conexao, trim($_POST['rota']));
	$senha = isset($_POST['senha']) ? mysqli_real_escape_string($conexao, trim($_POST['senha'])):'';

	$sql = "INSERT INTO motorista (nome, celular, rota, senha) VALUES ('$nome', '$celular', '$rota', '$senha')";

	echo $sql;exit;


	mysqli_query($conexao, $sql);
}

?>