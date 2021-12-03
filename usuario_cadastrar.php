<?php
require("funcoes.php");
$conexao = connect();
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
    <link rel="stylesheet" href="index3.css">

     <!--Cabeçalho-->
     <header class="logo">
     <img  src="imagens/logotipo.png" alt="Logo">
</header>
<?php
if(!$conexao) {
    echo mysqli_error($conexao);
    die("Conexao não deu certo" . mysqli_connect_error());
}

$nome=$_POST['nome'];
$sobrenome=$_POST['sobrenome'];
$email=$_POST['email'];
$senha=$_POST['senha'];
$confsenha=$_POST['confsenha'];
$cpf=$_POST['cpf'];
$cidade=$_POST['cidade'];
$endereco=$_POST['endereco'];
$cep=$_POST['cep'];
$uf=$_POST['uf'];
$tel=$_POST['tel'];

if($senha != $confsenha){
    $mensa="<img src=imagens/erro.png";
    $mensa2="<br><a href='cadastro.php'>Sua senha ou confirmação de senha esta errada volte para fazer o cadastro</a>";?>
    <div class="align_inserir">
          <img class="limit_inserir" src<?=$mensa?>>
<div>
          <p><?=$mensa2?></p>
</div>
</div>
    <?php die();
}

if(empty($nome) OR !strstr($nome,''))
{
    $mensa="<img src=imagens/erro.png";
    $mensa2="<br><a href='cadastro.php'>Favor digitar seu nome</a>";?>
    <div class="align_inserir">
          <img class="limit_inserir" src<?=$mensa?>>
<div>
          <p><?=$mensa2?></p>
</div>
</div>  
   <?php die();
}

//Verifica se o campo sobrenome não está em branco.
if(empty($sobrenome) OR !strstr($nome,''))
{
    $mensa="<img src=imagens/erro.png";
    $mensa2="<br><a href='cadastro.php'>Favor digitar seu sobrenome</a>";?>
    <div class="align_inserir">
          <img class="limit_inserir" src<?=$mensa?>>
<div>
          <p><?=$mensa2?></p>
</div>
</div>
    <?php die();
}

//Verifica se o campo email não está em branco.
if(strlen($email)<8 || !strstr($email,'@'))
{
    $mensa="<img src=imagens/erro.png";
    $mensa2="<br><a href='cadastro.php'>Favor digitar seu email corretamente</a>";?>
    <div class="align_inserir">
          <img class="limit_inserir" src<?=$mensa?>>
<div>
          <p><?=$mensa2?></p>
</div>
</div>
     <?php die();   
}

//Verifica se o campo telefone está sendo preenchido com texto.
if(!is_numeric($tel)) 
{
    $mensa="<img src=imagens/erro.png";
    $mensa2="<br><a href='cadastro.php'>Preencha o campo telefone somente com números.</a>";?>
    <div class="align_inserir">
          <img class="limit_inserir" src<?=$mensa?>>
<div>
          <p><?=$mensa2?></p>
</div>
</div>
     <?php die();
}

    /*outras coisas*/
$queryx = "INSERT INTO usuario(nome,sobrenome,email,senha,cpf,cidade,endereco,cep,uf,telefone) values ('$nome','$sobrenome','$email','$senha','$cpf','$cidade','$endereco','$cep','$uf','$tel')";
echo mysqli_error($conexao);

$resx = mysqli_query($conexao, $queryx);
if($resx) {
    $mensa="<img src=imagens/cafe.png";
    $mensa2="Parabéns você foi registrado com exito!";
    $mensa3="<br><a href='index.php'>Ir para a Pagina inicial</a>";
    session_start();
    $_SESSION['id']=mysqli_insert_id($conexao);
    $usuario = $_SESSION['usuario']="$nome";

}else {
    $mensa="Algo está errado, tente reenviar o formulario!";
    echo mysqli_error($conexao);
}

?>

      <div class="align_inserir">
          <img class="limit_inserir" src<?=$mensa?>>
<div>
          <p><?=$mensa2?></p>
</div>
<div>
          <p><?= $mensa3?></p>
</div>
<div>
    <p>Bem vindo(a) <?=$_SESSION['usuario']?></p>
</div>
</div>
      </html>