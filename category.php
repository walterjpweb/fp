<?php 
get_header(); 
$category = get_category( get_query_var( 'cat' ) );
$cat_id = $category->cat_ID;
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
    <div class="title-sec white">
		<div class="container">
			<div class="row">
				<div class="col-md-3" style="position: relative;">
					<h5>publicações</h5>
				</div>
			</div>
		</div>
	</div>
	<div class="title">
		<div class="container">
			<div class="row justify-content-between">
				<div class="col-md-6">
					<h1><?php echo $category->name; ?></h1>
				</div>
				<div class="col-md-5">
					<div class="texture">
						
					</div>
				</div>
			</div>
		</div>
        <div class="topic">
			<div class="container">
				<div class="row justify-content-end">
					<div class="col-md-5">
						<div class="filter">
                            <form role="search" method="get" action="<?php echo home_url('/'); ?>/blog">
                                <select name="" class="select_location" onchange="this.options[this.selectedIndex].value && (window.location = this.options[this.selectedIndex].value);">
                                    <option value="">Filtrar</option>
                                    <?php
                                    $categories =  get_categories();
                                    foreach($categories as $category) {
                                        $cor = get_field("cor_destaque", $category);
                                        ?>
                                        <option value="<?php echo home_url('/'); ?>/category/<?php echo $category->slug; ?>"><?php echo $category->name; ?></option>
                                        <?php
                                    }
                                    ?>
                                </select>
                            </form>
                            <form role="search" method="get" action="<?php echo home_url('/'); ?>/blog">
                                <fieldset>
                                    <input type="text" name="search" placeholder="buscar" value="<?php the_search_query(); ?>">
                                    <button><svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512"><!--!Font Awesome Free 6.6.0 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license/free Copyright 2024 Fonticons, Inc.--><path d="M416 208c0 45.9-14.9 88.3-40 122.7L502.6 457.4c12.5 12.5 12.5 32.8 0 45.3s-32.8 12.5-45.3 0L330.7 376c-34.4 25.2-76.8 40-122.7 40C93.1 416 0 322.9 0 208S93.1 0 208 0S416 93.1 416 208zM208 352a144 144 0 1 0 0-288 144 144 0 1 0 0 288z"/></svg></button>
                                </fieldset>
                            </form>
                        </div>
					</div>
				</div>
			</div>
		</div>
    </div>
</section>
<section class="publicacoes">
	<div class="container">
        <div class="row">
            <?php global $wp_query;
                $args = array( 'post_type' => 'post', 'order' => 'DESC', 'posts_per_page' => 3, 'cat' => $cat_id);
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
</section>

<?php get_footer(); ?>