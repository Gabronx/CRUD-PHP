<?php

include 'conexao.php';

$fornecedor = $_POST['fornecedor'];

$sql = "INSERT INTO tbl_fornecedor (`name_fornecedor`) VALUES ('$fornecedor')";

$inserir = mysqli_query($conexao, $sql);
?>

<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
<div class="container" style="width: 400px;">
    <center>
        <h3>Adicionado com sucesso</h3>
        <div style="margin-top: 10px;">
            <a href="adicionar_fornecedor.php" class="btn btn-sm btn-warning" style="color: #fff;">Voltar</a>
        </div>
    </center>
</div>