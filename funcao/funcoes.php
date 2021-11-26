<?php

function connect(){
    $conexao = mysqli_connect("localhost", "root", "", "bookfanatics");
if(!$conexao) {
    die("Conexao não deu certo" . mysqli_connect_error());
    return($conexao);
} 
}

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
}