<!DOCTYPE html>
<html lang="pt-br">
	<head>
		<link rel="preconnect" href="https://fonts.googleapis.com"><link rel="preconnect" href="https://fonts.gstatic.com" crossorigin><link href="https://fonts.googleapis.com/css2?family=Mulish:wght@500;700&family=Ubuntu&display=swap" rel="stylesheet">
		<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.2/font/bootstrap-icons.css">
		<link rel="stylesheet" href="<?php echo get_template_directory_uri()?>/css/plugins.min.css">
		<link rel="stylesheet" href="<?php echo get_template_directory_uri()?>/css/style.min.css">
		<meta name="viewport" content="width=device-width, initial-scale=1.0"/>
		<title><?php wp_title( '|', true, 'right' );?><?php bloginfo( 'name' )?></title>
		<meta name="title" content="<?php wp_title( '|', true, 'right' );?><?php bloginfo( 'name' )?>">
    <?php wp_head();?>
	</head>
	<body>
	<header class="header p5-3">
		<div class="container">
			<nav class="navbar navbar-expand-lg navbar-dark bg-dark">
				<a class="navbar-brand" href="#"><img src="<?php echo get_template_directory_uri()?>/assets/img/logo-itxmidia.svg" alt="logo itxmidia"></a>
				<button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavDropdown" 			aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
				<span class="navbar-toggler-icon"></span>
				</button>
				<div class="collapse navbar-collapse" id="navbarNavDropdown">
					<ul class="navbar-nav">
						<li class="nav-item">
							<a class="nav-link" href="#trafego">aumentar tráfego</a>
						</li>
						<li class="nav-item">
							<a class="nav-link" href="#site">Por que atualizar meu site?</a>
						</li>
						<li class="nav-item">
							<a class="nav-link" href="#orcamento">orçamento</a>
						</li>
						<li class="nav-item">
							<a class="nav-link" href="#cases">casos de sucesso</a>
						</li>
						<li class="nav-item">
							<a class="btn-cta	p-2 d-md-none" href="">solicitar orçamento</a>
						</li>
					</ul>
				</div>
			</nav>
			</div>
		</header>
