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


                <div class="carro_final">
                    <div class="name">
                        <p class="class">PhotoShop</p>
                        <p>R$90,00</p>
                    </div>
                </div>

                <div class="carro_final">
                    <div class="name">
                        <p class="class">Avast</p>
                        <p>R$99,00</p>
                    </div>
                </div>

                <div class="carro_final">
                    <div class="name">
                        <p class="class">Norton</p>
                        <p>R$249,00</p>
                    </div>
                </div>
            </div>

            <!--Pedclasso-->
            <div class="resultado">
                <h4 class="resumo">Resumo do pedido</h4>

                <div class="valor_final">
                    <p>Subtotal:</p>
                    <p>R$209,99</p>
                </div>
                <div class="valor_final">
                    <p>Frete:</p>
                    <p>R$12,00</p>
                </div>
                <div class="valor2_final">
                    <p>Cupom:</p>
                    <p>R$10,00</p>
                </div>

                <div class="valor_final">
                    <p>Total:</p>
                    <p>R$204,99</p>
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
                    <input class="input_final" type="text" placeholder="cupom">
                    <button class="botao_final" type="submit">aplicar</button>
                </div>
            </div>
            <div class="pag">
                <h4 class="resumo">Forma de Pagamento</h4>

                <div>
                    <form method="POST" action="index.php">
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