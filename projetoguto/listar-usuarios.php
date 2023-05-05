<?php
include "cabecalho.php";
include "menu-sistema.php";

?>
<div class="container">
    <div class="row">
        <div class="col">
            <h1>Lista de usuario</h1>
        </div>
    </div>
    <div class="row">
        <div class="col">
            <table class="table table - white table-sm">
                <tr>
                    <td>Id</td>
                    <td>Nome</td>
                    <td>Email</td>
                    <td>Ações</td>
                    
                </tr>
                <?php
                include "conexao.php";
                $sql_buscar = "select * from usuario";
                $todos_os_usuario = mysqli_query($conexao, $sql_buscar);
                while ($um_usuario = mysqli_fetch_assoc($todos_os_usuario)) :
                ?>
                    <tr>
                        <td> <?php echo $um_usuario["id"]; ?> </td>
                        <td> <?php echo $um_usuario["nome"]; ?> </td>
                        <td> <?php echo $um_usuario["email"]; ?> </td>
                        <td><img src="img/delete.png" width="20"></td>
                        
                    </tr>
                <?php






                endwhile;
                mysqli_close($conexao);
                ?>
            </table>