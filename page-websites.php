<?// Template name:websites?>
<?php get_header();?>
<main id="pageService" data-bs-spy="scroll" data-bs-target="#navbar-example2" data-bs-offset="0" class="scrollspy-example" tabindex="0">
		<section class="s-hero d-flex align-items-center">
			<div class="container">
				<div class="row">
					<nav style="--bs-breadcrumb-divider: '>';" aria-label="breadcrumb">
						<ol class="breadcrumb justify-content-center">
							<li class="breadcrumb-item"><a href="/">Home</a></li>
							<li class="breadcrumb-item"><a href="#">Nossos Serviços</a></li>
							<li class="breadcrumb-item active" aria-current="page">Websites & E-commerce</li>
						</ol>
					</nav>
				</div>
				<div class="row justify-content-center">
					<div id="hero-section" class="col-md-8">
						<header>
							<h1 class="h1-white text-center fs-2"><?php the_title()?></h1>
						</header>
						<p class="p-white text-center mt-3">Deixe o seu público encontrar você.</p>
					</div>
				</div>
			</div>
		</section>
		<section class="s-content">
			<div class="container">
				<div class="row justify-content-center">
					<div class="col-md-8">
						<nav id="navbar-example3" class="navbar navbar-light bg-light flex-column align-items-stretch p-3 mb-5">
							<a class="navbar-brand" href="#">Quais são os tópicos abordados?</a>
							<nav class="nav nav-pills flex-column">
								<a class="nav-link" href="#item-1">Por que fazer um site?</a>
								<!-- <nav class="nav nav-pills flex-column">
									<a class="nav-link ms-3 my-1" href="#item-1-1">Item 1-1</a>
									<a class="nav-link ms-3 my-1" href="#item-1-2">Item 1-2</a>
								</nav> -->
								<a class="nav-link" href="#item-2">E-commerce</a>
								<a class="nav-link" href="#item-3">Quais os benefícios?</a>
							</nav>
						</nav>
						<div data-bs-spy="scroll" data-bs-target="#navbar-example3" data-bs-offset="0" tabindex="0">
							<h2 id="item-1" class="my-3">Por que fazer um site?</h2>
							<p class="p mb-1">Sabemos que um website é uma das principais ferramentas de marketing para qualquer empresa, independentemente do tamanho ou setor. É por isso que oferecemos uma ampla gama de serviços de design e desenvolvimento de websites personalizados que atendem às necessidades exclusivas de nossos clientes. Desde a concepção e design até a codificação e implementação, nossos especialistas trabalham em estreita colaboração com você para garantir que seu website seja atraente, intuitivo e fácil de usar. </p>

							<h2 id="item-2" class="my-3">E-commerce</h2>
							<p class="p mb-1">Mas não é só isso. Nossa equipe também é especializada em desenvolvimento de e-commerce. Com a crescente demanda por compras online, sabemos que é essencial ter um site de comércio eletrônico seguro, fácil de usar e que funcione perfeitamente para seus clientes. É por isso que desenvolvemos soluções de e-commerce de alta qualidade que incluem funcionalidades como carrinho de compras, gestão de estoque e pagamento seguro, entre outras.</p>

							<h2 id="item-3" class="my-3">Quais são os benefícios?</h2>
							<p class="p mb-1">Além disso, nossos serviços de websites e e-commerce incluem suporte e manutenção contínuos para garantir que seu site esteja sempre atualizado, seguro e funcionando perfeitamente. Nossa equipe de suporte técnico está sempre à disposição para ajudar com qualquer problema ou dúvida que você possa ter.</p>
						</div>
					</div>
				</div>
			</div>
		</section>	
		<section class="s-contact mt-5 bg-contact">
			<img src="<?php echo get_template_directory_uri()?>/assets/img/bg-section-contato.jpg" alt="">
			<div class="container">
				<div class="row">
					<div class="col-12 py-5 pb-md-0">
						<header>
							<h2 class="h2-white text-center justify-content-center" id="orcamento">Entre em contato com um especialista <span class="d-block">hoje mesmo</span></h2>
						</header>
						<p class="p-18-white text-center py-4">E descubra como podemos ajudar você e o seu negócio.</p>
						<a class="btn btn-cta btn-lg d-block mx-auto" href="https://wa.me/5511930081732" target="_blank">solicitar orçamento</a>
					</div>
				</div>
			</div>
		</section>
	</main>
<?php get_footer();?>	