<?php

include 'conexao.php';

$id = $_GET['id'];

?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <title>Editar Usuário</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">

    <style type="text/css">
        #tamanhoContainer {
            width: 500px;
        }

        #botao {
            background-color: #ff1168;
            color: #fff;
        }
    </style>

</head>

<body>

    <div class="container" id="tamanhoContainer" style="margin-top: 40px;">
        <h4>Formulário de cadastro</h4>
        <form action="_atualizar_usuario.php" method="post" style="margin-top: 20px;">
            <?php

            $sql = "SELECT * FROM `usuario` WHERE id_usuario = $id";
            $buscar = mysqli_query($conexao, $sql);
            while ($array = mysqli_fetch_array($buscar)) {

                $id_usuario = $array['id_usuario'];
                $nome_usuario = $array['nome_usuario'];
                $mail_usuario = $array['mail_usuario'];
                $senha_usuario = $array['senha_usuario'];
                $nivel_usuario = $array['nivel_usuario'];
                //$status = $array['status'];

            ?>
                <div class="form-group">
                    <label>Id Usuário</label>
                    <input type="number" class="form-control" name="id_usuario" value="<?php echo $id_usuario ?>" disabled>
                    <input type="number" class="form-control" name="id" value="<?php echo $id ?>" style="display: none">
                </div>
                <div class="form-group">
                    <label>Nome Usuário</label>
                    <input type="text" class="form-control" name="nome_usuario" value="<?php echo $nome_usuario ?>">
                </div>
                <div class="form-group">
                    <label>E-mail</label>
                    <input type="email" class="form-control" name="mail_usuario" value="<?php echo $mail_usuario ?>">
                </div>
                <div class="form-group">
                    <label>Senha</label>
                    <input type="Password" class="form-control" name="senha_usuario" value="<?php echo $senha_usuario ?>">
                </div>
                <div class="form-group">
                    <label>Nivel</label>
                    <input type="text" class="form-control" name="nivel_usuario" value="<?php echo $nivel_usuario ?>">
                </div>


                <div style="text-align: right; margin-top:20px;">
                    <button id="botao" type="submit" class="btn btn-sm" style="font-weight: 500;">Atualizar</button>
                </div>
            <?php } ?>
        </form>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.8/dist/umd/popper.min.js" integrity="sha384-I7E8VVD/ismYTF4hNIPjVp/Zjvgyol6VFvRkX/vR+Vc4jQkC+hVqc2pM8ODewa9r" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.min.js" integrity="sha384-BBtl+eGJRgqQAUMxJ7pMwbEyER4l1g+O15P+16Ep7Q9Q+zqX6gSbd85u4mG4QzX+" crossorigin="anonymous"></script>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
</body>

</html>