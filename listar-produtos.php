<?php   
include("cabecalho.php"); 
include("conecta.php"); 
include("banco-produto.php"); 
    if(array_key_exists("removido", $_GET) && $_GET["removido"]==true){ ?>
    <p class="alert-success"> Produto apagado com sucesso.</p>
<?php
}

?>
<table class="table table-striped table-bordered">
    <?php
    
    $produtos = listaProdutos($conexao);
    foreach($produtos as $produto){        
    ?>
        <tr>
            <td><?=$produto['nome']?></td>
            <td><?=$produto['preco']?></td>
            <td>
                <a href="remover-produto.php?id=<?=$produto['id']?>"><button class="btn btn-danger">Remover</button></a>                
            </td>
            
        </tr>
     <?php   
        }
    ?>
    </table>

<?php include("rodape.php"); ?>