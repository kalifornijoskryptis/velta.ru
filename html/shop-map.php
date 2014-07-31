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
	<script type="text/javascript" src="js/jquery-1.9.1.min.js"></script>
	<script type="text/javascript" src="js/jquery.carouFredSel-6.2.1-packed.js"></script>
	<script type="text/javascript" src="js/scripts.js"></script>
	<script type="text/javascript" src="js/map.js"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/1.10.2/jquery.min.js"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-easing/1.3/jquery.easing.min.js"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery.touchswipe/1.6.4/jquery.touchSwipe.min.js"></script>
	<script src="js/jquery.liquid-slider.js"></script>
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

<div class="wrapper">
 <div class="content">
	<h1>Карта наших салонов в Москве и МО</h1>
	<div id="ymaps-overview"></div> <!-- Yandex.Map wrapper -->
	<div id="tabs" class="liquid-slider no-js">	
	<div>
      <h3 class="title">Обзорная карта</h3>
      <p>На данной карте вы можете посмотреть расположение салонов компании &laquo;Велта&raquo; и выбрать наиболее подходящий из них. На данный момент, в компании &laquo;Велта&raquo; имеются 2 фирменных магазина на &laquo;Соколинке&raquo; и в ТЦ &laquo;Снегири&raquo;.</p>
    </div>
    <div>
      <h3 class="title">Мебельный салон на &laquo;Соколинке&raquo;</h3>
      <p><b>Наш адрес:</b> 105118, Москва, 9-я улица Соколиной горы, дом 21
	  <p><b>Проезд:</b> м. &laquo;Семёновская&raquo; или &laquo;Шоссе энтузиастов&raquo;, далее авт. 36,83,141,254,702, трамвай 34,36, марш. 341,83 до остановки &laquo;9-я улица Соколиной горы&raquo;.</p>
	  <p><b>Часы работы:</b> понедельник - суббота с 10.00 до 20.00, воскресенье с 10.00 до 18.00 без обеда</p>
	  <p><b>Телефоны:</b> +7 (495) 365-53-34, +7 (495) 365-36-17</p>
	  <p>Как проехать на <a href="#" class="geolocate-car-sokol">автомобиле</a>, <a href="#" class="geolocate-pt-sokol">общественном транспорте</a></p>
    </div>
    <div>
      <h3 class="title">Мебельный салон в ТЦ &laquo;Снегири&raquo;</h3>
      <p><b>Наш адрес:</b> Московская область (направление - Волоколамское шоссе), Снегири, ул. Московская, д. 12, ТЦ &laquo;Снегири&raquo;
	  <p><b>Часы работы:</b> понедельник - суббота с 10.00 до 20.00; воскресенье с 10.00 до 18.00 без обеда</p>
	  <p><b>Телефоны:</b> +7 (905) 563-66-11</p>
	  <p><b>Телефоны:</b> +7 (905) 563-66-11</p>
	  <p>Как проехать на <a href="#" class="geolocate-car-sneg">автомобиле</a>, <a href="#" class="geolocate-pt-sokol">общественном транспорте</a></p>
    </div>
  </div>
 </div> 
</div> <!--//.content//-->


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
	$('#tabs').liquidSlider();
  </script>
</footer> <!--//.page-footer//-->
</body>
</html>
