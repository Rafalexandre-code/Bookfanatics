<?php
/*conexao*/
$conexao = mysqli_connect("localhost", "root", "", "bookfanatics");
if(!$conexao) {
    echo mysqli_error($conexao);
    die("Conexao não deu certo" . mysqli_connect_error());
    
}

/*post*/
$nome=$_POST['nome'];
$descricao=$_POST['descricao'];
$val_unitario=$_POST['val_unitario'];
$categoria=$_POST['categoria'];
$stock=$_POST['stock'];
number_format($stock, 2, ',', '.' );
/*imagem*/
$imagem1 = $_FILES['imagem1']['tmp_name'];
$tamanho1 = $_FILES['imagem1']['size'];
$tipo1 = $_FILES['imagem1']['type'];
$nome1 = $_FILES['imagem1']['name'];

    $fp = fopen($imagem1, "rb");
    $conteudo = fread($fp, $tamanho1);
    $conteudo = addslashes($conteudo);
    fclose($fp);

/*outras coisas*/
$queryx = "INSERT INTO produto(nome,descricao,val_unitario,categoria,stock) values ('$nome','$descricao','$val_unitario','$categoria','$stock')";
echo mysqli_error($conexao);
$resx = mysqli_query($conexao, $queryx);

$idprod= mysqli_insert_id($conexao);

/*imagem*/
$queryimg = "INSERT INTO imagem (nome_imagem1,tamanho_imagem1,tipo_imagem1,imagem1,idprod) values ('$nome1','$tamanho1','$tipo1','$conteudo','$idprod')";
$resimg = mysqli_query($conexao, $queryimg);

if($resx && $resimg) {
    $mensa="<img src=imagens/cafe.png";
    $mensa2="Produto inserido com sucesso!";
    $mensa3="<br><a href='dashboard.php'>Voltar para a Dashboard</a>";
}else {
    $mensa="Algo está errado, tente reenviar o formulario!";
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
     <img  src="imagens/logotipo.png" alt="Logo">
</header>
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

      