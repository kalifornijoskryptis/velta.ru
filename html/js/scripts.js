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
{	var $menu = $('.primary-slider .catmenu ul');

	$menu.find('li').css('margin-left', 0);

	// Суммарная ширина пунктов
	var itemsWidth = 0;
	$menu.find('li').each(function(){		itemsWidth += $(this).width();	});

	var itemsCount = $menu.find('li').length;
	var mrgLeft = parseInt(($menu.width() - itemsWidth) / (itemsCount-1));
	for (i=1; i<itemsCount; i++)
	{
		$menu.find('li').eq(i).css('margin-left', mrgLeft);
	}

	// Новая суммарная ширина пунктов и Особый отступ у последнего пункта
	itemsWidth = itemsWidth + mrgLeft*(itemsCount-1);
	$menu.find('li').eq(-1).css('margin-left', mrgLeft+($menu.width()-itemsWidth));
}


// ***
// * Выравнивание высоты отзывов
// ***

function alignReviewsHeight()
{	var h = 0;
	$('.reviews .item').each(function(){		if ( $(this).height() > h ) h = $(this).height();	});
	$('.reviews .item').height(h);}


// ***
// * Выравнивание основного слайдера в зависимости от ширины окна
// ***

function alignPrimarySlider()
{	var itemWidth = getPrimarySliderItemWidth();	var center  = itemWidth + itemWidth/2;
	var minMarg = ($(window).width() / 2) - center;
	if (minMarg>0) minMarg=0;
	//if (minMarg==0) minMarg=-getItemWidth()/2;
	$('#primary-slider').parent().css({
		'marginLeft': minMarg
	});
}


jQuery(document).ready(function($){	alignCatMenu();
	alignReviewsHeight()
	// Инициализация основного слайдера
	$('#primary-slider').carouFredSel({
		width: 10000,
		height: 534,
		align: false,
		circular: true,
		infinite: false,
		items: 3,
		scroll: {items: 1, duration: 1000},
		auto: false,
		prev: '#primary-slider-prev',
		next: '#primary-slider-next',
		pagination: {container: $(this).find('.pages')},
		onCreate: function( data ) {
			alignPrimarySlider()
		}
	});
	var $w = $(window);
	$w.bind('resize.win', function(){		alignPrimarySlider();
	});

	// Инициализация карусели "Наши лучшие предложения"
	$('.best-deals .carousel').each(function(){		$(this).carouFredSel({
			width: '100%',
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
	$('.best-deals .menu a').click(function(e){		e.preventDefault();
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
	$('.best-deals-gallery .summary .more').click(function(e){		e.preventDefault();
		$(this).parent().hide();
		var $car = $(this).parent().parent().find('.carousel');
		$car.trigger('destroy');	});
})




$(window).load(function(){	alignCatMenu();
	alignReviewsHeight()});