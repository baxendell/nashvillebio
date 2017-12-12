jQuery(document).ready(function($) {    
    //Map

    var map;
    var geoMarker;
	function myMap() {
	  var mapCanvas = document.getElementById("contact-map");
	  var mapOptions = {  
	    center: new google.maps.LatLng(36.145952, -86.809236), 
	    zoom: 15,
	    styles: [
	    	{
	    	featureType: "poi",
		    stylers: [{ visibility: "off" }] 
			},
			{
              featureType: 'transit',
              stylers: [{visibility: "off"}]
            },
	    ]
	  };
	  	map = new google.maps.Map(mapCanvas, mapOptions);
		geoMarker = new google.maps.Marker();
		geoMarker.setPosition(map.getCenter());
	  	geoMarker.setMap(map);

	  //var infowindow = new google.maps.InfoWindow();
    	//var service = new google.maps.places.PlacesService(map);	  
	}
	myMap(); 

});