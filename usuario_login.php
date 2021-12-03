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
    <link rel="stylesheet" href="index.css">

     <!--Cabeçalho-->
     <header class="logo">
     <img  src="imagens/logotipo.png" alt="Logo">
</header>
<?php
if(!$conexao) {
    echo mysqli_error($conexao);
    die("Conexao não deu certo" . mysqli_connect_error());
}
session_start();
if(isset($_SESSION['usuario'])){
    unset($_SESSION['usuario']);
}

$email=$_POST['email'];
$senha=$_POST['senha'];
$email_root='admin@gmail.com';
$senha_root='123';
if($email =='admin@gmail.com' && $senha =='123'){
    $_SESSION['usuario']='admin';
    $_SESSION['id']='0';?>
    <div class="align_inserir">
          <img class="limit_inserir" src=imagens/gato_fofo.gif>
<div>
          <p>Parabéns você foi logado com exito admin!</p>
</div>
<div>
          <p><br><a href='index.php'>Ir para a Pagina inicial</a></p>
</div>
<div>
    <p>Bem vindo(a) <?=$_SESSION['usuario']?></p>
</div>
</div>
<?php die();}

//Verifica o campo email.
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
    /*login*/
$queryx = "SELECT id,nome,email,senha from usuario";
$resx = mysqli_query($conexao, $queryx);
$prov="null";
while ($usu= mysqli_fetch_assoc($resx)):
if($usu['email'] ==$email && $usu['senha']==$senha){
    $_SESSION['usuario']=$usu['nome'];
    $_SESSION['id']=$usu['id'];
    $mensa="<img src=imagens/gato_fofo.gif";
    $mensa2="Parabéns você foi logado com exito!";
    $mensa3="<br><a href='index.php'>Ir para a Pagina inicial</a>";
    $prov="true";
}
endwhile;
if($prov=="true"){
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
      <?php }else{
          $mensa="<img src=imagens/erro.png";
          $mensa2="<br>";
          $mensa3="Email ou senha invalidos <a href='login.php'>Tente novamente</a>";?>
          <div class="align_inserir">
          <img class="limit_inserir2" src<?=$mensa?>>
<div>
          <p><?=$mensa2?></p>
</div>
<div>
          <p><?= $mensa3?></p>
</div>
</div>

     <?php }?>

      </body>
     </html>