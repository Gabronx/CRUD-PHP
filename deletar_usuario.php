<?php

include 'conexao.php';

$id = $_GET['id'];

$sql = "DELETE FROM `usuario` WHERE id_usuario = $id";
$deletar = mysqli_query($conexao, $sql);

header("Location: aprovar_usuario.php"); //Redireciona novamente para a página de aprovação


?>

<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">

<div class="container" style="width:400px">
    <center>
        <h3>Deletado com sucesso</h3>
        <div style="margin-top: 10px;">
            <a href="lis.php" class="btn btn-sm btn-warning" style="color: #fff;">Voltar</a>
        </div>
    </center>
</div>