<?php
session_start();
$conexao = mysqli_connect("localhost", "root", "", "bookfanatics");
if(!$conexao) {
    die("Conexao não deu certo" . mysqli_connect_error());
}
$nome=$_SESSION['usuario'];
$id_produto=implode( ',',$_SESSION["carrinho$nome"]);

$queryx = "INSERT INTO compra(id_cliente,id_produto) values ('$nome','$id_produto')";
echo mysqli_error($conexao);
$resx = mysqli_query($conexao, $queryx);

if($resx) {
    $mensa="<img src=imagens/cafe.png";
    $mensa2="Compra feita com sucesso!";
    $mensa3="<br><a href='index.php'>Voltar para a pagina principal</a>";
}else {
    $erro="Algo está errado, tente reenviar a compra!";
    echo mysqli_error($conexao);
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

    <!--Cabeçalho-->
    <header class="logo">
        <img src="imagens/logotipo.png" alt="Logo">
    </header>
    <?php if(isset($erro)){?>
        <div class="align_inserir">
<div>
          <p><?=$erro?></p>
</div>
</div>
      <?php  die();}?>
    <div class="align_inserir">
          <img class="limit_inserir2" src<?=$mensa?>>
<div>
          <p><?=$mensa2?></p>
</div>
<div>
          <p><?= $mensa3?></p>
</div>
</div>
      </html>
    