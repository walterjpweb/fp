<?php 
get_header(); 
/**
 * Template Name: Home
 **/
?>

<header id="home">
	<div class="header">
		<div class="container-fluid">
			<div class="row align-items-center justify-content-evenly">
				<div class="col-8 col-md-3 d-flex align-items-center" style="position: relative;">
					<a href="<?php echo get_home_url();?>"><img src="<?php echo get_template_directory_uri(); ?>/dist/img/logo.svg" alt="" class="img-fluid"></a>
					<a href="<?php echo get_home_url();?>"><img src="<?php echo get_template_directory_uri(); ?>/dist/img/logo2.svg" alt="" class="img-fluid logo2"></a>
				</div>
				<div class="col-4 col-md-8 text-right">
					<button class="button-menu d-block d-md-none" id="button-menu">
						<div></div>
						<div></div>
						<div></div>
					</button>
					<nav>
						<ul>
							<li><a href="#quemsomos" class="row-scroll">escritório</a></li>
							<li><a href="#atuacao" class="row-scroll">Atuação</a></li>
							<li><a href="#equipe" class="row-scroll">Equipe</a></li>
							<li><a href="#publicacoes" class="row-scroll">Publicações</a></li>
							<li><a href="#contato" class="row-scroll">Contato</a></li>
							<li><a href="https://br.linkedin.com/company/furtado-peixoto" target="_blank"><svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 448 512"><path d="M100.3 448H7.4V148.9h92.9zM53.8 108.1C24.1 108.1 0 83.5 0 53.8a53.8 53.8 0 0 1 107.6 0c0 29.7-24.1 54.3-53.8 54.3zM447.9 448h-92.7V302.4c0-34.7-.7-79.2-48.3-79.2-48.3 0-55.7 37.7-55.7 76.7V448h-92.8V148.9h89.1v40.8h1.3c12.4-23.5 42.7-48.3 87.9-48.3 94 0 111.3 61.9 111.3 142.3V448z"/></svg></a></li>
							<li><a href="https://wa.me/555132423105" target="_blank"><svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 448 512" style="transform: translateY(-1px);"><path d="M380.9 97.1C339 55.1 283.2 32 223.9 32c-122.4 0-222 99.6-222 222 0 39.1 10.2 77.3 29.6 111L0 480l117.7-30.9c32.4 17.7 68.9 27 106.1 27h.1c122.3 0 224.1-99.6 224.1-222 0-59.3-25.2-115-67.1-157zm-157 341.6c-33.2 0-65.7-8.9-94-25.7l-6.7-4-69.8 18.3L72 359.2l-4.4-7c-18.5-29.4-28.2-63.3-28.2-98.2 0-101.7 82.8-184.5 184.6-184.5 49.3 0 95.6 19.2 130.4 54.1 34.8 34.9 56.2 81.2 56.1 130.5 0 101.8-84.9 184.6-186.6 184.6zm101.2-138.2c-5.5-2.8-32.8-16.2-37.9-18-5.1-1.9-8.8-2.8-12.5 2.8-3.7 5.6-14.3 18-17.6 21.8-3.2 3.7-6.5 4.2-12 1.4-32.6-16.3-54-29.1-75.5-66-5.7-9.8 5.7-9.1 16.3-30.3 1.8-3.7 .9-6.9-.5-9.7-1.4-2.8-12.5-30.1-17.1-41.2-4.5-10.8-9.1-9.3-12.5-9.5-3.2-.2-6.9-.2-10.6-.2-3.7 0-9.7 1.4-14.8 6.9-5.1 5.6-19.4 19-19.4 46.3 0 27.3 19.9 53.7 22.6 57.4 2.8 3.7 39.1 59.7 94.8 83.8 35.2 15.2 49 16.5 66.6 13.9 10.7-1.6 32.8-13.4 37.4-26.4 4.6-13 4.6-24.1 3.2-26.4-1.3-2.5-5-3.9-10.5-6.6z"/></svg></a></li>
						</ul>
					</nav>
				</div>
			</div>
		</div>
	</div>
	<div class="menu-mobile d-block d-md-block d-lg-none">
		<div class="row">
			<div class="col-9 p-5">
				<a href="<?php echo get_home_url();?>"><img src="<?php echo get_template_directory_uri(); ?>/dist/img/logo.svg" alt="" class="img-fluid logo2"></a>
			</div>
			<div class="col-3 d-flex align-items-center justify-content-end p-5 pt-5">
				<button class="button-menu-close">
					<div></div>
					<div></div>
				</button>
			</div>
		</div>
		<div class="center">
			<ul class="">
				<li><a href="#quemsomos" class="row-scroll">escritório</a></li>
				<li><a href="#atuacao" class="row-scroll">Atuação</a></li>
				<li><a href="#equipe" class="row-scroll">Equipe</a></li>
				<li><a href="#publicacoes" class="row-scroll">Publicações</a></li>
				<li><a href="#contato" class="row-scroll">Contato</a></li>
			</ul>
			<div class="social">
				<a href="https://br.linkedin.com/company/furtado-peixoto" target="_blank"><svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 448 512"><path d="M100.3 448H7.4V148.9h92.9zM53.8 108.1C24.1 108.1 0 83.5 0 53.8a53.8 53.8 0 0 1 107.6 0c0 29.7-24.1 54.3-53.8 54.3zM447.9 448h-92.7V302.4c0-34.7-.7-79.2-48.3-79.2-48.3 0-55.7 37.7-55.7 76.7V448h-92.8V148.9h89.1v40.8h1.3c12.4-23.5 42.7-48.3 87.9-48.3 94 0 111.3 61.9 111.3 142.3V448z"/></svg></a>
				<a href="https://wa.me/555132423105" target="_blank"><svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 448 512" style="transform: translateY(-0px);"><path d="M380.9 97.1C339 55.1 283.2 32 223.9 32c-122.4 0-222 99.6-222 222 0 39.1 10.2 77.3 29.6 111L0 480l117.7-30.9c32.4 17.7 68.9 27 106.1 27h.1c122.3 0 224.1-99.6 224.1-222 0-59.3-25.2-115-67.1-157zm-157 341.6c-33.2 0-65.7-8.9-94-25.7l-6.7-4-69.8 18.3L72 359.2l-4.4-7c-18.5-29.4-28.2-63.3-28.2-98.2 0-101.7 82.8-184.5 184.6-184.5 49.3 0 95.6 19.2 130.4 54.1 34.8 34.9 56.2 81.2 56.1 130.5 0 101.8-84.9 184.6-186.6 184.6zm101.2-138.2c-5.5-2.8-32.8-16.2-37.9-18-5.1-1.9-8.8-2.8-12.5 2.8-3.7 5.6-14.3 18-17.6 21.8-3.2 3.7-6.5 4.2-12 1.4-32.6-16.3-54-29.1-75.5-66-5.7-9.8 5.7-9.1 16.3-30.3 1.8-3.7 .9-6.9-.5-9.7-1.4-2.8-12.5-30.1-17.1-41.2-4.5-10.8-9.1-9.3-12.5-9.5-3.2-.2-6.9-.2-10.6-.2-3.7 0-9.7 1.4-14.8 6.9-5.1 5.6-19.4 19-19.4 46.3 0 27.3 19.9 53.7 22.6 57.4 2.8 3.7 39.1 59.7 94.8 83.8 35.2 15.2 49 16.5 66.6 13.9 10.7-1.6 32.8-13.4 37.4-26.4 4.6-13 4.6-24.1 3.2-26.4-1.3-2.5-5-3.9-10.5-6.6z"/></svg></a>
			</div>
		</div>
	</div>
	<video autoplay muted loop playsinline id="myVideo" class="d-none d-md-block">
		<source src="<?php echo get_template_directory_uri(); ?>/dist/video/video.mp4" type="video/mp4">
	</video>
	<video autoplay muted loop playsinline id="myVideo" class="d-block d-md-none">
		<source src="<?php echo get_template_directory_uri(); ?>/dist/video/videom.mp4" type="video/mp4">
	</video>
	<div class="overlay"></div>
</header>

<section class="quemsomos" id="quemsomos">
	<div class="title-sec">
		<div class="container">
			<div class="row">
				<div class="col-md-3" style="position: relative;">
					<h5>escritório</h5>
				</div>
			</div>
		</div>
	</div>
	<div class="container">
		<div class="row justify-content-between align-items-center">
			<div class="col-md-5" data-aos="fade-up" data-aos-once="true" data-aos-anchor-placement="top-bottom">
				<h2>
					<?php
						while( have_rows('quem_somos') ): the_row(); 
						
							echo esc_html(the_sub_field('principal'));

						endwhile;
					?>
				</h2>
			</div>
			<div class="col-md-5">
				<img src="<?php echo get_template_directory_uri(); ?>/dist/img/quemsomos.png" alt="" class="img-fluid">
			</div>
		</div>
		<div class="row justify-content-between align-items-center mt-5">
			<div class="col-md-4" data-aos="fade-up" data-aos-once="true" data-aos-anchor-placement="top-bottom" data-aos-delay="100">
				<p>
					<?php
						while( have_rows('quem_somos') ): the_row(); 
						
							echo esc_html(the_sub_field('sub_titulo'));

						endwhile;
					?>
				</p>
			</div>
			<div class="col-md-5">
				<ul>
					<li data-aos="fade-up" data-aos-once="true" data-aos-anchor-placement="top-bottom">Resolução de Conflitos</li>
					<li data-aos="fade-up" data-aos-once="true" data-aos-anchor-placement="top-bottom" data-aos-delay="200">prevenção de litígios</li>
				</ul>
			</div>
		</div>
	</div>	
	<div class="texture">
		<img src="<?php echo get_template_directory_uri(); ?>/dist/img/texture.png" alt="" class="img-fluid">
	</div>
</section>

<section class="sobre">
	<div class="container">
		<div class="row justify-content-between align-items-center">
			<div class="col-md-6 order-1 order-md-0">
				<img src="<?php echo get_template_directory_uri(); ?>/dist/img/sobre.png" alt="" class="img-fluid">
			</div>
			<div class="col-md-6 order-0 order-md-1">
				<?php
					echo esc_html(the_field('sobre'));
				?>
			</div>
		</div>
	</div>
</section>

<section class="atuacao" id="atuacao">
	<div class="title-sec blue">
		<div class="container">
			<div class="row">
				<div class="col-md-3" style="position: relative;">
					<h5>atuação</h5>
				</div>
			</div>
		</div>
	</div>
	<div class="thirdImage"></div>
	<div class="maodir">
		<img src="<?php echo get_template_directory_uri(); ?>/dist/img/maodir.png" alt="" class="img-fluid">
	</div>
	<div class="maoesq">
		<img src="<?php echo get_template_directory_uri(); ?>/dist/img/maoesq.png" alt="" class="img-fluid">
	</div>
	<div class="container">
		<div class="row justify-content-end">
			<div class="col-md-6">
				<?php
					echo esc_html(the_field('atuacao'));
				?>
				<div class="button" data-aos="fade-up" data-aos-once="true" data-aos-anchor-placement="top-bottom" data-aos-delay="200">
					<a href="#contato" class="row-scroll">
						<button>
							<div class="line"></div>
							<div class="text">
								Entrar em contato <img src="<?php echo get_template_directory_uri(); ?>/dist/img/arrow2.png" alt="" class="img-fluid">
							</div>
						</button>
					</a>
				</div>
			</div>
		</div>
	</div>
</section>

<section class="equipe" id="equipe">
	<div class="title-sec blue">
		<div class="container">
			<div class="row">
				<div class="col-md-3" style="position: relative;">
					<h5>equipe</h5>
				</div>
			</div>
		</div>
	</div>
	<div class="container">
		<div class="row">
			<?php if( have_rows('socios') ): ?>
				<?php while( have_rows('socios') ): the_row(); ?>
					<div class="col-md-6">
						<div class="main">
							<div class="image">
								<img src="<?php echo esc_url( the_sub_field( 'foto' ) ); ?>" alt="" class="img-fluid">
							</div>
							<div class="text">
								<div class="title">
									<div><?php echo esc_url( the_sub_field( 'nome' ) ); ?></div>
									<div class="social">
										<a href="mailto:<?php echo esc_url( the_sub_field( 'email' ) ); ?>"><svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512"><path d="M48 64C21.5 64 0 85.5 0 112c0 15.1 7.1 29.3 19.2 38.4L236.8 313.6c11.4 8.5 27 8.5 38.4 0L492.8 150.4c12.1-9.1 19.2-23.3 19.2-38.4c0-26.5-21.5-48-48-48L48 64zM0 176L0 384c0 35.3 28.7 64 64 64l384 0c35.3 0 64-28.7 64-64l0-208L294.4 339.2c-22.8 17.1-54 17.1-76.8 0L0 176z"/></svg></a>
										<a href="<?php echo esc_url( the_sub_field( 'linkedin' ) ); ?>"><svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 448 512"><path d="M100.3 448H7.4V148.9h92.9zM53.8 108.1C24.1 108.1 0 83.5 0 53.8a53.8 53.8 0 0 1 107.6 0c0 29.7-24.1 54.3-53.8 54.3zM447.9 448h-92.7V302.4c0-34.7-.7-79.2-48.3-79.2-48.3 0-55.7 37.7-55.7 76.7V448h-92.8V148.9h89.1v40.8h1.3c12.4-23.5 42.7-48.3 87.9-48.3 94 0 111.3 61.9 111.3 142.3V448z"/></svg></a>
									</div>
								</div>
								<div class="sub"><?php echo esc_url( the_sub_field( 'cargo' ) ); ?></div>
								<div class="text">
									<p><?php echo esc_url( the_sub_field( 'descricao' ) ); ?></p>
								</div>
							</div>
						</div>
					</div>
				<?php endwhile; ?>
			<?php endif; ?>
			<div class="col-md-12">
				<div class="members">
					<?php if( have_rows('equipe') ): ?>
						<?php while( have_rows('equipe') ): the_row(); ?>
							<div class="member">
								<div class="image">
									<img src="<?php echo esc_url( the_sub_field( 'foto' ) ); ?>" alt="" class="img-fluid">
								</div>
								<div class="text">
									<div class="name"><?php echo esc_url( the_sub_field( 'nome' ) ); ?></div>
									<div class="sub">
										<div><?php echo esc_url( the_sub_field( 'cargo' ) ); ?></div>
										<div class="social">
											<a href="mailto:<?php echo esc_url( the_sub_field( 'email' ) ); ?>"><svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512"><path d="M48 64C21.5 64 0 85.5 0 112c0 15.1 7.1 29.3 19.2 38.4L236.8 313.6c11.4 8.5 27 8.5 38.4 0L492.8 150.4c12.1-9.1 19.2-23.3 19.2-38.4c0-26.5-21.5-48-48-48L48 64zM0 176L0 384c0 35.3 28.7 64 64 64l384 0c35.3 0 64-28.7 64-64l0-208L294.4 339.2c-22.8 17.1-54 17.1-76.8 0L0 176z"/></svg></a>
											<a href="<?php echo esc_url( the_sub_field( 'linkedin' ) ); ?>" target="_blank"><svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 448 512"><path d="M100.3 448H7.4V148.9h92.9zM53.8 108.1C24.1 108.1 0 83.5 0 53.8a53.8 53.8 0 0 1 107.6 0c0 29.7-24.1 54.3-53.8 54.3zM447.9 448h-92.7V302.4c0-34.7-.7-79.2-48.3-79.2-48.3 0-55.7 37.7-55.7 76.7V448h-92.8V148.9h89.1v40.8h1.3c12.4-23.5 42.7-48.3 87.9-48.3 94 0 111.3 61.9 111.3 142.3V448z"/></svg></a>
										</div>
									</div>
								</div>
								<div class="background"></div>
							</div>
						<?php endwhile; ?>
					<?php endif; ?>
				</div>
			</div>
		</div>
	</div>
</section>

<section class="publicacoes" id="publicacoes">
	<div class="title-sec blue">
		<div class="container">
			<div class="row">
				<div class="col-md-3" style="position: relative;">
					<h5>publicações</h5>
				</div>
			</div>
		</div>
	</div>
	<div class="container">
		<div class="row">
			<div class="col-md-12">
				<div class="row">
					<?php global $wp_query;
						$args = array( 'post_type' => 'post', 'order' => 'DESC', 'posts_per_page' => 3);
						$wp_query = new WP_Query($args); 
						if ( $wp_query->have_posts() ) : while ( $wp_query->have_posts() ) : $wp_query->the_post();
						$thumbnail = wp_get_attachment_image_src( get_post_thumbnail_id(get_the_ID()), array(800, 600));
						$categories_post = get_the_category($post_ID); ?>
						<div class="col-md-4 post">
							<a href="<?php the_permalink() ?>" title="<?php the_title_attribute(); ?>">
								<div class="item">
									<?php if(!empty($thumbnail[0])){ ?>
										<div class="image">
											<img src="<?php echo $thumbnail[0]; ?>" alt="" class="img-fluid">
										</div>
									<?php } ?>
									<div class="title-post">
										<h2><?php the_title(); ?></h2>
										<?php if(!empty($thumbnail[0])){ ?>
											<?php echo excerpt(100); ?>
										<?php }else{ ?>
											<?php echo excerpt(300); ?>
										<?php } ?>
									</div>
								</div>
							</a>
						</div>
					<?php endwhile; wp_reset_query(); ?>	
					<?php else : ?>
					
					<?php endif; ?>
				</div>
				<div class="row">
					<div class="col-md-12">
						<div class="button">
							<div class="line"></div>
							<a href="blog" class="row-scroll">
								<button>
									<div class="text">
										todas as postagens <img src="<?php echo get_template_directory_uri(); ?>/dist/img/arrow.png" alt="" class="img-fluid">
									</div>
								</button>
							</a>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
	<div class="texture">
		<img src="<?php echo get_template_directory_uri(); ?>/dist/img/texture2.png" alt="" class="img-fluid">
	</div>
</section>

<section class="newsletter">
	<div class="title-sec white">
		<div class="container">
			<div class="row">
				<div class="col-md-3" style="position: relative;">
					<h5>newsletter</h5>
				</div>
			</div>
		</div>
	</div>
	<div class="container">
		<div class="row justify-content-between align-items-center mt-5">
			<div class="col-md-3">
				<h3>Cadastre-se e receba nossas novidades.</h3>
			</div>
			<div class="col-md-7">
				<form action="">
					<div class="field">
						<input type="text" placeholder="Nome">
						<input type="text" placeholder="Email">
						<button>enviar <img src="<?php echo get_template_directory_uri(); ?>/dist/img/arrow.png" alt="" class="img-fluid"></button>
					</div>
					<p>Ao informar meus dados, concordo com a <a href="">Política de Privacidade.</a></p>
				</form>
			</div>
		</div>
	</div>
</section>

<footer style="background: #002B44;">
	<div class="title-sec white">
		<div class="container">
			<div class="row">
				<div class="col-md-3" style="position: relative;">
					<h5>contato</h5>
				</div>
			</div>
		</div>
	</div>
	<div class="container" id="contato">
		<div class="row">
			<div class="col-md-5" style="background: #002B44;">
				<div class="row h-100 justify-content-end align-items-center">
					<div class="col-md-12">
						<div class="spaccing">
                            <h4>Com sede em Porto Alegre/RS, o escritório tem atuação nacional consolidada em todos os Estados do Brasil.</h4>
                            <address>
                                <label>Endereço</label>
                                <p>Av. Diário de Notícias, 400 | Conjunto 2007/2008 <br /> Diamond Tower | Bairro Cristal | Porto Alegre | RS</p>
                            </address>
                            <div class="contato">
                                <div>
                                    <p><a href="tel:55 51 3242.3105">+55 51 3242.3105</a></p>
                                    <p><a href="mailto:contato@furtadoepeixoto.com.br">contato@furtadoepeixoto.com.br</a></p>
                                </div>
                                <div>
                                    <a href="https://br.linkedin.com/company/furtado-peixoto" target="_blank"><svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 448 512"><path d="M100.3 448H7.4V148.9h92.9zM53.8 108.1C24.1 108.1 0 83.5 0 53.8a53.8 53.8 0 0 1 107.6 0c0 29.7-24.1 54.3-53.8 54.3zM447.9 448h-92.7V302.4c0-34.7-.7-79.2-48.3-79.2-48.3 0-55.7 37.7-55.7 76.7V448h-92.8V148.9h89.1v40.8h1.3c12.4-23.5 42.7-48.3 87.9-48.3 94 0 111.3 61.9 111.3 142.3V448z"/></svg></a>
									<a href="https://wa.me/555132423105" target="_blank"><svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 448 512" style="transform: translateY(-0px);"><path d="M380.9 97.1C339 55.1 283.2 32 223.9 32c-122.4 0-222 99.6-222 222 0 39.1 10.2 77.3 29.6 111L0 480l117.7-30.9c32.4 17.7 68.9 27 106.1 27h.1c122.3 0 224.1-99.6 224.1-222 0-59.3-25.2-115-67.1-157zm-157 341.6c-33.2 0-65.7-8.9-94-25.7l-6.7-4-69.8 18.3L72 359.2l-4.4-7c-18.5-29.4-28.2-63.3-28.2-98.2 0-101.7 82.8-184.5 184.6-184.5 49.3 0 95.6 19.2 130.4 54.1 34.8 34.9 56.2 81.2 56.1 130.5 0 101.8-84.9 184.6-186.6 184.6zm101.2-138.2c-5.5-2.8-32.8-16.2-37.9-18-5.1-1.9-8.8-2.8-12.5 2.8-3.7 5.6-14.3 18-17.6 21.8-3.2 3.7-6.5 4.2-12 1.4-32.6-16.3-54-29.1-75.5-66-5.7-9.8 5.7-9.1 16.3-30.3 1.8-3.7 .9-6.9-.5-9.7-1.4-2.8-12.5-30.1-17.1-41.2-4.5-10.8-9.1-9.3-12.5-9.5-3.2-.2-6.9-.2-10.6-.2-3.7 0-9.7 1.4-14.8 6.9-5.1 5.6-19.4 19-19.4 46.3 0 27.3 19.9 53.7 22.6 57.4 2.8 3.7 39.1 59.7 94.8 83.8 35.2 15.2 49 16.5 66.6 13.9 10.7-1.6 32.8-13.4 37.4-26.4 4.6-13 4.6-24.1 3.2-26.4-1.3-2.5-5-3.9-10.5-6.6z"/></svg></a>
								</div>
                            </div>
                        </div>
                        <style>
                            .spaccing{
                                padding: 145px 0;
                            }
                            @media (max-width: 992px) {
                                .spaccing{
                                    padding: 75px 0;
                                }
                            }
                        </style>
					</div>
				</div>
			</div>
			<div class="col-md-3 text-center p-0">
				<div class="image d-none d-md-block">
					<img src="<?php echo get_template_directory_uri(); ?>/dist/img/footer.png" alt="" class="img-fluid">
				</div>
			</div>
			<div class="col-md-4 text-center p-0" style="line-height: 0; position: relative;">
				<iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3452.2953134856843!2d-51.24959932385404!3d-30.085727633193297!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x95197958110fd27b%3A0x71baedb379e4bafe!2sFURTADO%20%26%20PEIXOTO%20ADVOGADOS!5e0!3m2!1spt-BR!2sbr!4v1721735535818!5m2!1spt-BR!2sbr" width="100%" height="100%" style="border:0; line-height: 0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
			</div>
		</div>
	</div>
</footer>

<?php get_footer(); ?>