$(function(){
	if($('#metadata_locati').length != 0){
		var mapButton = '<td><div id="map_button" class="menu_button" button_type="secondary" style="padding: 0;"><table class="button_table"><tbody><tr><td><span class="menu_button_icon ui-icon-pin-s"></span></td><td><span class="menu_button_text">View Map</span></td><td></td></tr></tbody></table></div>';
		$('div#download_print > table > tbody > tr:first-child').prepend(mapButton);
		
		var loc = $.trim($('#metadata_locati').text());
		$('#login_dialog').after('<div id="map_dialog" title="Map" dialog_name="map_dialog"><h1>' + loc + '</h1><div id="map_canvas" style="width: 100%; height: 500px;"></div></div>');
		
		var geocoder;
		var latlng = new google.maps.LatLng(42.033889, -87.899722);
		
		var mapOptions = {
			zoom : 14,
			center : latlng,
			mapTypeId: google.maps.MapTypeId.ROADMAP
		}
		
		geocoder = new google.maps.Geocoder();
		geocoder.geocode( { 'address': loc}, function(results, status) {
			if (status == google.maps.GeocoderStatus.OK) {
				console.log(results[0].geometry.location);
				mapOptions["center"] =  results[0].geometry.location;
				
				map = new google.maps.Map(document.getElementById("map_canvas"), mapOptions);
				
				var marker = new google.maps.Marker({
					map: map,
					position: results[0].geometry.location;
				});
			}
			
		});

        /*var map = new google.maps.Map(document.getElementById("map_canvas"),
            mapOptions);*/
		
		$('#map_button').hover(function(){$(this).toggleClass('menu_button_hover')});
		
		$('#map_button').click(function(){
			
			
			/*var url = 'http://maps.googleapis.com/maps/api/staticmap?center={location}&zoom=16&size=500x500&markers=color:green%7C' + loc + '&sensor=false';
			
			url = url.replace('{location}', loc);
			url = url.replace('{key}', mapkey);
			
			window.open(url, 'Map', 'location=0, status=0, scrollbars=0, width=500, height=500');*/
			
			
			/*$('#map_dialog').dialog({width: 400, height: 400, position: 'center'});
			$('#map_dialog').parent().addClass('dialog').css({'position' : 'absolute', 'z-index' : '10000'});
			$('#map_dialog').prev().addClass("dialog_title_bar");
			$('#map_dialog').prev().find("span:first").addClass("dialog_title_bar_title");
			$('#map_dialog').prev().find("a:first").addClass("dialog_title_bar_close_link");
			$('#map_dialog').prev().find("a:first").addClass("dialog_title_bar_close_link");
			$('#map_dialog').addClass("dialog_content");*/
			$('#map_dialog').html('');
			
				
				
			return false;
		});
	}
	
});
