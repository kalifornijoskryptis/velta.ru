<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8" />
	<!--[if lt IE 9]><script src="http://html5shiv.googlecode.com/svn/trunk/html5.js"></script><![endif]-->
	<title>Велта Мебель</title>
	<link rel="icon" href="favicon.ico" type="image/x-icon">
	<link rel="shortcut icon" href="favicon.ico" type="image/x-icon">
	<link rel="stylesheet" href="css/chosen.css" />
	<link rel="stylesheet" href="css/style.css" />
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/3.0.0/animate.min.css">
	<!--[if lte IE 8]><link rel="stylesheet" href="css/style-ie.css" type="text/css" media="screen, projection" /><![endif]-->
	<!--[if IE ]>
	<script type="text/javascript">
		isBrowserIE = true;
	</script>
	<![endif]-->
	<script type="text/javascript" src="js/jquery-1.9.1.min.js"></script>
	<script type="text/javascript" src="js/jquery.carouFredSel-6.2.1-packed.js"></script>
	<script type="text/javascript" src="js/scripts.js"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/1.10.2/jquery.min.js"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-easing/1.3/jquery.easing.min.js"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery.touchswipe/1.6.4/jquery.touchSwipe.min.js"></script>
	<script type="text/javascript" src="js/ion.rangeSlider.min.js"></script>
	<script type="text/javascript" src="js/icheck.min.js"></script>
	<script type="text/javascript" src="js/chosen.jquery.min.js"></script>
</head>
<body class="page-category">
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
				<input type="submit" class="button"/>
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
   <div class="sidebar">
	<div class="category block">
	  <h3>Столы и стулья</h3>
	  <ul>
		<li><a href="#">Обеденные столы</a></li>
		<li class="second-level first"><a href="#">Стулья и табуреты</a></li>
			<li class="second-level active"><a href="#">Для дома</a></li>
			<li class="second-level"><a href="#">Для офиса</a></li>
			<li class="second-level"><a href="#">Для дачи</a></li>
		<li><a href="#">Скамьи</a></li>
		<li><a href="#">Уголки для кухни</a></li>
		<li><a href="#">Журнальные столики</a></li>
		<li><a href="#">Столы и стулья для террасы</a></li>
	  </ul>
	</div>
	<div class="price-slider block">
	  <h3>Стоимость</h3>
	  <div id="priceslider"></div>
	  <script>
	  $("#priceslider").ionRangeSlider({
		min: 2500, /* min price */
		max: 197500, /* max price*/
		type: 'double',
		postfix: " p.",
		maxPostfix: "+",
		prettify: false,
		hasGrid: true
	  });
	  </script>
	</div>
	
	<div class="filter block">
	  <h3>Сортировать по</h3>
	  <div class="selected-filter"><img src="images/del.png">Название: <b>велта-25</b></div>
	  <div class="selected-filter"><img src="images/del.png">Цвет: <b>красный</b></div>
	  <div class="selected-filter"><img src="images/del.png">Размер: <b>120х150</b></div>
	  
	  <ul>
		<a class="sh-name" href="#">Название</a>
		<li class="filter-name">
			<input type="text" placeholder="Введите название">
		</li>
		
		<a class="sh-sizes" href="#">Размеры (см)</a>
		<li class="filter-sizes">
			<input class="sizes" type="number" placeholder="Ш" name="quantity" min="1" max="300"><label></label>
			<input class="sizes" type="number" placeholder="В" name="quantity" min="1" max="300"><label></label>
			<input class="sizes" type="number" placeholder="Г" name="quantity" min="1" max="300"><label></label>
		</li>
	
		<a class="sh-material-type" href="#">Тип обивки</a>
		<li class="filter-material-type">
			<input type="checkbox"><label>Кожа</label>
			<input type="checkbox" checked><label>Ткань</label>
			<input type="checkbox"><label>Замша</label>
			<input type="checkbox"><label>Велюр</label>
			<input type="checkbox"><label>Вельвет</label>
			<input type="checkbox" checked><label>Шинилл</label>
			<input type="checkbox" checked><label>Флок</label>
			<input type="checkbox"><label>Рогожка</label>
			<input type="checkbox"><label>Букле</label>
			<input type="checkbox"><label>Жаккард</label>
			<input type="checkbox"><label>Гобелен</label> 
		</li>
		
		<a class="sh-manufacture" href="#">Производитель</a>
		<li class="filter-manufacture">
			<select data-placeholder="Выберите производителя" style="width:100%;" multiple class="chosen-select">
			  <option value="1">Альянс</option>
			  <option value="2">Трим-М</option>
			  <option value="3">Volvo</option>
			  <option value="4">Audi</option>
			  <option value="5">BMW</option>
			</select>
		</li>
		
		<a class="sh-color" href="#">Цвет</a>
		<li class="filter-color">
			<input type="checkbox"><label>Синий</label>
			<input type="checkbox" checked><label>Ольха</label>
			<input type="checkbox"><label>Береза</label>
			<input type="checkbox"><label>Оранж</label>
			<input type="checkbox" checked><label>Зеленый</label>
			<input type="checkbox"><label>Черный</label>
			<input type="checkbox"><label>Кирпич</label>
			<input type="checkbox"><label>Белый</label>
		</li>
		
		<a class="sh-stocks" href="#">Наличие в салонах</a>
		<li class="filter-stocks">
			<input type="checkbox" name="iCheck"><label>Товар в наличии в ТЦ «Снегири»</label>
			<input type="checkbox" name="iCheck" checked><label>Товар в наличии на Соколинке</label>
			<input type="checkbox" name="iCheck" checked><label>Товар не в наличии (под заказ)</label>
		</li>
		
	  </ul>
	</div>
	</div>
	<div class="category-information">
		<img src="content/cat-img.jpg">
		<div class="textblock">
		  <h1 class="title">Столы и стулья</h1>
		  <p class="description">Ознакомьтесь с нашими лучшими предложениями, большими скидками и последними новинками. Наш магазин рад предоставить вам широкий выбор ведущих мебельных производителей. Желаем хороших покупок.</p>
		</div>
	</div>
	<div class="category-sort">
		<p>Сортировать по: <a href="#">цене</a></p><p>Показывать на странице: <a href="#">9 товаров</a></p>
		<div class="display-mode"><a href="#"><img src="images/grid.png"></a><a href="#"><img src="images/list.png"></a></div>
	</div>
	<div class="product-list-view">
			<div class="holder">
					 <ul class="products">
						<li>
							<a href="#"><img src="content/chair5.jpg" class="photo" alt="" /></a>
							<p class="title"><a href="#">Офисное кресло &laquo;Функционал&raquo;</a></p>
							<p class="description">С офисным креслом Новый Стиль Comfort GTP Black работники вашего офиса будут чувствовать себя комфортно на протяжении всего рабочего дня. Эргономические параметры кресла Новый Стиль Comfort GTP Black не сковывают свободу ваших движений, а наличие крестовины.</p>
							<p class="price"><s>15800 р.</s> 12000 р.</p>
							<p class="cart"><a href="#"><span><img src="images/best-to-cart.png">Добавить в корзину</span></a></p>
						</li>
						<li>
							<a href="#"><img src="content/chair6.jpg" class="photo" alt="" /></a>
							<p class="title"><a href="#">Офисное кресло &laquo;Барон&raquo;</a></p>
							<p class="description">С офисным креслом Новый Стиль Comfort GTP Black работники вашего офиса будут чувствовать себя комфортно на протяжении всего рабочего дня. Эргономические параметры кресла Новый Стиль Comfort GTP Black не сковывают свободу ваших движений, а наличие крестовины.</p>
							<p class="price"><s>35800 р.</s> 22000 р.</p>
							<p class="cart"><a href="#"><span><img src="images/best-to-cart.png">Добавить в корзину</span></a></p>
						</li>
						<li class="out-of-stock">
							<a href="#"><img src="content/chair7.jpg" class="photo" alt="" /></a>
							<p class="title"><a href="#">Офисное кресло &laquo;Менеджер 1&raquo;</a></p>
							<p class="description">С офисным креслом Новый Стиль Comfort GTP Black работники вашего офиса будут чувствовать себя комфортно на протяжении всего рабочего дня. Эргономические параметры кресла Новый Стиль Comfort GTP Black не сковывают свободу ваших движений, а наличие крестовины.</p>
							<p class="price"><s>5800 р.</s> 2000 р.</p>
							<div class="out"><p>Нет в наличии (распродано)</p></div>
						</li>
						<li>
							<a href="#"><img src="content/chair8.jpg" class="photo" alt="" /></a>
							<p class="title"><a href="#">Офисное кресло &laquo;Царь&raquo;</a></p>
							<p class="description">С офисным креслом Новый Стиль Comfort GTP Black работники вашего офиса будут чувствовать себя комфортно на протяжении всего рабочего дня. Эргономические параметры кресла Новый Стиль Comfort GTP Black не сковывают свободу ваших движений, а наличие крестовины.</p>
							<p class="price"><s>45800 р.</s> 32250 р.</p>
							<p class="cart"><a href="#"><span><img src="images/best-to-cart.png">Добавить в корзину</span></a></p>
						</li>
						<li class="out-of-stock">
							<a href="#"><img src="content/chair9.jpg" class="photo" alt="" /></a>
							<p class="title"><a href="#">Офисное кресло &laquo;Властелин&raquo;</a></p>
							<p class="description">С офисным креслом Новый Стиль Comfort GTP Black работники вашего офиса будут чувствовать себя комфортно на протяжении всего рабочего дня. Эргономические параметры кресла Новый Стиль Comfort GTP Black не сковывают свободу ваших движений, а наличие крестовины.</p>
							<p class="price"><s>75800 р.</s> 62010 р.</p>
							<div class="out"><p>Нет в наличии (распродано)</p></div>
						</li>
						<li>
							<a href="#"><img src="content/chair10.jpg" class="photo" alt="" /></a>
							<p class="title"><a href="#">Офисное кресло &laquo;Император&raquo;</a></p>
							<p class="description">С офисным креслом Новый Стиль Comfort GTP Black работники вашего офиса будут чувствовать себя комфортно на протяжении всего рабочего дня. Эргономические параметры кресла Новый Стиль Comfort GTP Black не сковывают свободу ваших движений, а наличие крестовины.</p>
							<p class="price"><s>195800 р.</s> 182780 р.</p>
							<p class="cart"><a href="#"><span><img src="images/best-to-cart.png">Добавить в корзину</span></a></p>
						</li>
						<li class="out-of-stock">
							<a href="#"><img src="content/chair11.jpg" class="photo" alt="" /></a>
							<p class="title"><a href="#">Офисное кресло &laquo;Бюрократ&raquo;</a></p>
							<p class="description">С офисным креслом Новый Стиль Comfort GTP Black работники вашего офиса будут чувствовать себя комфортно на протяжении всего рабочего дня. Эргономические параметры кресла Новый Стиль Comfort GTP Black не сковывают свободу ваших движений, а наличие крестовины.</p>
							<p class="price"><s>9800 р.</s> 9799 р.</p>
							<div class="out"><p>Нет в наличии (распродано)</p></div>
						</li>
						<li>
							<a href="#"><img src="content/chair12.jpg" class="photo" alt="" /></a>
							<p class="title"><a href="#">Офисное кресло &laquo;Белоснежное&raquo;</a></p>
							<p class="description">С офисным креслом Новый Стиль Comfort GTP Black работники вашего офиса будут чувствовать себя комфортно на протяжении всего рабочего дня. Эргономические параметры кресла Новый Стиль Comfort GTP Black не сковывают свободу ваших движений, а наличие крестовины.</p>
							<p class="price"><s>1800 р.</s> 900 р.</p>
							<p class="cart"><a href="#"><span><img src="images/best-to-cart.png">Добавить в корзину</span></a></p>
						</li>
					</ul>
					<div class="clear"></div>
			</div> <!--//.holder//-->
			<div class="pager">
				<ul class="pages">
					<a href="#"><li><</li></a>
					<a href="#"><li>1</li></a>
					<a href="#"><li class="active">2</li></a>
					<a href="#"><li>3</li></a>
					<a href="#"><li>></li></a>
				</ul>
			  </div>
	 </div>
	</div> <!--//.best-deals//-->
  </div> <!--//.wrapper//-->
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
</footer> <!--//.page-footer//-->
<script>
$(document).ready(function(){

  $(".chosen-select").chosen();
  
  $('input').each(function(){
    var self = $(this),
      label = self.next(),
      label_text = label.text();

	  label.remove();
	  
	  self.iCheck({
      checkboxClass: 'icheckbox_line',
      radioClass: 'iradio_line',
      insert: '<div class="icheck_line-icon"></div>' + label_text
    });
	
  });
});
</script>
</body>
</html>
