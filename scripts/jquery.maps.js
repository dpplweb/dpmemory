$(function(){
	if($('#metadata_locati').length != 0){
	
		var map_key = 'AIzaSyABEmDoSNEXi5uaPHLUeUU9AcGqhJbD5gw';
		var loc = $.trim($('#metadata_locati').text());
		var src = 'http://maps.googleapis.com/maps/api/staticmap?center={location}&zoom=16&size=441x200&markers=color:green%7C' + loc + '&sensor=false';
		src = src.replace('{location}', loc);
		
		var mapDiv = '<h3 id="details_accordion_map" class="accordion_header accordion_header_closed ui-accordion-header ui-helper-reset ui-state-default ui-corner-all" role="tab" aria-expanded="false"><span class="accordion_header_icon accordion_header_icon_closed ui-icon ui-icon-triangle-1-e"></span><a tabindex="-1" href="javascript://;">Map</a></h3><div class="accordion_window" role="tabpanel"><div id="map_canvas"><img src="' + src + '" /></div>';
		
		$('#details_accordion > .accordion_window').first().after(mapDiv);
		
	}
});
