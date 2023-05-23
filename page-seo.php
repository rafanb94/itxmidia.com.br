<?// Template name:seo?>
<?php get_header();?>
<main id="pageService" data-bs-spy="scroll" data-bs-target="#navbar-example2" data-bs-offset="0" class="scrollspy-example" tabindex="0">
		<section class="s-hero d-flex align-items-center">
			<div class="container">
				<div class="row">
					<nav style="--bs-breadcrumb-divider: '>';" aria-label="breadcrumb">
						<ol class="breadcrumb justify-content-center">
							<li class="breadcrumb-item"><a href="/">Home</a></li>
							<li class="breadcrumb-item"><a href="#">Nossos Serviços</a></li>
							<li class="breadcrumb-item active" aria-current="page">SEO</li>
						</ol>
					</nav>
				</div>
				<div class="row justify-content-center">
					<div id="hero-section" class="col-md-8">
						<header>
							<h1 class="h1-white text-center fs-2"><?php the_title()?></h1>
						</header>
						<p class="p-white text-center mt-3">Sua em presa na primeria página do Google.</p>
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
								<a class="nav-link" href="#item-1">O que é SEO?</a>
								<!-- <nav class="nav nav-pills flex-column">
									<a class="nav-link ms-3 my-1" href="#item-1-1">Item 1-1</a>
									<a class="nav-link ms-3 my-1" href="#item-1-2">Item 1-2</a>
								</nav> -->
								<a class="nav-link" href="#item-2">O que é um projeto com SEO?</a>
								<a class="nav-link" href="#item-3">Quais os benefícios?</a>
							</nav>
						</nav>
						<div data-bs-spy="scroll" data-bs-target="#navbar-example3" data-bs-offset="0" tabindex="0">
							<h2 id="item-1" class="my-3">O que é SEO?</h2>
							<p class="p mb-1">Conceito mais conhecido pela sigla SEO, do inglês “Search Engine Optimization”. Envolve esforço técnico, relacionados com a popularidade e conteúdo de um website, para posicioná-lo nas primeiras páginas de resultados orgânicos dos mecanismos de busca como: Google, Yahoo, Bing, entre outros. </p>
							<p class="p mb-1">Alguns conhecem o SEO também como otimização para resultados orgânicos, pois o trabalho de indexação e classificação de sites e suas páginas web é realizado por um agente, um robô dos mecanismos de busca.</p>

							<p class="p mb-1">Trata-se de um agente autônomo com inteligência artificial que através de seus algoritmos realiza a análise das páginas de um site com o objetivo de entender sua importância perante determinado assunto, bem como a qualidade de seu conteúdo.</p>
							<h2 id="item-2" class="my-3">Com base no que entendemos como importante para um projeto de seo voltado para resultados, nosso ciclo de projeto compreende:</h2>
							<ul>
								<li><p class="p">Planejar o desenvolvimento do SEO na organização através de treinamentos, workshops, reuniões;</p></li>
								<li><p class="p">Colaborar para a execução das recomendações dando total suporte para as equipes que vão executar os conceitos passados através de nossos relatórios;</p></li>
								<li><p class="p">Monitorar resultados mensalmente, para ajustes no planejamento e novas execuções.</p></li>
							</ul>
							<h2 id="item-3" class="my-3">Quais são os benefícios?</h2>
							<p class="p mb-1">Os resultados são atingidos conforme as implementações são realizadas. Ou seja, há um aumento nas vendas e geração de negócios, pois o site vai sendo otimizado e seu posicionamento vai melhorando.</p>
							<p class="p mb-1">Para sites de e-commerce o aumento de vendas é perceptível logo nos primeiros meses após as primeiras implementações, afinal, o site começa a aparecer por nomes de seus produtos e assim as chances de venda aumentam ainda mais.</p>
							<p class="p mb-1">Somos uma consultoria de inteligência para negócios digitais e trabalhamos com diversas equipes integradas: web analytics, search, business intelligence, SEO.</p>
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