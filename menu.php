<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>Menu</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous" />
  <link id="theme-link" rel="stylesheet" href="CSS/light-mode.css"> <!-- Arquivo de estilo para o modo claro -->
  <link rel="stylesheet" href="CSS/dark-mode.css"> <!-- Arquivo de estilo para o modo escuro -->
  <style>
    .btn-16 {
      border: none;
      color: #000;
    }

    .btn-16:after {
      position: absolute;
      content: "";
      width: 0;
      height: 100%;
      top: 0;
      left: 0;
      direction: rtl;
      z-index: -1;
      box-shadow: -7px -7px 20px 0px #fff9, -4px -4px 5px 0px #fff9,
        7px 7px 20px 0px #0002, 4px 4px 5px 0px #0001;
      transition: all 0.3s ease;
    }

    .btn-16:hover {
      color: #000;
    }

    .btn-16:hover:after {
      left: auto;
      right: 0;
      width: 100%;
    }

    .btn-16:active {
      top: 2px;
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

    #dark-mode-toggle {
      position: fixed;
      top: 10px;
      right: 10px;
      border: none;
      padding: 10px 20px;
      cursor: pointer;
    }

    .btn-transparent {
      background-color: transparent;
      color: inherit;
      border: none;
      padding: 0;
    }

    .btn-transparent i {
      font-size: 24px;
      vertical-align: middle;
    }
  </style>
</head>

<body>

  <div class="container" style="margin-top: 100px">
    <button id="dark-mode-toggle" class="btn btn-transparent"><i class="fa-solid fa-circle-half-stroke"></i></button>
    <div class="row">
      <div class="col-sm-6">
        <div class="card btn-16">
          <div class="card-body">
            <h5 class="card-title">Adicionar Produtos</h5>
            <p class="card-text">
              Opção para adicionar produtos em nosso estoque.
            </p>
            <a href="adicionar_produto.php" class="btn btn-primary">Cadastrar Produto</a>
          </div>
        </div>
      </div>
      <div class="col-sm-6">
        <div class="card btn-16">
          <div class="card-body">
            <h5 class="card-title">Lista de Produtos</h5>
            <p class="card-text">
              Visualizar, editar e excluir produtos cadastrados.
            </p>
            <a href="listar_produtos.php" class="btn btn-primary">Produtos</a>
          </div>
        </div>
      </div>
      <div class="col-sm-6" style="margin-top: 20px">
        <div class="card btn-16">
          <div class="card-body">
            <h5 class="card-title">Adicionar Categoria</h5>
            <p class="card-text">
              Opção para adicionar categoria de produtos.
            </p>
            <a href="adicionar_categoria.php" class="btn btn-primary">Cadastrar Categoria</a>
          </div>
        </div>
      </div>
      <div class="col-sm-6" style="margin-top: 20px">
        <div class="card btn-16">
          <div class="card-body">
            <h5 class="card-title">Adicionar Fornecedor</h5>
            <p class="card-text">
              Opção para adicionar fornecedores de produtos.
            </p>
            <a href="adicionar_fornecedor.php" class="btn btn-primary">Cadastrar Fornecedores</a>
          </div>
        </div>
      </div>
      <div class="col-sm-6" style="margin-top: 20px">
        <div class="card btn-16">
          <div class="card-body">
            <h5 class="card-title">Aprovar Usuários</h5>
            <p class="card-text">
              Aprovar Usuários Cadastrados.
            </p>
            <a href="aprovar_usuario.php" class="btn btn-primary">Aprovar Usuários</a>
          </div>
        </div>
      </div>
      <div class="col-sm-6" style="margin-top: 20px">
        <div class="card btn-16">
          <div class="card-body">
            <h5 class="card-title">Listar Usuários</h5>
            <p class="card-text">
              Listar Usuários Cadastrados.
            </p>
            <a href="listar_usuarios.php" class="btn btn-primary">Usuários</a>
          </div>
        </div>
      </div>
    </div>
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
  <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css" rel="stylesheet">

  <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.8/dist/umd/popper.min.js" integrity="sha384-I7E8VVD/ismYTF4hNIPjVp/Zjvgyol6VFvRkX/vR+Vc4jQkC+hVqc2pM8ODewa9r" crossorigin="anonymous"></script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.min.js" integrity="sha384-BBtl+eGJRgqQAUMxJ7pMwbEyER4l1g+O15P+16Ep7Q9Q+zqX6gSbd85u4mG4QzX+" crossorigin="anonymous"></script>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous" />
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
</body>

</html>