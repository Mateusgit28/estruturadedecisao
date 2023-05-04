<?php
$email = $_POST['email'];
$senha = $_POST['senha'];
$nome = $_POST['nome'];




include "conexao.php";

$sql_buscar_usuario = "INSERT INTO usuario (nome, email, senha) VALUES ('$nome', '$email', '$senha')";

$todos_os_jogos = mysqli_query($conexao, $sql_buscar_usuario);

mysqli_close($conexao);

header("location:novo-usuario.php?msg=sucesso");




?>