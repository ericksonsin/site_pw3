<?php session_start();

// receber os campos do formulario

$email = $_POST['email'];
$senha = $_POST['senha'];

$_SESSION['dadosFormLogin'] = $_POST; //armazena os dados vindo via POST
$_SESSION['mensagemErroLogin'] = array(); //armazena as mensagens de login

if( strlen($email) < 1 ){
    $_SESSION['mensagemErroLogin'][] = "O campo e-mail é obrigatorio";
}

if( strlen($senha) < 1 ){
    $_SESSION['mensagemErroLogin'][] = "O campo senha é obrigatorio";
}

//incluir a conexao com o banco

include("connection/conexao.php");

//consulta pra verificar se o email e senha existem na tabela de login

$consultaLogin = "SELECT * FROM tbl_login
                                WHERE email='$email'
                                AND senha=MD5('$senha')";

// executar a consulta

$executaConsulta = $mysqli->query($consultaLogin);

// total de linha retornado pela consulta

$totalLinhas = $executaConsulta->num_rows;

//obter dados do select

$dadosUsuario = $executaConsulta->fetch_assoc();



if( $totalLinhas < 1 ){
    $_SESSION['mensagemErroLogin'][] = "Usuário não existe";

}

if($dadosUsuario['status_login'] == 0  && $totalLinhas > 0 ){
    $cod_ativacao = $dadosUsuario['cod_ativacao'];
    $mensagem = "você ainda não ativou sua conta. Ativar agora.
                    <a href='ativa-conta.php?codigoAtivacao=$cod_ativacao'>Ativar Agora</a>";

    $_SESSION['mensagemErroLogin'][] = $mensagem;                

}


if(sizeof($_SESSION['mensagemErroLogin']) > 0 ){

    header("location:login.php?erro=1");

}else{

    unset($_SESSION['mensagemErroLogin']);
    unset($_SESSION['dadosFormLogin']);


    //armazenar alguns dados em variaveis de sessao e direcionar o usuario para area administrativa

    //armazenar o codigo do usuario

    $_SESSION['cod_login'] = $dadosUsuario['cod_login'];

    //nome do usuario

    $_SESSION['nome'] = $dadosUsuario['nome'];

    header("location:admin/index.php");
}



?>