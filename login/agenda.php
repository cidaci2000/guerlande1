<?php

include_once('../config.php');

// Função para sanitizar dados
function sanitize($data) {
  $data = trim($data);
  $data = stripslashes($data);
  $data = htmlspecialchars($data);
  return $data;
}

// Handle form submission
if ($_SERVER['REQUEST_METHOD'] == "POST") {
  // Get form data
  $nome = sanitize($_POST['nome']);
  $horario_entrada = sanitize($_POST['horario_entrada']);
  $data_entrada = sanitize($_POST['data_entrada']);
  $nome_atendente = sanitize($_POST['nome_atendente']);

  // Insert new appointment into the database
  $sql = "INSERT INTO agendamentos(nome, horario_entrada, data_entrada, nome_atendente) VALUES ('$nome', '$horario_entrada', '$data_entrada', '$nome_atendente')";
  mysqli_query($conexao, $sql);

  // Redirect to success page
  header("Location: agenda_cliente.php");
}

?>



<!DOCTYPE html>
<html lang="pt-br">
<head>
  <meta charset="UTF-8">
  <title>Agendamento</title>
</head>
<body>

  <h1>AGENDAMENTO</h1>
  <a href="home.php"><img src="../imagem/logo.png" alt=""></a>
  <form action="agenda.php" method="post">
    <input type="text" id="nome" name="nome" placeholder="Nome completo" required>
    <input type="date" id="data_entrada" name="data_entrada" required>
    <input type="time" id="horario_entrada" name="horario_entrada" required>
    <input type="text" id="nome_atendente" name="nome_atendente" required>
    <input type="submit" value="submit">
  </form>

</body>
</html>
<style>
body{
  background-image: url(../imagem/fundo3.jpg);
  background-repeat: no-repeat;
  background-size: cover;
  font: 900;
  align-items: center;
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