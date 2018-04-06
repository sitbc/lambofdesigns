<?php
    /*
        Template Name: Work Page 
    */
 ?>
 
 <?php get_header(); the_post(); ?>
 
        <div class="content-wrapper">
			<header class="row">
				<div class="page-heading col-sm-6">
					<h2>The flock</h2>
					<div class="col-md-8 col-sm-10 col-xs-6 nopadding">
						<p>Over the years I’ve encountered interesting people and projects. Here are a few.</p>
					</div>
				</div>
			</header>
			<div class="animated" id="dog">
				<img src="<?php bloginfo('template_url') ?>/images/SVG/work-dog.svg" alt="sheep dog">
			</div>
			<section class="container-fluid" id="projects">
				<?php
                    $child_pages = new WP_Query( array(
                    'post_type'      => 'page', // set the post type to page
                    'posts_per_page' => -1, // number of posts (pages) to show
                    'post_parent'    => 8, // enter the post ID of the parent page
                    'no_found_rows'  => true, // no pagination necessary so improve efficiency of loop
                    ) );

                    if ( $child_pages->have_posts() ) : while ( $child_pages->have_posts() ) : $child_pages->the_post(); 
                        // Do whatever you want to do for every page. the_title(), the_permalink(), etc...
                ?>
				
				<a href="<?php the_permalink(); ?>" class="project">
					<div class="col-md-4 project-main nopadding animate_bottom">
						<div class="project-img">
							<img src="<?php bloginfo('template_url'); echo get_post_meta($post->ID, 'thumbnail', true); ?>" alt="<?php the_title(); ?>">
						</div>
						<div class="content">
							<p class="responsibilities"><?php echo get_post_meta($post->ID, 'responsibilities', true); ?></p>
							<h5><span class="link-before"></span><?php the_title(); ?></h5>
							<p class="tagline"><?php echo get_post_meta($post->ID, 'tagline', true); ?></p>
						</div>
					</div>
				</a>
				
				<?php 
                    endwhile; endif;  
                    wp_reset_postdata(); 
                ?>
			</section>
		</div>
 
 <?php get_footer(); ?>