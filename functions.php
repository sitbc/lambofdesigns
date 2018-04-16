<?php
	
	// Add RSS links to <head> section
	automatic_feed_links();
	
	// Load jQuery
	if ( !is_admin() ) {
/*	   wp_deregister_script('jquery');
	   wp_register_script('jquery', (get_template_directory_uri() . "/js/jquery-3.3.1.min.js"), false);
	   wp_enqueue_script('jquery');
	   
	   wp_deregister_script('bootstrap');
	   wp_register_script('bootstrap', get_template_directory_uri() . "/js/bootstrap.min.js");
	   wp_enqueue_script('bootstrap');
	   
	   wp_enqueue_script('appear', get_template_directory_uri() .'/js/jquery.appear.js', array('jquery'), null, true);
	   wp_enqueue_script('parallax', get_template_directory_uri() .'/js/jquery.parallax-1.1.3.js', array('jquery'), null, true);
	   
	   wp_enqueue_script('navigation', get_template_directory_uri() .'/js/navigation.js', array('jquery'), null, true);
	   wp_enqueue_script('navigation', get_template_directory_uri() .'/js/custom.js', array('jquery'), null, true);*/
	}
	
	// Clean up the <head>
	function removeHeadLinks() {
    	remove_action('wp_head', 'rsd_link');
    	remove_action('wp_head', 'wlwmanifest_link');
    }
    add_action('init', 'removeHeadLinks');
    remove_action('wp_head', 'wp_generator');
    
	// Declare sidebar widget zone
    if (function_exists('register_sidebar')) {
    	register_sidebar(array(
    		'name' => 'Sidebar Widgets',
    		'id'   => 'sidebar-widgets',
    		'description'   => 'These are widgets for the sidebar.',
    		'before_widget' => '<div id="%1$s" class="widget %2$s">',
    		'after_widget'  => '</div>',
    		'before_title'  => '<h2>',
    		'after_title'   => '</h2>'
    	));
    }
    
    //NAVIGATION MENUS
    
    register_nav_menus(array(
    	'primary' => __('Primary Menu'),
    	'footer' => __('Footer Menu'),
    ));

?>