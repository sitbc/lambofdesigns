<?php
    /*
        Template Name: Services Page
    */
?>

<?php get_header(); the_post(); ?>

        <div class="content-wrapper">
			<header class="row parallax" id="services-header-image">
				<div class="overlay">
					<div class="page-heading col-md-8 col-lg-6">
						<h2><?php echo get_post_meta($post->ID, 'title', true); ?></h2>
						<div class="col-md-8 nopadding">
							<p><?php echo get_post_meta($post->ID, 'secondary_title', true); ?></p>
						</div>
					</div>
				</div>
			</header>
			<?php the_content(); ?>
		</div>

<?php get_footer(); ?>