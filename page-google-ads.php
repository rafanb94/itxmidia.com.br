<?// Template name: google ads?>.
<?php get_header();?>
<main id="pageService" data-bs-spy="scroll" data-bs-target="#navbar-example2" data-bs-offset="0" class="scrollspy-example" tabindex="0">
		<section class="s-hero d-flex align-items-center">
			<div class="container">
				<div class="row">
					<nav style="--bs-breadcrumb-divider: '>';" aria-label="breadcrumb">
						<ol class="breadcrumb justify-content-center">
							<li class="breadcrumb-item"><a href="/">Home</a></li>
							<li class="breadcrumb-item"><a href="#">Nossos Serviços</a></li>
							<li class="breadcrumb-item active" aria-current="page">Anúncie no Google</li>
						</ol>
					</nav>
				</div>
				<div class="row justify-content-center">
					<div id="hero-section" class="col-md-8">
						<header>
							<h1 class="h1-white text-center fs-2"><?php the_title()?></h1>
						</header>
						<p class="p-white text-center mt-3">Apareça também na parte exclusiva do Google.</p>
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
								<a class="nav-link" href="#item-1">O que é o Google Ads</a>
								<!-- <nav class="nav nav-pills flex-column">
									<a class="nav-link ms-3 my-1" href="#item-1-1">Item 1-1</a>
									<a class="nav-link ms-3 my-1" href="#item-1-2">Item 1-2</a>
								</nav> -->
								<a class="nav-link" href="#item-2">Como anúnciar no Google?</a>
								<a class="nav-link" href="#item-3">Quais os benefícios?</a>
							</nav>
						</nav>
						<div data-bs-spy="scroll" data-bs-target="#navbar-example3" data-bs-offset="0" tabindex="0">
							<h2 id="item-1" class="my-3">O que é o Google Ads?</h2>
							<p class="p mb-1">O Google Ads é uma plataforma de publicidade altamente eficaz que oferece uma ampla variedade de recursos para ajudar você a alcançar seus objetivos de negócios online. Desde o alcance de públicos altamente específicos até a flexibilidade do que é possível mensurar, podendo ter uma visão clara do desempenho da campanha, o Google Ads é uma ferramenta valiosa para o rápido sucesso de sua empresa na internet. </p>

							<h2 id="item-2" class="my-3">Como anúnciar no Google?</h2>
				      <p class="p mb-1">O Google Ads é uma das plataformas de publicidade mais eficazes disponíveis atualmente, permitindo que empresas de todos os tamanhos atinjam públicos altamente específicos com anúncios personalizados. No entanto, para alcançar o sucesso com essa plataforma, é necessário ter conhecimento e experiência em estratégias de publicidade online.</p>

							<h2 id="item-3" class="my-3">Quais são os benefícios?</h2>
              <ul>
                <li><p>Alcance de audiência altamente específica</p></li>
                <li><p>Resultados rápidos</p></li>
                <li><p>Mensuração e análise</p></li>
                <li><p>Complemento ao <a href="">SEO</a></p></li>
              </ul>
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