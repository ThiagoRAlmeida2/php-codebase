<?php include"header.php"; ?>

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
<?php include "footer.php"; ?>