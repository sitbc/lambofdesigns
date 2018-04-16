		<footer class="row container-fluid">
			<div class="footer-wrapper">
				<div class="copyright col-md-6 animate_left">
					<p>© <?php echo date("Y"); echo " "; bloginfo('name'); ?></p>
				</div>
				<div class="contact-info col-md-6 animate_right">
					<?php  
						$args = array(
							'theme_location' => 'footer'
						);
						wp_nav_menu( $args );
					?>
					<!--<ul>
						<li><a href="<?php echo get_page_link(16); ?>">contact</a></li>
						<li><a href="https://www.facebook.com/lambofdesigns"><span class="fa fa-facebook-f"></span></a></li>
						<li><a href="https://www.instagram.com/sheep.in.the.big.city/"><span class="fa fa-instagram"></span></a></li>
						<li><a href="https://hu.linkedin.com/in/peter-balazs"><span class="fa fa-linkedin"></span></a></li>
					</ul>-->
				</div>
			</div>
		</footer>
	</div>


<?php wp_footer(); ?>
	
	<!-- Don't forget analytics -->

<script src="https://code.jquery.com/jquery-3.3.1.min.js" integrity="sha256-FgpCb/KJQlLNfOu91ta32o/NMZxltwRo8QtmkMRdAu8=" crossorigin="anonymous"></script>
<script src="<?php bloginfo('template_url'); ?>/js/bootstrap.min.js"></script>
<script src="<?php bloginfo('template_url'); ?>/js/jquery.appear.js"></script>
<script src="<?php bloginfo('template_url'); ?>/js/jquery.parallax-1.1.3.js"></script>
<script src="<?php bloginfo('template_url'); ?>/js/navigation.js"></script>
<script src="<?php bloginfo('template_url'); ?>/js/custom.js"></script>

<?php 

if ( is_page( 16 ) ) {    
    echo( '<script src="https://lamb-of-designs-sitbc.c9users.io/wp-content/themes/lambofdesigns-new/js/validation.js"></script>');
}

?>

</body>

</html>

