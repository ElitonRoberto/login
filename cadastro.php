<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
    <title>Cadastro</title>
</head>

<body>
    <header>
        <h1 class="text-center">Cadastro</h1>
    </header>

    <main>
        <div class="container">

            <form class="row g-3" action="cadastro.class.php" method="POST">

                <div class="col-12">
                    <label for="txtNome" class="form-label">Usuário</label>
                    <input type="text" class="form-control" id="txtNome" placeholder="Digite seu nome..." name="txtNome">
                </div>

                <div class="col-12">
                    <label for="txtSenha" class="form-label">Senha</label>
                    <input type="text" class="form-control" id="txtSenha" placeholder="Digite sua senha..." name="txtSenha">
                </div>

                <div class="col-12">
                    <button type="submit" class="btn btn-primary" name="btnCadastrar">Cadastrar</button>
                </div>

            </form>
        </div>
    </main>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js" integrity="sha384-w76AqPfDkMBDXo30jS1Sgez6pr3x5MlQ1ZAGC+nuZB+EYdgRZgiwxhTBTkF7CXvN" crossorigin="anonymous"></script>
</body>


</html>