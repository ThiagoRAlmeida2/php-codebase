<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" type="text/css" href="css/LoginCss.css">
    <title>
        FICR - Login
        <?php
        echo $titulo;
        ?>
    </title>
</head>
<body>
<div class="login-container">
    <h2>Login</h2>
    <form action="php/login.php" method="post">
        <label for="email">Email:</label>
        <input type="email" id="email" name="email" required>
        <label for="senha">Senha:</label>
        <input type="password" id="senha" name="senha" required>

        <input type="submit" value="Login">
    </form>

</div>
</body>
</html>