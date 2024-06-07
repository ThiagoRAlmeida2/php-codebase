<?php
	$nome = "David";
	$sobrenome = "Barreto de Oliveira";
?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Aula 02</title>
	<style type="text/css">
		.format {
			font-weight: bold;
			color: red;
		}
	</style>
</head>
<body>
	<h1>Segunda aula</h1>
	<?php
	echo '<span class="format">Nome completo: </span>' . $nome . ' ' . $sobrenome . '<br>';
	$nome = "Joana";
	$sobrenome = "da Silva Sauro";
	echo "<span class='format'>Nome completo: </span>$nome $sobrenome";
	?>
	<form method="post" action="site.php">
		<label for="nome">Nome:</label><br>
		<input type="text" name="nome" id="nome"><br>
		<label for="idade">Idade:</label><br>
		<input type="number" name="idade" id="idade"><br>
		<input type="submit" value="Enviar">
	</form>
</body>
</html>