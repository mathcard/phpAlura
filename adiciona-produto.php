<?php include("cabecalho.php"); ?>
<?php
function insereProduto($conexao, $nome, $preco){
    $query = "insert into produtos values (DEFAULT, '{$nome}', '{$preco}')";
    return mysqli_query($conexao, $query);
}

$nome = $_GET["nome"];
$preco = $_GET["preco"];
$conexao = mysqli_connect('localhost', 'root', 'math10', 'loja');

if(insereProduto($conexao, $nome, $preco)){   ?>
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
