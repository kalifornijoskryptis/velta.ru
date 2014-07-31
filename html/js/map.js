function init(){
		
		/* ������������� ����� ������ � ��������� ����������� ���������� */
		var geolocation = ymaps.geolocation,
			mapOverview = new ymaps.Map("ymaps-overview", {
				center: [55.76, 37.64], 
				zoom: 8,
				controls: ["routeEditor","geolocationControl","trafficControl", "fullscreenControl", "zoomControl"]
			});
		
		geolocation.get({
					provider: 'browser',
					mapStateAutoApply: true
				}).then(function (result) {
					//mapOverview.geoObjects.add(result.geoObjects);
					coord = result.geoObjects.get(0).geometry.getCoordinates();
				});
		
		/* ��������� ����� */
		pmSokol = new ymaps.Placemark([55.77372, 37.738045], {}, {
            iconLayout: 'default#image',
            iconImageHref: 'http://velta-mebel.ru/netcat_template/template/2/img/css/logo.png',
            iconImageSize: [60, 50],
            iconImageOffset: [-3, -42]
        }),
		pmSneg = new ymaps.Placemark([55.887278, 37.03264], {}, {
            iconLayout: 'default#image',
            iconImageHref: 'http://velta-mebel.ru/netcat_template/template/2/img/css/logo.png',
            iconImageSize: [60, 50],
            iconImageOffset: [-3, -42]
        });
		
		/* ��������� ����� �� ����� */
        mapOverview.geoObjects.add(pmSokol);
        mapOverview.geoObjects.add(pmSneg);
		
		/* ��� ����� �� ����� �������� ������ ��� */
		pmSokol.events.add('click', function () {
			$("a.tab2").click(); 
		});
		
		/* ��� ����� �� ����� �������� ������ ��� */
		pmSneg.events.add('click', function () {
			$("a.tab3").click();
		});
		
		/* ���� �� ������� "�������� �����" */
		$("a.tab1").click( function()
           {
			 mapOverview.setCenter([55.76, 37.64], 8);
             mapOverview.container.fitToViewport();
           }
		);
		
		/* ���� �� ������� ������ �� ���������*/
		$("a.tab2").click( function()
           {
			 mapOverview.setCenter([55.77372, 37.738045], 18);
             mapOverview.container.fitToViewport();
           }
		);
		
		$("a.geolocate-car-sokol").click( function()
           {
			var SokolCoords = pmSokol.geometry.getCoordinates();
			ymaps.route([
				[coord], [SokolCoords]]).then(function (route) {
				route.getPaths().options.set({
					strokeColor: 'a8ff1e', opacity: 0.9
				});
			mapOverview.geoObjects.add(route);
			var points = route.getWayPoints(),
            lastPoint = points.getLength() - 1;
				points.options.set('preset', 'islands#geolocationIcon');
				points.get(lastPoint).options.set('preset', 'islands#oliveCircleDotIcon');
			});
			});
		
		/* ���� �� ������� ������ � �� "�������" */
		$("a.tab3").click( function()
           {
             mapOverview.setCenter([55.887278, 37.03264], 18);
             mapOverview.container.fitToViewport();
           }
		);
		
		$("a.geolocate-car-sneg").click( function()
           {
			var SnegCoords = pmSneg.geometry.getCoordinates();
			ymaps.route([
				[coord], [SnegCoords]]).then(function (route) {
				route.getPaths().options.set({
					strokeColor: 'a8ff1e', opacity: 0.9
				});
			mapOverview.geoObjects.add(route);
			var points = route.getWayPoints(),
            lastPoint = points.getLength() - 1;
				points.options.set('preset', 'islands#geolocationIcon');
				points.get(lastPoint).options.set('preset', 'islands#oliveCircleDotIcon');
			});
			});

}
ymaps.ready(init);