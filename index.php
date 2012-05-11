<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<link href="/ui/custom/default/collection/default/css/custom/bootstrap.css" rel="stylesheet">
</head>
<body>
<div class="container">
	<div class="row">
		<div class="span8">
			<h1>Des Plaines History</h1>
			<p>This collection brings together a wide range of materials related to local Des Plaines history. The bulk of these photographs, postcards, letters, and other items have been selected from the archives of the Des Plaines History Center. If you have any information about anything in the collection, feel free to leave your comments about particular items.</p>
			<p>The following list of projects are a great way to explore related items in the Des Plaines History collection.</p>
		</div>
		<div class="span4">
			<div class="well sidebar-nav" style="background-color: #F9F9F9;">
				<p><b>Follow us!</b></p>
				<p>You can learn more about the Des Plaines Memory project and receive regular updates with one of the following services:</p>
				<ul class="unstyled sm-links">
					<li><a href="" class="sm-twitter">Twitter</a></li>
					<li><a href="" class="sm-tumblr">Tumblr</a></li>
				</ul>
			</div>
		</div>
	</div><!--first row-->
			<?php
	
		$baseurl = '/cdm/search/collection/p15770coll1/searchterm/{param}/field/projec/mode/all/conn/and/order/title/ad/asc';
		$thumburl = '/cdm/ref/collection/p15770coll1/id/{id}';
		
		$projects = array(
			'Brown\'s Department Store' => array('description' => 'Description', 'param' => 'browns%20department%20store', 'thumb' => 'browns-thumb', 'thumb_id' => '243'),
			'Camp Pine' => array('description' => 'Hans Reinhold and Rudolph Velte were among the German P.O.W.s held at Camp Pine in Des Plaines, Illinois during World War II. These few letters and photographs offer insight into their experiences during their time as Camp Pine inmates through their return to Europe after the war.', 'param' => 'camp%20pine', 'thumb' => 'camp-pine-thumb', 'thumb_id' => '211'),
			'Douglas Aircraft' => array('description' => 'World War II era photographs and documents related to the Douglas Aircraft (McDonnell Douglas Corporation) factory in Des Plaines, Illinois. The factory site later became part of O’Hare International Airport.', 'param' => 'douglas%20aircraft', 'thumb' => 'douglas-thumb', 'thumb_id' => '223'),
			'Maine Township Schools' => array('description' => 'Photographs and postcards of schools built in Maine Township, Illinois from the mid-1870s through the mid-1930s. Includes public and parochial schools.', 'param' => 'maine%20township%20schools', 'thumb' => 'schools-thumb', 'thumb_id' => '258'),
			'On the Streets of Des Plaines, 1915' => array('description' => 'Candid photographs taken on the streets of downtown Des Plaines, Illinois, circa 1915. Locations include the Congregational Church, Village Hall and the Chicago and Northwestern Railway station.', 'param' => 'on%20the%20streets%20of%20des%20plaines%2c%201915', 'thumb' => 'streets-thumb', 'thumb_id' => '302'),
			'Plew Homes' => array('description' => 'Photographs from the archives of the W. L. Plew Company, a small real estate and construction company in Des Plaines, Illinois. Most of the homes pictured were built in the neighborhood known as Des Plaines Gardens during the 1920s and 1930s.', 'param' => 'plew%20homes', 'thumb' => 'plew-thumb', 'thumb_id' => '68'),
			);
		$i = 0;
		$c = 0;
		
		foreach ($projects as $key => $project){
			$r = $i % 3;
			
			if ($r == 0){
				echo '<hr /><div class="row">';
				$c = 0;
			}
			
			echo '	<div class="span4">';
			echo '		<ul class="thumbnails"><li><a href="' .str_replace('{id}', $project['thumb_id'], $thumburl) . '" class="thumbnail"><img src="/ui/custom/default/collection/coll_p15770coll1/images/' . $project['thumb'] . '.jpg"></a></li></ul>';
			echo '		<h3><a href="' . str_replace('{param}', $project['param'], $baseurl). '" title="' . $key . '">' . $key . '</a></h3><p>' . $project['description'] . '</p><p><a href="' . str_replace('{param}', $project['param'], $baseurl). '" title="' . $key . '" class="btn">View Project</a></p>';
			echo '	</div>';
			
			if ($c == 2){
				echo '</div><!--end of row-->';
			}
			$i++;
			$c++;
			
		}
	?>
		</div>

</div></!--container-->
</body>
</html>