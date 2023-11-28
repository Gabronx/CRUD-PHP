<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">

    <style type="text/css">
        #btn-cadastro {
            margin-top: 10px;
        }

        #small-text {
            font-size: 10px;

        }
    </style>

</head>

<body>

    <div class="container" style="width: 400px; margin-top: 40px">
        <div style="text-align: right;">
            <a href="menu.php" role="button" class="btn btn-secondary btn-sm btn-primary">Voltar</a>
        </div>

        <h4>Cadastro de Usuários</h4>

        <form action="_insert_usuario.php" method="post">
            <div class="form-group">
                <label>Nome do Usuário</label>
                <input type="text" name="nomeusuario" class="form-control" required autocomplete="off" placeholder="Nome Completo">
            </div>
            <div class="form-group">
                <label>E-mail</label>
                <input type="email" name="mailusuario" class="form-control" required autocomplete="off" placeholder="E-mail">
            </div>
            <div class="form-group">
                <label>Senha</label>
                <input id="txtSenha" type="password" name="senha" class="form-control" required autocomplete="off" placeholder="Senha">
            </div>
            <div class="form-group">
                <label>Confirmar Senha</label>
                <input type="password" name="senha2" class="form-control" required autocomplete="off" placeholder="Confirme sua Senha" oninput="validaSenha(this)">
                <small id="small-text">As duas senhas devem ser iguais*</small>
            </div>
            <div class="form-group" style="margin-top: 18px;">
                <label>Nível de Acesso</label>
                <select name="nivelusuario" class="form-control">

                    <option value="1">Administrador</option>
                    <option value="2">Funcionário</option>
                    <option value="3">Conferente</option>

                </select>
            </div>
            <div style="text-align:right">
                <button type="submit" class="btn btn-sm btn-success" id="btn-cadastro">Cadastrar</button>
            </div>
        </form>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.8/dist/umd/popper.min.js" integrity="sha384-I7E8VVD/ismYTF4hNIPjVp/Zjvgyol6VFvRkX/vR+Vc4jQkC+hVqc2pM8ODewa9r" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.min.js" integrity="sha384-BBtl+eGJRgqQAUMxJ7pMwbEyER4l1g+O15P+16Ep7Q9Q+zqX6gSbd85u4mG4QzX+" crossorigin="anonymous"></script>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>

    <script>
        function validaSenha(input) {
            if (input.value != document.getElementById('txtSenha').value) {
                input.setCustomValidity("Repita a senha corretamente");
            } else {
                input.setCustomValidity('');
            }
        }
    </script>

</body>

</html>