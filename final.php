<?php
session_start();
$conexao = mysqli_connect("localhost", "root", "", "bookfanatics");
if(!$conexao) {
    die("Conexao não deu certo" . mysqli_connect_error());
}
$nome=$_SESSION['usuario'];
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

    <!--carrinho-->
    <div class="tudo_final">

        <div class="pedido_final">
            <div>

                <p class="meu">MEU PEDIDO</p>
                <div>
                    <p class="produto_final"> <span>Descriçao do Produto</span> Preço</p>
                </div>

                <!--produtos-->

     <?php 
     $valor_tudo=0;
     $valor_frete=12.50;
          $carrinho=$_SESSION["carrinho$nome"];
          foreach($carrinho as $id){      
    $query ="SELECT * FROM produto WHERE id = '$id'";
    $retorno = mysqli_query($conexao, $query);
    $prod=mysqli_fetch_assoc($retorno);
    $queryimg="SELECT * FROM imagem where idprod='$id'";

    $valor_tudo= $prod['val_unitario']+$valor_tudo;
?>
                <div class="carro_final">
                    <div class="name">
                        <p class="class"><?= $prod['nome']?></p>
                        <p>R$<?= $prod['val_unitario']?></p>
                    </div>
                </div>
<?php }?>

            </div>

            <!--Pedclasso-->
            <div class="resultado">
                <h4 class="resumo">Resumo do pedido</h4>

                <div class="valor_final">
                    <p>Subtotal:</p>
                    <p>R$<?= $valor_tudo?></p>
                </div>
                <div class="valor_final">
                    <p>Frete:</p>
                    <p>R$1<?= $valor_frete?></p>
                </div>
                <div class="valor2_final">
                    <p>Cupom:</p>
                    <p>R$10,00</p>
                </div>

                <div class="valor_final">
                    <p>Total:</p>
                    <p><?= $valor_tudo+$valor_frete?></p>
                </div>
            </div>
        </div>

        <div class="entrega1">
            <div class="entrega2">
                <p class="endereço_final">Endereço de entrega</p>
                <p>Lorem, ipsum dolor sit amet consectetur adipisicing elit. Quos molestias iure recusandae voluptatem
                    eum, nemo commodi facere reprehenderit dolor. Sit aut, rerum maxime ipsa minima voluptas vel ducimus
                    quisquam adipisci?</p>
                <a href="final.php">alterar endereço de entrega</a>

                <div>
                    <p class="endereço_final">Possue Cupom de desconto?</p>
                    <form method="POST" action="final.php">
                    <input name="cupom" class="input_final" type="text" placeholder="cupom">
                    <button class="botao_final" type="submit">aplicar</button>
          </form>
                </div>
            </div>
            <div class="pag">
                <h4 class="resumo">Forma de Pagamento</h4>

                <div>
                    <form method="POST" action="compra_cadastrar.php">
                        <div class="forma">
                            <input class="for" name="pag" type="radio" required>
                            <label for="for">Boleto bancario</label>
                        </div>

                        <div>
                            <input class="for" name="pag" type="radio">
                            <label for="for">Cartao de credito</label>
                        </div>

                        <div>
                            <input class="for" name="pag" type="radio">
                            <label for="for">Cartao de debito</label>

                        </div>
                        <p><button class="cont" type="submit">Finalizar pedido</button></p>
                    </form>
                </div>
            </div>
        </div>

    </div>

</body>