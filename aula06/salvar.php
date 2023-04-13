<?php
$nome = $_POST['nome'];
$cidade = $_POST['cidade'];
$telefone = $_POST['telefone'];
$email = $_POST['email'];
$estado = $_POST['estado'];

$arquivo = fopen("clientes.csv","a");

fwrite($arquivo , $nome . ",");
fwrite($arquivo , $cidade . ",");
fwrite($arquivo , $telefone . ",");
fwrite($arquivo , $estado . ",");
fwrite($arquivo , $email . "\n");

    

fclose($arquivo);

header("location:form.php?mensagem=salvo");
 ?>