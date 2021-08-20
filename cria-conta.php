<?php session_start();

$nome = $_POST['nome'];
$email = $_POST['email'];
$senha = $_POST['senha'];
$confirmaSenha = $_POST['confirmaSenha'];
$termos = $_POST['termos'];

$_SESSION['dadosForm'] = $_POST;
$_SESSION['mensagemErro'] = array();

if(strlen($nome)<1){
    $_SESSION['mensagemErro'][] = "O campo nome é obrigatório";

}

if(strlen($email)<1){
    $_SESSION['mensagemErro'][] = "O campo e-mail é obrigatório";
    
}

if(strlen($senha)<6){
    $_SESSION['mensagemErro'][] = "O campo senha deve ter no minimo 6 caracteres";
    
}

if($senha<>$confirmaSenha){
    $_SESSION['mensagemErro'][] = "Senhas não conferem";  
}

if(!isset($termos)){
    $_SESSION['mensagemErro'][] = "Você deve aceitar os termos";
}


if(sizeof($_SESSION['mensagemErro'])>0){

   header("location:registro.php?erro=1");

}else{
    
    echo "Continuar com o cadastro";
}

?>
