<?php

$conexao = mysqli_connect("localhost", "root", "", "bookfanatics");
if(!$conexao) {
    die("Conexao não deu certo" . mysqli_connect_error());
}
session_start();
?>
<!DOCTYPE html>
<html>
<head>
<link rel="shortcut icon" href="imagens/logotipoicon.ico" />
    <title>BookFanatics</title>
    <meta charset="utf-8">
</head>

<body>
    <script src="https://unpkg.com/ionicons@4.5.10-0/dist/ionicons.js"></script>
    <link href="https://fonts.googleapis.com/css2?family=Niconne&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="index.css">

    <!--Cabeçalho-->
    <header class="logo">
            <img src="imagens/logotipo.png" alt="Logo">

        <form class="pesquisa" action="pagina/" method="post">
            <input class="input_pesquisa" type="search" placeholder="Buscar" required>
            <button class=botao_index type="submit">
                <ion-icon name="search"></ion-icon>
            </button>
        </form>


        <div class="carro_dash">
            <a class="buy_dash" href="comprar.html">
                <ion-icon name="cart"></ion-icon>
            </a>
            <a class="carrinho_dash" href="index.php">Pagina inicial</a>
        </div>

        <div class="minha_dash">
            <a class="buy_dash" href="Dashboard.php">
                <ion-icon name="person"></ion-icon>
            </a>
            <a class="carrinho_dash" href="Dashboard.php">Minha conta</a>
        </div>
    </header>

    <!--Dashboasrd-->
    <div class="dash_dash">
        <div class="cx_dash">
            <h4 class="alteracao_dash">Alteração</h4>
            <a class="nov_dash" href="cadastrar_produto.php">
                <p>Novo Produto</p>
            </a>

            <h5 class="font_dash">Relatórios</h5>

            <a class="nov_dash" href="dashboard.php">
                <p>Relatorio 1</p>
            </a>
            <a class="nov_dash" href="dashboard.php">
                <p>Relatorio 2</p>
            </a>
            <a class="nov_dash" href="dashboard.php">
                <p>Relatorio 3</p>
            </a>
            <h6 class="font_dash">Configs</h6>
            <a class="nov_dash" href="inserir_categoria.php">
                <p>Categorias</p>
            </a>
        </div>
        
<div class="ml_dash">
            <div class="flex">
            <h3 class="fs_dash">Produtos cadastrados</h3>
            <form method="POST" action="dashboard_del.php">
            <button class="editar_dash" type="submit">Deletar</button>
</form>


<!--mandar-->
            <form enctype="multipart/form-data" method="POST" action="dashboard.php">
            <button class="stockbotao_dash" type="submit">Salvar</button>

</div>
<?php            $query2 = "SELECT * FROM produto";
                    $retorno2= mysqli_query($conexao, $query2);?>
                 <?php while ($prod2= mysqli_fetch_assoc($retorno2)):
                 $ident=$prod2['id'];
                    if(isset($_POST["id_del$ident"])){
                        $querydel = "DELETE FROM produto WHERE id= '$ident'";
                        $retornodel = mysqli_query($conexao, $querydel);
                        $querydelimg = "DELETE FROM imagem WHERE idprod= '$ident'";
                        $retornodelimg = mysqli_query($conexao, $querydelimg);
                    }
                    elseif(isset($_POST["stock$ident"])){
                    $nome=$_POST["nome$ident"];
                    $stock=$_POST["stock$ident"];
                    $descri=$_POST["descri$ident"];
                    $queryupd="UPDATE produto SET stock='$stock',nome='$nome',descricao='$descri' WHERE id='$ident'";
                    $retornoupd = mysqli_query($conexao, $queryupd);

                    if(isset($_FILES["imagem1$ident"])){

                       /*imagem*/
$nome1 = $_FILES["imagem1$ident"]['name'];
$tamanho1 = $_FILES["imagem1$ident"]['size'];
$tipo1 = $_FILES["imagem1$ident"]['type'];
$imagem1 = $_FILES["imagem1$ident"]['tmp_name'];
print_r($nome1);

$queryimg = "UPDATE imagem SET nome_imagem1='$nome1',tamanho_imagem1='$tamanho1',tipo_imagem1='$tipo1',imagem1='$imagem1' WHERE idprod='$ident'";
$resimg = mysqli_query($conexao, $queryimg);
                    }
                    }
                    
                    ?>
                    <?php endwhile?> 

                
                <?php $conexao = mysqli_connect("localhost", "root", "", "bookfanatics");
                $query = "SELECT * FROM produto";
                    $retorno= mysqli_query($conexao, $query);?>
                 <?php while ($prod= mysqli_fetch_assoc($retorno)):?>
                <div class="carro">
<div class="img_limit2">
<?php
$idimg=$prod['id'];
                    $queryimg="SELECT * FROM imagem where idprod=$idimg";
                    $retornoimg= mysqli_query($conexao, $queryimg);
                    $retornoimg=mysqli_fetch_assoc($retornoimg);
                    $imagem='<img class="img_limit" src="data:image/jpeg;base64,'.base64_encode($retornoimg['imagem1']).'"/>';
?>
<p><?=$imagem?></p>
                 </div>
                    <div class="name">
                        <input name="nome<?=$prod['id']?>" class="name_dash" type="text" value="<?= $prod['nome']?>">
                    </div>
                    <div class="post_dash">
                    <input name="stock<?=$prod['id']?>" class="stock_dash" type="number" value="<?= $prod['stock']?>">
                    <label class="stocklabel_dash" for="stock">un</label> 
                    <p class="preco_dash">R$ <?= number_format($prod["val_unitario"], 2, ',', '.' )?></p>
     <div class="img_dashmudar">
     <p class="up_dashmudar">Trocar imagens do produto:</p>
       <div>
     <input name="imagem1<?=$prod['id']?>" class="file_cadastroproduto" type="file">
</div>
</div>
                        <div>
                        <textarea name="descri<?=$prod['id']?>" class="textare_dash"><?= $prod['descricao']?></textarea> 
</div>
                    </div>
                </div>
                <?php endwhile?> 
                <input type="hidden" name="MAX_FILE_SIZE" value="99999999"/>
                </form>

        </div>

</body>

</html>