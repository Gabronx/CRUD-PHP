<?php
include 'conexao.php';

$id = $_POST['id'];
$name_categoria = $_POST['name_categoria'];

// Crie uma consulta preparada
$sql = "UPDATE tbl_categoria SET name_categoria = ? WHERE id_categoria = ?";
$atualizar = mysqli_prepare($conexao, $sql);

// Vincule os parâmetros
mysqli_stmt_bind_param($atualizar, 'si', $name_categoria, $id);

// Execute a consulta preparada
mysqli_stmt_execute($atualizar);

// Verifique se a atualização foi bem-sucedida
if ($atualizar) {
    // Atualização bem-sucedida
    header('Location: listar_categoria.php'); // Redirecione para a página desejada
} else {
    // Algo deu errado
    echo "Erro na atualização: " . mysqli_error($conexao);
}

mysqli_close($conexao);
?>

<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">';
<div class="container" style="width:400px;">
    <center>
        <h3>Atualizado com sucesso</h3>
        <div style="margin-top: 10px;">
            <a href="listar_categoria.php" class="btn btn-sm btn-warning" style="color: #fff;">Voltar</a>
        </div>
    </center>
</div>