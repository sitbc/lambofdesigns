<?php get_header(); ?>

<div class="content-wrapper">
	<header class="row">
		<div class="sheep-hero">
			<img class="img-responsive" src="<?php bloginfo('template_url') ?>/images/SVG/home-sheep.svg" alt="sheep hero">
		</div>
		<div class="welcome col-md-8">
			<h2>Welcome to the lamb of designs</h2>
			<p><?php bloginfo('description'); ?></p>
		</div>
	</header>
	<section id="home-profile" class="row shattered">
		<div class="col-lg-5 col-md-8 nopadding content">
			<p class="animate_bottom">I build brands, websites, content that tells your story through design / photography based on thorough analysis and planning. Do You want to interact with your audience in a meaningful way, that makes sense to them? I can help with that.</p>
			<a class="button-link" href="<?php echo get_page_link(6); ?>">
				<div class="button animate_bottom">
					<div class="button-text-mask">
						<p><img src="<?php bloginfo('template_url') ?>/images/SVG/arrow.svg" alt="arrow"> View Profile <img src="<?php bloginfo('template_url') ?>/images/SVG/arrow.svg" alt="arrow"></p>
					</div>
				</div>
			</a>
		</div>
	</section>
	<section class="container-fluid row nopadding" id="recent-work">
	    <?php query_posts("posts_per_page=1&post_type=page&post_parent=8"); the_post(); ?>
		<div class="section-heading">
			<h3 class="animate_top">Recent work</h3>
		</div>
		<a href="<?php the_permalink(); ?>" class="project">
			<div class="project-main animate_bottom">
				<div class="project-img">
					<img src="<?php bloginfo('template_url');  echo get_post_meta($post->ID, 'thumbnail', true); ?>" alt="recent work">
				</div>
				<div class="content">
					<p class="responsibilities"><?php echo get_post_meta($post->ID, 'responsibilities', true); ?></p>
					<h4><span class="link-before"></span><?php the_title(); ?></h4>
					<p class="tagline"><?php echo get_post_meta($post->ID, 'tagline', true); ?></p>
				</div>
			</div>
		</a>
	</section>
</div>

<?php get_footer(); ?>