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
                <p class="text-center">Faça login para iniciar a sua sessão</p>


                <?php session_start();

                    if( isset($_GET['erro']) ){

                        $dadosFormLogin = @$_SESSION['dadosFormLogin'];
                        $erroLogin = @$_SESSION['mensagemErroLogin'];

                    }
                
                
                ?>


                <form action="valida-login.php" method="post" id="formLogin">

                    <div class="input-group mb-3">
                        <div class="input-group-prepend">
                            <span class="input-group-text" id="basic-addon1"><i class="fas fa-envelope"></i></span>
                        </div>
                        <input type="email" name="email" class="form-control" placeholder="E-mail" aria-label="E-mail" aria-describedby="basic-addon1" 
                        value="<?php echo @$dadosFormLogin['email'];?>">
                    </div>

                    <div class="input-group mb-3">
                        <div class="input-group-prepend">
                            <span class="input-group-text" id="basic-addon1"><i class="fas fa-key"></i></span>
                        </div>
                        <input type="password" name="senha" class="form-control" placeholder="Senha" aria-label="Senha" aria-describedby="basic-addon1"
                        value="<?php echo @$dadosFormLogin['senha'];?>">
                    </div>

                        <?php 
                        
                        if(isset($erroLogin) ){

                                echo "<ul class='alert alert-danger'>";

                                foreach( $erroLogin as $erro){

                                    echo "<li> $erro </li>";
                                    
                                }

                                echo "</ul>";
                        }
                        
                        ?>

                    <div class="form-group text-right">
                        <button class="btn btn-primary">Entrar</button>
                    </div>

                    <p>
                        <a href="recupera-senha.php">Esqueceu a senha?</a>
                    </p>

                    <p>
                        <a href="registro.php">Criar uma conta</a>
                    </p>

                </form>

            </div>
        </div>

    </main><!-- /.container -->

    <!-- Principal JavaScript do Bootstrap
    ================================================== -->
    <!-- Foi colocado no final para a página carregar mais rápido -->
    <script src="js/jquery-3.js"></script>
    <script src="js/bootstrap.js"></script>


</body>

</html>