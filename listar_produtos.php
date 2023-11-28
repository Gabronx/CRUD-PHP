<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Listagem Produtos</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
    <script src="https://kit.fontawesome.com/98a9bb4af9.js" crossorigin="anonymous"></script>

    <style>
        /* Estilos de exemplo para o modo claro */
        body {
            background-color: #fff;
            color: #333;
        }

        /* Estilos de exemplo para o modo escuro */
        body.dark-mode {
            background-color: #333;
            color: #fff;
        }
    </style>
</head>

<body>

    <div class="container" style="margin-top: 40px">

        <div style="text-align: right;">
            <a href="menu.php" role="button" class="btn btn-secondary btn-sm btn-primary">Voltar</a>
        </div>

        <h3>Lista de Produtos</h3>
        <br>
        <table class="table">
            <thead>
                <tr>
                    <th scope="col">Nro Produto</th>
                    <th scope="col">Nome Produto</th>
                    <th scope="col">Categoria</th>
                    <th scope="col">Quantidade</th>
                    <th scope="col">Fornecedor</th>
                    <th scope="col">Ação</th>

                </tr>
            </thead>


            <?php

            include 'conexao.php';
            $sql = "SELECT * FROM `tbl_estoque`";
            $busca = mysqli_query($conexao, $sql);

            while ($array = mysqli_fetch_array($busca)) {

                $id_estoque = $array['id_estoque'];
                $nroproduto = $array['nroproduto'];
                $nomeproduto = $array['nomeproduto'];
                $categoria = $array['categoria'];
                $quantidade = $array['quantidade'];
                $fornecedor = $array['fornecedor'];
            ?>
                <tr>
                    <td><?php echo $nroproduto ?></td>

                    <td><?php echo $nomeproduto ?></td>

                    <td><?php echo $categoria ?></td>

                    <td><?php echo $quantidade ?></td>

                    <td><?php echo $fornecedor ?></td>

                    <td>
                        <a class="btn btn-warning btn-sm" style="color: #fff" ; href="editar_produto.php?id=<?php echo $id_estoque ?>" role="button"><i class="fa-solid fa-pen-to-square fa-sm"></i>&nbsp;Editar</a>
                        <a class="btn btn-danger btn-sm" style="color: #fff" ; href="deletar_produto.php?id=<?php echo $id_estoque ?>" role="button"><i class="fa-solid fa-trash"></i></a>
                    </td>

                </tr>
            <?php } ?>

        </table>

        <!-- <div style="text-align: right;">
            <a href="adicionar_produto.php" role="button" class="btn btn-sm btn-primary">Cadastrar</a>
        </div> -->

    </div>

    <script>
        const darkModeToggle = document.getElementById('dark-mode-toggle');
        const themeLink = document.getElementById('theme-link');
        let isDarkModeEnabled = localStorage.getItem('dark-mode') === 'enabled';

        // Verifica o estado do tema ao carregar a página
        if (isDarkModeEnabled) {
            enableDarkMode();
        }

        darkModeToggle.addEventListener('click', () => {
            if (isDarkModeEnabled) {
                disableDarkMode();
            } else {
                enableDarkMode();
            }
        });

        function enableDarkMode() {
            localStorage.setItem('dark-mode', 'enabled');
            isDarkModeEnabled = true;
            document.body.classList.add('dark-mode'); // Adiciona uma classe ao body para estilos específicos do modo escuro
        }

        function disableDarkMode() {
            localStorage.setItem('dark-mode', 'disabled');
            isDarkModeEnabled = false;
            document.body.classList.remove('dark-mode'); // Remove a classe do body
        }
    </script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.8/dist/umd/popper.min.js" integrity="sha384-I7E8VVD/ismYTF4hNIPjVp/Zjvgyol6VFvRkX/vR+Vc4jQkC+hVqc2pM8ODewa9r" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.min.js" integrity="sha384-BBtl+eGJRgqQAUMxJ7pMwbEyER4l1g+O15P+16Ep7Q9Q+zqX6gSbd85u4mG4QzX+" crossorigin="anonymous"></script>
</body>

</html>