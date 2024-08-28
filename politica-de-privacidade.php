<?php 
get_header(); 
/**
 * Template Name: Política de privacidade
 **/
?>

<header id="interno">
	<div class="header">
		<div class="container-fluid">
			<div class="row align-items-center justify-content-evenly">
				<div class="col-8 col-md-3 d-flex align-items-center" style="position: relative;">
					<a href="<?php echo get_home_url();?>"><img src="<?php echo get_template_directory_uri(); ?>/dist/img/logo2.svg" alt="" class="img-fluid"></a>
				</div>
				<div class="col-4 col-md-8">
					<nav>
						<ul>
							<li><a href="<?php echo get_home_url();?>/#quemsomos" class="row-scroll">quem somos</a></li>
							<li><a href="<?php echo get_home_url();?>/#atuacao" class="row-scroll">Atuação</a></li>
							<li><a href="<?php echo get_home_url();?>/#equipe" class="row-scroll">Equipe</a></li>
							<li><a href="<?php echo get_home_url();?>/#publicacoes" class="row-scroll">Publicações</a></li>
							<li><a href="<?php echo get_home_url();?>/#contato" class="row-scroll">Contato</a></li>
							<li><a href="https://br.linkedin.com/company/furtado-peixoto" target="_blank"><svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 448 512"><path d="M100.3 448H7.4V148.9h92.9zM53.8 108.1C24.1 108.1 0 83.5 0 53.8a53.8 53.8 0 0 1 107.6 0c0 29.7-24.1 54.3-53.8 54.3zM447.9 448h-92.7V302.4c0-34.7-.7-79.2-48.3-79.2-48.3 0-55.7 37.7-55.7 76.7V448h-92.8V148.9h89.1v40.8h1.3c12.4-23.5 42.7-48.3 87.9-48.3 94 0 111.3 61.9 111.3 142.3V448z" style="fill: #002B44;"/></svg></a></li>
						</ul>
					</nav>
				</div>
			</div>
		</div>
	</div>
</header>

<div class="container pb-5">
    <div class="row">
        <div class="col-md-12">
            <h1 class="mb-5"><?php the_title(); ?></h1>
            <?php the_content(); ?>
        </div>
    </div>
</div>

<?php get_footer(); ?>