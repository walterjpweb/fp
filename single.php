<?php
/*
  Single Blog
 */
get_header();
global $post;
$page = get_queried_object();
$img = get_the_post_thumbnail_url('', array(1920, 640));
$categoryPost = get_the_category($post->ID);
$url_atual = "http://$_SERVER[HTTP_HOST]$_SERVER[REQUEST_URI]";
$post_author_id = (int) $wpdb->get_var( $wpdb->prepare( "SELECT post_author FROM {$wpdb->posts} WHERE ID = %d ", $post->ID ) );
$author =  new WP_User( $post_author_id );
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
				<li><a href="#quemsomos" class="row-scroll">quem somos</a></li>
				<li><a href="#atuacao" class="row-scroll">Atuação</a></li>
				<li><a href="#equipe" class="row-scroll">Equipe</a></li>
				<li><a href="#publicacoes" class="row-scroll">Publicações</a></li>
				<li><a href="#contato" class="row-scroll">Contato</a></li>
			</ul>
			<div class="social">
				<a href="https://br.linkedin.com/company/furtado-peixoto" target="_blank"><svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 448 512"><path d="M100.3 448H7.4V148.9h92.9zM53.8 108.1C24.1 108.1 0 83.5 0 53.8a53.8 53.8 0 0 1 107.6 0c0 29.7-24.1 54.3-53.8 54.3zM447.9 448h-92.7V302.4c0-34.7-.7-79.2-48.3-79.2-48.3 0-55.7 37.7-55.7 76.7V448h-92.8V148.9h89.1v40.8h1.3c12.4-23.5 42.7-48.3 87.9-48.3 94 0 111.3 61.9 111.3 142.3V448z"/></svg></a>
			</div>
		</div>
	</div>
</header>
<section id="pageDefault">
	<div class="title">
		<div class="container">
			<div class="row justify-content-between">
				<div class="col-md-6">
					<h1><?php the_title(); ?></h1>
				</div>
				<div class="col-md-5">
					<div class="texture">
						
					</div>
				</div>
			</div>
		</div>
		<div class="topic">
			<div class="container">
				<div class="row">
					<div class="col-md-7">
						<div class="line">
							<div class="row">
								<div class="col-md-6">
									<label>artigo</label>
								</div>
								<div class="col-md-6">
									<label>autor: <?php echo $author->display_name; ?></label>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
	<div class="container">
		<article class="post">
			<div class="row">
				<?php if ( have_posts() ) : the_post(); ?>
					<div class="col-md-7 order-1 order-md-0">
						<div id="post-<?php the_ID(); ?>" role="article" <?php post_class( 'clearfix' ); ?>>
							<br />	
							<?php the_content(); ?>
						</div>
					</div>
					<div class="col-md-5 order-0 order-md-1">
						<div class="image">
							<img src="<?=$img?>" alt="">
						</div>
					</div>
					<div class="col-md-12 order-2">
						<div class="share">
							<label>compartilhe</label>
							<div class="buttons">
								<button onclick="shareWhatsapp('<?=get_the_permalink()?>')"><svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 448 512"><!--!Font Awesome Free 6.6.0 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license/free Copyright 2024 Fonticons, Inc.--><path d="M380.9 97.1C339 55.1 283.2 32 223.9 32c-122.4 0-222 99.6-222 222 0 39.1 10.2 77.3 29.6 111L0 480l117.7-30.9c32.4 17.7 68.9 27 106.1 27h.1c122.3 0 224.1-99.6 224.1-222 0-59.3-25.2-115-67.1-157zm-157 341.6c-33.2 0-65.7-8.9-94-25.7l-6.7-4-69.8 18.3L72 359.2l-4.4-7c-18.5-29.4-28.2-63.3-28.2-98.2 0-101.7 82.8-184.5 184.6-184.5 49.3 0 95.6 19.2 130.4 54.1 34.8 34.9 56.2 81.2 56.1 130.5 0 101.8-84.9 184.6-186.6 184.6zm101.2-138.2c-5.5-2.8-32.8-16.2-37.9-18-5.1-1.9-8.8-2.8-12.5 2.8-3.7 5.6-14.3 18-17.6 21.8-3.2 3.7-6.5 4.2-12 1.4-32.6-16.3-54-29.1-75.5-66-5.7-9.8 5.7-9.1 16.3-30.3 1.8-3.7 .9-6.9-.5-9.7-1.4-2.8-12.5-30.1-17.1-41.2-4.5-10.8-9.1-9.3-12.5-9.5-3.2-.2-6.9-.2-10.6-.2-3.7 0-9.7 1.4-14.8 6.9-5.1 5.6-19.4 19-19.4 46.3 0 27.3 19.9 53.7 22.6 57.4 2.8 3.7 39.1 59.7 94.8 83.8 35.2 15.2 49 16.5 66.6 13.9 10.7-1.6 32.8-13.4 37.4-26.4 4.6-13 4.6-24.1 3.2-26.4-1.3-2.5-5-3.9-10.5-6.6z"/></svg></button>
								<button onclick="shareFacebook('<?=get_the_permalink()?>')"><svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 448 512"><!--!Font Awesome Free 6.6.0 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license/free Copyright 2024 Fonticons, Inc.--><path d="M64 32C28.7 32 0 60.7 0 96V416c0 35.3 28.7 64 64 64h98.2V334.2H109.4V256h52.8V222.3c0-87.1 39.4-127.5 125-127.5c16.2 0 44.2 3.2 55.7 6.4V172c-6-.6-16.5-1-29.6-1c-42 0-58.2 15.9-58.2 57.2V256h83.6l-14.4 78.2H255V480H384c35.3 0 64-28.7 64-64V96c0-35.3-28.7-64-64-64H64z"/></svg></button>
								<button onclick="shareTwitter('<?=get_the_permalink()?>')"><svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512"><!--!Font Awesome Free 6.6.0 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license/free Copyright 2024 Fonticons, Inc.--><path d="M389.2 48h70.6L305.6 224.2 487 464H345L233.7 318.6 106.5 464H35.8L200.7 275.5 26.8 48H172.4L272.9 180.9 389.2 48zM364.4 421.8h39.1L151.1 88h-42L364.4 421.8z"/></svg></button>
							</div>
						</div>
						<script>
							function shareTwitter(url){
								var w = 630;
								var h = 360;

								var left = screen.width/2 - 630/2;
								var top = screen.height/2 - 360/2;

								window.open('https://twitter.com/intent/tweet?original_referer='+url, 'Compartilhar no facebook', 'toolbar=no, location=no, directories=no, status=no, ' + 'menubar=no, scrollbars=yes, resizable=no, copyhistory=no, width='+w+ ', height=' + h + ', top=' + top + ', left=' + left);
							}
							function shareFacebook(url){
								var w = 630;
								var h = 360;

								var left = screen.width/2 - 630/2;
								var top = screen.height/2 - 360/2;

								window.open('http://www.facebook.com/sharer.php?u='+url, 'Compartilhar no facebook', 'toolbar=no, location=no, directories=no, status=no, ' + 'menubar=no, scrollbars=yes, resizable=no, copyhistory=no, width='+w+ ', height=' + h + ', top=' + top + ', left=' + left);
							}
							function shareWhatsapp(url){
								var w = 630;
								var h = 360;

								var left = screen.width/2 - 630/2;
								var top = screen.height/2 - 360/2;

								window.open('https://wa.me/text='+url, 'Compartilhar no facebook', 'toolbar=no, location=no, directories=no, status=no, ' + 'menubar=no, scrollbars=yes, resizable=no, copyhistory=no, width='+w+ ', height=' + h + ', top=' + top + ', left=' + left);
							}
						</script>
					</div>
				<?php else : ?>
					<div id="post-not-found">
						<h2><?php _e( "Não encontrado!", "MDA Pesquisa" ); ?></h2>
						<p>
							<?php _e( "Desculpe, mas o arquivo solicitado não foi encontrado neste portal.", "MDA Pesquisa" ); ?>
						</p>	
					</div>
					<hr>
				<?php endif; ?>
			</div>
		</article> <!-- end article -->
	</div>
</section>
<section class="posts-relacionados mt-3 publicacoes">
	<div class="title-sec blue">
		<div class="container">
			<div class="row">
				<div class="col-md-3" style="position: relative;">
					<h5>outras publicações</h5>
				</div>
			</div>
		</div>
	</div>
	<div class="container">
		<div class="row justify-content-center">
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
			</div>
		</div>
	</div>
</section>
<?php
	get_footer();
?>