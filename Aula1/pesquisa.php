<?php
$nome = $telefone = $email = $senha = "";

?>

<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Pesquisa e atualização cadastral</title>
</head>
<body>
    <h2>Atualizar cadastro</h2>
        <form method="post" action="<?php echo $_SERVER["PHP_SELF"]; ?>">
            <p>
                ID: <input type="number" name="id">
                <input type="submit" value="Pesquisar">
            </p>
        </form>
        <hr>
        <form method="post">
            <input type="hidden" name="id" value="">
            <p>
                Nome:<br>
                <input type="hidden" name="nome" value="">
            </p>
            <p>
                Telefone:<br>
                <input type="number" name="Telefone" value="">
            </p>
            <p>
                E-mail:<br>
                <input type="text" name="email" value="">
            </p>
            <p>
                Senha:<br>
                <input type="password" name="senha" value="">
            </p>
            <p>
                <input type="submit" value="Atualizar cadastro">
            </p>
        </form>
</body>
</html>
