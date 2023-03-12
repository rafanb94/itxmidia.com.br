<!DOCTYPE html>
<html lang="pt-br">
	<head>
		<link rel="preconnect" href="https://fonts.googleapis.com"><link rel="preconnect" href="https://fonts.gstatic.com" crossorigin><link href="https://fonts.googleapis.com/css2?family=Mulish:wght@500;700&family=Ubuntu&display=swap" rel="stylesheet">
		<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.2/font/bootstrap-icons.css">
		<link rel="stylesheet" href="<?php echo get_template_directory_uri()?>/css/plugins.min.css">
		<link rel="stylesheet" href="<?php echo get_template_directory_uri()?>/css/style.min.css">
		<meta name="viewport" content="width=device-width, initial-scale=1.0"/>
		<link rel="icon" type="image/png" href="<?php echo get_template_directory_uri()?>/assets/icon/favicon.png">
		<title><?php wp_title( '|', true, 'right' );?><?php bloginfo( 'name' )?></title>
		<meta name="title" content="<?php wp_title( '|', true, 'right' );?><?php bloginfo( 'name' )?>">
		<meta name="description" content="<?php the_field('description')?>">
		<!-- Open Graph / Facebook -->
		<meta property="og:type" content="website">
		<meta property="og:url" content="https://itxmidia.com.br/">
		<meta property="og:title" content="<?php wp_title( '|', true, 'right' );?>">
		<meta property="og:description" content="<?php the_field('description')?>">
		<meta property="og:image" content="<?php echo get_template_directory_uri()?>/assets/img/itxmidia.com.br.jpg">
		<!-- Twitter -->
		<meta property="twitter:card" content="summary_large_image">
		<meta property="twitter:url" content="https://itxmidia.com.br/">
		<meta property="twitter:title" content="<?php wp_title( '|', true, 'right' );?>">
		<meta property="twitter:description" content="<?php the_field('description')?>">
		<meta property="twitter:image" content="<?php echo get_template_directory_uri()?>/assets/img/itxmidia.com.br.jpg">
    <?php wp_head();?>
	</head>
	<body>
	<header class="header p5-3">
		<div class="container">
			<nav class="navbar navbar-expand-lg">
				<a class="navbar-brand" href="#"><img src="<?php echo get_template_directory_uri()?>/assets/img/logo-itxmidia.svg" alt="logo itxmidia"></a>
				<button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavDropdown" 			aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
				<span class="navbar-toggler-icon"></span>
				</button>
				<div class="collapse navbar-collapse justify-content-center" id="navbarNavDropdown">
					<ul class="navbar-nav">
						<li class="nav-item">
							<a class="nav-link p-2" href="#trafego">aumentar tráfego</a>
						</li>
						<li class="nav-item">
							<a class="nav-link p-2" href="#site">Por que atualizar meu site?</a>
						</li>
						<li class="nav-item">
							<a class="nav-link p-2" href="#orcamento">orçamento</a>
						</li>
						<li class="nav-item">
							<a class="nav-link p-2 " href="#cases">casos de sucesso</a>
						</li>
						<li class="nav-item pt-4">
							<a class="btn btn-cta w-100 p-2 rounded-0 d-md-none" href="">solicitar orçamento</a>
						</li>
					</ul>
				</div>
				<p class="d-none d-md-block p-2" style="color:#CCC5BD;">(11)2675-0675</p>
			</nav>
			</div>
		</header>
