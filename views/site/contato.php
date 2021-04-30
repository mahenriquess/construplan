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

	<title>Contato - Construplan Engenharia e Gerenciamento</title>
	<meta name="description" content=""/>
	<meta name="keywords" content=""/>

	<link rel="icon" href="public/site/images/icon.png" type="image/png" sizes="16x16">
	<link rel="canonical" itemprop="url" href="" />

	<?php require "links.php"; ?>
</head>
<body>
	<header class="contato">
		<?php require "menu.php"; ?>
		<div class="row-title">
			<div class="row mb-0">
				<div class="col s1">
					<div class="vl-title"></div>
				</div>
				<div class="col s11">
					<h1 class="page-title">Nossos Contatos</h1>
				</div>
			</div>
			<div class="row">
				<div class="col s3 offset-s1">
					<div class="row-subtitle vertical-center">
						<a href="<?= URL_BASE; ?>" class="black-text">Home</a>
						<div class="vl-subtitle"></div>
						<span class="coolvetica main-color-text-claro">contatos</span>
					</div>
				</div>
			</div>
		</div>
	</header>
	<div class="contato-content">
		<iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d17396.39175397255!2d-46.66330291399454!3d-23.563383734149628!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x94ce59ceb1eb771f%3A0xe904f6a669744da1!2sMuseu%20de%20Arte%20de%20S%C3%A3o%20Paulo%20Assis%20Chateaubriand!5e0!3m2!1spt-BR!2sbr!4v1619796006966!5m2!1spt-BR!2sbr" width="100%" height="500" style="border:0;" allowfullscreen="" loading="lazy"></iframe>
		<div class="container form-contato">
			<div class="form-inner">
				<form method="POST" action="send/contact">
					<div class="row">
						<div class="col l3 s12">
							<input type="text" name="name" required placeholder="Seu nome">
						</div>
						<div class="col l3 s12">
							<input type="email" name="email" required placeholder="Seu melhor e-mail">
						</div>
						<div class="col l3 s12">
							<input type="text" name="whatsapp" required placeholder="WhatsApp">
						</div>
						<div class="col l3 s12">
							<input type="text" name="cidade" required placeholder="Seu Cidade">
						</div>
					</div>
					<div class="row">
						<div class="col s12">
							<textarea class="materialize-textarea" name="mensage" placeholder="Descreva o que precisa"></textarea>
						</div>
					</div>
					<div class="row">	
						<div class="center">
							<button type="submit" class="waves-effect waves-light btn-large main-color-bg btn-orcamento white-text">Enviar Mensagem</button>
						</div>
					</div>
				</form>
			</div>
		</div>
		<div class="info-contato">
			<div class="row">
				<div class="col s12 center">
					<h5 class="coolvetica">
						Faça seu orçamento conosco, <br>
						qualidade e agilidade garantido!
					</h5>
					<p>
						Nossa central está pronto para te atender <br>
						e tirar todas as suas dúvidas. Aqui você pode confiar!
					</p>
				</div>
			</div>
			<div class="container row">
				<div class="col l4 m6 s12">
					<div class="info-item">
						<div class="row center white-text ">
							<p class="comfortaa">Nossos Telefones</p>
							<h4 class="coolvetica">TELEFONE/WHATSAPP</h4>
							<h5 class="comfortaa">(11)2389-1599<br> (11)94798-8271</h5>
						</div>
					</div>
				</div>
				<div class="col l4 m6 s12">
					<div class="info-item">
						<div class="row center white-text ">
							<p class="comfortaa">Nosso Email</p>
							<h4 class="coolvetica">E-MAIL</h4>
							<h5 class="comfortaa">contato@wdconstrucoes.com.br</h5>
						</div>
					</div>
				</div>
				<div class="col l4 m6 s12">
					<div class="info-item">
						<div class="row center white-text ">
							<p class="comfortaa">Nosso Endereço</p>
							<h4 class="coolvetica">ENDEREÇO</h4>
							<h5 class="comfortaa">
								Av. Exemplo, n. 65 São Paulo - SP <br>
								CEP: 07260300
							</h5>
						</div>
					</div>
				</div>
			</div>

		</div>
	</div>


	<? require "footer.php"; ?>
</body>
</html>