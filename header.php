<!DOCTYPE html>
<html <?php language_attributes(); ?>>

<head>
	<meta charset="<?php bloginfo('charset'); ?>" />
	
	<?php if (is_search()) { ?>
	   <meta name="robots" content="noindex, nofollow" /> 
	<?php } ?>

	<title>
		   <?php
		      if (function_exists('is_tag') && is_tag()) {
		         single_tag_title("Tag Archive for &quot;"); echo '&quot; - '; }
		      elseif (is_archive()) {
		         wp_title(''); echo ' Archive - '; }
		      elseif (is_search()) {
		         echo 'Search for &quot;'.wp_specialchars($s).'&quot; - '; }
		      elseif (!(is_404()) && (is_single()) || (is_page())) {
		         wp_title(''); echo ' - '; }
		      elseif (is_404()) {
		         echo 'Not Found - '; }
		      if (is_home()) {
		         bloginfo('name'); echo ' - '; bloginfo('description'); }
		      else {
		          bloginfo('name'); }
		      if ($paged>1) {
		         echo ' - page '. $paged; }
		   ?>
	</title>
	<link rel="shortcut icon" href="/favicon.ico">
	<link href="<?php bloginfo('template_url'); ?>/css/font-awesome.min.css" rel="stylesheet">
	<link href="<?php bloginfo('template_url'); ?>/css/bootstrap.css" rel="stylesheet" type="text/css">
	<link href="<?php bloginfo('template_url'); ?>/css/animate.min.css" rel="stylesheet" type="text/css">
	<link rel="stylesheet" href="<?php bloginfo('stylesheet_url'); ?>">
	<link href="<?php bloginfo('template_url'); ?>/css/header-images.css" rel="stylesheet" type="text/css">
	
	<link rel="pingback" href="<?php bloginfo('pingback_url'); ?>">

	<?php if ( is_singular() ) wp_enqueue_script('comment-reply'); ?>

	<?php wp_head(); ?>
	<?php 
        if( is_single() and $singlePostJs = get_post_meta($post->ID, 'single-post-js', true) )
        echo $singlePostJs;
    ?>
	<?php 
        if( is_page() and $singlePostJs = get_post_meta($post->ID, 'single-post-js', true) )
        echo $singlePostJs;
    ?>
    
    <script>
	  (function(d) {
		var config = {
		  kitId: 'qjq4dgc',
		  scriptTimeout: 3000,
		  async: true
		},
		h=d.documentElement,t=setTimeout(function(){h.className=h.className.replace(/\bwf-loading\b/g,"")+" wf-inactive";},config.scriptTimeout),tk=d.createElement("script"),f=false,s=d.getElementsByTagName("script")[0],a;h.className+=" wf-loading";tk.src='https://use.typekit.net/'+config.kitId+'.js';tk.async=true;tk.onload=tk.onreadystatechange=function(){a=this.readyState;if(f||a&&a!="complete"&&a!="loaded")return;f=true;clearTimeout(t);try{Typekit.load(config)}catch(e){}};s.parentNode.insertBefore(tk,s)
	  })(document);
	</script>
    
</head>

<body>
	<div class="container-fluid wrapper">
		<div class="loader"></div>
		<div class="sidebar">
			<div id="nav-logo">
				<!--<img src="images/SVG/logo.svg" alt="logo">-->
				<svg version="1.1" id="Layer_1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px" viewBox="0 0 100 62" style="enable-background:new 0 0 100 62;" xml:space="preserve">
					<style type="text/css">
						.st0{fill:#FFFFFF;}
					</style>
					<g>
						<path class="st0" d="M36.1,7.7c0,0,0.3-0.4,1-1c0.7-0.6,1.7-1.3,3-1.9c0.7-0.3,1.4-0.6,2.2-0.8c0.8-0.2,1.7-0.3,2.5-0.3
							c0.9,0,1.8-0.1,2.7-0.2c0.9-0.1,1.8-0.3,2.8-0.5c0.5-0.1,0.9-0.1,1.4-0.2c0.5,0,0.9-0.1,1.4,0c0.5,0,0.9,0,1.4,0.1
							c0.5,0,0.9,0.1,1.3,0.2c0.4,0.1,0.9,0.1,1.3,0.3c0.4,0.1,0.8,0.2,1.2,0.4C58.6,3.9,59,4,59.3,4.2c0.4,0.2,0.7,0.3,1,0.5
							C61,5.1,61.5,5.4,62,5.7c0.2,0.2,0.5,0.3,0.7,0.5c0.2,0.2,0.4,0.3,0.5,0.5c0.6,0.6,1,1,1,1l-0.1,0.2c0,0-0.5-0.1-1.2-0.4
							C62.5,7.3,62,7.2,61.5,7c-0.3-0.1-0.5-0.2-0.8-0.3c-0.3-0.1-0.6-0.2-0.9-0.3c-0.3-0.1-0.7-0.2-1-0.3C58.4,6.1,58,6,57.6,5.9
							c-0.7-0.2-1.5-0.4-2.3-0.6c-0.4-0.1-0.8-0.2-1.2-0.3c-0.4-0.1-0.8-0.2-1.3-0.3c-0.9-0.1-1.7-0.3-2.7-0.5c-0.9-0.1-1.8-0.2-2.7-0.1
							c-0.9,0.1-1.7,0.4-2.5,0.7c-0.8,0.3-1.6,0.7-2.3,1c-0.7,0.3-1.4,0.5-2.1,0.7c-1.3,0.4-2.4,0.8-3.2,1c-0.8,0.2-1.2,0.3-1.2,0.3
							L36.1,7.7z"/>
						<path class="st0" d="M67.8,12c0,0,15.4-8.4,24.3-6.4c8.9,2,8.9,7.9,5,9.1c-3.9,1.2-0.4,6.6-27.1,2.9c0,0,0-0.5-0.1-0.9
							c0,0,14.3,2.8,19.8,0.5c1.7-0.5,3.3-3.3,6.1-4.9c2.9-1.7-2.5-14.1-27,1.5C68.8,13.8,68.5,13,67.8,12z"/>
						<path class="st0" d="M32.4,12c0,0-15.4-8.4-24.3-6.4c-8.9,2-8.9,7.9-5,9.1c3.9,1.2,0.4,6.6,27.1,2.9c0,0,0-0.5,0.1-0.9
							c0,0-14.3,2.8-19.8,0.5c-1.7-0.5-3.3-3.3-6.1-4.9c-2.9-1.7,2.5-14.1,27,1.5C31.5,13.8,31.8,13,32.4,12z"/>
						<path class="st0" d="M70.1,31.4c0,0,0,0.3,0,0.8c0,0.5-0.1,1.3-0.1,2.4c0,0.5-0.1,1.1-0.2,1.7c-0.1,0.6-0.1,1.3-0.2,2
							c-0.2,1.4-0.5,3-0.9,4.7c-0.4,1.7-0.9,3.6-1.8,5.5c-0.2,0.5-0.5,1-0.8,1.4c-0.2,0.2-0.4,0.5-0.6,0.7c-0.2,0.2-0.4,0.4-0.5,0.6
							c-0.8,0.8-1.6,1.5-2.5,2.2c-1.7,1.4-3.6,2.7-5.5,3.9c-1,0.6-2,1.2-3.1,1.6L53.4,59L53,59.1c-0.3,0.1-0.6,0.2-0.9,0.3
							c-0.3,0.1-0.6,0.2-0.9,0.2l-0.5,0.1l-0.2,0l-0.1,0l-0.1,0c0,0,0,0-0.1,0l0,0l-0.9,0c-0.3,0-0.6-0.1-1-0.1c-0.3,0-0.6-0.1-0.9-0.2
							c-0.3-0.1-0.6-0.2-0.9-0.3c-0.6-0.2-1.1-0.4-1.7-0.7c-0.5-0.3-1.1-0.5-1.6-0.8c-2.1-1.2-3.9-2.6-5.6-4.1c-0.8-0.7-1.6-1.5-2.4-2.3
							c-0.2-0.2-0.4-0.4-0.5-0.6l-0.1-0.1l0,0l-0.1-0.1l0,0l-0.1-0.2L34.4,50c-0.1-0.1-0.1-0.2-0.2-0.3L34,49.3c-0.1-0.3-0.3-0.5-0.4-0.8
							c-0.8-1.9-1.3-3.8-1.7-5.5c-0.4-1.7-0.7-3.3-0.9-4.7c-0.2-1.4-0.4-2.6-0.5-3.7c-0.1-1-0.2-1.8-0.2-2.4c0-0.5,0-0.8,0-0.8l0.2,0
							c0,0,0.3,1.1,0.9,3.1c0.3,1,0.6,2.2,1,3.5c0.4,1.4,0.8,2.9,1.3,4.5c0.1,0.4,0.3,0.8,0.4,1.2c0.1,0.4,0.3,0.8,0.5,1.3
							c0.2,0.4,0.3,0.9,0.5,1.3c0.2,0.4,0.4,0.8,0.6,1.3c0.1,0.2,0.2,0.4,0.3,0.5l0.1,0.3c0.1,0.1,0.1,0.2,0.2,0.3l0.2,0.3l0.1,0.2l0,0
							c0.1,0.1-0.1-0.1,0-0.1l0,0l0.1,0.1c0.2,0.2,0.3,0.4,0.5,0.6c0.7,0.7,1.4,1.5,2.2,2.2c1.5,1.4,3.2,2.9,5,4.1
							c0.9,0.6,1.9,1.2,2.9,1.6c0.2,0.1,0.5,0.2,0.8,0.3c0.3,0.1,0.5,0.2,0.8,0.3c0.2,0.1,0.5,0.1,0.8,0.2l0.9,0.1l0.8,0
							c0.3,0,0.5-0.1,0.8-0.1c0.3,0,0.5-0.1,0.8-0.2l0.4-0.1l0.4-0.1c0.5-0.2,1-0.4,1.6-0.6c0.5-0.3,1-0.5,1.5-0.8
							c1.9-1.1,3.6-2.6,5.1-4.2c0.7-0.8,1.4-1.6,2-2.4c0.2-0.2,0.3-0.4,0.5-0.6c0.2-0.2,0.2-0.4,0.4-0.5c0.2-0.4,0.4-0.8,0.6-1.2
							c0.7-1.7,1.3-3.5,1.7-5.2c0.5-1.6,0.9-3.2,1.2-4.5c0.4-1.4,0.7-2.6,0.9-3.5c0.3-1,0.5-1.8,0.6-2.3c0.1-0.5,0.2-0.8,0.2-0.8
							L70.1,31.4z"/>
						<path class="st0" d="M38.7,26.2c-1.5-1-2.6-1.4-4.1-0.7c-1.4,0.6-1,3.7-0.3,4.9c1.4,2.3,5,3,6.6,2.1C40.9,32.4,41.2,27.8,38.7,26.2
							z M36.4,27.9c-0.2,0.1-0.6-0.1-0.9-0.5c-0.3-0.4-0.3-0.9,0-1c0.2-0.1,0.6,0.1,0.9,0.5C36.6,27.3,36.7,27.8,36.4,27.9z"/>
						<path class="st0" d="M54,47.8c-1.6,2.1-4.1,2.2-4.1,2.2s-2.5-0.1-4.1-2.2c-1.5-2-3.3,0.5-2.3,2.6c1,2.1,3.6,4.3,6.4,4.3
							c2.8,0,5.4-2.2,6.4-4.3C57.3,48.3,55.5,45.8,54,47.8z M45.4,50.3c0.4-0.6,1.7,0.3,2,1.3c0.3,1,1.4,1.4,1.4,1.4
							C46.8,52.4,45,50.9,45.4,50.3z M50.9,53c0,0,1.1-0.4,1.4-1.4c0.3-1,1.6-1.8,2-1.3C54.6,50.9,52.9,52.4,50.9,53z"/>
						<path class="st0" d="M65.2,25.4c-1.4-0.6-2.5-0.3-4.1,0.7c-2.5,1.7-2.2,6.2-2.2,6.2c1.6,0.9,5.2,0.3,6.6-2.1
							C66.2,29.2,66.7,26.1,65.2,25.4z M63.2,27.7c-0.4,0.3-0.9,0.4-1,0.2c-0.2-0.2,0-0.6,0.4-0.9c0.4-0.3,0.9-0.4,1-0.2
							C63.8,26.9,63.6,27.4,63.2,27.7z"/>
					</g>
				</svg>
			</div>
			<nav>
				<?php wp_nav_menu(array('menu' => 'Main Nav Menu')); ?>
			</nav>
			<div class="title">
				<?php $pagename = get_query_var('pagename');  
				if ( !$pagename && $id > 0 ) {  
				    // If a static page is set as the front page, $pagename will not be set. Retrieve it from the queried object  
				    //$post = $wp_query->get_queried_object();  
				    //$pagename = $post->post_name;  
				    $pagename = 'lamb of designs';
				}
				$title = str_replace('-', ' ', $pagename);
				?>
				
				<h1><?php echo $title; ?></h1>
			</div>

			<div id="nav-button" >
				<span class="fa fa-bars" id="hamburger"></span>
				<span class="fa fa-times hide" id="x"></span>
			</div>
		</div>