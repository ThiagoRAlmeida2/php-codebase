<?php
$nome = $telefone = $email = $senha = "";
if ($_SERVER["REQUEST_METHOD"] == "POST") {

    $host 	= "localhost";
    $bd 	= "base_turma01";
    $user 	= "root";
    $pass 	= "";

    try {
        $pdo = new PDO("mysql:host=$host;dbname=$bd", $user, $pass);
        $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        $id         = $_POST['id'];

        $sql = "DELETE FROM usuarios WHERE id = :id";
        $stmt = $pdo->prepare($sql);
        $stmt->bindParam(':id', $id, PDO::PARAM_INT);

        if ($stmt->execute()) {
            echo "Excluido com sucesso!";
        } else {
            echo "Cadastro nao excluido!";
        }
    } catch (PDOException $e) {
        echo "Erro: " . $e->getMessage();
    }
} else {
    echo "Você não tem permissão para acessar o site!";
}
?>