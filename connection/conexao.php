<?php
//conexao com o mysql usando o objeto de conexao "mysqli"

$servidor_bd = "localhost";
$usuario_bd = "root";
$senha_bd = "";
$banco = "bd_anuncios";

//função de conexão com o mysql

@$mysqli = new mysqli($servidor_bd,$usuario_bd,$senha_bd,$banco);


if ($mysqli->connect_errno) {
   
    echo "FALHA AO CONECTAR CONTATE O ADMINISTRADOR";

} else {



    mysqli_set_charset($mysqli, "utf8");
}

?>