<?php   
include("conecta.php"); 
include("banco-produto.php"); 

$id = $_POST["id"];
removeProduto($conexao, $id);
header("Location: listar-produtos.php?removido=true");
die();
?>