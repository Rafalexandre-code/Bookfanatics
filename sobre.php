<!DOCTYPE html>
<html>
<?php
session_start();
require('funcoes.php');

cabecalho();
?>
    <!--Cabeçalho-->
    <header class="logo">
        <img src="imagens/logotipo.png" alt="Logo">
    <div class="carro_sobre">
            <a class="buy_dash" href="comprar.html">
                <ion-icon name="cart"></ion-icon>
            </a>
            <a class="carrinho_dash" href="index.php">Pagina inicial</a>
        </div>
        </header>
    <!--Sobre-->
    <div class="sobre">
        <h2 class="descricao">Sobre a loja</h2>
        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Recusandae adipisci sunt mollitia tenetur possimus
            corporis? Ipsum, voluptatibus, illum quia vel rem facere consequuntur delectus velit corrupti tempore est
            harum laboriosam?
            Lorem ipsum dolor sit amet consectetur adipisicing elit. Doloremque, dolorum delectus. Ad error tenetur fuga
            iste rerum saepe, eligendi suscipit consectetur debitis laboriosam adipisci veritatis quclassem. Deserunt,
            corrupti iusto? Odio?
        </p>
    </div>

    <div class="mvv">

        <div class="descricao1">
            <p class="descricao2">Missão</p>
            <p>Lorem ipsum dolor sit, amet consectetur adipisicing elit. Facere fugit soluta voluptatibus eum, odit ab
                ducimus possimus debitis, ipsam recusandae nulla earum temporibus sapiente cum excepturi! Praesentium
                quibusdam quas debitis.</p>
        </div>

        <div class="descricao1">
            <p class="descricao2">Valores</p>
            <p>Lorem ipsum, dolor sit amet consectetur adipisicing elit. Voluptatum odio deserunt temporibus porro a
                aspernatur explicabo ea excepturi minus distinctio veritatis necessitatibus molestias, assumenda
                doloribus ut ipsum! Atque, voluptatibus non!</p>
        </div>

        <div class="descricao1">
            <p class="descricao2">Visão</p>
            <p>Lorem ipsum, dolor sit amet consectetur adipisicing elit. Delectus dolorem voluptatum quas quis saepe
                hic, consequatur soluta sit quae quo distinctio recusandae ratione dolorum aliquam neque explicabo?
                Eveniet, reprehenderit saepe.</p>
        </div>
    </div>

    <div class="sobre">
        <h3>Desenvolvimento</h3>
        <div class="dev"><img src="imagens/desenvolvedor.png">
            <p class>Rafael Alexandre de Pinho Lopes</p>
            <p>Cores,codigo,imagens</p>
            <?php
            if(isset($_SESSION['usuario'])){
                if($_SESSION['usuario']=='admin'){
                ?>
            <a href="dashboard.php">DashBoard</a>
            <?php }}?>
        </div>
    </div>

    </div>

</html>