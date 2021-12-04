<?php
function cabecalho(){?>
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
<?php }
function rodape(){?>
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
<?php
}
function connect(){
    $conexao = mysqli_connect("localhost", "root", "", "bookfanatics");
    return($conexao);
}

function select($conexao,$parametro,$tabela){
    $query= "SELECT $parametro FROM $tabela";
    $retorno= mysqli_query($conexao, $query);
    return($retorno);
}
function selectwhere($conexao,$parametro,$tabela,$onde1,$onde2){
    $query= "SELECT $parametro FROM $tabela Where $onde1=$onde2";
    $retorno= mysqli_query($conexao, $query);
    return($retorno);
}

function deletewhere($conexao,$tabela,$onde1,$onde2){
    $query= "DELETE FROM $tabela Where $onde1=$onde2";
    $retorno= mysqli_query($conexao, $query);
    return($retorno);
}


/*
function inserir_produto($conexao,$nome,$descricao,$val_unitario,$categoria){
    $query = "INSERT INTO produtos(nome,descricao,val_unitario,categoria) values ('$nome','$descricao','$val_unitario','$categoria')";
$resultado = mysqli_query($conexao, $query);
return($resultado);
}

function inserir_imagem($conexao,$imagem,$nome,$tamanho,$tipo){
}

function select_a_pro($conexao){
    $query = "SELECT * FROM produto";
$retorno = mysqli_query($conexao, $query);
return($retorno);
}
function select_a_img(){
    $query = "SELECT * FROM imagem";
$retorno = mysqli_query($conexao, $query);
return($retorno);
}*/