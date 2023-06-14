<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
    <title>Login</title>
</head>

<body>
    <header>
        <h1 class="text-center">Login</h1>
    </header>

    <main>
        <div class="container">

            <form class="row g-3" action="login.class.php" method="POST">

                <div class="col-12">
                    <label for="txtNome" class="form-label">Usuário</label>
                    <input type="text" class="form-control" placeholder="Digite seu nome..." name="txtNome">
                </div>

                <div class="col-12">
                    <label for="txtSenha" class="form-label">Senha</label>
                    <input type="text" class="form-control" id="txtSenha" placeholder="Digite sua senha..." name="txtSenha">
                </div>

                <div class="col-12">
                    <button type="submit" class="btn btn-primary" name="btnEntrar">Entrar</button>
                </div>

                <div class="form-text"><a href="cadastro.php">Ainda não possui uma conta</a></div>

            </form>

        </div>
    </main>

</body>