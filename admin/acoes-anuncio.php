<?php session_start();

//receber os campos do form
 // menos o campo da imagem

$cod_login = $_SESSION['cod_login'];
$categoria_produto = $_POST['categoria_produto'];
$nome_produto = $_POST['nome_produto'];
$preco = $_POST['preco'];
$descricao = $_POST['descricao'];
$operacao = $_POST['operacao'] ?: $_GET['operacao'];

if($operacao == 'cadastrar'){

$sql = "INSERT INTO tbl_produto
                    (categoria_produto,nome_produto,preco,descricao,produto_usuario)
                    VALUES 
                    ('$categoria_produto','$nome_produto','$preco','$descricao','$cod_login')";

$mensagem = "Produto adicionado com sucesso!";  

}// fim cadastrar

//incluir a conexao
include("../connection/conexao.php");

//executar o SQl
$executa = $mysqli->query($sql);

// verificar se o sql foi executado e redirecionado para "lista de anuncios" com a mesagem de erro ou sucesso

if( $executa  ){
            header("location:index.php?pg=lista-anuncios&msg=$mensagem");
}else{
            header("location:index.php?pg=lista-anuncios&msg=Erro ao adicionar o produto, contate o administrador.");
}

?>