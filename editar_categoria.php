<?php

include 'conexao.php';

$id = $_GET['id'];

?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <title>Document</title>
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
        <h4>Formulário de Edição</h4>
        <form action="_atualizar_categoria.php" method="post" style="margin-top: 20px;">
            <?php

            $sql = "SELECT * FROM `tbl_categoria` WHERE id_categoria = $id";
            $buscar = mysqli_query($conexao, $sql);
            while ($array = mysqli_fetch_array($buscar)) {

                $id_categoria = $array['id_categoria'];
                $name_categoria = $array['name_categoria'];

            ?>
                <div class="form-group">
                    <label>Nome Categoria</label>
                    <input type="text" class="form-control" name="name_categoria" value="<?php echo $name_categoria ?>">
                    <input type="text" class="form-control" name="id" value="<?php echo $id_categoria ?>" style="display: none">
                </div>

                <div style="text-align: right">
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