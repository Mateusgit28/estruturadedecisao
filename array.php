<?php


$nomes=["renata","alan","ingridi","sara","kleber"];
$listar = count($nomes);

$contador = 0;

while($contador < count($nomes){
    echo $nomes[$contador] . "<br>";
    $contador++;
}
$arquivo = fopen("lista.txt", "a");

fwrite($arquivo, $nomes[$contador] . "\n");



fclose($arquivo);

 ?>