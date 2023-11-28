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
        <h4>Formulário de cadastro</h4>
        <form action="_atualizar_produto.php" method="post" style="margin-top: 20px;">
            <?php

            $sql = "SELECT * FROM `tbl_estoque` WHERE id_estoque = $id";
            $buscar = mysqli_query($conexao, $sql);
            while ($array = mysqli_fetch_array($buscar)) {

                $id_estoque = $array['id_estoque'];
                $nroproduto = $array['nroproduto'];
                $nomeproduto = $array['nomeproduto'];
                $categoria = $array['categoria'];
                $quantidade = $array['quantidade'];
                $fornecedor = $array['fornecedor'];

            ?>
                <div class="form-group">
                    <label>Nro Produto</label>
                    <input type="number" class="form-control" name="nroproduto" value="<?php echo $nroproduto ?>" disabled>
                    <input type="number" class="form-control" name="id" value="<?php echo $id ?>" style="display: none">
                </div>
                <div class="form-group">
                    <label>Nome Produto</label>
                    <input type="text" class="form-control" name="nomeproduto" value="<?php echo $nomeproduto ?>">
                </div>
                <div class="form-group">
                    <label>Categoria</label>
                    <select class="form-select" name="categoria">
                        <option>Periféricos</option>
                        <option>Hardware</option>
                        <option>Software</option>
                        <option>Celulares</option>
                    </select>
                </div>
                <div class="form-group">
                    <label>Quantidade</label>
                    <input type="number" class="form-control" name="quantidade" value="<?php echo $quantidade ?> ">
                </div>
                <div class="form-group">
                    <label>Fornecedor</label>
                    <select class="form-select" name="fornecedor">
                        <option>Logitech</option>
                        <option>Razer</option>
                        <option>ReDragon</option>
                        <option>Blizzard</option>
                    </select>
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