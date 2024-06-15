<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=divice-width, inital-scale=1">
    <title>Enviar</title>
</head>
<body>
    <?php
    $host = "localhost";
    $user = "root";
    $password = "";
    $db = "base_turma01";

    $conn = mysqli_connect($host, $user, $password, $db);
    if(!$conn){
       echo "nao conectou";
    } else {
        echo "conectado";
    }
    ?>
</body>
</html>
