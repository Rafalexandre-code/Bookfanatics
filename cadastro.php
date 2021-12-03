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
    <link rel="stylesheet" href="index2.css">

    <!--Cabeçalho-->
    <header class="logo">
        <img src="imagens/logotipo.png" alt="Logo">
    </header>

    <!--Login-->
    <p class="log">Cadastro</p>
    <div class="mail">

        <form method="post" action="usuario_cadastrar.php">

            <p class="form">Seu Nome:</p>
            <input name="nome" class="input_form" type="text" placeholder="Ex:Lucas" required>
            <p class="form">Seu Sobrenome:</p>
            <input name="sobrenome" class="input_form" type="text" placeholder="Ex:Amaral" required>
            <p class="form">E-mail:</p>
            <input name="email" class="input_form" type="email" placeholder="Ex:joaodasilva@gmail.com" required>

            <p class="form">Senha:</p>
            <input name="senha" class="input_form" type="password" required>
            <p class="form">Confirmar Senha:</p>
            <input name="confsenha" class="input_form" type="password" required>

            <p class="form">CPF:</p>
            <input name="cpf" class="input_form" type="number" placeholder="Ex:123.456.789-12" required>

            <p class="form">Cidade:</p>
            <input name="cidade" class="input_form" type="text" placeholder="Ex:Belo horizonte" required>
            <p class="form">Endereço:</p>
            <input name="endereco" class="input_form" type="text" placeholder="Avenida Paulista, 316, apartamento 13" required>
            <p class="form">Cep:</p>
            <input name="cep" class="input_form" type="text" placeholder="Ex:12345-000" required>
            <p class="form">Sigla Unidade Federal:</p>
            <input name="uf" class="input_form" type="text" placeholder="Ex:SP" required>

            <p class="form">Telefone:</p>
            <input name="tel" class="input_form" type="number" placeholder="Ex:(55) 99999-9999" required>

            <div>
                <button class="bot" type="submit">Cadastrar-se</button>
            </div>

        </form>
        <p><a href="login.php">já fez cadastro?</a></p>
    </div>
</body>