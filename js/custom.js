// JavaScript Document
$('document').ready(function(){
	"use strict";
	
	var winWidth = $(window).width();
	
	var b = (Math.floor(Math.random() * 255));
	
	var colorArray = ["#8db2a5", "#0d6699", "#2f5b43", "#23122e", "#9a2e34", "#d1837c"];
	
	function setColor(b){
		var r = (Math.floor(Math.random() * 125));
//		var g = (Math.floor(Math.random() * 255));
		var color = "rgb("+r+",150,"+b+")";
		return(color);
	}
	
	function setColorStop(b){
		var r = (Math.floor(Math.random() * 125));
		var color = "rgb("+r+",125,"+b+")";
		return(color);
	}
	
	var color = setColor(b);
	var colorStop = setColorStop(b);
	
	function checkHeightAgain(unitImgHi, unitHeadHi){
		if (unitImgHi !== unitHeaderHi){
			$('.unit-header').css('height', unitImgHi);
			console.log('adjusted...');
		}
		
	}
	
	if ($('#contact-page').length === 0 && $('#services-header-image').length === 0 && $('.header-image').length === 0) {
		$('header').css('background', 'linear-gradient('+color+','+colorStop);
	} else if ($('#services-header-image').length !== 0 ){
		//$('.unit-header').css('background-color', color);
		var unitImgHi = $('.unit-img').height();
		var unitHeadHi = $('.unit-heading').height();
		$('.unit-header').css('height', unitImgHi);
		var unitHeadPos = (unitImgHi / 2) - (unitHeadHi / 2);
		$('.unit-heading').css('top', unitHeadPos);
		var unitHeaderHi = $('.unit-header').height();
		var init = 0;
		for (var i = 0; i < $('.unit-header').length; i++) {
			init += 1;
			$('#'+init).css('background-color', colorArray[i]);
		}
		
		
	}
	
	if ($('.client-content').length !== 0){
		$('header').css('height', '100vh');
		if( $('.envira-gallery-wrap').length !== 0 ){
			$('.envira-gallery-item-inner').addClass('animate_bottom');
			$('.envira-gallery-item a').click(function(){
				console.log('image clicked');
				$('#envirabox-title').css('font-size:', '1em');
			});
			 
		}
		/*if ($('.envira-lazy').length !== 0){
			$('.envira-lazy').addClass('animate_bottom');
		}*/
	}
	
	if ($('.sharedaddy').length !== 0){
		$('.sharedaddy').addClass('animate_bottom');
	}
	
	function navItems(){		
		$('nav ul li').each(function(i, el){
			var del = 30+(i*50);
			setTimeout(function(){
				$(el).toggleClass('fadeInLeft').toggleClass('fadeOutLeft');
			}, del);
		});
		
		
		//$('nav').toggleClass('fadeInLeft').toggleClass('fadeOutLeft');
	}
	
	$('#nav-button').click(function(){
		$('#hamburger').toggleClass('hide');
		$('#x').toggleClass('hide');
		$('.sidebar').toggleClass('open');
		if (winWidth < 991){
			$('.sidebar').toggleClass('transparent');
		}
		navItems();
		//$('nav').toggleClass('fadeInLeft').toggleClass('fadeOutLeft');
		if ($('.sidebar').hasClass('open')){
			$('.sidebar').css('left', 0);
			
			if (winWidth < 991){
				$('#nav-button').css('background-color', 'transparent');
				$('#hamburger').css('color', '#ffffff');
				$('#x').css('color', '#ffffff');
				$('.title h1').css('opacity', 1);
			}
						
		} else {
			$('.sidebar').css('left', '-400px');
			if (winWidth < 991){
				$('.title h1').css('opacity', 0);
				$('#hamburger').css('color', '#434343');
				$('#x').css('color', '#434343');
			}
		}
	});
	
	
	$('.button').hover(function(){
		$('.button-text-mask p', this).toggleClass('active');
	});
	
	
	$('.project').each(function(){
		$('.project-main', this).hover(function(){
			$('.link-before', this).toggleClass('active');
			$('.project-img img', this).toggleClass('image-hover');
		});
	});
	
	$('footer ul li a').each(function(){
		$(this).hover(function(){
				$(this).css('color', color);
			},
			function(){
				$(this).css('color', '#ffffff');
			}
		);
	});
	
	
	if (winWidth > 991){
		$('#services-header-image').parallax("50%", 0.2);
		$('.header-image').parallax("50%", 0.2);
		if ($('.client-content').length !== 0){
			var accentColor = $('.colored').css('background-color');
			$('.sidebar').css('background-color', accentColor).css('border-right', '1px solid transparent');
		}
		$(window).scroll(function() {				//CHANGE COLOR OF SIDEBAR WITH SCROLL
			var isVisible = $('header');
			var navbar = $('.sidebar');
			
			var path = $('#nav-button svg path');
			var line = $('#nav-button svg line');
			var sheepLogo = $('svg .st0');
			var menuItems = $('nav ul li a');
			var white = '#ffffff';
			var grey = '#434343';
			var top_of_element = isVisible.offset().top;
			var bottom_of_element = isVisible.offset().top + isVisible.outerHeight();
			var bottom_of_screen = $(window).scrollTop() + window.innerHeight;
			var top_of_screen = $(window).scrollTop();
			
	
			if((bottom_of_screen > top_of_element) && (top_of_screen < bottom_of_element)){
				// The element is visible, do something
				if ($('.client-content').length !== 0){
					console.log('no element, visible');
					$('.sidebar').css('background-color', accentColor).css('border-right', '1px solid transparent');
					sheepLogo.css('fill', white);
					menuItems.css('color', white);
					$('.title h1').css('color', white);
					$('#hamburger').css('color', white);
					$('#x').css('color', white);
					
				} else {
					navbar.css('background-color', grey);
					console.log('element, visible');
				} 
				/**/
			} else {
				// The element is not visible, do something else
				if ($('.client-content').length !== 0){
					console.log('no element not visible');
					$('.sidebar').css('background-color', white).css('border-right', '1px solid #ccc');
					sheepLogo.css('fill', grey);
					menuItems.css('color', grey);
					$('.title h1').css('color', grey);
					$('#hamburger').css('color', grey);
					$('#x').css('color', grey);
				} else {
					navbar.css('background-color', color);
					console.log('element not visible');
				}
				
				//$('section', this).css('opacity', 0);
				/**/
			}
		});
	} else {
		$('header').removeClass('parallax');
	}
	
	if ($('#profile').length !== 0){				//PROFILE PAGE ANIMATIONS
		if (winWidth > 991){
			$('#side-sheep').addClass('fadeInRight');
		} else {
			$('#side-sheep').removeClass('animated').css('opacity', 1);
		}
	}
	
	if ($('#dog').length !== 0){					//WORK PAGE ANIMATIONS
		if (winWidth > 991){
			$('#dog').addClass('fadeInRight');
		} else {
			$('#dog').removeClass('animated');
		}
	}
	
	
	
	//Elements Appear from top
	jQuery('.animate_top').each(function() {
		jQuery(this).appear(function() {
			jQuery(this).delay(200).animate({
				opacity : 1,
				top : "0px"
			}, 1000);
		});
	});

	//Elements Appear from bottom
	jQuery('.animate_bottom').each(function() {
		jQuery(this).appear(function() {
			jQuery(this).delay(200).animate({
				opacity : 1,
				bottom : "0px"
			}, 1000);
		});
	});
	//Elements Appear from left
	jQuery('.animate_left').each(function() {
		jQuery(this).appear(function() {
			jQuery(this).delay(200).animate({
				opacity : 1,
				left : "0px"
			}, 1000);
		});
	});

	//Elements Appear from right
	jQuery('.animate_right').each(function() {
		jQuery(this).appear(function() {
			jQuery(this).delay(200).animate({
				opacity : 1,
				right : "0px"
			}, 1000);
		});
	});

	//Elements Appear in fadeIn effect
	jQuery('.animate_fade_in').each(function() {
		jQuery(this).appear(function() {
			jQuery(this).delay(250).animate({
				opacity : 1,
				right : "0px"
			}, 1500);
		});
	});
	
	if ($('#services-header-image').length !== 0 ){
		checkHeightAgain(unitImgHi, unitHeaderHi);
	}
	
});
