<?php


$nomes=["renata","alan","ingridi","sara","kleber"];
$listar = count($nomes);

$contador = 0;

while($contador < $listar){
    echo $nomes[$contador] . "<br>";
    $contador++;
} 
echo $nomes[$contador]. "<br>";
$arquivo = fopen("lista.txt", "a");

fwrite($arquivo, $nomes[$contador] . "\n");



fclose($arquivo);

 ?>