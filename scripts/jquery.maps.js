$(function(){
    
    if($('#metadata_locati').length != 0){
        var script = document.createElement("script");
        script.type = "text/javascript";
        script.src = "http://maps.googleapis.com/maps/api/js?key=AIzaSyABEmDoSNEXi5uaPHLUeUU9AcGqhJbD5gw&sensor=false&callback=initialize_map";
        document.body.appendChild(script);
        
        var map_div = '<!--inserted h3 and div for map--><h3 id="details_accordion_map" class="accordion_header role="tab" aria-expanded="true">Map</h3><div class="accordion_window" role="tabpanel"><div id="map_canvas" style="width: 100%; height: 200px;"></div></div>';
		
		$('#details_accordion > .accordion_window').first().after(map_div).hide();
		
    }
    
});

function initialize_map(){
    var geocoder;
    var loc = document.getElementById('metadata_locati').innerHTML.trim();
    var latlng = new google.maps.LatLng(42.033889, -87.899722);
    

    var mapOptions = {
	    zoom : 14,
	    center : latlng,
	    mapTypeId: google.maps.MapTypeId.ROADMAP
    }

    geocoder = new google.maps.Geocoder();
    geocoder.geocode({ 'address': loc}, function(results, status) {
        if (status == google.maps.GeocoderStatus.OK) {
	        mapOptions["center"] =  results[0].geometry.location;

	        map = new google.maps.Map(document.getElementById("map_canvas"), mapOptions);

	        var marker = new google.maps.Marker({
		        map: map,
		        position: results[0].geometry.location
	        });
	        
	        document.getElementById("map_canvas").style.display = 'block';
        }

    });
}
