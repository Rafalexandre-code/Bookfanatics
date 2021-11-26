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
    <link rel="stylesheet" href="index1.css">

    <!--Cabeçalho-->
    <header class="logo">
        <img src="imagens/logotipo.png" alt="Logo">
    </header>

    <!--carrinho-->
    <div class="tudo">

        <div>
            <p class="meu">MEU CARRINHO</p>
            <div>
                <p class="produto"> <span class="span_cart">Produto</span> Quantidade Remover Preço</p>
            </div>


            <!--produtos-->

            <form method="POST" action="final.php">
                <div class="carro">

                    <img class="limitar_img" src="imagens/provisorio/spotify.png">
                    <div class="name">
                        <p>PhotoShop</p>
                    </div>
                    <div class="post">

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

                        <ion-icon class="lixo" name="trash"></ion-icon>
                        <p class="preço">R$90,00</p>
                    </div>
                </div>


                <div class="carro">

                    <img class="limitar_img" src="imagens/provisorio/Avast.jpg">
                    <div class="name">
                        <p>Avast</p>
                    </div>

                    <div class="post">

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

                        <ion-icon class="lixo" name="trash"></ion-icon>
                        <p class="preço">R$99000,00</p>
                    </div>
                </div>

                <div class="carro">
                    <img class="limitar_img" src="imagens/provisorio/Filmora.png">
                    <div class="name">
                        <p>Avasthasdsjdh</p>
                    </div>

                    <div class="post">

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

                        <ion-icon class="lixo" name="trash"></ion-icon>
                        <p class="preço">R$99000,00</p>
                    </div>
                </div>
        </div>

        <div class="resultado">
            <h4 class="resumo">Resumo do pedido</h4>

            <div class="valor">
                <p>Subtotal:</p>
                <p>R$209,99</p>
            </div>
            <div class="valor_frete">
                <p>Frete:</p>
                <p>R$12,00</p>
            </div>

            <div class="valor">
                <p>Total:</p>
                <p>R$214,99</p>
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