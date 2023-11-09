<?php 
// Conecta-se ao banco de dados
include_once('../config.php');

// Obtém o ID do produto
$id = $_GET['id'];

// Consulta o banco de dados para obter a imagem
$sql = "SELECT imagem FROM produtos WHERE id = $id";
$resultado = mysqli_query($conexao, $sql);

// Recupera o caminho da imagem
$imagem = mysqli_fetch_assoc($resultado)['imagem'];

// Exibe a imagem em um card com uma borda e uma legenda
echo <<<HTML
<div class="card">
  <img src="imagens/$imagem" alt="Imagem do produto" class="img-fluid">
  <div class="card-body">
    <h5 class="card-title">Imagem do produto</h5>
  </div>
</div>
HTML;

// Fecha a conexão com o banco de dados
mysqli_close($conexao);

?>
