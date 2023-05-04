<?php
include "cabecalho.php";
include "menu.php";

?>
<div class="container">
    <div class="row">
        <div class="col-12">
            <h1>Cadastrar novo usuário</h1>
        </div>
    </div>
    <div class="row">
        <div class="col">
            <form method="post" action="salvar-usuario.php">
                <input name="nome" required placeholder="nome"><br>
                <input name="email" type="email" required placeholder="E-mail"><br>
                <input name="senha" type="password" required placeholder="Senha"><br>
                <button type="submit" class="btn btn-success">Salvar usuário</button>


                <div class="row">
                    <div class="col-12">

                        <?php

                        $mensagem = $_GET["msg"] ?? "";
                        if ($mensagem == "sucesso") {
                            echo "<div class ='col-3 mt-3 alert alert-success' role='alert' > Usuário cadastrado com sucesso!.</div>";
                        }
                        ?>
                    </div>

                </div>


            </form>
        </div>
    </div>

</div>