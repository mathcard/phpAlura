<?php 
include("cabecalho.php"); 
include("conecta.php");
include("banco-produto.php"); 



$nome = $_POST["nome"];
$preco = $_POST["preco"];
$descricao = $_POST["descricao"];
$categoria_id = $_POST["categoria_id"];
//$conexao = mysqli_connect('localhost', 'root', '', 'loja');
//$conexao = mysqli_connect('localhost', 'root', 'math10', 'loja');

if(insereProduto($conexao, $nome, $preco, $descricao, $categoria_id)){   ?>
    <p class="text-success">
    Produto <?= $nome; ?>, <?= $preco; ?> adicionado com sucesso!    
    </p>
<?php 
}else{     
    $msg = mysqli_error($conexao);
    ?>
    <p class="text-danger"> O produto não foi adicionado: <?= $msg ?>  </p>
<?php
}
?>
<?php include("rodape.php"); ?>
