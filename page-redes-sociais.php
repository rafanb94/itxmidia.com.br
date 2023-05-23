<?// Template name: redes sociais?>
<?php get_header();?>
<main id="pageService" data-bs-spy="scroll" data-bs-target="#navbar-example2" data-bs-offset="0" class="scrollspy-example" tabindex="0">
		<section class="s-hero d-flex align-items-center">
			<div class="container">
				<div class="row">
					<nav style="--bs-breadcrumb-divider: '>';" aria-label="breadcrumb">
						<ol class="breadcrumb justify-content-center">
							<li class="breadcrumb-item"><a href="/">Home</a></li>
							<li class="breadcrumb-item"><a href="#">Nossos Serviços</a></li>
							<li class="breadcrumb-item active" aria-current="page">Redes Sociais</li>
						</ol>
					</nav>
				</div>
				<div class="row justify-content-center">
					<div id="hero-section" class="col-md-8">
						<header>
							<h1 class="h1-white text-center fs-2"><?php the_title()?></h1>
						</header>
						<p class="p-white text-center mt-3">Seja encontrado em todos os lugares.</p>
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
								<a class="nav-link" href="#item-1">Por que estar nas Redes Sociais?</a>
								<!-- <nav class="nav nav-pills flex-column">
									<a class="nav-link ms-3 my-1" href="#item-1-1">Item 1-1</a>
									<a class="nav-link ms-3 my-1" href="#item-1-2">Item 1-2</a>
								</nav> -->
								<a class="nav-link" href="#item-2">Estratégia para Redes Sociais</a>
								<a class="nav-link" href="#item-3">Quais os benefícios?</a>
							</nav>
						</nav>
						<div data-bs-spy="scroll" data-bs-target="#navbar-example3" data-bs-offset="0" tabindex="0">
							<h2 id="item-1" class="my-3">Por que estar nas Redes Sociais?</h2>
							<p class="p mb-1">As redes sociais se tornaram uma parte essencial da vida moderna e têm um grande impacto na forma como as pessoas se comunicam e interagem entre si. Com bilhões de usuários ativos em todo o mundo, as redes sociais são uma plataforma poderosa para negócios alcançarem e se conectarem com seu público-alvo. </p>
							<p class="p mb-1">Aqui na ITX Mídia, sabemos o quão importante é para as empresas aproveitarem todo o potencial das redes sociais para expandir sua presença online, aumentar o engajamento do público e impulsionar as vendas. É por isso que oferecemos uma ampla gama de serviços de mídia social para ajudar as empresas a alcançar seus objetivos de marketing.</p>

							<h2 id="item-2" class="my-3">Estratégia para Redes Sociais</h2>
				      <p class="p mb-1">Com nossa equipe experiente e altamente qualificada, podemos ajudá-lo a criar uma estratégia de mídia social personalizada que atenda às suas necessidades específicas. A partir daí, podemos executar essa estratégia por meio de nossos serviços de gerenciamento de redes sociais, incluindo o planejamento e criação de conteúdo relevante e atraente, a gestão de campanhas publicitárias eficazes, monitoramento de métricas-chave e muito mais.</p>

							<h2 id="item-3" class="my-3">Quais são os benefícios?</h2>
							<p class="p mb-1">Se você está procurando expandir sua base de seguidores, gerar mais leads ou aumentar a conscientização da marca, podemos ajudá-lo a alcançar seus objetivos de marketing nas redes sociais.</p>
							<p class="p mb-1">Não deixe suas redes sociais ficarem para trás. Entre em contato conosco hoje para saber mais sobre como nossos serviços de mídia social podem ajudar a expandir sua presença online e aumentar suas vendas. </p>
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