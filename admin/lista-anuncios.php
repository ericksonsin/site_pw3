<nav aria-label="breadcrumb">
  <ol class="breadcrumb">
    <li class="breadcrumb-item"><a href="index.php">Home</a></li>
    <li class="breadcrumb-item active" aria-current="page">Anúncios</li>
  </ol>
</nav>
<div class="card mb-5">
  <div class="row card-body">
    <div class="col-sm-9">
      <h4>Anúncios</h4>
    </div>

    <div class="col-sm-3">
      <a href="index.php?pg=form-anuncio&operacao=cadastrar" title="Nova Categoria">
        <i class="far fa-plus-square"></i> Novo Anúncio
      </a>
    </div>
  </div>
</div>

<!--receber e exibir a mensagem que esta sendo enviada via GET -->

<?php

if (isset($_GET['msg'])) {
  echo "<div class= 'alert alert-success'>" . $_GET['msg'] . " </div>";
}
?>

<table class="table table-condensed">
  <tr>
    <td><strong>cod Produto</strong></td>
    <td><strong>Categoria</strong></td>
    <td><strong>Produto</strong></td>
    <td><strong>Preço</strong></td>
  </tr>
    
  <?php
  // incluir a conexao 
  include("../connection/conexao.php");

  //criar uma consulta na tbl_produto
  $sql = "SELECT * FROM tbl_produto";

  //execultar a consulta
  $executa = $mysqli->query($sql);

  //obter o numero de linhas dessa consulta
  $totalLinhas = $executa->num_rows;

  //utilizando o while para exbir os produtos que foram cadastrados

  if( $totalLinhas < 1 ){
    echo "<tr>
    <td colspan='4'> Não existem anúncios cadastradas. </td>
    </tr>";

}else{
//obter os dados retornados pela consulta

while($dados = $executa->fetch_assoc() ){

?>

  <tr>
    <td scope="col"><?php echo $dados['cod_produto'];?> </td>
    <td scope="col"><?php echo $dados['categoria_produto'];?> </td>
    <td scope="col"><?php echo $dados['nome_produto'];?> </td>
    <td scope="col"><?php echo $dados['preco'];?> </td>
    <td><a href="#">Editar</a></td>
    <td><a href="#">Excluir</a></td>
  </tr>
<?php  }// fim do while
} //fim do else ?>
  
</table>