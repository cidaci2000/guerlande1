<!DOCTYPE html>
<html lang="pt-br">
<head>
  <meta charset="UTF-8">
  <title>AGENDAMENTO DO CLIENTE</title>
</head>
<body>

  <h1>AGENDAMENTO DO CLIENTE</h1>
  <a href="home.php"><img src="../imagem/logo.png" alt=""></a>

  <table>
    <thead>
      <tr>
        <th class="nome">Nome:</th>
        <th class="data">Data:</th>
        <th class="horario">Horário:</th>
        <th class="atendente">Atendente:</th>
      </tr>
    </thead>
    <tbody>
<?php

include_once('../config.php');


// Consulta SQL para selecionar a última linha
$sql = "SELECT *
FROM agendamentos
ORDER BY id DESC
LIMIT 1;";

// Executa a consulta SQL
$result = mysqli_query($conexao, $sql);

// Verifica se a consulta foi bem-sucedida
if ($result) {
  // Itera sobre os resultados da consulta
  while ($row = mysqli_fetch_assoc($result)) {
    // Exibe os dados do agendamento
    echo "<tr>";
    echo "<td>{$row['nome']}</td>";
    echo "<td>{$row['data_entrada']}</td>";
    echo "<td>{$row['horario_entrada']}</td>";
    echo "<td>{$row['nome_atendente']}</td>";
    echo "</tr>";
  }
} else {
  // Erro ao executar a consulta
  echo "Erro ao selecionar registros: " . mysqli_error($conexao);
}

// Fecha a conexão com o banco de dados
mysqli_close($conexao);
?>

<style>
body{
  background-image: url(../imagem/fundo3.jpg);
  background-repeat: no-repeat;
  background-size: cover;
  font: 900;
  text-align: center;
}
table {
  width: 100%;
}

th, td {
  padding: 10px;
  border: 1px solid black;
  background-color: #EE82EE;
}

th {
  background-color: #888888;
}

</style>