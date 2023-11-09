<?php 
 // Conecta-se ao banco de dados
include_once('../config.php');

// Executa a consulta SQL
$sql = "SELECT nome, quantidade, preco, categoria, imagem FROM produtos";
$resultado = mysqli_query($conexao, $sql);

// Itera sobre os resultados da consulta SQL
if (mysqli_num_rows($resultado) > 0) {
  while ($produto = mysqli_fetch_assoc($resultado)) {

    // Recupera os dados do produto
    $nome = $produto['nome'];
    $quantidade = $produto['quantidade'];
    $preco = $produto['preco'];
    $categoria = $produto['categoria'];
    $imagem = $produto['imagem'];

    // Exibe os dados do produto
    echo <<<HTML
        <div class="card">
        <div class="card-header">Produto</div>
        <div class="card-body">
            <div class="linha" >
            <h3>Nome:</h3>
            <p>$nome</p>
            </div> 
            <div class="linha" > 
            <h3>Quantidade:</h3>
            <p>$quantidade</p>
            </div>
            <div class="linha" >
            <h3>Preço:</h3>
            <p>$preco</p>
            </div>
            <div class="linha" >
            <h3>Categoria:</h3>
            <p>$categoria</p>
            </div>
          <h3>Imagem:</h3>
          <img class="imag" src="../imagem/child5.jpg" alt="Imagem do produto">
          <button type="button" class="btn btn-primary">Comprar</button>
          
        </div>
      </div>
      
    HTML;
    
  }
} else {
  echo "No products found.";
}

// Fecha a conexão com o banco de dados
mysqli_close($conexao);
?>


<style>

body{
    display: flex;
    justify-content: space-evenly;
    background-image: url(../imagem/fundo3.jpg);
    background-repeat: no-repeat;
    background-size: cover;
     text-align: center;
}
.imag{
    max-height: 200px;
}
.card {
  background-color: #fff;
  border: 1px solid #ccc;
  border-radius: 5px;
  padding: 5px;
  margin-bottom: 5px;
  max-width: 200px;
  
}

.card-header {
  background-color: #888888;
  padding: 10px 15px;
  font-size: 18px;
  font-weight: bold;
  
}
.linha{
    display: flex;
}
.card-body {
  padding: 5px 1px;
  
}
h3{
    font-family: sans-serif;
}
p{
    font-family: sans-serif;
    padding: 5px; 
}
.form-group {
  margin-bottom: 2px;
}

.form-control {
  width: 100%;
  padding: 10px;
  border: 1px solid #ccc;
  border-radius: 3px;
}

.btn {
  background-color: #007bff;
  color: #fff;
  padding: 10px 20px;
  border: none;
  border-radius: 3px;
  cursor: pointer;
}

.card img {
  width: 100%;
}


</style>



