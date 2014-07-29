<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8" />
	<!--[if lt IE 9]><script src="http://html5shiv.googlecode.com/svn/trunk/html5.js"></script><![endif]-->
	<title>Велта Мебель</title>
	<link rel="icon" href="favicon.ico" type="image/x-icon">
	<link rel="shortcut icon" href="favicon.ico" type="image/x-icon">
	<link rel="stylesheet" href="css/style.css" />
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/3.0.0/animate.min.css">
	<!--[if lte IE 8]><link rel="stylesheet" href="css/style-ie.css" type="text/css" media="screen, projection" /><![endif]-->
	<!--[if IE ]>
	<script type="text/javascript">
		isBrowserIE = true;
	</script>
	<![endif]-->
	<script src="http://api-maps.yandex.ru/2.1/?lang=ru_RU" type="text/javascript"></script>
	<!--<script type="text/javascript" src="//yandex.st/share/share.js" charset="utf-8"></script>-->
	<script type="text/javascript" src="js/jquery-1.9.1.min.js"></script>
	<script type="text/javascript" src="js/jquery.carouFredSel-6.2.1-packed.js"></script>
	<script type="text/javascript" src="js/scripts.js"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/1.10.2/jquery.min.js"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-easing/1.3/jquery.easing.min.js"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery.touchswipe/1.6.4/jquery.touchSwipe.min.js"></script>
	<script src="js/jquery.liquid-slider.js"></script>
	<script type="text/javascript" src="js/jquery.fitvids.js"></script>
	<script type="text/javascript" src="js/jquery.easing.1.3.js"></script>
	<script type="text/javascript" src="js/jquery.bxslider.js"></script>

</head>
<body class="page-product">
<div id="popup">
	<div class="overlay" style="display:none;"></div>
	<div class="addCart block" style="display:none;">
			<div class="close"></div>
			<p class="heading">Ваш товар в корзине!</p>
			<p class="text">Ваш товар был добавлен в корзину!<br>Желаете оформить заказ или продолжить совершать покупки в магазине?</p>
			<a class="addOrder" href="/order/add_order.html">К оформлению заказа</a>
			<a class="noAddOrder" href="#" onclick="return false;">Продолжить покупки</a>
	</div>
	<div class="qview block" style="display: none;">
			<div class="close"></div>
			<div class="left">
				<img id="quick_pic" src="content/chair1.jpg">
			</div>
			<div class="right">
				<div class="heading">Офисное кресло «Мадрид»</div>
				<div class="more_info">
					<span class="rating"></span>
					<span class="availability out">Наличие: под заказ</span>
					<span class="item_id">Артикул: 19</span>
				</div>
				<div class="text">Офисное кресло «Мадрид»</div>
				<div class="price">
					<span class="old_price">12&nbsp;390&nbsp;руб</span>
					<span class="price">15&nbsp;000&nbsp;руб</span>
				</div>
				<div class="add_cart">
					<form>
        				<input id="qty" type="text" name="" value="1"><button class="submit" type="submit">Добавить в корзину</button>
    				</form>
				</div>
			</div>
	</div>
	<div class="imagebox block" style="display:none;">
			<div class="close"></div>
			<img src="content/chair9.jpg">
	</div>
	<div class="callme block" style="display:none;">
			<div class="close"></div>
			<p class="heading">Мы вам перезвоним!</p>
			<p class="text">Мы рады, что вы заинтересованы в наших товарах и услугах. Пожалуйста, укажите ваше имя и номер телефона, мы вам перезвоним!</p>
			<div class="form">
				<input type="text" class="name" placeholder="Моё имя">
				<input type="text" class="phone" placeholder="Мой номер телефона">
				<input type="submit" value="Перезвоните мне" class="button"/>
			</div>
	</div>
	<div class="textbox block" style="display:none;">
			<div class="close"></div>
			<p class="heading">Радуем выбором!</p>
			<p class="text">С офисным креслом Новый Стиль Comfort GTP Black работники вашего офиса будут чувствовать себя комфортно на протяжении всего рабочего дня. Эргономические параметры кресла Новый Стиль Comfort GTP Black не сковывают свободу ваших движений, а наличие крестовины с роликами даст возможность свободно передвигаться в границах своей рабочей зоны и брать необходимые вам документы, а также вы можете индивидуально отрегулировать высоту стула. 
			<br/><br/>
			Прообразы современных кресел появились ещё в Древнем Египте и Месопотамии. При археологических раскопках на территории Месопотамии был обнаружен штандарт войны и мира, на котором мозаикой выложена сцена пиршества шумеров (III тысячелетие до н. э.). На этой сценке знатные гости сидят на невысоких церемониальных креслах. Спинка кресла достигала плеч сидевшего человека. Ножки кресла вырезаны в виде ног копытного животного, а с каждого бока между передней и задней ножками вставлены по две распорки, поддерживавшие сидение снизу.</p>
	</div>
	<div class="quickorder block" style="display:none;">
			<div class="close"></div>
			<p class="heading">Быстрый заказ одной кнопкой!</p>
			<p class="text">Мы рады, что вы заинтересованы нашим товаром Офисное кресло «Новый стиль» за 9500 руб. Введите ниже ваш телефон для оформления заказа, наш менеджер вам перезвонит.</p>
			<div class="form">
				<input type="text" class="phone" placeholder="Мой номер телефона">
				<input type="submit" value="Заказать в 1 клик!" class="button"/>
			</div>
	</div>
	<div class="slider block" style="display:none;">
		<div class="close"></div>
		<div class="primary-slider">
		  <div class="gallery">
		   <div class="slides" id="primary-slider">
			<div class="slide">
				<img src="content/slide1.jpg" alt="" />
			</div>
			<div class="slide">
				<img src="content/slide2.jpg" alt="" />
			</div>
			<div class="slide">
				<img src="content/slide3.jpg" alt="" />
			</div>
			<div class="slide">
				<img src="content/slide4.jpg" alt="" />
			</div>
			<div class="slide">
				<img src="content/slide5.jpg" alt="" />
			</div>
		   </div> <!--//.slides//-->
		  <div class="clear"></div>
		  <div class="pages"></div>
		  <a href="#" id="primary-slider-prev" class="nav nav-prev"></a>
		  <a href="#" id="primary-slider-next" class="nav nav-next"></a>
		 </div> <!--//.gallery//-->
		</div>
	</div>
	<div class="addreview block" style="display:none;">
			<div class="close"></div>
			<p class="heading">Оставьте свой отзыв</p>
			<p class="text">Мы надеемся, что у вас остались только положительные эмоции от покупок и обслуживания в нашем магазине. Заполните необходимые поля, чтобы оставить отзыв.</p>
			<div class="form">
				<input type="text" class="name" placeholder="Как вас зовут">
				<input type="text" class="email" placeholder="Ваша электронная почта">
				<textarea class="textarea" data-myholder="Ваш отзыв о работе нашего магазина. Напишите о 
качестве товара, скорости доставки и уровне 
обслуживания. Спасибо, что делаете покупки у нас!"></textarea>
				<input type="submit" class="button"/>
			</div>
	</div>
	<div class="map1 block" style="display:none;">
			<div class="close"></div>
			<p class="heading">Салон в ТЦ «Снегири»</p>
			<p class="text">Московская область (направление — Волоколамское шоссе), п. Снегири, ул. Московская, д. 12, ТЦ «Снегири»<br><br>+7 (495) 225 4553, +7 (905) 563 6611<br>velta@tc-snegiri.ru</p>
			<img src="images/mapYa.png">
	</div>
	<div class="map2 block" style="display:none;">
			<div class="close"></div>
			<p class="heading">Салон на Соколинке</p>
			<p class="text">105118, Москва, 9-я улица Соколиной горы, дом 21<br><br>+7 (495) 225 4553<br>+7 (495) 365 3617</p>
			<img src="images/mapYa.png">
	</div>
</div>
<header class="page-header">
	<div class="logo-holder">
		<a href="#" class="logo">Велта Мебель</a>
	</div> <!--//.logo-holder//-->
	<nav class="mainmenu">
		<div class="wrapper">
			<ul>
				<li><a href="#">Кухня за день</a></li>
				<li><a href="#">Как оплатить</a></li>
				<li><a href="#">Как заказать</a></li>
				<li><a href="#">Наши салоны</a></li>
				<li><a href="#">Супер-кредит</a></li>
			</ul>
			<div class="callme">
				<p class="t">перезвоните мне</p>
				<p class="phone"><a href="#" class="ajax">+7 (495) 225-45-53</a></p>
			</div>
		</div> <!--//.wrapper//-->
	</nav> <!--//.mainmenu//-->

	<div class="wrapper">
		<div class="user-area">
			<form action="#" method="get" class="search-form">
				<input type="text" name="s" placeholder="ЧТО ИЩЕТЕ?" />
				<input type="submit" value="" />
			</form>
			<div class="info">
				<p class="id">Ваш ID: 1037</p>
				<ul class="counts">
					<li>
						<a href="#"><span class="icon icon-fav"></span>Любимые товары:</a>
						<span class="data"><span class="val">5 шт.</span></span>
					</li>
					<li>
						<a href="#"><span class="icon icon-cart"></span>Корзина:</a>
						<span class="data">
							<span class="val">2 ед.</span>
							<span class="val val-gift">95 900 р.</span>
						</span>
					</li>
				</ul>
			</div> <!--//.info//-->
		</div> <!--//.user-area//-->
		<div class="clear"></div>
	</div> <!--//.wrapper//-->
</header> <!--//.page-header//-->

<div class="primary-slider">
	<nav class="catmenu">
		<div class="wrapper">
			<ul>
				<li><a href="#">Мягкая мебель</a></li>
				<li><a href="#">Кухни</a></li>
				<li><a href="#">Шкафы-купе</a></li>
				<li><a href="#">Спальни</a></li>
				<li><a href="#">Прихожие</a></li>
				<li><a href="#">Столы и стулья</a></li>
				<li><a href="#">Офисная мебель</a></li>
				<li><a href="#">Стенки</a></li>
				<li><a href="#">Еще</a></li>
			</ul>
		</div> <!--//.wrapper//-->
	</nav> <!--//.catmenu//-->
</div> <!--//.primary-slider//-->

<div class="content">
  <div class="wrapper">
  
	<div class="block product-photo">
			<ul class="bxslider">
			<li><a href="#" class="imagebox popup" data-popup="imagebox"><img src="content/chair-slide1.jpg"></a></li>
			<li><a href="#" class="imagebox popup" data-popup="imagebox"><img src="content/chair-slide2.jpg"></a></li>
			<li><a href="#" class="imagebox popup" data-popup="imagebox"><img src="content/chair-slide3.jpg"></a></li>
		</ul>
		<div class="bxlinks">
			<a class="quick-order quickorder popup" data-popup="quickorder" href="#">Быстрый заказ</a>
			<a class="show-in-interior slider popup" data-popup="slider" href="#">Показать в интерьере</a>
		</div>
		<div id="bx-pager">
			<a class="thumbnail" data-slide-index="0"><img src="content/chair-slide1.jpg"></a>
			<a class="thumbnail" data-slide-index="1"><img src="content/chair-slide2.jpg"></a>
			<a class="thumbnail" data-slide-index="2"><img src="content/chair-slide3.jpg"></a>
		</div>
		<script>
			$('.bxslider').bxSlider({
				pagerCustom: '#bx-pager'
			});
		</script>
    </div>
	
	<div class="block product-information">
		<h1>Офисное кресло &laquo;Новый стиль&raquo;</h1>
		<a href="#" class="tip"><div class="favorite"><span>В любимые товары</span></div></a>
		<div class="rate"></div>
		<div class="stock"><div class="stock available"></div>В наличии: 5 шт.</div>
		<div class="sku">Артикул: AK043-47</div>
		<ul class="tooltip-links">
			<li><a href="#" class="tip">Как оплатить?<span><p>Любым удобным Вам способом: наличными, безналичным переводом, электронными деньгами, банковской картой на сайте или при получении.</p></span></a></li>
			<li><a href="#" class="tip">Сроки доставки<span>Стандартная доставка осуществляется на следующий рабочий день. Экспресс-доставка - в день заказа, при заказе до 13.00. Доставка транспортной компанией или до постомата - согласно срокам транспортной компании.</span></a></li>
			<li><a href="#" class="tip">Гарантия и возврат<span>Наша компания гарантирует вам, что все товары можно вернуть в течение 14 дней с момента покупки по гарантии.</span></a></li>
		</ul>
		<p>С офисным креслом Новый Стиль Comfort GTP Black работники вашего офиса будут чувствовать себя комфортно на протяжении всего рабочего дня. </p>
		<p>Эргономические параметры кресла Новый Стиль Comfort GTP Black не сковывают свободу ваших движений, а наличие крестовины с роликами даст возможность свободно передвигаться в границах своей рабочей зоны и брать необходимые вам документы, а также вы можете индивидуально отрегулировать высоту стула. <a class="scroll" href="#char-tabs">Показать все</a></p>
		<div class="yashare-auto-init" data-yashareL10n="ru" data-yashareQuickServices="yaru,vkontakte,facebook,twitter,odnoklassniki,moimir" data-yashareTheme="counter"></div> 
	</div>
	
	<div class="block product-options">
	  <div class="color">
		<ul>
			<li><a href="#" style="background: #ddcfac" title="Бежевый"><div class="active"></div></a></li>
			<li><a href="#" style="background: #ffffff; border: 1px solid #e8e8e8; box-sizing:border-box; -moz-box-sizing:border-box; -webkit-box-sizing:border-box;" title="Белый"></a></li>
			<li><a href="#" style="background: #f6ce6d" title="Золотистый"></a></li>
			<li><a href="#" style="background: #3b3a38" title="Асфальт"></a></li>
			<li><a href="#" style="background: #7a3b0d" title="Дуб"></a></li>
			<li><a href="#" style="background: #fd8f8f" title="Земляника"></a></li>
			<li><a href="#" style="background: #d94748" title="Кирпич"></a></li>
		</ul>
	  </div>
	  <div class="price">
		<p class="sum"><s>20 000 р.</s> 17 900 р.</p>
		<p class="coupon">Для гарантии цены интернет-магазина <a href="#">распечатайте купон</a></p>
	  </div>
	  <div class="advantages-scroll">
		<ul class="tooltip-links">
			<li><a class="b1 tip textbox popup" data-popup="textbox" href="#">Все и сразу<span class="b1"><p>Склад-магазин в одном месте в Москве, удобная парковка, бесплатная загрузка и разгрузка.</p></span></a></li>
			<li><a class="b2 tip textbox popup" data-popup="textbox" href="#">Радуем ценами<span class="b2"><p>Наш магазин работает на рынке с 1979 года. Более 528 700 довольных обслуживанием и ценами клиентов.</p></span></a></li>
			<li class="last"><a class="b3 tip textbox popup" data-popup="textbox" href="#">Радуем выбором<span class="b3"><p>50 фабрик в одном месте. Приезжайте, смотрите, выбирайте и покупайте нашу мебель.</p></span></a></li>
		</ul>
	  </div>
	</div>
	
	<div class="block add-to-cart">
		<form>
		  <input class="qty" name="qty" type="text" placeholder="1">
		  <input class="atc" name="atc" type="button" value="Добавить в корзину">
		  <input class="credit" name="credit" type="button" value="Купить в кредит">
		</form>
	</div>
	
	<div class="wrapper">
	<div class="advantages">
		<div class="items">
			<div class="item item1">
				<span class="icon"></span>
				<div class="content"><div class="text">
					<p class="t">Всё и сразу</p>
					— склад-магазин в одном месте в Москве<br />
					— удобная парковка<br />
					— бесплатная загрузка и разгрузка
				</div></div>
			</div> <!--//.item//-->
			<div class="item item2">
				<span class="icon"></span>
				<div class="content"><div class="text">
					<p class="t">Лучшие цены</p>
					— наш магазин работает на рынке с 1979 года<br />
					— более 528 700 довольных обслуживанием и ценами клиентов
				</div></div>
			</div> <!--//.item//-->
			<div class="item item3">
				<span class="icon"></span>
				<div class="content"><div class="text">
					<p class="t">Огромный выбор</p>
					— 50 фабрик в одном месте<br />
					— приезжайте, смотрите, выбирайте и покупайте нашу мебель
				</div></div>
			</div> <!--//.item//-->
		</div> <!--//.items//-->
	</div> <!--//.advantages//-->
	</div> <!--//.wrapper//-->
	
	<div class="block product-tabs">
		<div id="char-tabs" class="liquid-slider no-js">	
			<div>
				<h3 class="title">Описание</h3>
				<p>Прообразы современных кресел появились ещё в Древнем Египте и Месопотамии. При археологических раскопках на территории Месопотамии был обнаружен штандарт войны и мира, на котором мозаикой выложена сцена пиршества шумеров (III тысячелетие до н. э.). На этой сценке знатные гости сидят на невысоких церемониальных креслах. Спинка кресла достигала плеч сидевшего человека. Ножки кресла вырезаны в виде ног копытного животного, а с каждого бока между передней и задней ножками вставлены по две распорки, поддерживавшие сидение снизу.</p>
				<p>Первыми креслами были тронные кресла правителей и приближенных к ним лиц. Спинка тронного кресла египетского фараона Тутанхамона была отделана золотом, на самой спинке был изображён бог солнца Ра, а подлокотники выполнены в форме идущих львов.</p>
				<p>Подобные жёсткие кресла существовали в Древней Греции. Кресла, покрытые тканью или мехом, появляются у жителей Древнего Рима. У римлян также появилось курульное кресло — кресло в форме складного стула без спинки, сделанное из слоновой кости, мрамора, бронзы или других материалов.</p>
				<p>После падения Римской империи кресла практически исчезают из обихода. Редкие кресла этого периода не отличаются роскошью. Например, в Лувре хранится тронное кресло из бронзы, принадлежавшее королю франков Дагоберту.</p>
				<p>В средневековой Японии, несмотря на редкое использовании в обиходе мебели, существовали похожие на кресла стулья со скамеечкой для ног.</p>
				<p>В романский период (IX—XI вв.) использовались кресла с высокой спинкой. В готический период (XII—XV вв.) кресло становится более распространённым предметом быта, но оно пока ещё неудобное и представляет собой жёсткий деревянный стул с подлокотниками.</p>
				<p>В XVI веке в Голландии появляются более комфортабельные кресла, обитые кожей. Вскоре после этого кресла получают широкое распространение во Франции и становятся настоящим произведением искусства. Начиная с XVII века во Франции для отделки тронообразных кресел с прямой высокой спинкой применялись шпалеры, золочение по левкасу. В середине XVIII века (распространение стиля рококо) появились кресла со специальными спинками, как бы облегающими тело. Во второй половине XVIII века с появлением нового направления в классицизме появились кресла с весьма заметным отделением спинки от сиденья.</p>
			</div>
			<div>
				<h3 class="title">Характеристики</h3>
				<table>
					<tr><th><p>Основные характеристики</p></th><th></th></tr>
					<tr><td><p>Производитель</p></td><td><p>Новый стиль</p></td></tr>
					<tr><td><p>Тип кресла</p></td><td><p>офисное кресло для персонала</p></td></tr>
					<tr><td><p>Основание кресла</p></td><td><p>крестовина с роликами</p></td></tr>
					<tr><th><p>Размеры</p></th><th></th></tr>
					<tr><td><p>Длина сиденья, см</p></td><td><p>45</p></td></tr>
					<tr><td><p>Ширина сиденья, см</p></td><td><p>46,5</p></td></tr>
					<tr><td><p>Ширина спинки, см</p></td><td><p>46,5</p></td></tr>
					<tr><td><p>Ширина основания, см</p></td><td><p>62</p></td></tr>
					<tr><td><p>Длина основания, см</p></td><td><p>62</p></td></tr>
					<tr><td><p>Высота основания, см</p></td><td><p>44,5-57,5</p></td></tr>
					<tr><td><p>Высота кресла, см</p></td><td><p>99,5-113,5</p></td></tr>
					<tr><td><p>Высота подлокотников, см</p></td><td><p class="no-data">нет данных</p></td></tr>
					<tr><td><p>Длина сиденья, см</p></td><td><p>45</p></td></tr>
					<tr><td><p>Ширина сиденья, см</p></td><td><p>46,5</p></td></tr>
				</table>
			</div>
			<div>
				<h3 class="title" style="display:none;">Отзывы о товаре</h3>
				<div class="review">
					<h3>Отзыв от Анастасии С., Москва</h3><div class="rate"></div>
					<p>В магазине «Велта» покупали спальный гарнитур: кровать, шкаф, прикроватные столики и лампы. Понравилось отношение к клиенту и обслужение. Спасибо!</p>
				</div>
				<div class="review">
					<h3>Отзыв от Ольги М., Санкт-Петербург</h3><div class="rate"></div>
					<p>В магазине «Велта» покупали спальный гарнитур: кровать, шкаф, прикроватные столики и лампы. Понравилось отношение к клиенту и обслужение. Спасибо!</p>
				</div>
				
				<div class="line"></div>
				
				<div class="review">
					<h3>Отзыв от Анастасии С., Москва</h3><div class="rate"></div>
					<p>В магазине «Велта» покупали спальный гарнитур: кровать, шкаф, прикроватные столики и лампы. Понравилось отношение к клиенту и обслужение. Спасибо!</p>
				</div>
				<div class="review">
					<h3>Отзыв от Анастасии С., Москва</h3><div class="rate"></div>
					<p>В магазине «Велта» покупали спальный гарнитур: кровать, шкаф, прикроватные столики и лампы. Понравилось отношение к клиенту и обслужение. Спасибо!</p>
				</div>
				
				<div class="line"></div>
				
				<div class="review">
					<h3>Отзыв от Анастасии С., Москва</h3><div class="rate"></div>
					<p>В магазине «Велта» покупали спальный гарнитур: кровать, шкаф, прикроватные столики и лампы. Понравилось отношение к клиенту и обслужение. Спасибо!</p>
				</div>
				<div class="review">
					<h3>Отзыв от Анастасии С., Москва</h3><div class="rate"></div>
					<p>В магазине «Велта» покупали спальный гарнитур: кровать, шкаф, прикроватные столики и лампы. Понравилось отношение к клиенту и обслужение. Спасибо!</p>
				</div>
			</div>
			<div>
				<h3 class="title" style="display:none;">Посмотреть в салоне</h3>
				<h3>Офисное кресло «Новый стиль» находится в салоне на «Соколинке»</h3>
				<p>105118, Москва, 9-я улица Соколиной горы, дом 21</p>
				<p>+7 (495) 225 4553</p>
				<p>+7 (495) 365 3617</p>
				<center><img src="images/mapYa.png"></center>
			</div>
			<div>
				<h3 class="title" style="display:none;">Сертификаты</h3>
				<h3>Мы официальные поставщики товара Офисное кресло «Новый стиль»</h3>
				<p>Мы производим прямые поставки товара Офисное кресло «Новый стиль» напрямую с завода по самым привлекательным ценам. Ознакомьтесь с заводскими сертификатами на товар ниже. При нажатии на фотографию, сертификат откроется в полном размере.</p>
				<center><a class="imagebox popup" data-popup="imagebox" href="#"><img src="content/cert1.jpg"><img src="content/cert2.jpg"></a></center>
			</div>
		</div>
	</div>
  </div> <!--//.wrapper//-->
</div> <!--//.content//-->


<div class="wrapper">
	<div class="reviews">
		<div class="items">
			<div class="item"><div class="content">
				<p class="name">Отзыв от Анастасии С., Москва</p>
				В магазине &laquo;Велта&raquo; покупали спальный гарнитур: кровать, шкаф, прикроватные столики и лампы. Понравилось отношение к клиенту и обслужение. Спасибо!
			</div></div> <!--//.item//-->
			<div class="item"><div class="content">
				<p class="name">Отзыв от Елены Н., Владимир</p>
				Lorem ipsum dolor sit amet, consectetur adipiscing elit. Proin aliquam, urna vel lacinia vehicula, metus nisi venenatis turpis, ut congue elit erat et dui. Nunc id blandit nibh, ac rhoncus leo.
			</div></div> <!--//.item//-->
			<div class="item"><div class="content">
				<p class="name">Отзыв от Натальи, Ярославль</p>
				Donec vitae lectus eu est tincidunt rutrum sit amet sit amet nulla. Vestibulum eget pulvinar diam, pellentesque condimentum ipsum. Nulla sagittis turpis eu auctor rhoncus.
			</div></div> <!--//.item//-->
		</div> <!--//.items//-->
		<div class="op">
			<a href="#">+ <span>загрузить все 6 отзывов</span></a>
			<a href="#">+ <span>оставить свой отзыв</span></a>
		</div>
	</div> <!--//.reviews//-->
</div>

<div class="best-deals">
	<div class="wrapper">
		<h1>Сопутствующие товары</h1>
		<nav class="menu">
			<ul>
				<li class="current"><a href="#best1"><span>Другие товары из коллекции  «Кофморт»</span></a></li>
				<li><a href="#best2"><span>Другие товары стиля «Классика»</span></a></li>
				<li><a href="#best3"><span>Связанные товары</span></a></li>
			</ul>
		</nav>
		
		<div class="holder">
			<div id="best1" class="best-deals-gallery">
				<div class="gallery">
					<ul class="carousel">
						<li>
							<div class="areaQuickView">
		   					<div class="quickView popup" data-popup="qview"><span>Быстрый просмотр</span></div>
								<img src="content/chair1.jpg" class="photo" alt="" />			
		   					</div>
							<p class="title">Офисное кресло «Мадрид»</p>
							<p class="price">15000 р.</p>
							<p class="cart"><a href="#"><span>В корзину</span></a></p>
						</li>
						<li>
							<div class="areaQuickView">
		   					<div class="quickView popup" data-popup="qview"><span>Быстрый просмотр</span></div>
								<img src="content/chair2.jpg" class="photo" alt="" />			
		   					</div>
							<p class="title">Офисное кресло «Калифорния»</p>
							<p class="price">27000 р.</p>
							<p class="cart"><a href="#"><span>В корзину</span></a></p>
						</li>
						<li>
							<div class="areaQuickView">
		   					<div class="quickView popup" data-popup="qview"><span>Быстрый просмотр</span></div>
								<img src="content/chair3.jpg" class="photo" alt="" />			
		   					</div>
							<p class="title">Офисное кресло «Валенсия»</p>
							<p class="price"><s>13500 р.</s> 9500 р.</p>
							<p class="cart"><a href="#"><span>В корзину</span></a></p>
						</li>
						<li>
							<div class="areaQuickView">
		   					<div class="quickView popup" data-popup="qview"><span>Быстрый просмотр</span></div>
								<img src="content/chair4.jpg" class="photo" alt="" />			
		   					</div>
							<p class="title">Офисное кресло «Алабама»</p>
							<p class="price">11500 р.</p>
							<p class="cart"><a href="#"><span>В корзину</span></a></p>
						</li>
					</ul>
					<div class="clear"></div>
					<a href="#" class="nav nav-prev"></a>
					<a href="#" class="nav nav-next"></a>
				</div> <!--//.gallery//-->
				<div class="summary">
					<a href="#" class="more off">+ <span>показать все 15 товаров</span></a>
					<a href="#" class="more on" style="display: none;">- <span>спрятать все  15 товаров</span></a>
				</div>
			</div> <!--//#best1//-->
			<div id="best2" class="best-deals-gallery hidden">
				<div style="padding: 50px 0; text-align: center;">
					Добавить элементы, по аналогии как на первой вкладке.<br />
					И так во всех остальных...
				</div>
			</div> <!--//#best2//-->
		</div> <!--//.holder//-->
	</div> <!--//.wrapper//-->
</div> <!--//.best-deals//-->

<footer class="page-footer">
	<div class="wrapper">
		<div class="information">
			<div class="col"><div class="col-content">
				<p class="t">Ежедневно</p>
				Работаем ежедневно с 10 до 20 в праздники и выходные дни для вас.
			</div></div> <!--//.col//-->
			<div class="col"><div class="col-content">
				<p class="t">Консультации</p>				Подберем нужную вам мебель и ответим на ваши вопросы!
			</div></div> <!--//.col//-->
			<div class="col"><div class="col-content">
				<p class="t">Кредит</p>
				Поможем сформировать онлайн-заявку на получение кредита.
			</div></div> <!--//.col//-->
			<div class="col"><div class="col-content">
				<p class="t">Акции</p>
				Акции, скидки и спецпредложения — для наших клиентов.			</div></div> <!--//.col//-->
		</div> <!--//.information//-->
		<div class="bottom">
			<nav class="col col1">
				<p class="t">О компании</p>
				<ul>
					<li><a href="#">Наши преимущества</a></li>					<li><a href="#">Контакты</a></li>					<li><a href="#">Реквизиты</a></li>					<li><a href="#">Сотрудничество</a></li>					<li><a href="#">Скидки и акции</a></li>
				</ul>
			</nav> <!--//.col//-->
			<nav class="col col2">
				<p class="t">Как мы работаем</p>
				<ul>
					<li><a href="#">Режим работы</a></li>					<li><a href="#">Расчёт кухни</a></li>					<li><a href="#">Самовывоз</a></li>					<li><a href="#">Доставка и сборка</a></li>					<li><a href="#">Складская программа</a></li>					<li><a href="#">Оплата</a></li>					<li><a href="#">Вызов замерщика</a></li>					<li><a href="#">Кредит</a></li>
				</ul>
			</nav> <!--//.col//-->
			<nav class="col col3">
				<p class="t">Каталог</p>
				<ul>
					<li><a href="#">Мягкая мебель</a></li>					<li><a href="#">Кухни</a></li>					<li><a href="#">Шкафы-купе</a></li>					<li><a href="#">Спальни</a></li>					<li><a href="#">Прихожие</a></li>					<li><a href="#">Столы и стулья</a></li>					<li><a href="#">Офисная мебель</a></li>					<li><a href="#">Стенки</a></li>					<li><a href="#">Ещё...</a></li>
				</ul>
			</nav> <!--//.col//-->
			<div class="col col4">
				<div class="address">
					<p class="t">Салон на Соколинке</p>
					105118, Москва, 9-я улица Соколиной горы, дом 21<br />					+7 (495) 225 4553<br />					+7 (495) 365 3617					<p class="map"><a href="#"><span>Смотреть на карте</span></a></p>				</div>
				<div class="address">
					<p class="t">Салон в ТЦ Снегири</p>
					Московская область (направление — Волоколамское шоссе),<br />					п. Снегири, ул. Московская, д. 12, ТЦ “Снегири”<br />					+7 (495) 225 4553<br />					+7 (905) 563 6611					<p class="map"><a href="#"><span>Смотреть на карте</span></a></p>
				</div>
			</div> <!--//.col//-->
		</div>
	</div> <!--//.wrapper//-->
  <script>
	$('#char-tabs').liquidSlider();
  </script>
</footer> <!--//.page-footer//-->
<div id="overlay"></div>
</body>
</html>
