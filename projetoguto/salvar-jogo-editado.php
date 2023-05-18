<?php
$id =  $_GET["id"];
$titulo = $_POST["titulo"];
$foto = $_POST["foto"];
$video = $_POST["video"];
$Categorias = $_POST["Categorias"];

include "conexao.php";

$sql_editar_jogo = "update jogo set titulo='$titulo' , foto='$foto' , video = '$video' , Categorias = '$Categorias' where id = $id ";

$um_jogo = mysqli_query($conexao, $sql_editar_jogo);

mysqli_close($conexao);

header("location:listar-jogos.php?msg=sucesso");


?>