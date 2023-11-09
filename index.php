<!DOCTYPE html>
<html>
<head>
	<title>SalaoFrances</title>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<link rel="stylesheet" type="text/css" href="css/styles.css" />
	<link href="https://fonts.googleapis.com/css?family=Open+Sans:300,400,600,700,800&display=swap" rel="stylesheet">
	<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.2/css/all.css" integrity="sha384-oS3vJWv+0UjzBfQzYUhtDYW+Pj2yciDJxpsK1OYPAYjqT085Qq/1cq5FLXAZQ7Ay" crossorigin="anonymous">
</head>
<body>
	<div class="container">
		<header>
			<nav>
				<div class="nav-container">
					
						<img class="logo" src="imagem/logo.png" alt="" sizes="" srcset="">
					
					<i class="fas fa-bars btn-menumobile"></i>
					<ul>
						<li><a href="login/agenda.php">AGENDAMENTO</a></li>
						<li><a href="categoria.html">APLIQUES</a></li>
						<li><a href="cart/index.php">COMPRAR</a></li>
						<li><a href="#contato">CONTATOS</a></li>
						<li><a href="login/sair.php">SAIR</a></li>
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
		<main id="lastjobs-container" class="wrapper">
			<h1>Últimos produtos vistos</h1>
			<a nome="aplique"></a>
			<ul>
				<li>
					<a href="index1.html" class="clickarea">
						<div class="company-box">
							<img src="imagem/16.jpg">
							<div class="company-info">
								<h3>APLIQUE</h3>
								<p>CURTO</p>
							</div>
						</div>
						<div class="locality">
							<i class="fas fa-map-marker-alt"></i>
							<p>Mountain View, São Paulo</p>
						</div>
						<div class="job-type">
							<span class="clt">CINZA</span>
						</div>
					</a>
				</li>
				<li>
					<a href="index2.html" class="clickarea">
						<div class="company-box">
							<img src="imagem/17.jpg">
							<div class="company-info">
								<h3>APLIQUE</h3>
								<p>MASCULINO</p>
							</div>
						</div>
						<div class="locality">
							<i class="fas fa-map-marker-alt"></i>
							<p>Armonk, Rio de Janeiro</p>
						</div>
						<div class="job-type">
							<span class="pj">PRETO</span>
						</div>
					</a>
				</li>
				<li>
					<a href="index3.html" class="clickarea">
						<div class="company-box">
							<img src="imagem/15.jpg">
							<div class="company-info">
								<h3>APLIQUE</h3>
								<p>INFANTIL</p>
							</div>
						</div>
						<div class="locality">
							<i class="fas fa-map-marker-alt"></i>
							<p>Londrina, Paraná</p>
						</div>
						<div class="job-type">
							<span class="homeoffice">VERMELHO</span>
						</div>
					</a>
				</li>
				<li>
					<a href="index4.html" class="clickarea">
						<div class="company-box">
							<img src="imagem/18.jpg">
							<div class="company-info">
								<h3>APLIQUE</h3>
								<p>LONGO</p>
							</div>
						</div>
						<div class="locality">
							<i class="fas fa-map-marker-alt"></i>
							<p>Cascavel, Paraná</p>
						</div>
						<div class="job-type">
							<span class="pj">Preto</span>
						</div>
					</a>
				</li>
			</ul>
			<div class="btnjobs-container">
				<a href="index5.html" class="btn-jobs">Ver mais PRODUTOS</a>
			</div>
		</main>
		<section id="sendjobs-container">
			<div><img src="imagem/apliques6.jpg" alt=""> </div>
			<div id="sendjobs-inner" class="wrapper">
				<h2>VENHA CONHECER O MELHOR SALÃO DE CASCAVEL!</h2>
				<p>Estamos muito felizes em convidá-lo(a) para conhecer o nosso salão de beleza, o SALÃO FRANCÊS.</p>
				<p>Somos um salão especializado em apliques, e oferecemos os melhores produtos e tratamentos para que você possa se sentir linda(o) e confiante. </p>
				<p>Para comemorar a inauguração do nosso salão, estamos oferecendo um desconto de 20% em todos os serviços para novos clientes. </p>
				<p>Para agendar seu horário, entre em contato conosco pelo telefone [número de telefone] ou pelo e-mail [endereço de e-mail]. </p>
				<p>Será um prazer recebê-lo(a) em nosso salão!</p>
				<a href="#" class="light-btn">Enviar Convite</a>
			</div>
		</section>
		<section id="status-container" class="wrapper">
			<h2 class="title-center">Estatísticas do Salão</h2>
			<p class="p-center">Acompanhe o total de agendamento e vendas do SALÃO FRANCÊS</p>
			<div>
				<div class="status-box">
					<span class="status-qtd">150</span>
					<p class="status-text">Apliques femininos</p>
				</div>
				<div class="status-box">
					<span class="status-qtd">250</span>
					<p class="status-text">Apliques vendidos</p>
				</div>
				<div class="status-box">
					<span class="status-qtd">50</span>
					<p class="status-text">Apliques infantil</p>
				</div>
				<div class="status-box">
					<span class="status-qtd">550</span>
					<p class="status-text">Produtos de beleza</p>
				</div>
			</div>
		</section>
		<section id="testmony-container">
			<div class="wrapper">		
				<h2>COMENTÁRIOS DOS CLIENTES</h2>
				<p class="p-center">Os comentários deixados pelos clientes de um salão de beleza são uma ótima maneira de avaliar o atendimento e os serviços oferecidos. Eles podem ser positivos, negativos ou neutros, e podem fornecer informações valiosas para o salão.</p>
				<div class="testmony-box">
					<p class="testmony-msg">Eu amei o corte de cabelo que fiz! O profissional foi muito atencioso e me ajudou a escolher o corte perfeito para o meu rosto.</p>
					<img src="img/avatar1.png">
					<p class="testmony-name">Alis</p>
				</div>
				<div class="testmony-box">
					<p class="testmony-msg">A maquiagem que a profissional fez em mim ficou incrível! Ela me deixou linda e confiante.</p>
					<img src="img/avatar2.png">
					<p class="testmony-name">Jaqueline</p>
				</div>
				<div class="testmony-box">
					<p class="testmony-msg">O tratamento que fiz no meu cabelo foi maravilhoso! Meu cabelo ficou macio e brilhante.</p>
					<img src="img/avatar3.png">
					<p class="testmony-name">Pedro</p>
				</div>
				<div class="testmony-box">
					<p class="testmony-msg">O profissional que me atendeu foi muito atencioso e me ouviu quando eu pedi para fazer o corte de cabelo de uma certa maneira.</p>
					<img src="img/avatar4.png">
					<p class="testmony-name">Danika</p>
				</div>
			</div>
		</section>
		<section id="blog-container" class="wrapper">
			<h2 class="title-center">Artigos de beleza</h2>
			<p class="p-center">Cabelo cacheado e crespo são naturalmente secos, crespos e propensos a danos. É importante ter um plano de tratamento de beleza para ajudar a manter seus cachos saudáveis e bonitos.</p>
			<div class="article-box">
				<img src="imagem/child2.jpg">
				<h4><a href="#">CABELOS DE CRIANÇAS</a></h4>
				<p class="article-date">05 de novembro de 2023 | 10 comentários</p>
				<p class="article-resume">
					Os cabelos das crianças são mais delicados do que os dos adultos, pois ainda estão em desenvolvimento. Por isso, é importante tomar alguns cuidados especiais para mantê-los saudáveis e bonitos.</p>
				<a href= https://www.loreal-paris.com.br/5-formas-de-cuidar-do-cabelo-ressecado-confira-as-dicas-para-devolver-a-maciez-e-o-brilho-dos-fios?&&gclid=Cj0KCQjwtJKqBhCaARIsAN_yS_ksmyWMPfELjklGf3J31HcrvPEfUb1f3fwQGCqFL_OiCDiDkLj-s8caAoIvEALw_wcB&gclsrc=aw.ds class="article-btn light-btn">Ler post</a>
			</div>
			<div class="article-box">
				<img src="imagem/mackup1.jpg">
				<h4><a href="#">OLHAR DE DEUSA</a></h4>
				<p class="article-date">05 de novembro de 2023 | 10 comentários</p>
				<p class="article-resume">Não tenha medo de experimentar. Existem muitas maneiras diferentes de aplicar maquiagem para os olhos. Experimente diferentes cores, técnicas e estilos para encontrar o que funciona melhor para você.</p>
				<a href= https://www.natura.com.br/blog/maquiagem/maquiagem-para-olhos-pequenos?gclid=Cj0KCQjwtJKqBhCaARIsAN_yS_nHjrCfpVYMUWJd7VvMB1dJzCaUPkdgDRJQqoiKErAczp8Cwrzs0AEaArpXEALw_wcB&gclsrc=aw.ds class="article-btn light-btn">Ler post</a>
			</div>
			<div class="article-box">
				<img src="imagem/men2.jpg">
				<h4><a href="#">MARAVILHOSOS!</a></h4>
				<p class="article-date">05 de novembro de 2023 | 10 comentários</p>
				<p class="article-resume">Os cabelos masculinos são tão importantes quanto os femininos. Eles podem ser um complemento para o visual, ou um ponto de atenção negativo. Por isso, é importante cuidar dos cabelos masculinos para que eles fiquem saudáveis e bonitos.</p>
				<a href= https://www.dove.com/br/historias-Dove/dicas-e-guias/cuidados-pessoais-para-homens/6-tips-to-make-men-self-care-part-of-your-daily-routine.html?gclsrc=aw.ds&gclid=Cj0KCQjwtJKqBhCaARIsAN_yS_m7Kl3QD1Pwh-BQ26G3DrX7SsGOhUinfzWBUFiMnrLkjYVzEQ0rf_kaAhqgEALw_wcB&gclid=CjwKCAiAhKycBhAQEiwAgf19et2kvgM2z1KQr8Ss82i9PRDu0qEIcaYwlYWufKZWwxF7IyIso_uCCRoCMxwQAvD_BwE&gclsrc=aw.ds class="article-btn light-btn">Ler post</a>
			</div>
		</section>
		<footer>
			<a name="contato"></a>
			<div class="wrapper">
				<div class="footer-box">
					<div class="company-footer">
						<img src="imagem/logo.png">
						<h2>SALÃO FRANCÊS</h2>
						<p>VOÊ LINDA TODO DIA!</p>
					</div>
				</div>
				<div class="footer-box">
					<div class="articles-footer">
						<h2>Artigos rescentes</h2>
						<ul class="footer-list footer-article-list">
							<li>
								<a href="#">Como conseguir um cabelo perfeito?</a>
								<span class="article-date">05 de novembro de 2023</span>
							</li>
							<li>
								<a href="#">Como restaurar um aplique?</a>
								<span class="article-date">05 de novembro de 2023</span>
							</li>
							<li>
								<a href="#">Como usar óleos essenciais?</a>
								<span class="article-date">05 de novembro de 2023</span>
							</li>
						</ul>
					</div>
				</div>
				<div class="footer-box">
					<h2>Nos encontre nas redes sociais</h2>
					<ul class="footer-list">
						<li>
							<a href="#">
								<i class="fab fa-facebook-square"></i>
								<span>Facebook</span>
							</a>
						</li>
						<li>
							<a href="#">
								<i class="fab fa-instagram"></i>
								<span>Instagram</span>
							</a>
						</li>
						<li>
							<a href="#">
								<i class="fab fa-linkedin"></i>
								<span>Linkedin</span>
							</a>
						</li>
					</ul>
				</div>
			</div>
			<div class="footer-bottom">
				<div class="wrapper">
					<p>GUERLANDE/DANIKA - 2023</p>

				</div>
			</div>
			<div class="adm">
				<a href="adm.php">
					<img class="img" src="imagem/adm.png" alt="">
					<span>ADMINISTRADOR</span>
			</div>
		</footer>
	</div>
</body>
<script
src="https://code.jquery.com/jquery-3.4.1.min.js"
integrity="sha256-CSXorXvZcTkaix6Yvo6HppcZGetbYMGWSFlBw8HfCJo="
crossorigin="anonymous"></script>
<script src="js/scripts.js"></script>
</html>
