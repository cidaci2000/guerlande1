<?php
 if(isset($_POST['submit']))
 {
// Conexão com o banco de dados
include_once ('../config.php');

// Dados do formulário

$nome = $_POST["nome"];
$preco = $_POST["preco"];
$quantidade = $_POST["quantidade"];
$categoria = $_POST["categoria"];
$imagem = $_FILES["imagem"]["name"];

// Upload da imagem
move_uploaded_file($_FILES["imagem"]["tmp_name"], "../imagem" . $imagem);

// Inserção dos dados no banco de dados
$result = mysqli_query($conexao, "INSERT INTO produtos(nome,preco,quantidade,categoria,imagem) VALUES ('$nome','$preco',$quantidade,'$categoria','$imagem')");
$conexao->query($sql);



 }
?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <title>Cadastro de Produto</title>
</head>
<body>
    <h1>CADASTRO DE PRODUTOS
    <a href="../adm.php"><img src="../imagem/logo.png" alt=""></a>
    </h1>    
    <form action="produto.php " method="post" enctype=" ">
        <div class="campos">
            <label for="nome">Nome do produto</label>
            <input type="text" name="nome" id="nome" required>
        </div>
        <div class="campos">
            <label for="preco">Preço</label>
            <input type="number" name="preco" id="preco" required>
        </div>
        <div class="campos">
            <label for="quantidade">Quantidade</label>
            <input type="number" name="quantidade" id="quantidade" required>
        </div>
        <div class="campos">
            <label for="categoria">Categoria</label>
            <select name="categoria" id="categoria" required>
                <option value="eletronicos">MULHER</option>
                <option value="roupas">HOMEM</option>
                <option value="alimentos">INFANTIL</option>
                <option value="maqui">MAQUIAGEM</option>
                <option value="outros">OUTROS</option>
            </select>
        </div>
        <div class="campos">
            <label for="imagem">Imagem</label>
            <input type="file" name="imagem" id="imagem" required>
        </div>
        <input type="submit" value="enviar">
    </form>
</body>
</html>

<style>
body {
    background-image: url(../imagem/fundo3.jpg);
    background-repeat: no-repeat;
    background-size: cover;
    font-family: sans-serif;
  background-color: #f2f2f2;
  margin: 0;
  padding: 0;
}


h1 {
  text-align: center;
  font-size: 24px;
  margin-bottom: 20px;
  display: flex;
  flex-direction: column ;
}

form {
  width: 550px;
  margin: 0 auto;
  padding: 20px;
  background-color: #D8BFD8;
  border-radius: 10px;
    
}

.campos {
  margin-bottom: 10px;
  padding: 2px;
}

label {
  display: block;
  margin-bottom: 5px;
}

input, select {
  width: 100%;
  padding: 10px;
  border: 1px solid #ccc;
  border-radius: 5px;
}

input[type="submit"] {
  background-color: #007bff;
  color: #fff;
  padding: 10px 20px;
  border: none;
  cursor: pointer;
  border-radius: 5px;
  font-size: 20px;
}

input[type="submit"]:hover {
  background-color: #0056b3;
}
        
</style>

