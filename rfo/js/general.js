
$( document ).ready(function() {
	
	new WOW().init();	

	$(function () {
	  $('[data-toggle="tooltip"]').tooltip()
	})

	$(document).scroll(function () {
		var scroll = $(this).scrollTop();
		if (scroll > 200) {
			$('.headerFixo').fadeIn();
		} else {
			$('.headerFixo').fadeOut();
		}
	});

	
	

	/* Menu Responsivo */
	menu = $('header ul.nav').html();
	logo = $('header .logo').html();
	$('.menuResponsivo .paginas ul').html(menu);
	$('.menuResponsivo .logo').html(logo);
	
	$('.menuResponsivo .paginas > ul > li.com-filho').each(function() {
		$(this).append('<div class="icone"><span>‹</span></div>');
	})
	
	$('.menuResponsivo .paginas > ul > li.com-filho > a, .menuResponsivo .paginas > ul > li.com-filho > .icone').click(function(event) {
		event.preventDefault();
		$(this).parent().find('ul').fadeToggle();
	})
	
	$('.menuResponsivo .paginas > ul > li').click(function() {
		$(this).toggleClass('ativo');
	})
	
	
	var statusMenu = 1;
	$('.chamaResponsivo').click(function() {
		if (statusMenu == 1) {
			statusMenu = 0;
			$('.menuResponsivo').animate({ left : '0px'}, 'slow');
		} else {
			statusMenu = 1;
			$('.menuResponsivo').animate({ left : '-100%'}, 'slow');
		}
	});
	
	$('.menuResponsivo .fechar, .menuResponsivo ul li a').click(function() {
		statusMenu = 1;
		$('.menuResponsivo').animate({ left : '-100%'}, 'slow');
	})
	
});