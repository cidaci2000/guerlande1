<!DOCTYPE html>
<html lang="pt-br">
<head>
  <meta charset="UTF-8">
  <title>Formulário de agendamento de cliente</title>
  <link rel="stylesheet" href="agenda.css">
</head>
       

<body>
    <div>
        <div>
            <h1>Formulário de agendamento de cliente</h1> 
        </div>
        <div>
            <form action="enviar-agendamento.php" method="post">
                <div class="campo">
                <label for="nome">Nome </label> 
                <input type="text" name="nome" id="nome">
                </div>
                <div class="campo">
                <label for="email">E-mail</label>
                <input type="email" name="email" id="email">
                </div>
                <div class="campo">
                <label for="telefone">Telefone</label>
                <input type="tel" name="telefone" id="telefone">
                </div>
                <div class="campo">
                <label for="data">Data</label>
                <input type="date" name="data" id="data">
                </div>
                <div class="campo">
                <label for="horario">Horário</label>
                <input type="time" name="horario" id="horario">
                </div>
                <div class="campo">
                <label for="servico">Serviço</label>
                <select name="servico" id="servico">
                    <option value="corte">Corte</option>
                    <option value="escova">Aplique</option>
                    <option value="pintura">Pintura</option>
                    <option value="manicure">Manicure</option>
                    <option value="pedicure">Pedicure</option>
                </select>
                </div>
                <div class="campo">
                <label for="observacoes">Observações</label>
                <textarea name="observacoes" id="observacoes"></textarea>
                </div>
                <input type="submit" value="Enviar">
            </form>
                
        </div>
    </div>
</body>
<div class="inferno">
<a href="index.php">
    <img id="logo" src="imagem/logo.png" alt="" sizes="" srcset=""> 
</div>
</html>