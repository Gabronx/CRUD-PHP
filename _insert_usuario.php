<?php
include 'conexao.php';
include 'script/password.php';

$nomeusuario = isset($_POST['nomeusuario']) ? $_POST['nomeusuario'] : '';
$mail = isset($_POST['mailusuario']) ? $_POST['mailusuario'] : '';
$senha = isset($_POST['senhausuario']) ? $_POST['senhausuario'] : '';
$nivel = isset($_POST['nivelusuario']) ? $_POST['nivelusuario'] : '';
$status = 'Ativo';

$sql = "INSERT INTO usuario (nome_usuario, mail_usuario, senha_usuario, nivel_usuario, status) VALUES ('$nomeusuario', '$mail', sha1('$senha'), $nivel, '$status')";

$inserir = mysqli_query($conexao, $sql);

?>

<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
<div class="container" style="width: 400px;">
    <center>
        <h3>Usuário adicionado com sucesso</h3>
        <div style="margin-top: 10px;">
            <a href="cadastro_usuario.php" class="btn btn-sm btn-warning" style="color: #fff;">Voltar</a>
        </div>
    </center>
</div>