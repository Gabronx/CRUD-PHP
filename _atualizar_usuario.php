<?php
include 'conexao.php';

// Verifique se os dados do POST foram enviados corretamente
if (isset($_POST['id']) && isset($_POST['nome_usuario']) && isset($_POST['mail_usuario']) && isset($_POST['senha_usuario']) && isset($_POST['nivel_usuario'])) {

    // Receba os dados do POST
    $id = $_POST['id'];
    $nome_usuario = $_POST['nome_usuario'];
    $mail_usuario = $_POST['mail_usuario'];
    $senha_usuario = $_POST['senha_usuario'];
    $nivel_usuario = $_POST['nivel_usuario'];

    // Verifique se a conexão com o banco de dados foi estabelecida corretamente
    if ($conexao) {

        // Evite injeção de SQL usando prepared statements
        $sql = "UPDATE usuario SET nome_usuario = ?, mail_usuario = ?, senha_usuario = ?, nivel_usuario = ? WHERE id_usuario = ?";

        // Prepare a consulta
        $stmt = mysqli_prepare($conexao, $sql);

        if ($stmt) {
            // Associe os parâmetros
            mysqli_stmt_bind_param($stmt, "ssisi", $nome_usuario, $mail_usuario, $senha_usuario, $nivel_usuario, $id);

            // Execute a consulta
            if (mysqli_stmt_execute($stmt)) {
                // Atualização bem-sucedida
                echo '<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">';
                echo '<div class="container" style="width:400px;">
                        <center>
                            <h3>Atualizado com sucesso</h3>
                            <div style="margin-top: 10px;">
                                <a href="listar_usuarios.php" class="btn btn-sm btn-warning" style="color: #fff;">Voltar</a>
                            </div>
                        </center>
                    </div>';
            } else {
                echo "Erro na execução da consulta: " . mysqli_error($conexao);
            }

            // Feche a declaração
            mysqli_stmt_close($stmt);
        } else {
            echo "Erro na preparação da consulta: " . mysqli_error($conexao);
        }

        // Feche a conexão com o banco de dados
        mysqli_close($conexao);
    } else {
        echo "Erro na conexão com o banco de dados: " . mysqli_connect_error();
    }
} else {
    echo "Dados insuficientes enviados pelo formulário.";
}
