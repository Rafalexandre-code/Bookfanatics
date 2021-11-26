<?php
session_start();
$conexao = mysqli_connect("localhost", "root", "", "bookfanatics");
if(!$conexao) {
    die("Conexao não deu certo" . mysqli_connect_error());
}
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
    <link rel="stylesheet" href="index1.css">

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
if(isset($_GET['cate'])){
$cate=$_GET['cate'];
    $query = "SELECT * FROM produto Where categoria='$cate'";
    $retorno= mysqli_query($conexao, $query);
}
else{
    $query = "SELECT * FROM produto";
    $retorno= mysqli_query($conexao, $query);
}
    ?>
    <!--Em baixo do logo-->
    <div class="abas">
    <div class="assistencia">
            <p><a class="caminho" href="index.php?cate=Tudo">Tudo</a></p>
        </div>
        <?php $query2 = "SELECT * from dashboard";
$retorno2 = mysqli_query($conexao, $query2);
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
                    $queryimg="SELECT * FROM imagem where idprod=$idimg";
                    $retornoimg= mysqli_query($conexao, $queryimg);
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
     <!--
     <div class="borda">
      <a href="exibir.php"><img src="Avast.jpg" alt="Avast"></a>
       <div class="link">
         <a href="exibir.php">Avast </a>
       </div>
       <p class="preço">R$99,00/mês</p>
     </div>

      <div class="borda">
        <a href="exibir.php"><img src="Filmora.png" alt="Filmora"></a>
         <div class="link">
          <a href="exibir.php">Filmora Pro </a>
          </div> 
          <p class="preço">R$359,99/ano</p>
      </div>
  </div>
    -->

    <!--AD
   <div class="ad">
      <div class="anun"></div>-->
      
<!--Rodape-->
<footer class="rodape">
        <p>BookFanatics</p>
        <p><a class="caminho" href="sobre.php">Sobre o BookFanatics</a></p>
        <p>Atendimento ao cliente:+55(13)98134-4580</p>
        <div class="email">
            <ion-icon class="email2" name="mail"></ion-icon>
            <p>Email:Program@gmail.com</p>
        </div>
        <div class="email">
            <ion-icon name="logo-facebook"></ion-icon>
            <ion-icon name="logo-instagram"></ion-icon>
            <ion-icon name="logo-twitter"></ion-icon>
        </div>
     </footer>
</body>
