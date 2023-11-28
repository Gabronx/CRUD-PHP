<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">

    <style type="text/css">
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

    <div class="container" style="margin-top: 40px" ; width="500px">
        <div style="text-align: right;">
            <a href="menu.php" role="button" class="btn btn-secondary btn-sm btn-primary">Voltar</a>
        </div>
        <h4>Cadastro de Categoria</h4>
        <form action="_inserir_categoria.php" method="post">
            <label>Categoria:</label>
            <div class="form-group">
                <input type="text" name="categoria" class="form-control" placeholder="Digite o nome da categoria" autocomplete="off">
            </div>
            <div style="text-align: right; margin-top: 10px">
                <button type="submit" id="botao" class="btn btn-sm">Cadastrar</button>
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
</body>

</html>