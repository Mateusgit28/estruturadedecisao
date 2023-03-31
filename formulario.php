<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>Cadastro de cliente</h1>
    <form  method="post" action="salvar.php">
        Nome: <input name="nome" required><br>
        Cidade: <input name="cidade" required><br>
        Estado:<input name="estado" required><br>
        CPF:<input name="cpf" required><br>
        TELEFONE:<input name="telefone" required><br>
        RUA:<input name="rua" required><br>
        EMAIL:<input name="email" required><br>
        <button type="submit">Salvar</button>
    </form>
</body>
</html>