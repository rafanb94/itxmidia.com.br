<?// Template name: home?>
<?php get_header();?>
	<main id="pageHome" data-bs-spy="scroll" data-bs-target="#navbar-example2" data-bs-offset="0" class="scrollspy-example" tabindex="0">
		<section class="s-hero d-flex align-items-center">
			<div class="container">
				<div class="row">
					<div id="hero-section" class="col-12 col-md-5">
						<header>
							<h1 class="h1-white">Marketing Digital que <span> impulsiona resultados</span></h1>
						</header>
						<p class="p-white mt-2">Impulsione seu negócio a novos patamares com nossa premiada consultoria de serviços em marketing digital e tecnologia.</p>
						<a class="btn btn-cta btn-lg mt-5" href="https://wa.me/5511930081732" target="_blank">solicitar orçamento</a>
					</div>
					<div id="hero-img" class="col-12 col-md-7">
						<img class="slide-top" src="<?php echo get_template_directory_uri()?>/assets/img/home-site.svg" alt="">
					</div>
				</div>
			</div>
		</section>
		<div class="full-banner">
			<div class="container">
				<div class="marquee marquee--hover-pause pt-3">
					<ul class="marquee__content">
						<li class="d-flex align-items-center gap-3">
							<i class="bi bi-star-fill"></i><h3>seo</h3>
						</li>
						<li class="d-flex align-items-center gap-3">
							<i class="bi bi-star-fill"></i><h3>marketing de conteúdo</h3>
						</li>
						<li class="d-flex align-items-center gap-3">
							<i class="bi bi-star-fill"></i><h3>google ads</h3>
						</li>
						<li class="d-flex align-items-center gap-3">
							<i class="bi bi-star-fill"></i><h3>redes sociais</h3>
						</li>
						<li class="d-flex align-items-center gap-3">
							<i class="bi bi-star-fill"></i><h3>analytics</h3>
						</li>
					</ul>
					<ul aria-hidden="true" class="marquee__content">
						<li class="d-flex align-items-center gap-3">
							<i class="bi bi-star-fill"></i><h3>seo</h3>
						</li>
						<li class="d-flex align-items-center gap-3">
							<i class="bi bi-star-fill"></i><h3>marketing de conteúdo</h3>
						</li>
						<li class="d-flex align-items-center gap-3">
							<i class="bi bi-star-fill"></i><h3>google ads</h3>
						</li>
						<li class="d-flex align-items-center gap-3">
							<i class="bi bi-star-fill"></i><h3>redes sociais</h3>
						</li>
						<li class="d-flex align-items-center gap-3">
							<i class="bi bi-star-fill"></i><h3>analytics</h3>
						</li>
					</ul>
  			</div>
			</div>
		</div>
		<section class="s-traffic mt-5">
			<div class="container">
				<div class="row justify-content-center">
					<div class="col-md-8">
						<header>
							<h2 class="h2 text-center" id="trafego">Veja como  aumentamos grandes <span class="d-block">quantidades de tráfego</span> para o seu negócio</h2>
						</header>
					</div>
				</div>
				<div class="row justify-content-between">
					<div class="col-md-5 pt-md-5">
						<div class="seo pt-5">
							<header>
								<h3 class="h3">SEO + Marketing de Conteúdo</h3>
							</header>
							<p class="p">Esforço técnico, relacionados com a popularidade e conteúdo de um website, para posicioná-lo nas primeiras páginas de resultados orgânicos dos mecanismos de busca como: Google, Yahoo, Bing, entre outros.</p>
							<a class="seeMore mt-1 py-1" href="<?php echo get_permalink(get_page_by_path("seo search engine optimization"))?>">Saiba Mais</a>
						</div>
						<div class="googleAds pt-5">
							<header>
								<h3 class="h3">Anúncios no Google</h3>
							</header>
							<p class="p">Vamos usufluir da ferramenta mais poderosa do mercado para ajudar o seu site a alcançar mais pessoas no buscador mais usado no mundo.</p>
							<a class="seeMore mt-1 py-1" href="<?php echo get_permalink(get_page_by_path("anuncios no google"))?>">Saiba Mais</a>
						</div>
						<div class="redeSociais pt-5">
							<header>
								<h3 class="h3">Redes Sociais</h3>
							</header>
							<p class="p">Seja encontrado em qualquer lugar! Você hoje possui um perfil em alguma rede social como o Instagram, Facebook? Hoje mais do que nunca, elas são importantes ferramentas de tráfego. Nós te ajudamos em todo o processo criativo e manutenção das suas redes.</p>
							<a class="seeMore mt-1 py-1" href="<?php echo get_permalink(get_page_by_path("redes sociais"))?>">Saiba Mais</a>
						</div>
					</div>
					<div class="col-md-5 pt-md-5">
						<!-- <div class="analitycs pt-5">
							<header>
								<h3 class="h3">Analitycs</h3>
							</header>
							<p class="p">De nada adianta se não conhercemos o seu público, fazemos o levatamento e o entendimento de quem é seu público alvo e como faze-lo chegar até você.</p>
						</div> -->
						<div class="website pt-5">
							<header>
								<h3 class="h3">Não tem um website ou <br>e-commmerce para isso?</h3>
							</header>
							<p class="p">Fique tranquilo! Aqui na ITX Mídia, nós também fazemos a criação de sites, tanto sites institucionais para você poder divulgar sua empresa e serviços quanto um E-commerce para divulgar seus produtos.</p>
							<a class="seeMore mt-1 py-1" href="<?php echo get_permalink(get_page_by_path("websites"))?>">Saiba Mais</a>
						</div>
						<div class="traffic-img pt-5">
							<img src="<?php echo get_template_directory_uri()?>/assets/img/solicitar-orcamento.jpg" alt="">
							<h4 class="h4 text-center mt-3">Não perca mais tempo, não deixe seus  concorrentes a frente de você</h4>
							<div class="mt-3">
								<a class="btn btn-cta btn-lg d-block mx-auto" href="https://wa.me/5511930081732" target="_blank">solicitar orçamento</a>
							</div>
						</div>
					</div>
				</div>
			</div>
		</section>
		<section class="s-att mt-5 py-5 d-flex align-items-center">
			<div class="container">
				<header>
					<h2 class="h2-white" id="site">Por qual motivo eu deveria <span class="d-block">atualizar o meu site?</span></h2>
				</header>
				<div class="row mt-3 mt-md-5">
					<div class="col-md-3">
						<header>
							<h4 class="h4-28">Seu site não é mais apenas um cartão de visitas, ele tem a obrigação de trazer resultados significativos para a sua empresa.</h4>
						</header>
					</div>
					<div class="col-md-4 mt-5 mt-md-0">
						<header>
							<h3 class="h3-white my-3 mt-md-0">Sem uma estratégia</h3>
						</header>
						<ul class="badges-down d-flex flex-column gap-2">
							<li class="badge"><i class="bi bi-x"></i><p class="p-18"> Tráfego Baixo</p></li>
							<li class="badge"><i class="bi bi-x"></i><p class="p-18"> Poucos clientes</p></li>
							<li class="badge"><i class="bi bi-x"></i><p class="p-18"> Ninguém te encontra nas buscas</p></li>
						</ul>
					</div>
					<div class="col-md-5">
						<header>
							<h3 class="h3-white mb-3">Com o planejamento ITX Mídia</h3>
						</header>
						<ul class="badges-up d-flex flex-column gap-2">
							<li class="badge"><i class="bi bi-check2"></i><p class="p-18"> Você na primeira página das pesquisas</p></li>
							<li class="badge"><i class="bi bi-check2"></i><p class="p-18"> Aumento do Tráfego</p></li>
							<li class="badge"><i class="bi bi-check2"></i><p class="p-18"> Novos clientes todo mês</p></li>
						</ul>
					</div>
				</div>
			</div>
		</section>
		<section class="s-budget mt-5">
			<div class="container">
				<header>
					<h2 class="h2 text-center">Gostaria de receber um <span>orçamento</span>,<span class="d-block"> como funciona?</span></h2>
				</header>
				<div class="row mt-5">
					<div class="col-md-6">
						<div class="problem d-flex gap-3 mt-4">
							<p class="number">01/</p>
							<div class="content">
								<header>
									<h3 class="h3">Entendemos o seu problema</h3>
								</header>
								<p>Entramos em contato para entendermos melhor quais são suas reais necessidades do seu négócio.</p>
							</div>
						</div>
						<div class="audit d-flex gap-3 mt-4">
							<p class="number">02/</p>
							<div class="content">
								<header>
									<h3 class="h3">Auditoria do site</h3>
								</header>
								<p>Analisamos o seu site para mostrar novas oportunidades e pontos críticos que devem ser melhorados.</p>
							</div>
						</div>
						<div class="marketingPlan d-flex gap-3 mt-4">
							<p class="number">03/</p>
							<div class="content">
								<header>
									<h3 class="h3">Plano de marketing para seu negócio</h3>
								</header>
								<p>Quais são os serviços que vão fazer o seu negócio decolar.</p>
							</div>
						</div>
						<div class="budget d-flex gap-3 mt-4 ">
							<p class="number">04/</p>
							<div class="content">
								<header>
									<h3 class="h3">Envio do orçamento</h3>
								</header>
								<p>Fornecemos o prazo e o preço detalhado para o seu projeto.</p>
							</div>
						</div>
						</div>
					<div class="col-md-6">
						<img class="mx-auto" src="<?php echo get_template_directory_uri()?>/assets/img/entrar-em-contato.png" alt="">
						<a class="btn btn-cta btn-lg d-block mx-auto" href="https://wa.me/5511930081732" target="_blank">falar com um especialista</a>
					</div>	
				</div>
			</div>
		</section>
		<section class="s-cases mt-5">
			<div class="container pt-5">
				<div class="row">
					<div class="col-12">
						<header id="cases">
							<h2 class="h2 text-center">Nossos últimos cases de <span>sucesso</span></h2>
						</header>
					</div>
				</div>
				<swiper-container class="mySwiper mt-5" effect="cards" loop="true" grab-cursor="true" style="overflow:hidden;">
					<swiper-slide><img src="<?php echo get_template_directory_uri()?>/assets/img/interioresedesign.com.br.jpg" alt=""></swiper-slide>
					<swiper-slide><img src="<?php echo get_template_directory_uri()?>/assets/img/poloautomotivo.com.br.jpg" alt=""></swiper-slide>
					<swiper-slide><img src="<?php echo get_template_directory_uri()?>/assets/img/influtebol.com.br.jpg" alt=""></swiper-slide>
				</swiper-container>
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