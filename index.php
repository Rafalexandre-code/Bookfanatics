<?php
session_start();
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

        <?php
        if(isset($_SESSION['usuario'])){
            $nome= $_SESSION["usuario"]?>
             <div class="topo">
            <a class="cart_usu" href="comprar.php">
                <ion-icon name="cart"></ion-icon>
            </a>
                <div class="flex">
                    <a class="icon_usu" href="login.php">
                        <ion-icon name="person"></ion-icon>
                    </a>
                    <div class="mg8_usu">
                        <a class="entrar" href="login.php"><?=$nome?></a>
                    </div>
        </div>
            <?php }else{
        ?>
        <div class="topo">
            <a class="cart" href="comprar.php">
                <ion-icon name="cart"></ion-icon>
            </a>
            <div class="logar">
                <div class="flex">
                    <a class="icon" href="login.php">
                        <ion-icon name="person"></ion-icon>
                    </a>
                    <div class="mg8">
                        <a class="entrar" href="login.php">Entrar</a>
                    </div>
                </div>

                <div class="flex">
                    <a class="icon" href="cadastro.php">
                        <ion-icon name="people"></ion-icon>
                    </a>
                    <div class="mg8">
                        <a class="entrar" href="cadastro.php">Cadastrar-se</a>
                    </div>
                </div>
            </div>
        </div>
<?php }?>
</header>
<?php
if(isset($_GET['cate']) && $_GET['cate']!='Tudo'){
$cate=$_GET['cate'];

    $query = "SELECT * FROM produto Where categoria='$cate'";
    $retorno= mysqli_query($conexao, $query);
    /*$retorno=selectwhere($conexao,'*','produto','categoria',$cate);*/
}
else{
    $retorno=select($conexao,'*','produto');
}
    ?>
    <!--Em baixo do logo-->
    <div class="abas">
    <div class="assistencia">
            <p><a class="caminho" href="index.php?cate=Tudo">Tudo</a></p>
        </div>
        <?php 
        $retorno2 =select($conexao,'*','dashboard');
while($categoria = mysqli_fetch_assoc($retorno2)){?>
        <div class="assistencia">
            <p><a class="caminho" href="index.php?cate=<?=$categoria['categoria']?>"><?=$categoria['categoria']?></a></p>
        </div>
<?php }?>
    </div>


    <!--Caixas-->
    <div class="cx">
     <?php while ($prod= mysqli_fetch_assoc($retorno)):?>
        <?php
      $idimg=$prod['id'];
                    $retornoimg= selectwhere($conexao,'*','imagem','idprod',$idimg);
                    $retornoimg=mysqli_fetch_assoc($retornoimg);
                    $imagem='<img class="limit_imgindex" src="data:image/jpeg;base64,'.base64_encode($retornoimg['imagem1']).'"/>';
?>

    <div class="borda">
        <div>
      <a href="exibir.php?id=<?= $prod['id']?>"><p><?=$imagem?></p></a>
     </div>
       <div class="link">
       <a class="titulo_index" href="exibir.php?id=<?= $prod['id']?>"><?= $prod['nome'] ?></a>
        </div>
        <a class="preco" href="exibir.php?id=<?= $prod['id']?>">R$ <?= number_format($prod["val_unitario"], 2, ',', '.' )?></a>
    </div>
     <?php endwhile?> 
     </div>
     
     
<!--Rodape-->
<?php rodape();?>
