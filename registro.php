<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta http-equiv="content-type" content="text/html; charset=UTF-8">
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="icon" href="favicon/pw3.ico">

    <title>PW3</title>

    <!-- Principal CSS do Bootstrap -->
    <link href="css/bootstrap.css" rel="stylesheet">

    <!-- Estilos customizados para esse template -->
    <link href="css/starter-template.css" rel="stylesheet">

    <!-- FONTAWESOME -->
    <script src="https://kit.fontawesome.com/77f3dd62a7.js" crossorigin="anonymous"></script>
</head>

<body cz-shortcut-listen="true" class="bg-secondary">

    <main role="main" class="container">

        <div class="row">
            <div class="col-sm-4 offset-sm-4 border bg-white">
                <h1 class="text-center">
                    <a href="index.php">PW3</a>
                </h1>
                <p class="text-center">Crie sua conta gratuita</p>

                <form action="" method="">

                    <div class="input-group mb-3">
                        <div class="input-group-prepend">
                            <span class="input-group-text" id="basic-addon1"><i class="fas fa-user"></i></span>
                        </div>
                        <input type="name" name="nome" class="form-control" placeholder="Nome completo" aria-label="Nome" aria-describedby="basic-addon1">
                    </div>

                    <div class="input-group mb-3">
                        <div class="input-group-prepend">
                            <span class="input-group-text" id="basic-addon1"><i class="fas fa-envelope"></i></span>
                        </div>
                        <input type="mail" name="email" class="form-control" placeholder="E-mail" aria-label="E-mail" aria-describedby="basic-addon1">
                    </div>

                    <div class="input-group mb-3">
                        <div class="input-group-prepend">
                            <span class="input-group-text" id="basic-addon1"><i class="fas fa-key"></i></span>
                        </div>
                        <input type="password" name="senha" class="form-control" placeholder="Senha" aria-label="Senha" aria-describedby="basic-addon1">
                    </div>

                    <div class="input-group mb-3">
                        <div class="input-group-prepend">
                            <span class="input-group-text" id="basic-addon1"><i class="fas fa-key"></i></span>
                        </div>
                        <input type="password" name="senha" class="form-control" placeholder="Repita a senha" aria-label="Senha" aria-describedby="basic-addon1">
                    </div>

                    <div class="form-group form-check">
                        <input type="checkbox" name="termos" class="form-check-input" id="termos">
                        <label class="form-check-label" for="exampleCheck1">Aceitar os <a href="#" data-toggle="modal" data-target="#modalTermos">termos</label>
                    </div>


                    <div class="form-group text-right">
                        <button class="btn btn-primary">Cadastrar</button>
                    </div>

                    <p>
                        <a href="login.php">Ja tenho uma conta</a>
                    </p>

                </form>

            </div>
        </div>

    </main><!-- /.container -->

    <!-- Modal -->
    <div class="modal fade" id="modalTermos" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Termos Pw3</h5>
                    <button type="button" class="btn-close" data-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Pariatur corporis ab neque asperiores quae sequi laborum quisquam, fuga soluta omnis molestias quis qui repudiandae repellat sint! Et quis eligendi voluptates.</p>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Fechar</button>
                </div>
            </div>
        </div>
    </div>

    <!-- Principal JavaScript do Bootstrap
    ================================================== -->
    <!-- Foi colocado no final para a página carregar mais rápido -->
    <script src="js/jquery-3.js"></script>
    <script src="js/bootstrap.js"></script>


</body>

</html>