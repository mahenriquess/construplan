<!DOCTYPE html>
<html lang="pt-br">
<head>
	<base href="<?= URL_BASE; ?>">
	<meta charset="utf-8">
	<meta http-equiv="content-language" content="pt-br">
	<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
	<meta http-equiv="content-type" content="text/html; charset=UTF-8">
	<meta http-equiv="cache-control" content="public"/>
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<meta name="robots" content="index, follow">

	<title>Página Inicial - Construplan Engenharia e Gerenciamento</title>
	<meta name="description" content=""/>
	<meta name="keywords" content=""/>

	<link rel="icon" href="public/site/images/icon.png" type="image/png" sizes="16x16">
	<link rel="canonical" itemprop="url" href="" />

	<?php require "links.php"; ?>
</head>
<body>
	<header class="index">
		<?php require "menu.php"; ?>
	</header>

	<div class="quem-somos-content">
		<div class="row">
			<div class="col l6 s12">
				<div class="row">
					<div class="col s12">
						<h3 class="coolvetica"> A WD construplan <br>
							 está desde 2013 construindo <br>
							 com qualidade e pontualidade! <br>
						</h3>
					</div>
				</div>
				<div class="row">
					<div class="col s12">
						<p class="vegur" style="text-align: justify;">
							A WD com sua experiência e determinação, sempre em busca de inovação
							e de novas tecnologias, conta com profissionais altamente qualificados e
							treinados para diversos tipos de obras, segregados por funções pertinentes a
							sua qualificação e equipe técnica liderada por engenheiros com anos de
							experiências. Nossa construtora atua em âmbito nacional, e tem por seu nicho
							obras comerciais e públicas
						</p>
					</div>
				</div>
				<div class="row">
					<div class="col s12">
						<p class="vegur" style="text-align: justify;">
							Nosso objetivo é oferecer os melhores serviços que atendam a demanda
							de diversos nichos de empreendimentos sempre buscando a satisfação do
							trabalhando com responsabilidade, ética, transparência e com foco na
							sustentabilidade econômica do empreendimento e ambiental. A transparência
							e segurança comercial a nossos clientes temos como primordial, desta forma
							proporcionamos a redução de custos e garantia da estabilidade econômica do
							empreendimento, sendo uma empresa competitiva no mercado e reconhecida pela
							excelência, qualidade, processo, prazo.
						</p>
					</div>
				</div>
			</div>
			<div class="col l6 s12">
				<? require"missao.php"; ?>
			</div>
		</div>
	</div>

	<div class="projetos-realizados">
		<div class="row">
			<div class="col s12 center">
				<h3 class="coolvetica main-color-text-escuro">Projetos que Realizamos</h3>
				<h5 class="comfortaa gray-text">Veja nossas expertises para poder lhe atender</h5>
			</div>
		</div>
		<? require "projetos-realizados.php";?>
	</div>

	<div class="nossos-clientes-index">
		<?  require "depoimento-clientes.php"; ?>
	</div>

	<div class="div-email cinza">
		<div class="container">
			<div class="row"></div>
			<? require "form-email.php"; ?>
		</div>
	<? require "footer.php"; ?>
</body>
</html>