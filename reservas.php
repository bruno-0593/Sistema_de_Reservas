<?php

$conexao = new mysqli("localhost", "root", "", "db_reservas");
$conexao->set_charset('utf8');

$nomePacote = isset($_POST['nomePacote']) ? ($_POST['nomePacote']) : "";
$nome       = isset($_POST['nome']) ? ($_POST['nome']) : "";
$telefone   = isset($_POST['telefone']) ? ($_POST['telefone']) : "";
$entrada    = isset($_POST['entrada']) ? ($_POST['entrada']) : "";
$saida      = isset($_POST['saida']) ? ($_POST['saida']) : "";
$email      = isset($_POST['email']) ? ($_POST['email']) : "";

$cadastro = $conexao->query("insert into tb_reservas values(default,'$nomePacote','$nome','$telefone','$entrada','$saida','$email')");

?>

<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <!-- IMPORTANDO GOOGLE ICONS -->
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">

    <!-- IMPORTANDO CSS -->
    <link rel="stylesheet" href="./css/materialize.min.css">

    <title>Hotel</title>
</head>

<body>

    <!-- MENU AND SLIDER-->
    <div class="row">
        <nav class="blue">
            <div class="nav-wrapper container">
                <div class="brand-logo light">Hotel</div>

                <!-- MENU -->
                <ul class="right">
                    <li><a href="index.php"><i class="material-icons left">home</i>Home</a></li>
                    <li><a href="#"><i class="material-icons left">image</i>Galeria</a></li>
                    <li><a href="#"><i class="material-icons left">email</i>Contato</a></li>
                </ul>
            </div>
        </nav>

        <!-- BANNER SLIDER -->
        <div class="slider">
			<ul class="slides">	
				<img src="_img/hotel-banner-2.jpg" width="100%">
			</ul>
		</div>
	</div>
	<div class="row"><p>&nbsp;</p></div>

    <!-- MENSAGME DA RESERVA-->
    <div class="row container">
    <p>&nbsp;</p><div class="col s12">
            <p>
                Olá <?php echo $nome; ?>. Obrigado por fazer sua reserva conosco.<br>
                Sua reserva foi: <strong><?php echo $nomePacote; ?></strong><br>
                Em breve entraremos em contato para confirmação.
            </p>
        </div>
    </div>
    
    <!-- FOOTER -->
    <footer class="page-footer blue">
        <div class="container">
            <div class="row">
                <div class="col l6 s12">
                    <h5 class="white-text">hoteis.com</h5>
                    <p class="grey-text text-lighten-4">You can use rows and columns <br>here to organize your footer content.</p>
                </div>
                <div class="col l4 offset-12 s12">
                    <h5 class="white-text">Links</h5>
                    <ul>
                        <li><a class="grey-text text-lighten-3" href="index.php">Home</a></li>
                        <li><a class="grey-text text-lighten-3" href="#">Galeria</a></li>
                        <li><a class="grey-text text-lighten-3" href="#">Contato</a></li>
                    </ul>
                </div>
            </div>
        </div>
        <div class="footer-copyright">
            <div class="container">
            © 2021 Copyright FSN Cursos Online
            </div>
        </div>
    </footer>

    <!-- IMPORT JAVASCRIPT AND JQUERY -->
    <script type="text/javascript" src="./js/jquery-3.3.1.min.js"></script>
    <script type="text/javascript" src="./js/materialize.min.js"></script>

    <!-- SETTINGS JAVASCRIPT AND JQUERY -->
    <script>
        $('document').ready(function() {
            $('.button-collapse').sideNav();
            $('.slider').slider();
        });
    </script>

</body>

</html>