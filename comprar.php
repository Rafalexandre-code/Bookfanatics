<?php
session_start();
require("funcoes.php");
$conexao = connect();
if(!$conexao) {
    die("Conexao não deu certo" . mysqli_connect_error());
}
$nome=$_SESSION['usuario'][0];
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

    <?php 
    
if(isset($_GET['del'])){
    if(($key = array_search($_GET['del'], $_SESSION["carrinho$nome"])) !== false){
        unset($_SESSION["carrinho$nome"][$key]);
    }
}
    if(isset($_SESSION['usuario'][0])){
        if(isset($_GET['id'])){
            if(isset($_SESSION["carrinho$nome"])){
            if(in_array($_GET['id'],$_SESSION["carrinho$nome"])) { 
            }else{
                $_SESSION["carrinho$nome"][]=$_GET['id'];
            }
            }else{
                $_SESSION["carrinho$nome"][]=$_GET['id'];
            }
        }
 }else{?>
   <p class="login_cart">você precisa fazer o  <a href="login.php">login</a> primeiro antes de acessar o carrinho</p>
<?php die();}?>


    <!--carrinho-->
    <div class="tudo">

        <div>
            <p class="meu">MEU CARRINHO</p>
            <div class="flex">
                <p class="span_cart"> Produto</p>
                <p class="span_cart4"> Quantidade</p>
                <p class="span_cart2"> Preço</p>
                <p class="span_cart3"> Remover</p>
            </div>

            <!--produtos-->
<form method="POST" action="final.php">
                

<?php 
$valor_tudo=0;
$valor_frete=12.50;
$carrinho=$_SESSION["carrinho$nome"];
foreach($carrinho as $id){      
    $query ="SELECT * FROM produto WHERE id = '$id'";
    $retorno = mysqli_query($conexao, $query);
    $prod=mysqli_fetch_assoc($retorno);
    $queryimg="SELECT * FROM imagem where idprod='$id'";
                    $retornoimg= mysqli_query($conexao, $queryimg);
                    $retornoimg=mysqli_fetch_assoc($retornoimg);
                    $imagem='<img class="img_cart" src="data:image/jpeg;base64,'.base64_encode($retornoimg['imagem1']).'"/>';

                    $valor_tudo= $prod['val_unitario']+$valor_tudo;
?>


<div class="carro">
    <?=$imagem?>
                    <div class="name_cart">
                        <p><?= $prod['nome']?></p>
                    </div>
                    <div class="post_cart">
                        <select class="selecionar">
                            <option>1</option>
                            <option>2</option>
                            <option>3</option>
                            <option>4</option>
                            <option>5</option>
                            <option>6</option>
                            <option>7</option>
                            <option>8</option>
                            <option>9</option>
                            <option>10</option>
                            <option>11</option>
                            <option>12</option>
                        </select>
                        
                        
                    </div>
                    <p class="preco_cart"><?= $prod['val_unitario']?></p>
                    <a class="lixo_cart" href="comprar.php?del=<?= $id?>"><ion-icon name="trash"></ion-icon></a>
                </div>
                

<?php }?>
         

        </div>

        <div class="resultado">
            <h4 class="resumo">Resumo do pedido</h4>

            <div class="valor">
                <p>Subtotal: R$</p>
                <p><?= $valor_tudo?></p>
            </div>
            <div class="valor_frete">
                <p>Frete: R$</p>
                <p><?= $valor_frete?></p>
            </div>

            <div class="valor">
                <p>Total: R$</p>
                <p><?= $valor_tudo+$valor_frete?></p>
            </div>

            <!--continuar-->
            <p><button class="continuar" type="submit">Continuar</button></p>
            </form>


            <div class="cupom">
                <p>possui cupom ou vale?</p>
                <p>você poderá usa-lo na etapa de pagamento</p>
            </div>


        </div>
    </div>

</body>