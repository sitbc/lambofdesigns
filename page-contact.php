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
			</div>
		</header>
		<section class="container-fluid" id="contact_form">
			<div class="col-lg-6 col-lg-offset-3 col-md-8 col-md-offset-2 col-xs-10 col-xs-offset-1">
				<form name="contactForm" id="contact_form" method="post" action="<?php bloginfo('template_url'); ?>/js/email.php">
                
					<div id="mail_success" class="success"><i class="fa fa-check"></i> Your message has been sent.</div>
					<div id="mail_fail" class="error"><i class="fa fa-exclamation-circle"></i> An error occured while sending your message.</div>
					<div id="captcha_fail" class="error"><i class="fa fa-exclamation-circle"></i> Please confirm you're not a robot.</div>

					<div id="name_error" class="error"><i class="fa fa-exclamation-circle"></i> Please enter your name.</div>
					<input type="text"  name="name" id="name" class="form-control push-down-s animate_bottom" placeholder="Name*">

					<div id="email_error" class="error"><i class="fa fa-exclamation-circle"></i> Please enter a valid email address.</div>
					<input type="text" name="emailaddress" id="emailaddress" class="form-control push-down-s animate_bottom" placeholder="Email address*">

					<div id="message_error" class="error"><i class="fa fa-exclamation-circle"></i> Please enter your messsage.</div>
					<textarea name="message" id="message" class="form-control push-down-s animate_bottom" placeholder="Message*"></textarea>

					<div class="g-recaptcha animate_bottom" data-sitekey="6LfCux0UAAAAAH9rno5tgBX8rCuWcOkoR58FoKaM"></div>
					
					<button class="button animate_bottom" id="send_message" type="submit">
						<div class="button-text-mask">
							<p><img src="<?php bloginfo('template_url') ?>/images/SVG/arrow.svg" alt="arrow"> Send message <img src="<?php bloginfo('template_url') ?>/images/SVG/arrow.svg" alt="arrow"></p>
						</div>
					</button>

					<!--<button class="btn btn-default" id="send_message" type="submit" style="margin-top:1em;">Send message</button>-->
				</form>
			</div>
		</section>
		<script src='https://www.google.com/recaptcha/api.js'></script>
        <script src="<?php bloginfo('template_url'); ?>/js/validation.js"></script>
<?php get_footer(); ?>