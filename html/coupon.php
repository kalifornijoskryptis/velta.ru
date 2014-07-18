<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8" />
	<title>Велта Мебель</title>
	<link rel="icon" href="favicon.ico" type="image/x-icon">
	<link rel="shortcut icon" href="favicon.ico" type="image/x-icon">
	<link rel="stylesheet" href="css/print.css" />
	<script src="http://api-maps.yandex.ru/2.1/?lang=ru_RU" type="text/javascript"></script>
	<script type="text/javascript" src="js/jquery-1.9.1.min.js"></script>
	<script type="text/javascript" src="js/jquery-barcode-2.0.2.min.js"></script>
	<script type="text/javascript" src="js/scripts.js"></script>
</head>

<body onLoad="generateBarcode(); javascript:print();">

<div class="content">
  <div class="wrapper">
  
	<div class="product-photo">
		<img src="content/chair-slide3.jpg">
	</div>
	
	<div class="product-information">
	
		<h1>Артикул <b>ARR-FA/155/2</b></h1>
		<h3>Офисное кресло &laquo;Новый стиль&raquo;</h3>
		<div class="stock">В наличии: 5 шт.</div>
		<h3>Код цвета: <b>F5/A (ольха)</b></h3>

		<div class="price">
			<p class="sum"><s>20 000 р.</s> <b>17 900 р.</b></p>
			<p>гарантия заявленной цены</p>
		</div>
		
		<div class="notice">
			<p>Обязательно предъявите данный купон сотрудникам салона компании «Велта Мебель». С данным купоном вы можете рассчитывать на гарантию интернет-цены. Штрих-код должен быть распечатан в хорошем качестве.</p>
		</div>
		
	</div>
	<div class="barcode">
	<div id="bcTarget"></div>
	</div>
  </div> <!--//.wrapper//-->
</div> <!--//.content//-->

</body>
</html>