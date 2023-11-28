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

    <div class="container" id="tamanhoContainer" style="margin-top: 40px;">

        <div style="text-align: right;">
            <a href="menu.php" role="button" class="btn btn-secondary btn-sm btn-primary">Voltar</a>
        </div>

        <h4>Formulário de cadastro</h4>
        <form action="_inserir_produto.php" method="post" style="margin-top: 20px;">
            <div class="form-group">
                <label>Nro Produto</label>
                <input type="number" class="form-control" name="nroproduto" placeholder="Insira o numero do produto" autocomplete="off" required>
            </div>

            <div class="form-group">
                <label>Nome Produto</label>
                <input type="text" class="form-control" name="nomeproduto" placeholder="Insira o nome do produto" autocomplete="off" required>
            </div>

            <div class="form-group">
                <label>Categoria</label>
                <select class="form-control" name="categoria">

                    <?php
                    include 'conexao.php';
                    $sql = "SELECT * FROM tbl_categoria order by name_categoria ASC";
                    $buscar = mysqli_query($conexao, $sql);

                    while ($array = mysqli_fetch_array($buscar)) {

                        $id_categoria = $array['id_categoria'];
                        $nome_categoria = $array['name_categoria'];


                    ?>
                        <option><?php echo $nome_categoria ?></option>

                    <?php } ?>

                </select>
            </div>

            <div class="form-group">
                <label>Quantidade</label>
                <input type="text" class="form-control" name="quantidade" placeholder="Insira a quantidade do produto" autocomplete="off" required>
            </div>

            <div class="form-group">
                <label>Fornecedor</label>
                <select class="form-select" name="fornecedor" name="fornecedor" placeholder="Insira o fornecedor" autocomplete="off" required>

                    <?php
                    include 'conexao.php';
                    $sql2 = "SELECT * FROM tbl_fornecedor order by name_fornecedor ASC";
                    $buscar2 = mysqli_query($conexao, $sql2);

                    while ($array2 = mysqli_fetch_array($buscar2)) {

                        $id_fornecedor = $array2['id_fornecedor'];
                        $nome_fornecedor = $array2['name_fornecedor'];


                    ?>
                        <option><?php echo $nome_fornecedor ?></option>

                    <?php } ?>

                </select>
            </div>

            <div style="text-align: right; margin-top:20px;">
                <button id="botao" type="submit" class="btn btn-sm">Cadastrar</button>
            </div>
        </form>



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
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
</body>

</html>