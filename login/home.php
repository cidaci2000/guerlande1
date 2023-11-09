<!DOCTYPE html>
<html>
<head>
	<title>HOME</title>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<link rel="stylesheet" type="text/css" href="../css/styles.css" />
	<link href="https://fonts.googleapis.com/css?family=Open+Sans:300,400,600,700,800&display=swap" rel="stylesheet">
	<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.2/css/all.css" integrity="sha384-oS3vJWv+0UjzBfQzYUhtDYW+Pj2yciDJxpsK1OYPAYjqT085Qq/1cq5FLXAZQ7Ay" crossorigin="anonymous">
</head>
<body>
	<div class="container">
		<header>
			<nav>
				<div class="nav-container">
					<a href="index.html">
						<img class="logo" src="../imagem/logo.png" alt="" sizes="" srcset="">
					</a>
					<i class="fas fa-bars btn-menumobile"></i>
					<ul>
						<li><a href="login.php">LOGIN</a></li>
						<li><a href="formulario.php">CADASTRO</a></li>
						<li><a href="sair.php">SAIR</a></li>
					</ul>
				</div>
			</nav>
			<div id="main-banner">
				<div id="search-form">
					<h1>A maneira mais fácil de Ficar linda!</h1>
					<p>Compre apliques dos seus sonhos.</p>			
					<form>
						<input type="text" name="job" placeholder="Digite o produto">
						<select name="region">
							<option value="">Cascavel</option>
							<option value="">Curitiba</option>
							<option value="">Foz do iguaçu</option>
							<option value="">Londrina</option>
							<option value="">Campo mourão</option>
						</select>
						<select name="category">
							<option value="1">Mulher</option>
							<option value="1">Homem</option>
							<option value="1">Infantil</option>
							<option value="1">Maquiagem</option>
							<option value="1">outros</option>
						</select>
						<input type="submit" value="Pesquisar">
					</form>
				</div>
			</div>
		</header>