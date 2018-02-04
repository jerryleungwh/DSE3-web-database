/**
 * Sets up Google map into 'map-canvas' div and adds a draggable marker.
 */
function initMap() {
	var def_lat = document.getElementById('lat-box').value;
	var def_lng = document.getElementById('lng-box').value;
	var latLng = new google.maps.LatLng(def_lat, def_lng);
	var map = new google.maps.Map(document.getElementById('map-canvas'), {
			zoom: 16,
			center: latLng,
			mapTypeId: google.maps.MapTypeId.ROADMAP
	});
	var marker = new google.maps.Marker({
			position: latLng,
			map: map,
			draggable: true
	});
 
	// Click event listeners
	google.maps.event.addListener(map, "click", function(event) {
		marker.setPosition(event.latLng);
		var lat = event.latLng.lat();
		var lng = event.latLng.lng();
		document.getElementById('lat-box').value = lat;
		document.getElementById('lng-box').value = lng;
	});
	
	// Dragging event listeners
	google.maps.event.addListener(marker, 'drag', function(event) {
		var lat = event.latLng.lat();
		var lng = event.latLng.lng();
		document.getElementById('lat-box').value = lat;
		document.getElementById('lng-box').value = lng;
	});
	
	// Dragend event listeners
	google.maps.event.addListener(marker, 'dragend', function(event) {
		var lat = event.latLng.lat();
		var lng = event.latLng.lng();
		document.getElementById('lat-box').value = lat;
		document.getElementById('lng-box').value = lng;
	});
}
/**
 * Sets up Google map into 'map-canvas' div and adds the undraggable marker.
 */
function showMap() {
	var def_lat = document.getElementById('lat-box').innerHTML;
	var def_lng = document.getElementById('lng-box').innerHTML;
	var latLng = new google.maps.LatLng(def_lat, def_lng);
	var map = new google.maps.Map(document.getElementById('map-canvas'), {
			zoom: 16,
			center: latLng,
			mapTypeId: google.maps.MapTypeId.ROADMAP
	});
	var marker = new google.maps.Marker({
			position: latLng,
			map: map,
			draggable: false
	});
}

/**
 * Set publishdate of the POI
 */
function setDate() {
	var date = new Date();
	
	var y = date.getFullYear();
	var m = date.getMonth() + 1;
	var d = date.getDate();
	var h = date.getHours();
	var n = date.getMinutes();
	var s = date.getSeconds();
	
	if (m < 10) m = "0" + m;
	if (d < 10) d = "0" + d;
	if (h < 10) h = "0" + h;
	if (n < 10) n = "0" + n;
	if (s < 10) s = "0" + s;

	var today = y + "-" + m + "-" + d + "-" + h + "-" + n + "-" + s;
	document.getElementById('pub-date-box').value = today;
}

/**
 * Set picture URL of the POI
 */
function setPicUrl() {
	var zoom = "16";
	var size = "128x128";
	var maptype = "roadmap";
	var lat = document.getElementById('lat-box').value;
	var lng = document.getElementById('lng-box').value;
	var key = "AIzaSyC5wQ1gTCfx36vG2ZRm_8j2fPiddwXH6A8";
	
	var picUrl = "https://maps.googleapis.com/maps/api/staticmap?"
				+ "zoom=" + zoom + "&"
				+ "size=" + size + "&"
				+ "maptype=" + maptype + "&"
				+ "markers=color:red%7C" + lat + "," + lng + "&"
				+ "key=" + key;
	document.getElementById('pic-url-box').value = picUrl;
}
