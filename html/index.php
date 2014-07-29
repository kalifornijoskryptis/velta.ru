<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8" />
<!--[if lt IE 9]><script src="http://html5shiv.googlecode.com/svn/trunk/html5.js"></script><![endif]-->
<title>Велта Мебель</title>
<link rel="icon" href="favicon.ico" type="image/x-icon">
<link rel="shortcut icon" href="favicon.ico" type="image/x-icon">
<link rel="stylesheet" href="css/style.css" />
<!--[if lte IE 8]><link rel="stylesheet" href="css/style-ie.css" type="text/css" media="screen, projection" /><![endif]-->
<script type="text/javascript" src="js/jquery-1.9.1.min.js"></script>
<script type="text/javascript" src="js/jquery.carouFredSel-6.2.1-packed.js"></script>
<script type="text/javascript" src="js/scripts.js"></script>
<!--[if IE ]>
<script type="text/javascript">
isBrowserIE = true;
</script>
<![endif]-->
</head>
<body>
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
			<div class="callme popup" data-popup="callme">
				<p class="t">перезвоните мне</p>
				<p class="phone"><span class="ajax">+7 (495) 225-45-53</span></p>
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
	<div class="gallery">
		<div class="slides" id="primary-slider">
			<div class="slide">
				<img src="content/slide1.jpg" alt="" />
				<div class="legend">
					<div class="content">
						<div class="caption bg">
							<p class="title">Кровать &laquo;Комфорт Люкс&raquo;</p>
							<p class="price"><s>20000 руб.</s> 17900 руб.</p>
						</div>
						<div class="desc bg">В наличии на складе. Произведена в Испании.<br />Есть автодоводчик под нужный размер.<br />Размеры 1900х600х2400мм.</div>
						<a href="#" class="cart bg"><span>В корзину</span></a>
					</div>
				</div>
			</div>
			<div class="slide">
				<img src="content/slide2.jpg" alt="" />
				<div class="legend">
					<div class="content">
						<div class="caption bg">
							<p class="title">Кровать &laquo;Комфорт Люкс&raquo;</p>
							<p class="price"><s>20000 руб.</s> 17900 руб.</p>
						</div>
						<div class="desc bg">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Proin aliquam, urna vel lacinia vehicula, metus nisi venenatis turpis, ut congue elit erat et dui. Nunc id blandit nibh, ac rhoncus leo. Suspendisse placerat interdum sollicitudin. Proin interdum lacinia ligula, at convallis sem.</div>
						<a href="#" class="cart bg"><span>В корзину</span></a>
					</div>
				</div>
			</div>
			<div class="slide">
				<img src="content/slide3.jpg" alt="" />
				<div class="legend">
					<div class="content">
						<div class="caption bg">
							<p class="title">Кровать &laquo;Комфорт Люкс&raquo;</p>
							<p class="price"><s>20000 руб.</s> 17900 руб.</p>
						</div>
						<div class="desc bg">Donec vitae lectus eu est tincidunt rutrum sit amet sit amet nulla. Vestibulum eget pulvinar diam, pellentesque condimentum ipsum.</div>
						<a href="#" class="cart bg"><span>В корзину</span></a>
					</div>
				</div>
			</div>
			<div class="slide">
				<img src="content/slide4.jpg" alt="" />
				<div class="legend">
					<div class="content">
						<div class="caption bg">
							<p class="title">Кровать &laquo;Комфорт Люкс&raquo;</p>
							<p class="price"><s>20000 руб.</s> 17900 руб.</p>
						</div>
						<div class="desc bg">Nulla sagittis turpis eu auctor rhoncus. Nam lectus ligula, condimentum vitae aliquam a, feugiat non massa. Nullam blandit, nisl id aliquam facilisis, metus dui feugiat odio, vel gravida nulla magna sed risus. Phasellus elementum in orci aliquam ornare. Integer fermentum consectetur consequat. Quisque vitae ante quis lectus tristique gravida. Nullam ac est nibh.</div>
						<a href="#" class="cart bg"><span>В корзину</span></a>
					</div>
				</div>
			</div>
			<div class="slide">
				<img src="content/slide5.jpg" alt="" />
				<div class="legend">
					<div class="content">
						<div class="caption bg">
							<p class="title">Кровать &laquo;Комфорт Люкс&raquo;</p>
							<p class="price"><s>20000 руб.</s> 17900 руб.</p>
						</div>
						<div class="desc bg">Curabitur viverra, ligula quis malesuada dictum, nisi leo dignissim dui, quis vehicula dui enim at enim. Nullam eget justo sodales, dapibus augue quis, tincidunt justo.</div>
						<a href="#" class="cart bg"><span>В корзину</span></a>
					</div>
				</div>
			</div>
		</div> <!--//.slides//-->
		<div class="clear"></div>
		<div class="pages"></div>
		<a href="#" id="primary-slider-prev" class="nav nav-prev"></a>
		<a href="#" id="primary-slider-next" class="nav nav-next"></a>
	</div> <!--//.gallery//-->
</div> <!--//.primary-slider//-->

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
					<p class="t">Радуем ценами</p>
					— наш магазин работает на рынке с 1970 года<br />
					— более 528 700 клиентов
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

<div class="best-deals">
	<div class="wrapper">
		<h1>Наши лучшие предложения</h1>
		<nav class="menu">
			<ul>
				<li class="current"><a href="#best1"><span>Диваны/кресла</span></a></li>
				<li><a href="#best2"><span>Кухни</span></a></li>
				<li><a href="#best3"><span>Шкафы-купе</span></a></li>
				<li><a href="#best4"><span>Спальни</span></a></li>
				<li><a href="#best5"><span>Прихожие</span></a></li>
				<li><a href="#best6"><span>Столы/стулья</span></a></li>
				<li><a href="#best7"><span>В офис</span></a></li>
				<li><a href="#best8"><span>Стенка</span></a></li>
				<li><a href="#best9"><span>Вытяжки</span></a></li>
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

<div class="wrapper">
	<div class="reviews">
		<div class="items">
			<div class="item"><div class="content">
				<p class="name">Отзыв от Анастасии С., Москва</p>
				В магазине «Велта» покупали спальный гарнитур: кровать, шкаф, прикроватные столики и лампы. Понравилось отношение к клиенту и обслужение. Спасибо!
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
			<a class="popup" data-popup="addreview" href="#" onclick="return false;">+ <span>оставить свой отзыв</span></a>
		</div>
	</div> <!--//.reviews//-->

	<div class="external-widgets">
		<div class="col-left">
			<div class="item">
				<!-- script type="text/javascript" src="//vk.com/js/api/openapi.js?113"></script -->
				<!-- VK Widget -->
				<div id="vk_groups"></div>
				<!-- script type="text/javascript">
				VK.Widgets.Group("vk_groups", {mode: 0, width: "660", height: "260", color1: 'FFFFFF', color2: '97875a', color3: '66786d'}, 20003922);
				</script -->
			</div>
			<div class="item">
				<div id="fb-root"></div>
				<!-- script>(function(d, s, id) {
				  var js, fjs = d.getElementsByTagName(s)[0];
				  if (d.getElementById(id)) return;
				  js = d.createElement(s); js.id = id;
				  js.src = "//connect.facebook.net/ru_RU/sdk.js#xfbml=1&version=v2.0";
				  fjs.parentNode.insertBefore(js, fjs);
				}(document, 'script', 'facebook-jssdk'));</script>
				<div class="fb-like-box" data-href="https://www.facebook.com/FacebookDevelopers" data-width="660" data-height="260" data-show-faces="true" data-stream="false" data-border-color="#ffffff" data-header="true"></div -->
			</div>
		</div> <!--//.col-left//-->
		<div class="col-right">
			<div class="item">
				<img src="content/youtube.jpg" alt="" />
			</div>
			<div class="item">
				<img src="content/ivideon.jpg" alt="" />
			</div>
		</div> <!--//.col-right//-->
		<div class="clear"></div>
	</div> <!--//.external-widgets//-->

	<div class="partners">
		<div class="gallery">
			<ul>
				<li><img src="content/logo1.png" width="54" height="55" alt="" /></li>
				<li><img src="content/logo2.png" width="140" height="55" alt="" /></li>
				<li><img src="content/logo3.png" width="111" height="55" alt="" /></li>
				<li><img src="content/logo4.png" width="92" height="55" alt="" /></li>
				<li><img src="content/logo5.png" width="62" height="55" alt="" /></li>
				<li><img src="content/logo6.png" width="106" height="55" alt="" /></li>
				<li><img src="content/logo7.png" width="110" height="55" alt="" /></li>
				<li><img src="content/logo8.png" width="50" height="55" alt="" /></li>
				<li><img src="content/logo9.png" width="154" height="55" alt="" /></li>
				<li><img src="content/logo10.png" width="90" height="55" alt="" /></li>
			</ul>
			<a href="#" class="nav nav-prev"></a>
			<a href="#" class="nav nav-next"></a>
		</div> <!--//.gallery//-->
	</div>
</div> <!--//.wrapper//-->

<footer class="page-footer">
	<div class="wrapper">
		<div class="information">
			<div class="col"><div class="col-content">
				<p class="t">Ежедневно</p>
				Работаем ежедневно с 10 до 20 в праздники и выходные дни для вас.
			</div></div> <!--//.col//-->
			<div class="col"><div class="col-content">
				<p class="t">Консультации</p>
				Подберем нужную вам мебель и ответим на ваши вопросы!
			</div></div> <!--//.col//-->
			<div class="col"><div class="col-content">
				<p class="t">Кредит</p>
				Поможем сформировать онлайн-заявку на получение кредита.
			</div></div> <!--//.col//-->
			<div class="col"><div class="col-content">
				<p class="t">Акции</p>
				Акции, скидки и спецпредложения — для наших клиентов.
			</div></div> <!--//.col//-->
		</div> <!--//.information//-->
		<div class="bottom">
			<nav class="col col1">
				<p class="t">О компании</p>
				<ul>
					<li><a href="#">Наши преимущества</a></li>
					<li><a href="#">Контакты</a></li>
					<li><a href="#">Реквизиты</a></li>
					<li><a href="#">Сотрудничество</a></li>
					<li><a href="#">Скидки и акции</a></li>
				</ul>
			</nav> <!--//.col//-->
			<nav class="col col2">
				<p class="t">Как мы работаем</p>
				<ul>
					<li><a href="#">Режим работы</a></li>
					<li><a href="#">Расчёт кухни</a></li>
					<li><a href="#">Самовывоз</a></li>
					<li><a href="#">Доставка и сборка</a></li>
					<li><a href="#">Складская программа</a></li>
					<li><a href="#">Оплата</a></li>
					<li><a href="#">Вызов замерщика</a></li>
					<li><a href="#">Кредит</a></li>
				</ul>
			</nav> <!--//.col//-->
			<nav class="col col3">
				<p class="t">Каталог</p>
				<ul>
					<li><a href="#">Мягкая мебель</a></li>
					<li><a href="#">Кухни</a></li>
					<li><a href="#">Шкафы-купе</a></li>
					<li><a href="#">Спальни</a></li>
					<li><a href="#">Прихожие</a></li>
					<li><a href="#">Столы и стулья</a></li>
					<li><a href="#">Офисная мебель</a></li>
					<li><a href="#">Стенки</a></li>
					<li><a href="#">Ещё...</a></li>
				</ul>
			</nav> <!--//.col//-->
			<div class="col col4">
				<div class="address">
					<p class="t">Салон на Соколинке</p>
					105118, Москва, 9-я улица Соколиной горы, дом 21<br />
					+7 (495) 225 4553<br />
					+7 (495) 365 3617
					<a href="#" class="to-map popup" data-popup="map2" onclick="return false;"><span>Смотреть на карте</span></a>
				</div>
				<div class="address">
					<p class="t">Салон в ТЦ Снегири</p>
					Московская область (направление — Волоколамское шоссе),<br />
					п. Снегири, ул. Московская, д. 12, ТЦ “Снегири”<br />
					+7 (495) 225 4553<br />
					+7 (905) 563 6611
					<a href="#" class="to-map popup" data-popup="map1" onclick="return false;"><span>Смотреть на карте</span></a>
				</div>
			</div> <!--//.col//-->
		</div>
	</div> <!--//.wrapper//-->
</footer> <!--//.page-footer//-->
</body>
</html>
