<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>
        FICR -
        <?php
        echo $titulo;
        ?>
    </title>
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
                <li class="emLinha"><a href="index.php">Início</a></li>
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
                <li class="emLinha"><a href="Login.php">Login</a></li>
            </ul>
        </nav>
    </div>
</header>