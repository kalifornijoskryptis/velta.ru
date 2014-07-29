// ***
// * Получение ширины изображения в основном слайдере
// ***

function getPrimarySliderItemWidth()
{
	return $('#primary-slider .slide').width();
}


// ***
// * Выравнивание ширины разделов по ширине
// ***

function alignCatMenu()
{
	var $menu = $('.primary-slider .catmenu ul');

//	$menu.find('li').css('margin-left', 0);

	// Суммарная ширина пунктов
	var itemsWidth = 0;
	$menu.find('li').each(function(){
		itemsWidth += $(this).width();
	});

	var itemsCount = $menu.find('li').length;
	var mrgLeft = parseInt(($menu.width() - itemsWidth) / (itemsCount-1));
	var mrgLeftRight = parseInt((($menu.width() - itemsWidth) / (itemsCount) / 2));
	for (i=0; i<itemsCount; i++)
	{
		$menu.find('li').eq(i).css('padding-left', mrgLeftRight);
		$menu.find('li').eq(i).css('padding-right', mrgLeftRight);
	}

	// Новая суммарная ширина пунктов и Особый отступ у последнего пункта
//	itemsWidth = itemsWidth + mrgLeft*(itemsCount-1);
//	$menu.find('li').eq(-1).css('margin-left', mrgLeft+($menu.width()-itemsWidth));
}


// ***
// * Выравнивание высоты отзывов
// ***

function alignReviewsHeight()
{
	var h = 0;
	$('.reviews .item').each(function(){
		if ( $(this).height() > h ) h = $(this).height();
	});
	$('.reviews .item').height(h);
}


// ***
// * Выравнивание основного слайдера в зависимости от ширины окна
// ***

function alignPrimarySlider()
{
	var itemWidth = getPrimarySliderItemWidth();
	var center  = itemWidth + itemWidth/2;
	var minMarg = ($(window).width() / 2) - center;
	if (minMarg>0) minMarg=0;
	//if (minMarg==0) minMarg=-getItemWidth()/2;
	$('#primary-slider').parent().css({
		'marginLeft': minMarg
	});
}

function newCarousel(){
	// Инициализация карусели "Наши лучшие предложения"
	$('.best-deals .carousel').each(function(){
		$(this).carouFredSel({
			width: '100%',
			items: 3,
			scroll: 1,
			auto: {play: false},
			prev: {button: $(this).parent().find('.nav-prev')},
			next: {button: $(this).parent().find('.nav-next')}
		});
	});
}


jQuery(document).ready(function($){
	alignCatMenu();
	alignReviewsHeight()

	// Инициализация основного слайдера
	$('#primary-slider').carouFredSel({
		width: 10000,
		height: 534,
		align: false,
		circular: true,
		infinite: false,
		items: 1,
		scroll: {items: 1, duration: 1000},
		auto: true,
		prev: '#primary-slider-prev',
		next: '#primary-slider-next',
		pagination: {container: $(this).find('.pages')},
		onCreate: function( data ) {
			alignPrimarySlider()
		}
	});
	var $w = $(window);
	$w.bind('resize.win', function(){
		alignPrimarySlider();
	});

	// Инициализация карусели "Наши лучшие предложения"
	$('.best-deals .carousel').each(function(){
		$(this).carouFredSel({
			width: '100%',
			height: 450,
			items: 3,
			scroll: 1,
			auto: {play: false},
			prev: {button: $(this).parent().find('.nav-prev')},
			next: {button: $(this).parent().find('.nav-next')}
		});
	});

	// Инициализация карусели "Партнеры"
	$('.partners .gallery ul').each(function(){
		$(this).carouFredSel({
			width: '100%',
			scroll: 1,
			auto: {play: false},
			prev: {button: $(this).parent().find('.nav-prev')},
			next: {button: $(this).parent().find('.nav-next')}
		});
	});

	// Переключение подразделов в лучших предложениях
	$('.best-deals .menu a').click(function(e){
		e.preventDefault();
		// Переключение выделенного пункта
		$(this).parent().parent().find('li').removeClass('current');
		$(this).parent().addClass('current');
		// Смена карусели
		var cur = $(this).attr('href');
		$('.best-deals-gallery').hide();
		$(cur).show();
		$(cur).find('.carousel').trigger('updateSizes');
	});

	// Просмотр всех элементов карусели лучших предложений
	$('.best-deals-gallery .summary .more.off').click(function(e){
		e.preventDefault();
		$('.best-deals-gallery .summary .more.off').hide();
		$('.best-deals-gallery .summary .more.on').show();
		var $car = $(this).parent().parent().find('.carousel');
		$car.trigger('destroy');
	});
	
		$('.best-deals-gallery .summary .more.on').click(function(e){
		e.preventDefault();
		$('.best-deals-gallery .summary .more.on').hide();
		$('.best-deals-gallery .summary .more.off').show();
		newCarousel();
	});
	
	//Загрузить все отзывы
	$('#moreReviews').click(function(e){
		e.preventDefault();
		$('.wrapper .reviews .items .item:gt(2)').toggle(300);
	});
	
	//Попап на главной
	$(".popup").click(function(){
		var popup = $(this).attr('data-popup');
		var widthDocument = $(document).width();
		var heightDocument = $(window).height();
		var widthBlock = $('#popup .' + popup).outerWidth();
		var heightBlock = $('#popup .' + popup).outerHeight(true);
		var left = Math.round(((widthDocument - widthBlock) / 2));
		var top = Math.round(((heightDocument - heightBlock) / 2));
		console.log("heightDocument:" + heightDocument + " heightBlock:" + heightBlock + " top:" + top + " popup:" + popup);
		$('#popup .' + popup).show(100);
		$('#popup .overlay').show();
		$('#popup .' + popup).css({'left': (left > 20 ? left : 20) + 'px',
									'top': 100 + 'px'});
	});
	
	$("#popup .close, #popup .noAddOrder").click(function(){
		$('#popup .block').hide(100);
		$('#popup .overlay').hide();
	});
	
	//placeholder в несколько строк для textarea
	$('textarea').each(function () {
    	var a = $(this),
        out = newLine(a);
    	a.css('color', '#999');
    	a.val(out);
	}).focus(function () {
    	var a = $(this),
        	b = newLine(a),
        	c = a.val();
    	if (b == c && !a.data('input')) {
        	a.val('');
        	a.css('color', '#000');
    	}
	}).blur(function () {
    	var a = $(this),
        	b = newLine(a),
        	c = a.val();
    	if (c == '') {
        	a.data('input', false);
        	a.val(b);
        	a.css('color', '#999');
    	}
	}).on('input keyup paste', function () {
    	$(this).data('input', true);
	});

	function newLine(kx) {
    	var b = kx.data('myholder');
    	return b.replace(/\\/g, "\n");
	}
	
	$("#quickForm .submit").click(function(){
		$('#popup .block').hide(100);
		$('#popup .overlay').hide();
	});
		
})

$(window).load(function(){
	alignCatMenu();
	alignReviewsHeight()
});

/* Smooth scroll function */
$(function() {
  $('.scroll').click(function() {
    if (location.pathname.replace(/^\//,'') == this.pathname.replace(/^\//,'') && location.hostname == this.hostname) {
      var target = $(this.hash);
      target = target.length ? target : $('[name=' + this.hash.slice(1) +']');
      if (target.length) {
        $('html,body').animate({
          scrollTop: target.offset().top - 200 /* making scroll not to the screen corner */
        }, 1000);
        return false;
      }
    }
  });
});

/* Barcode generator */
function generateBarcode()
{
	return $("#bcTarget").barcode("1234567890128", "ean13", {barWidth:4, barHeight:50});
}