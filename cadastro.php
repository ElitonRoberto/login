<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
    <title>Cadastro</title>
</head>

<body>
    <header>
        <h1>Cadastro</h1>
        <nav class="nav">
            <!--Ta feio esse menu, vou modificar posteriormente-->
            <a class="nav-link" href="#">Clinica</a>
            <a class="nav-link" href="medicos.php">Médicos</a>
            <a class="nav-link" href="especialidades.php">Especialidades</a>
            <a class="nav-link" href="consultas.php">Consultas</a>
            <a class="nav-link" href="pacientes.php">Pacientes</a>
        </nav>
    </header>

    <main>
        <div class="container">
            <?php
            spl_autoload_register(function ($class) {
                require_once "./Classes/{$class}.class.php";
            });

            if (filter_has_var(INPUT_GET, 'id')) {
                $usuario = new Usuario();
                $id = filter_input(INPUT_GET, 'id');
                $editUsu = $usuario->buscar('idUsu', $id);
            }

            if (filter_has_var(INPUT_GET, 'idDel')) {
                $usuario = new Usuario();
                $id = filter_input(INPUT_GET, 'idDel');
                if ($usuario->deletar('idUsu', $id)) {
                    header("location:Usuario.php");
                }
            }

            if (filter_has_var(INPUT_POST, 'btnGravar')) {

                $usuario = new Usuario();
                $id = filter_input(INPUT_POST, 'txtId');
                $usuario->setIdPac($id);
                $usuario->setNomeUsu(filter_input(INPUT_POST, 'txtNome'));
                $usuario->setEmailUsu(filter_input(INPUT_POST, 'txtEmail'));
                $usuario->setCelularUsu(filter_input(INPUT_POST, 'txtCelular'));
                $usuario->setSenhaUsu(filter_input(INPUT_POST, 'txtSenha'));

               
                if (empty($id)) {
                    $usuario->inserir();
                } else {
                    $usuario->atualizar('idPac', $id);
                }
            }
            ?>

            <form class="row g-3" action="<?php echo
                htmlspecialchars($_SERVER["PHP_SELF"]); ?>" method="post"
                enctype="multipart/form-data">
                <input type="hidden" name="txtId"
                    value="<?php echo isset($editUsu->idUsu) ? $editUsu->idUsu : null; ?>">

                <input type="hidden" name="nomeAntigo"
                    value="<?php echo isset($editPac->fotoPac) ? $editPac->fotoPac : null; ?>">


                <div class="col-12">
                    <label for="txtNome" class="form-label">Nome</label>
                    <input type="text" class="form-control" id="txtNome" placeholder="Digite seu nome..." name="txtNome"
                        value="<?php echo isset($editUsu->nomeUsu) ? $editUsu->nomeUsu : NULL; ?>">
                </div>

                <div class="col-6">
                    <label for="txtEmail" class="form-label">E-mail</label>
                    <input type="email" class="form-control" id="txtEmail" placeholder="Digite seu email..."
                        name="txtEmail" value="<?php echo isset($editUsu->emailUsu) ? $editUsu->emailUsu : NULL; ?>">
                </div>

                <div class="col-md-6">
                    <label for="txtCelular" class="form-label">Celular</label>
                    <input type="text" class="form-control" id="txtCelular" placeholder="Digite seu celular..." name="txtCelular"
                        value="<?php echo isset($editUsu->celularUsu) ? $editUsu->celularUsu : NULL; ?>">
                </div>

                <div class="col-md-6">
                    <label for="txtSenha" class="form-label">Senha</label>
                    <input type="text" class="form-control" id="txtSenha" name="txtSenha" value="<?php echo isset($editUsu->senhaUsu) ? $editUsu->senhaUsu : NULL; ?>">
                </div>


                <div class="col-md-6">
                    <label for="txtSenhaConf" class="form-label">Confirme sua senha</label>
                    <input type="text" class="form-control" id="txtSenhaConf" name="txtSenhaConf"
                        value="<?php echo isset($editUsu->senhaUsu) ? $editUsu->senhaUsu : NULL; ?>">
                </div>                
                
                <div class="col-12">
                    <button type="submit" class="btn btn-primary" name="btnGravar">Cadastrar</button>
                </div>

            </form>
        </div>
    </main>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-w76AqPfDkMBDXo30jS1Sgez6pr3x5MlQ1ZAGC+nuZB+EYdgRZgiwxhTBTkF7CXvN"
        crossorigin="anonymous"></script>
</body>


</html>