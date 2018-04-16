<?php
    /*
        Template Name: Client Page 
    */
 ?>
 
 <?php get_header(); the_post(); ?>
 
     <div class="content-wrapper">
		<header class="parallax header-image <?php echo get_post_meta($post->ID, "header", true); ?>">
			<div class="overlay">
				<div class="page-heading col-md-8 col-lg-6">
					<h2><?php the_title(); ?></h2>
					<div class="col-md-8 nopadding">
						<p><?php echo get_post_meta($post->ID, 'tagline', true); ?></p>
					</div>
				</div>
			</div>
		</header>
		<section class="container-fluid">
			<?php the_content(); ?>
		</section>
		<section class="row container-fluid shattered back-button">
		    <a class="button-link" href="<?php echo get_post_meta($post->ID, 'button_link', true); ?>">
				<div class="button animate_bottom">
					<div class="button-text-mask">
						<p><img src="<?php bloginfo('template_url') ?>/images/SVG/arrow.svg" alt="arrow"> <?php echo get_post_meta($post->ID, 'button_text', true); ?> <img src="<?php bloginfo('template_url') ?>/images/SVG/arrow.svg" alt="arrow"></p>
					</div>
				</div>
			</a>
		</section>
	</div>
 
 <?php get_footer(); ?>