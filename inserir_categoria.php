<?php

require("funcoes.php");
$conexao = connect();
if(!$conexao) {
    die("Conexao não deu certo" . mysqli_connect_error());
}
cabecalho();
?>
<!--cabeçalho-->
<header class="logo">
        <img  src="imagens/logotipo.png" alt="Logo">
    <div class="voltar3_inserircategoria">
        <a class="voltar2_inserircategoria" href="dashboard.php"><ion-icon name="person"></ion-icon></a>
        <a class="voltar_inserircategoria" href="dashboard.php">Dashboard</a>
    </div>
      </header>

      <div class="dash_inserircategoria">
      
     <div class="p_inserircategoria">
         <h3>Cadastrar nova Categoria</h3>

         <?php
if(isset($_GET['cate'])){
$cate=$_GET['cate'];
$retorno2 =select($conexao,'*','dashboard'); 
$repetir='no';
while($check = mysqli_fetch_assoc($retorno2)){
    $get=$check['id'];
    if(isset($_GET["id_del$get"])){
        $id=$_GET["id_del$get"];
        $retornodel = deletewhere($conexao,'dashboard','id',$id);
    }
    elseif($check["categoria"]==$cate){
        $repetir='yes';
    }
    
} 
if($repetir!='yes' && isset($_GET["id_del$get"])==FALSE && $cate!=NULL){
    $querycat = "INSERT INTO dashboard(categoria) values ('$cate')";
    $respostacat = mysqli_query($conexao, $querycat);
}
}
    ?>
         <!--cadastro produto-->
         <form action="inserir_categoria.php" method="GET">
         <p>Categoria:</p>
          <input name="cate" class="bar_inserircategoria" type="text">
          <button typr="submit">mandar</button>
<?php
    $retorno= select($conexao,'*','dashboard');
     while ($cat= mysqli_fetch_assoc($retorno)):?>
           <div class="carro">
                    <div class="name_inserircategoria">
                        <p><?= $cat['categoria']?></p>
                    </div>
                    <div class="post">
                    <button name="id_del<?=$cat['id']?>" value="<?=$cat['id']?>" class="deletar_dash" type="submit">Deletar</button>
                    </div>
                </div>
                
         <?php endwhile?> 
      </body>
</html>