<?php
    /*
        Template Name: Profile Page 
    */
 ?>
 
 <?php get_header(); the_post(); ?>
        <div class="content-wrapper">
			<header class="row">
				<div class="page-heading col-sm-6 col-xs-8">
					<h2><?php echo get_post_meta($post->ID, 'title', true); ?></h2>
					<div class="col-md-6 col-sm-10 nopadding">
						<p><?php echo get_post_meta($post->ID, 'secondary_title', true); ?></p>
					</div>
				</div>
			</header>
			<div class="animated" id="side-sheep">
				<img src="<?php bloginfo('template_url') ?>/images/SVG/profile-sheep.svg" alt="sheep profile">
			</div>
			<section id="profile" class="row shattered">
				<div class="col-md-8 col-lg-5 nopadding content">
					<?php the_content(); ?>
					<a class="button-link" href="<?php echo get_post_meta($post->ID, 'button_link', true); ?>">
						<div class="button animate_bottom">
							<div class="button-text-mask">
								<p><img src="<?php bloginfo('template_url') ?>/images/SVG/arrow.svg" alt="arrow"> <?php echo get_post_meta($post->ID, 'button_text', true); ?> <img src="<?php bloginfo('template_url') ?>/images/SVG/arrow.svg" alt="arrow"></p>
							</div>
						</div>
					</a>
				</div>
			</section>
		</div>
 
 <?php get_footer(); ?>