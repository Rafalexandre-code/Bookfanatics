<?php 
require("funcoes.php");
$conexao = connect();
if(!$conexao) {
    die("Conexao não deu certo" . mysqli_connect_error());
}

cabecalho();
?>

     <!--Cabeçalho-->
     <header class="logo">
        <img  src="imagens/logotipo.png" alt="Logo">
        <div class="carro_cadastroproduto">
        <a class="buy_cadastroproduto" href="dashboard.php"><ion-icon name="person"></ion-icon></a>
        <a class="carri_cadastroproduto" href="dashboard.php">Dashboard</a>
    </div>
      </header>

      <!--Relatorios-->
     <div class="dash_cadastroproduto">
      <div class="cx_cadastroproduto">
        <h4 class="alt_cadastroproduto">Alteração</h4>
        <a class="nov_cadastroproduto" href="dashboard.php"><p>Todos os Produtos</p></a>

      </div>
     <div class="p_cadastroproduto">
         <h3>Cadastrar novo Produto</h3>

         <!--cadastro produto-->

         <form enctype="multipart/form-data" action="inserir_produto.php" method="POST">
           
          <p>Nome:</p>
          <input name="nome" class="bar_cadastroproduto" type="text" placeholder="Ex:Livro" required>
          <p>Preço unitario:</p>
          <input name="val_unitario" class="bar_cadastroproduto" type="text" placeholder="Ex:R$0,00" required>
          <p>Em estoque:</p>
          <input name="stock" class="bar_cadastroproduto" type="number" required>
          <p>Descrição:</p>
              <textarea name="descricao" class="lgbar_cadastroproduto" placeholder="Max Caracteres = 1000"></textarea>
        <p>Categoria:</p>
         <select name="categoria" class="cat_cadastroproduto">
<?php 
$retorno2=select($conexao,'*','dashboard');
while($categoria = mysqli_fetch_assoc($retorno2)){?>
            <option><?=$categoria['categoria']?></option> 
<?php }?>         
        </select>
         
     <p class="up_cadastroproduto">upload de imagens do produto:</p>
     <div class="img_cadastroproduto">
       <div>
     <input name="imagem1" class="file_cadastroproduto" type="file" required>
</div>
     <input type="hidden" name="MAX_FILE_SIZE" value="99999999"/>
</div>
     <button class="botao_cadastroproduto" type="submit">cadastrar</button>
     </form>
     </div>
       </div>

</body>
</html>