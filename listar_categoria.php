<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Listagem Produtos</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
    <script src="https://kit.fontawesome.com/98a9bb4af9.js" crossorigin="anonymous"></script>

    <!-- <style>
        .table thead th {
            float: right;
        }
    </style> -->

</head>

<body>

    <div class="container" style="margin-top: 40px; width:500px">

        <div style=" text-align: right;">
            <a href="index.php" role="button" class="btn btn-sm btn-primary">Voltar</a>
        </div>

        <h3>Lista de Produtos</h3>
        <br>
        <table class="table">
            <thead>
                <tr>
                    <th scope=" col">Nome Categoria</th>
                    <th scope="col"> Ação</th>
                </tr>
            </thead>

            <?php

            include 'conexao.php';
            $sql = "SELECT * FROM `tbl_categoria`";
            $busca = mysqli_query($conexao, $sql);

            while ($array = mysqli_fetch_array($busca)) {

                $id_categoria = $array['id_categoria'];
                $name_categoria = $array['name_categoria'];
            ?>
                <tr>
                    <td><?php echo $name_categoria ?></td>

                    <td>
                        <a class="btn btn-warning btn-sm" style="color: #fff" ; href="editar_categoria.php?id=<?php echo $id_categoria ?>" role="button"><i class="fa-solid fa-pen-to-square fa-sm"></i>&nbsp;Editar</a>
                        <a class="btn btn-danger btn-sm" style="color: #fff" ; href="deletar_produto.php?id=<?php echo $id_categoria ?>" role="button"><i class="fa-solid fa-trash"></i></a>
                    </td>

                </tr>
            <?php } ?>

        </table>

        <!-- <div style="text-align: right;">
            <a href="adicionar_produto.php" role="button" class="btn btn-sm btn-primary">Cadastrar</a>
        </div> -->

    </div>


    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.8/dist/umd/popper.min.js" integrity="sha384-I7E8VVD/ismYTF4hNIPjVp/Zjvgyol6VFvRkX/vR+Vc4jQkC+hVqc2pM8ODewa9r" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.min.js" integrity="sha384-BBtl+eGJRgqQAUMxJ7pMwbEyER4l1g+O15P+16Ep7Q9Q+zqX6gSbd85u4mG4QzX+" crossorigin="anonymous"></script>
</body>

</html>