<?php
    /*
        Template Name: Contact Page 
    */
?>

<?php get_header(); the_post(); ?>

        <header class="row shattered" id="contact-page">
			<div class="page-heading-contact col-md-8 col-md-offset-2 col-lg-6 col-lg-offset-3 text-center">
				<h2 class="animate_top"><?php echo get_post_meta($post->ID, 'title', true); ?></h2>
				<div class="col-sm-8 col-sm-offset-2 col-xs-6 col-xs-offset-3 nopadding">
					<p class="animate_bottom"><?php echo get_post_meta($post->ID, 'secondary_title', true); ?></p>
				</div>
				<div class="animate_bottom col-md-12" style="margin-top:2em;">
					<a href="mailto:<?php echo get_post_meta($post->ID, 'email', true); ?>"><?php echo get_post_meta($post->ID, 'email', true); ?></a>
				</div>
			</div>
		</header>
		
<?php get_footer(); ?>