$(function(){
	if($('#metadata_locati').length != 0){
		var mapButton = '<td><div id="map_button" class="secondary_button" button_type="secondary" style="padding: 0;"><table class="button_table"><tbody><tr><td><span class="secondary_button_icon ui-icon-pin-s"></span></td><td><span class="secondary_button_text">View Map</span></td><td></td></tr></tbody></table></div>';
		$('div#download_print > table > tbody > tr:first-child').prepend(mapButton);
		
		$('#map_button').hover(function(){$(this).toggleClass('secondary_button_hover')});
		
		$('#map_button').click(function(){
			var loc = $.trim($('#metadata_locati').text());
			var mapkey = 'AIzaSyABEmDoSNEXi5uaPHLUeUU9AcGqhJbD5gw';
			
			var url = 'http://maps.googleapis.com/maps/api/staticmap?center={location}&zoom=16&size=500x500&markers=color:green%7C' + loc + '&sensor=false';
			
			url = url.replace('{location}', loc);
			url = url.replace('{key}', mapkey);
			
			window.open(url, 'Map', 'location=0, status=0, scrollbars=0, width=500, height=500');
			
			return false;
		});
	}
	
});
