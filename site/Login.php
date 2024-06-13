<?php

if ($_SERVER["REQUEST_METHOD"] == "POST") {

    $host   = "localhost";
    $bd     = "base_turma01";
    $user   = "root";
    $pass   = "";

    try {
        $pdo = new PDO("mysql:host=$host;dbname=$bd", $user, $pass);

        $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

        $email = $_POST['email'];
        $senha = $_POST['senha'];

        $sql = "SELECT * FROM usuarios WHERE email = :email AND senha = :senha";

        $stmt = $pdo->prepare($sql);

        $stmt->bindParam(':email', $email, PDO::PARAM_STR);
        $stmt->bindParam(':senha', $senha, PDO::PARAM_STR);

        $stmt->execute();

        $user = $stmt->fetch(PDO::FETCH_ASSOC);

        if ($user) {
            echo "Login bem-sucedido! Bem-vindo, " . htmlspecialchars($user['nome']) . "!";
        } else {
            echo "Email ou senha inválidos!";
        }

    } catch (PDOException $e) {
        echo "Erro: " . $e->getMessage();
    }

} else {
    echo "Você não tem permissão para acessar esta página!";
}

?>

