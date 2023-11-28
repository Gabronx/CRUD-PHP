<?php

include 'conexao.php'; // Certifique-se de que 'conexao.php' inclui a conexão correta usando mysqli ou PDO.

$usuario = $_POST['usuario'];
$senhausuario = $_POST['senha'];

// Use prepared statements para evitar SQL injection
$stmt = $conexao->prepare("SELECT mail_usuario, senha_usuario FROM usuario WHERE mail_usuario = ?");
$stmt->bind_param("s", $usuario);
$stmt->execute();
$result = $stmt->get_result();

if ($result->num_rows > 0) {
    $row = $result->fetch_assoc();
    $senha = $row['senha_usuario'];

    // Verifique a senha usando password_verify
    if (password_verify($senhausuario, $senha)) {
        header('Location: menu.php');
    } else {
        header('Location: erro.php');
    }
} else {
    header('Location: erro.php');
}

$stmt->close();
$conexao->close();
