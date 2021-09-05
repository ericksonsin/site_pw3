<?php 

$codigoAtivacao = $_GET['codigoAtivacao'];

include ("connection/conexao.php");

//consulta na tabela se o codigo existe

$sql = "SELECT cod_ativacao FROM tbl_login WHERE cod_ativacao=MD5('$codigoAtivacao') OR cod_ativacao='$codigoAtivacao' ";

$executaSql = $mysqli->query($sql);

//obter o total de linhas retornado pela consulta 
$totalLinhas = $executaSql->num_rows;

//dados so select

$dadosUsuario = $executaSql->fetch_assoc();

//se a linha for igual a 1, ativamos a conta
if($totalLinhas == 1){

    // ativar conta do usuario dando update na tabela
    $ativaConta = "UPDATE tbl_login SET cod_ativacao='',
                                        status_login=1
                                     WHERE cod_login='".$dadosUsuario['cod_login']."' ";

 $executaAtivacao = $mysqli->query($ativaConta);

 echo "<p>Conta ativada com sucesso! </p>
        <p> <meta http-equiv='refresh' content='1;url=login.php'> Redirecionando... </p>";
}else{

    echo "Código ativação inválido";


}







?>