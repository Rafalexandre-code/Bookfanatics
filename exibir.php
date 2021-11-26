<?php

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
    <link rel="stylesheet" href="index.css">

    <?php
$id = $_GET["id"];
$conexao = mysqli_connect("localhost", "root", "", "bookfanatics");
if(!$conexao) {
    die("Conexao não deu certo" . mysqli_connect_error());
} 
$query = "SELECT * FROM produto WHERE id = '$id'";
$retorno = mysqli_query($conexao, $query);
$exibir = mysqli_fetch_assoc($retorno);
$nome = $exibir["nome"];
$descri = $exibir["descricao"];
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
        </header>

  <!--destaque-->
  
  <!--exibir-->
  <div class="tudo_exibir">
  <div class="flex_exibir">
    
    <?php
                    $queryimg="SELECT * FROM imagem where idprod=$id";
                    $retornoimg= mysqli_query($conexao, $queryimg);
                    $retornoimg=mysqli_fetch_assoc($retornoimg);
                    $imagem='<img class="img_exibir" src="data:image/jpeg;base64,'.base64_encode($retornoimg['imagem1']).'"/>';
?>
  <?=$imagem?>

      <div>
       <h2 class="text_exibir"><?=$exibir['nome']?></h2>
</div>
         <div>
           <p class="preço_exibir">R$<?=$exibir['val_unitario']?></p>
</div>
</div>
<div>
    <p class="codigo_exibir">Cod. Produto:<?=$exibir['id']?></p>
</div>
          <div class="flex">
          <ion-icon class="star_exibir" name="star"></ion-icon>
          <ion-icon class="star_exibir" name="star"></ion-icon>
          <ion-icon class="star_exibir" name="star"></ion-icon>
          <ion-icon class="star_exibir" name="star-half"></ion-icon>
          <ion-icon class="star_exibir" name="star-outline"></ion-icon>
        </div>
        

        <div>
       <p class="descricao_exibir"><?=$exibir['descricao']?></p>
</div>
<div>
   <a class="comprar_exibir" href="comprar.html">Comprar</a>
</div>

</div>
      </div>
   
</body>