<?php
$nome = $_POST["nome"];
$cidade = $_POST["cidade"];
$rua = $_POST["rua"];
$email = $_POST["email"];
$cpf = $_POST["cpf"];
$telefone = $_POST["telefone"];
$estado = $_POST["estado"];

echo "$nome - $cidade - $rua - $email - $cpf - $telefone - $estado";

$arquivo = fopen("clientes.txt", "a");

fwrite($arquivo, $nome . "\t");
fwrite($arquivo, $cidade . "\t");
fwrite($arquivo, $estado. "\t");
fwrite($arquivo, $rua . "\t");
fwrite($arquivo, $telefone . "\t");
fwrite($arquivo, $cpf . "\t");
fwrite($arquivo, $email . "\n");

fclose($arquivo);
header("location:formulario.php");
 ?>