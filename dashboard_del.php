
<?php
require("funcoes.php");
$conexao = connect();
if(!$conexao) {
    die("Conexao não deu certo" . mysqli_connect_error());
}
cabecalho();
?>
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
            <a class="carrinho_dash" href="comprar.php">Carrinho</a>
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
            <a class="nov_dash" href="dashboard.php">
                <p>Todos Produtos</p>
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
            <form method="POST" action="dashboard.php">
            <button class="editar_dash" type="submit">Estoque</button>
</div>
                <?php 
                $retorno=select($conexao,'*','produto');

                 while ($prod= mysqli_fetch_assoc($retorno)):?>
                <div class="carro">
<div class="img_limit2">
<?php
$idimg=$prod['id'];
$retornoimg=selectwhere($conexao,'*','imagem','idprod',$idimg);
                    $retornoimg=mysqli_fetch_assoc($retornoimg);
                    $imagem='<img class="img_limit" src="data:image/jpeg;base64,'.base64_encode($retornoimg['imagem1']).'"/>';
?>
<p><?=$imagem?></p>
                 </div>
                    <div class="name">
                        <p class="name_dash2"><?= $prod['nome']?></p>
                    </div>
                    <div class="post_dash">
                    <p class="stock2_dash"><?= $prod['stock']?>un</p>
                        <div>
                        <p class="preco2_dash">R$ <?= number_format($prod["val_unitario"], 2, ',', '.' )?></p>
</div>
                    <button name="id_del<?=$prod['id']?>" value="<?=$prod['id']?>" class="deletar_dash" type="submit">Deletar</button>
                    </div>
                </div>
                <?php endwhile?> 
</form>

</div>

</body>
</html>