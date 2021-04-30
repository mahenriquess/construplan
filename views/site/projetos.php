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

	<title>Projetos - Construplan Engenharia e Gerenciamento</title>
	<meta name="description" content=""/>
	<meta name="keywords" content=""/>

	<link rel="icon" href="public/site/images/icon.png" type="image/png" sizes="16x16">
	<link rel="canonical" itemprop="url" href="" />

	<?php require "links.php"; ?>
</head>
<body>
	<header class="projetos">
		<?php require "menu.php"; ?>
		<div class="row-title">
			<div class="row mb-0">
				<div class="col s1">
					<div class="vl-title"></div>
				</div>
				<div class="col s11">
					<h1 class="page-title">Projetos</h1>
				</div>
			</div>
			<div class="row">
				<div class="col s3 offset-s1">
					<div class="row-subtitle vertical-center">
						<a href="<?= URL_BASE; ?>" class="black-text">Home</a>
						<div class="vl-subtitle"></div>
						<span class="coolvetica main-color-text-claro">projetos</span>
					</div>
				</div>
			</div>
		</div>
	</header>
	<div class="projetos-realizados">
		<div class="row">
			<div class="col s12 center">
				<h5 class="coolvetica">Detalhes do desenvolvimento de cada obra realizada</h5>
			</div>
		</div>
		<? require "projetos-realizados.php";?>
	</div>
	<div class="nossos-clientes">
		<?  require "depoimento-clientes.php"; ?>
	</div>
	<div>
		<?php require "fale-conosco.php"; ?>
	</div>
	<? require "footer.php"; ?>
</body>
</html>