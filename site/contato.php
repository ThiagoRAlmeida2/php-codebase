<!DOCTYPE html>
<html lang="pt-br">
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>FICR</title>
	<link rel="stylesheet" type="text/css" href="css/style.css">
</head>
<body>
	<header>
		<div class="container">
			<h1>
				<a href="index.php">
					<img src="img/logo.svg" alt="Faculdade Imaculada Conceição do Recife - FICR">
				</a>
			</h1>
			<nav>
				<input type="checkbox" id="menu-toggle">
				<label for="menu-toggle" class="menu-icon"></label>
				<ul class="principal">
					<li class="emLinha"><a href="index.html">Início</a></li>
					<li class="emLinha">
						<a href="#">Cursos <span>▼</span></a>
						<ul class="oculto">
							<li><a href="ads.php">Análise e Desenvolvimento de Sistemas</a></li>
							<li><a href="si.php">Sistemas para Internet</a></li>
							<li><a href="direito.php">Direito</a></li>
							<li><a href="enfermagem.php">Enfermagem</a></li>
							<li><a href="psicologia.php">Psicologia</a></li>
						</ul>
					</li>
					<li class="emLinha"><a href="sobre.php">Sobre nós</a></li>
					<li class="emLinha"><a href="contato.php">Contato</a></li>
				</ul>
			</nav>
		</div>
	</header>
	<main>

		<section class="container margemSecao2 interna">
			<h3>Contato</h3>
		</section>

		<section class="container">
			<iframe class="mapa" src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3950.594187379012!2d-34.9426803263312!3d-8.040706080294479!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x7ab199240000001%3A0xca8aee19ccd4b76f!2sFICR%20-%20Faculdade%20Cat%C3%B3lica%20Imaculada%20Concei%C3%A7%C3%A3o%20do%20Recife!5e0!3m2!1spt-BR!2sbr!4v1711409679434!5m2!1spt-BR!2sbr" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
		</section>

		<section class="container">
			<form action="contato.html" method="post">

				<div class="blocoPrincipal">
					<div class="blocoInline">
						<label for="nome">Nome</label><br>
						<input type="text" name="nome" id="nome" placeholder="Digite seu nome aqui" required>
					</div>
					<div class="blocoInline">
						<label for="fone">Telefone</label><br>
						<input type="number" name="fone" id="fone" placeholder="(00) 0.0000.0000" required>
					</div>
				</div>

				<div class="blocoPrincipal">
					<div class="blocoInline">
						<label for="email">E-mail</label><br>
						<input type="email" name="email" id="email" placeholder="seunome@exemplo.com.br" required>
					</div>
					<div class="blocoInline">
						<label for="senha">Senha</label><br>
						<input type="password" name="senha" id="senha" placeholder="●●●●●●●●●●●●●●●●●" required>
					</div>
				</div>

				<div class="blocoPrincipal">
					<div class="blocoTextArea">
						<label for="comentario">Comentário</label><br>
						<textarea id="comentario"placeholder="Dúvidas, sugestões e reclamações"></textarea>
					</div>
				</div>

				<div class="blocoPrincipal">
					<div class="blocoInline">
						<input type="submit" value="Enviar formulário">
					</div>
				</div>
			</form>
		</section>
	</main>
	<footer>
		<div class="container">

			<div class="divRodape divImagem">
				<img src="img/ubec-logo.png">
				<img src="img/ouvidoria.png">
				<img src="img/QRcode.png">
			</div>

			<div class="divRodape">
				<img class="imgBloco02" src="img/logo.svg">
				<p class="pLink">Acesso rápido</p>
				<p>Graduação</p>
				<p>Bolsas e Financiamentos</p>
				<p>
					CPA – Comissão Própria<br>
					de Avaliação
				</p>
				<p class="pLink">Ajuda</p>
				<p class="pLink">Trabalhe Conosco</p>
			</div>

			<div class="divRodape">
				<p>Pós-Graduação</p>
				<p>A Instituição</p>
				<p>Área do Estudante</p>
				<p>Documentos Institucionais</p>
				<p class="pLink">Católica de A a Z</p>
			</div>

			<div class="divRodape">
				<img class="divImagem" src="img/facebook.svg">
				<img class="divImagem" src="img/linkedin.svg">
				<img class="divImagem" src="img/instagram.svg">
				<img class="divImagem" src="img/youtube.svg">

				<p>
					(81) 2127-0500<br>
					faleconosco@ficr.edu.br
				</p>
				<p>
					FICR - Faculdade Católica<br>
					Imaculada Conceição<br>
					do Recife
				</p>
				<p>
					Avenida Caxangá, 3841<br>
					Iputinga - Recife / PE<br>
					CEP: 50670-902
				</p>

			</div>

		</div>
	</footer>
</body>
</html>