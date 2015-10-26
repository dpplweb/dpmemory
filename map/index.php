<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<!--<link href="../css/bootstrap.css" rel="stylesheet">-->
	<link href="/ui/custom/default/collection/default/css/custom/bootstrap.css" rel="stylesheet">
	<link href="/ui/custom/default/collection/default/resources/custompages/map/map.css" rel="stylesheet">
</head>
<body>
<div class="container">
    <div class="row">
        <div class="span12">
            <h1>Map</h1>
            <p>Click on a map marker to see items related to that location. Currently the map displays items from the <a href="/cdm/landingpage/collection/p15770coll1">Des Plaines History</a> and <a href="/cdm/landingpage/collection/p15770coll2">My Des Plaines Memory</a> collections.</p>
            <hr />
        </div>
    </div>
	<div class="row item-map">
		<div class="span12">
		    <div id="map-canvas"></div>
		</div>
	    <div class="span3 results-wrapper">
			<div class="well" id="results">
                <h2>Results <span id="results-count"></span></h2>
                <div id="results-list"></div>
			</div>
		</div>
		<div class="load">Loading map...</div>
	</div><!--first row-->
</div></!--container-->
    <!--<script src="//ajax.googleapis.com/ajax/libs/jquery/2.0.0/jquery.min.js"></script>-->
    <script src="http://maps.googleapis.com/maps/api/js?key=AIzaSyCimpd2qM4HIR8kVRK8yjA-sQ6TpA_Zf_M&sensor=false"></script>
    <script src="/ui/custom/default/collection/default/resources/custompages/map/markerwithlabel_packed.js"></script>
    <script>
        $(document).ready(function(){
            $('.load').show();

            var mapOptions = {
              center: new google.maps.LatLng(42.03723,-87.885586),
              zoom: 14,
              mapTypeId: google.maps.MapTypeId.ROADMAP
            };

            var map = new google.maps.Map(document.getElementById("map-canvas"),
                mapOptions);

            var locations = new Array();
            var records;

            //patterns for detetcting lat lng
            var p = /-*[0-9]{2}\.[0-9]+,/;
            var lat, lng;


            $.getJSON('/ui/custom/default/collection/default/resources/custompages/map/data.php', {p : 'p15770coll1'}, function(data){
//            $.getJSON('items.json', function(data){
                records = data;
                $.each(records, function(i, record){
                    if (record.locati.length > 0){
                        var loc = record.locati;

                        if (locations[loc]){
                            locations[loc].push({"id" : record.pointer, "title" : record.title, "collection" : record.collection});
                        }
                        else{
                            locations[loc] = [{"id" : record.pointer, "title" : record.title, "collection" : record.collection}];
                        }
                    }

                });


                for (var key in locations){
                    if (p.test(key) == false){
                            /*geocoder = new google.maps.Geocoder();
                            geocoder.geocode({ 'address': loc}, function(results, status) {
                                console.log(status);
                                if (status == google.maps.GeocoderStatus.OK) {
                                    var marker = new google.maps.Marker({
                                        map: map,
                                        position: results[0].geometry.location,
                                        title : record.title
                                    });
	                           }
	                       });*/
	                   }
	                   else{
	                        lat = parseFloat(key.split(',')[0].trim());
	                        lng = parseFloat(key.split(',')[1].trim());
	                        var marker = new MarkerWithLabel({
                               position: new google.maps.LatLng(lat, lng),
                               map: map,
                               flat: true,
                               title : key,
                               labelContent: locations[key].length,
                               labelAnchor: new google.maps.Point(0, 45),
                               labelClass: "marker-label", // the CSS class for the label
                               labelStyle: {opacity: 0.90},
                               labelInBackground: false
                             });

                             showItems(marker, records);
	                   }
                }

                $('.load').hide();

            });

            function showItems(marker){
                google.maps.event.addListener(marker, 'click', function() {
                    var list, img, key;

                    key = marker.getTitle();

                    $('#results-list ul').hide();

                    //console.log($('#' + key).length);

                    if ($('#' + key).length != 0){
                        $('#' + key).show();
                    }
                    else{
                        list = '<ul id="' + key + '">';

                        $.each(locations[key], function(i){
                            console.log(locations[key][i]);
                            img = '<li><a href="http://www.desplainesmemory.org/cdm/ref/collection' + locations[key][i]['collection'] + '/id/' + locations[key][i]['id'] + '" class="item-image" target="_blank"><img src="http://www.desplainesmemory.org/utils/getthumbnail/collection' + locations[key][i]['collection'] + '/id/' + locations[key][i]['id'] + '"><span class="item-title">' + locations[key][i]['title'] + '</span></a></li>';
                            list+= img;
                        });

                        $('#results-list').append(list).show();
                    }
                    $('#results-count').html('(' + locations[key].length + (locations[key].length == 1?' item':' items') + ')');
                });

            }

        });
    </script>
</body>
</html>
