<?php
require('funcoes.php');

cabecalho();
?>
    <!--Cabeçalho-->
    <header class="logo">
        <img src="imagens/logotipo.png" alt="Logo">
    </header>

    <!--Login-->
    <p class="log">Login</p>
    <div class="mail">

        <form method="POST" action="usuario_login.php">
            <p class="form">E-mail:</p>
            <input name="email" class="input_form" type="email" placeholder="Ex:joaodasilva@gmail.com" required>

            <p class="form">Senha:</p>
            <input name="senha" class="input_form" type="password" required>
            <p><a href="login.php">Esqueceu sua senha?</a></p>
            <p><a href="cadastro.php">Ainda não fez cadastro?</a></p>

            <div>
                <button class="bot" type="submit">Entrar</button>
            </div>

            <h4>Entrar com sua conta do facebook ou google</h4>
            <a class="icon" href="https://facebook.com/">
                <ion-icon name="logo-facebook"></ion-icon>
            </a>
            <a class="icon" href="https://google.com/">
                <ion-icon name="logo-google"></ion-icon>
            </a>
        </form>
    </div>
</body>