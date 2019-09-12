$(document).ready(function() {
	$('.btn_index').click(function(){
		$('.sf-menu').slideToggle();
	});
		var owl = $(".owlcarousel");
	owl.owlCarousel({
		items : 3,
		nav: true,
		dots: true,
		autoplay: false,
        autoplayTimeout: 3000,
        pagination: true,
        paginationNumbers: 4
  

	});
	owl.on("mousewheel", ".owl-wrapper", function (e) {
		if (e.deltaY > 0) {
			owl.trigger("owl.prev");
		} else {
			owl.trigger("owl.next");
		}
		e.preventDefault();
	});
	$(".next_button").click(function(){
		owl.trigger("owl.next");
	});
	$(".prev_button").click(function(){
		owl.trigger("owl.prev");
	});


owl.on("mousewheel", ".owl-wrapper", function (e) {
		if (e.deltaY > 0) {
			owl.trigger("owl.prev2");
		} else {
			owl.trigger("owl.next2");
		}
		e.preventDefault();
	});
	$(".next2_button").click(function(){
		owl.trigger("owl.next2");
	});
	$(".prev2_button").click(function(){
		owl.trigger("owl.prev2");
	});



var owl2 = $(".carousel_2");
	owl2.owlCarousel({
		items : 1,
		nav: true,
		dots: true,
		pagination : true

	});


	
	
	
$('.top_line .sf-menu').superfish({
	cssArrows: false,  
	hoverClass: 'no-class'
});
	//Таймер обратного отсчета
	//Документация: http://keith-wood.name/countdown.html
	//<div class="countdown" date-time="2015-01-07"></div>
	var austDay = new Date($(".countdown").attr("date-time"));
	$(".countdown").countdown({until: austDay, format: 'yowdHMS'});

	//Попап менеджер FancyBox
	//Документация: http://fancybox.net/howto
	//<a class="fancybox"><img src="image.jpg" /></a>
	//<a class="fancybox" data-fancybox-group="group"><img src="image.jpg" /></a>
	



	//Плавный скролл до блока .div по клику на .scroll
	//Документация: https://github.com/flesler/jquery.scrollTo
	$(".a_scroll").click(function() {
		$.scrollTo($(".owlcarousel"), 800, {
			offset: -90
		});
	});

	$(".a_scroll2").click(function() {
		$.scrollTo($(".show"), 800, {
			offset: -90
		});
	});

	$(".a_scroll3").click(function() {
		$.scrollTo($(".title_artist_opisanie"), 800, {
			offset: -90
		});
	});

	$(".a_scroll4").click(function() {
		$.scrollTo($(".block_form"), 800, {
			offset: -90
		});
	});


	//Добавляет классы дочерним блокам .block для анимации
	//Документация: http://imakewebthings.com/jquery-waypoints/
	$(".block").waypoint(function(direction) {
		if (direction === "down") {
			$(".class").addClass("active");
		} else if (direction === "up") {
			$(".class").removeClass("deactive");
		};
	}, {offset: 100});

	//Каруселька
	//Документация: http://owlgraphic.com/owlcarousel/

	//Кнопка "Наверх"
	//Документация:
	//http://api.jquery.com/scrolltop/
	//http://api.jquery.com/animate/
	//$("#top").click(function () {
	//	$("body, html").animate({
	//		scrollTop: 0
	//	}, 800);
	//	return false;
//	});
	
	//Аякс отправка форм
	//Документация: http://api.jquery.com/jquery.ajax/
	
$('.vhod').magnificPopup();
$('.zakaz_index').magnificPopup();
$('.registration').magnificPopup();	
	$('.dabovit').magnificPopup();
$('.form_contakt_otziv_register').magnificPopup();
$('.form_contakt_a').magnificPopup();
$('.form_contakt_otziv_vhod').magnificPopup();	

$('.p_yslugi2').animated('fadeIn');
$('.block_txt_yslygi2').animated('zoomIn','zoomIn');
$('.txt_p_uslygi').animated('zoomIn','zoomIn');
$('.uslygi_logo').animated('slideInLeft','fadeIn');
$('.p_yslugi').animated('slideInRight','fadeIn');
$('.block_form').animated('slideInLeft','fadeIn');
$('.animate_header').animated('fadeInLeft','fadeInLeft');
$('.animate_header_img').animated('fadeInRight','fadedInRight');
$('.slide_item').animated('flipInX','flipInX');
$('.show').animated('zoomIn','zoomIn');
$('.bl').animated('zoomIn','zoomIn');
$('.akcija').animated('zoomInRight');
$('.ul_artist_cat li').animated('fadeInUp','fadeInUp');
$('.img_logo_header2').animated('fadeInDown','fadeInDown');
$('.img_height_partner > li').animated('zoomIn','zoomIn');
});
