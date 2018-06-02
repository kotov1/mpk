var 	myLat = 56.845093,
		myLng = 60.615649;

 // shows data of chosen city in continfo section
 // Инициализирую карту с центром, согласно индекса города при выборе из меню селекта (координаты для каждого индекса добавляю вручную)
$(document).ready(function() {

	var indexCity;
	createMap();

	$(".continfo__data-dynamic").children('div').not(":first").hide();

	$('#select-6-menu').click(function() {

		$(".continfo__data-dynamic").children('div').hide();

		indexCity = +$('#select-6-menu').attr('aria-activedescendant').substring(6,7) - 1;

		$(".continfo__data-dynamic").children('div').eq(indexCity).show();

		if(indexCity == 0) { 
			myLat = 56.845093;
			myLng = 60.615649;
		} else if(indexCity == 1) {
			myLat = 55.768055;
			myLng = 37.575361;
		} else if(indexCity == 2) {
			myLat = 59.896693;
			myLng = 30.368386;
		}
		createMap();

	});
	
});


function createMap(){
	var opts = {
		center: {
			lat: +myLat,
			lng: +myLng,
		},
		zoom: 13,
		styles: [{"featureType":"administrative","elementType":"labels.text.fill","stylers":[{"color":"#444444"}]},{"featureType":"landscape","elementType":"all","stylers":[{"color":"#f2f2f2"}]},{"featureType":"poi","elementType":"all","stylers":[{"visibility":"off"}]},{"featureType":"poi.business","elementType":"geometry.fill","stylers":[{"visibility":"on"}]},{"featureType":"road","elementType":"all","stylers":[{"saturation":-100},{"lightness":45}]},{"featureType":"road.highway","elementType":"all","stylers":[{"visibility":"simplified"}]},{"featureType":"road.arterial","elementType":"labels.icon","stylers":[{"visibility":"off"}]},{"featureType":"transit","elementType":"all","stylers":[{"visibility":"on"}]},{"featureType":"transit","elementType":"labels","stylers":[{"visibility":"off"}]},{"featureType":"water","elementType":"all","stylers":[{"color":"#b2d0e3"},{"visibility":"on"}]}],
		maxZoom: 20,
		minZoom: 0,
		mapTypeId: 'roadmap',
	};

	
	opts.clickableIcons = true;
	opts.disableDoubleClickZoom = false;
	opts.draggable = true;
	opts.keyboardShortcuts = true;
	opts.scrollwheel = true;
	

	
	var setControlOptions = function(key, enabled, position, style, mapTypeIds){
		opts[key + 'Control'] = enabled;
		opts[key + 'ControlOptions'] = {
			position: google.maps.ControlPosition[position],
			style: google.maps.MapTypeControlStyle[style],
			mapTypeIds: mapTypeIds
		};
	};
	
		
	setControlOptions('fullscreen',false,'DEFAULT','',null);
	
		
	setControlOptions('mapType',false,'DEFAULT','DEFAULT',["roadmap","satellite","terrain"]);
	
		
	setControlOptions('rotate',false,'DEFAULT','',null);
	
		
	setControlOptions('scale',false,'','',null);
	
		
	setControlOptions('streetView',false,'DEFAULT','',null);
	
		
	setControlOptions('zoom',false,'DEFAULT','',null);
	

	var map = new google.maps.Map(document.getElementById('map'), opts);

	
	(function(){
		var markerOptions = {
			map: map,
			position: {
				lat: +myLat,
				lng: +myLng,
			}
		};
		
		markerOptions.icon = {
			url: '../img/icons/marker.png',
			scaledSize: new google.maps.Size(
				62,
				70),
			size: new google.maps.Size(
				62,
				70),
			anchor: new google.maps.Point(
				31,
				70)
		};
		markerOptions.options = {
			optimized: true,
		};
		
		var marker = new google.maps.Marker(markerOptions);


	})();
	

}