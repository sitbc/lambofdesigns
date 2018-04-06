// JavaScript Document
$('document').ready(function(){
	"use strict";
	
	
	
	function pageIn (){
		var headTitle = $('.page-heading h2');
		var headContent = $('.page-heading p');
		var winWidth = $(window).width();		
		var loaderPos = winWidth - 100;
		headContent.css('opacity', 0);
//		$('.sidebar').css('left', '-500px');
//		$('.title h1').css('opacity', 0);
		$('#nav-logo').css('opacity', 0);
		$('#nav-button').css('opacity', 0);
		$('.loader').css('right', loaderPos + 'px');
		
		if (winWidth < 991){ //--- ANIMATION FOR SMALL SCREENS
			$('.sidebar').toggleClass('transparent');
			$('#nav-logo').css('display', 'none');
			$('#nav-button').css('background-color', '#fff');
			$('#nav-button').css('bottom', 'auto').css('top', 0);
			
			$('.loader').css('right', '100vw');
			if ($('.welcome').length !==0){
				$('.content-wrapper').css('opacity', 1);
			}
			setTimeout(function(){
				$('#nav-button').css('opacity', 1);
				$('.content-wrapper').css('opacity', 1);
				setTimeout(function(){
					headTitle.addClass('animated').addClass('fadeInDown');
					if ($('.welcome').length !==0){
						$('.welcome h2').addClass('animated').addClass('fadeInDown');
					}
					setTimeout(function(){
						headContent.addClass('animated').addClass('fadeInUp');
						$('#nav-button').css('background-color', 'transparent');
						if ($('.welcome').length !==0){
							$('.welcome p').addClass('animated').addClass('fadeInUp');
						}
					},1000);
				},500);
			},600);
			
		} else {	//--- ANIMATION FOR LARGE SCREENS
			
			if ($('.welcome').length !==0){
				$('.content-wrapper').css('opacity', 1);
			}
			setTimeout(function(){
				$('.loader').css('opacity', 0).css('right', '100vw');
				//$('.sidebar').css('left', '-400px');
				$('.content-wrapper').css('opacity', 1);
				setTimeout(function(){
					$('#nav-logo').css('opacity', 1);
					$('#nav-button').css('opacity', 1);
					headTitle.addClass('animated').addClass('fadeInDown');
					if ($('.welcome').length !==0){
						$('.welcome h2').addClass('animated').addClass('fadeInDown');
					}
					setTimeout(function(){
						headContent.addClass('animated').addClass('fadeInUp');
						$('.title h1').addClass('animated').addClass('fadeIn');
						if ($('.welcome').length !==0){
							$('.welcome p').addClass('animated').addClass('fadeInUp');
						}
					},1000);
				},500);

			},600);
		}
	}

	function pageOut (link){
		if ($('.sidebar').hasClass('open')){
			$('.sidebar').css('left', '-400px');
			$('#nav-logo').css('opacity', 0);
			$('#nav-button').css('opacity', 0);
			$('.title').removeClass('fadeInLeft').addClass('fadeOutLeft');
			$('nav').addClass('animated').addClass('fadeOutLeft');
			$('.loader').css('opacity', 1);
			setTimeout(function(){
				$('.loader').css('right', 0);
				setTimeout(function(){
					navigation(link);
				},600);
			},500);
		} else {
			$('#nav-logo').css('opacity', 0);
			$('#nav-button').css('opacity', 0);
			$('.title').removeClass('fadeInLeft').addClass('fadeOutLeft');
			$('.loader').css('opacity', 1);
			setTimeout(function(){
				$('.loader').css('right', 0);
				setTimeout(function(){
					navigation(link);
				},600);
			},500);
		}
	}
	
	function listen (){
		$('nav ul li a').click(function(e){
			e.preventDefault();
			var link = $(this).attr('href');
			$(this).parent().addClass('fadeOutLeft');
			setTimeout(function(){
				pageOut(link);
			}, 100);
		});
		
		$('.button-link').click(function(e){
			e.preventDefault();
			var link = $(this).attr('href');
			pageOut(link);
			var arrow = $('.button-text-mask img', this).width();
			var buttonText = $('.button-text-mask p', this).width();
			var padding = 16;
			var translate = buttonText - (arrow + 16);
			$('.button p', this).css('transform', 'translateX(' + translate + 'px)');
			
		});

		$('footer a').click(function(e){
			e.preventDefault();
			var link = $(this).attr('href');
			$(this).parent().css('opacity', 0);
			pageOut(link);
			
		});
		
		
		$('.project').click(function(e){
			e.preventDefault();
			var link = $(this).attr('href');
			pageOut(link);
		});
		
	}
	
	var navigation = function(link){
		window.location.href = link;
		
	};
	
	pageIn();
	listen();
	
});