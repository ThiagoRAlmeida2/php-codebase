<?php
$titulo = "Alterar Cadastro";
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" type="text/css" href="css/AlterarCss.css">
    <title>
        FICR -
        <?php
        echo $titulo;
        ?>
    </title>
</head>
<body>
<form action="php/alterarCadastro.php" method="post">
    <h2>Alterar Cadastro de Usuário</h2>

    <label for="id">ID:</label><br>
    <input type="text" id="id" name="id" required><br><br>

    <label for="nome">Nome:</label><br>
    <input type="text" id="nome" name="nome" required><br><br>

    <label for="telefone">Telefone:</label><br>
    <input type="text" id="telefone" name="telefone" required><br><br>

    <label for="email">Email:</label><br>
    <input type="email" id="email" name="email" required><br><br>

    <label for="senha">Senha:</label><br>
    <input type="password" id="senha" name="senha" required><br><br>


    <input type="button" value="Voltar" onclick="window.location.href='FazerLogin.php'">
    <input type="submit" value="Alterar">
</form>
</body>
</html>
