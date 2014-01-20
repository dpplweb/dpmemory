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
				<p><b>Stay connected!</b></p>
				<ul class="unstyled sm-links">
                    <li><a href="http://www.facebook.com/DesPlainesMemory" class="sm-facebook">Facebook</a></li>
					<li><a href="http://www.twitter.com/DPMemory" class="sm-twitter">Twitter</a></li>
					<li><a href="http://desplainesmemory.tumblr.com/" class="sm-tumblr">Tumblr</a></li>
					<?php echo ($this->configs['rssEnabled'] === 'on' ? '<li><a href="/cdm/viewfeed/collection/' . $this->collection . '" class="sm-rss">Updates</a></li>' : ''); ?>
				</ul>
			</div>
		</div>
	</div><!--first row-->
	<?php
		$collection_ID = 'p15770coll1';
		$base_url = '/cdm/search/collection/' . $collection_ID . '/searchterm/{param}!{param}/field/projec!relate/mode/all!all/conn/or!and/order/title/ad/asc';
		$thumb_url = '/cdm/ref/collection/' . $collection_ID . '/id/{id}';
		$has_images = True;
		
		$projects = array(
			'Arts and Culture' => array('description' => 'Des Plaines has a rich and vibrant arts culture that reflects the diversity of our community. Find photographs of concerts, dancing, festivals, plays and art exhibits here.', 'param' => 'arts%20and%20culture', 'thumb' => 'arts-culture-thumb', 'item_id' => '1332'),
			'Brown\'s Department Store' => array('description' => 'Brown&rsquo;s Department Store&mdash;originally known as the Des Plaines Department Store&mdash;was located on Miner Street in downtown Des Plaines, Illinois. These photographs of the store span the years 1916 through 1958.', 'param' => 'browns%20department%20store', 'thumb' => 'browns-thumb', 'item_id' => '243'),
			'Camp Pine' => array('description' => 'Hans Reinhold and Rudolph Velte were among the German P.O.W.s held at Camp Pine in Des Plaines, Illinois during World War II. These few letters and photographs offer insight into their experiences during their time as Camp Pine inmates through their return to Europe after the war.', 'param' => 'camp%20pine', 'thumb' => 'camp-pine-thumb', 'item_id' => '211'),
			'City of Destiny' => array('description' => 'A collection focusing on Des Plaines&rsquo; city government and elected officials from its origins as a 19th century village to today&rsquo;s city government.', 'param' => 'city%20of%20destiny', 'thumb' => 'city-of-destiny-thumb', 'item_id' => '1195'),
			'Douglas Aircraft' => array('description' => 'World War II era photographs and documents related to the Douglas Aircraft (McDonnell Douglas Corporation) factory in Des Plaines, Illinois. The factory site later became part of O’Hare International Airport.', 'param' => 'douglas%20aircraft', 'thumb' => 'douglas-thumb', 'item_id' => '223'),
			'Library and Community' => array('description' => 'The library is more than a place for learning and research. This collection focuses on the role of the Des Plaines Public Library as an essential and influential participant in the cultural life of the city of Des Plaines and surrounding communities.', 'param' => 'library%20and%20community', 'thumb' => 'library-thumb', 'item_id' => '597'),
			'Maine Township Schools' => array('description' => 'Photographs and postcards of schools built in Maine Township, Illinois from the mid-1870s through the mid-1930s. Includes public and parochial schools.', 'param' => 'maine%20township%20schools', 'thumb' => 'schools-thumb', 'item_id' => '258'),
			'On the Streets of Des Plaines, 1915' => array('description' => 'Candid photographs taken on the streets of downtown Des Plaines, Illinois, circa 1915. Locations include the Congregational Church, Village Hall and the Chicago and Northwestern Railway station.', 'param' => 'on%20the%20streets%20of%20des%20plaines%2c%201915', 'thumb' => 'streets-thumb', 'item_id' => '302'),
			'Plew Homes' => array('description' => 'Photographs from the archives of the W. L. Plew Company, a small real estate and construction company in Des Plaines, Illinois. Most of the homes pictured were built in the neighborhood known as Des Plaines Gardens during the 1920s and 1930s.', 'param' => 'plew%20homes', 'thumb' => 'plew-thumb', 'item_id' => '68'),
			'Personal Diaries' => array('description' => 'These are the diaries of Adelia Thomas, her mother Hester Thomas, and Adelia&rsquo;s future husband Chester Bennett, schoolmaster. Hester&rsquo;s diary details a surprisingly active and varied social life. Adelia&rsquo;s diary was written during the beginning of the Civil War and shows the war&rsquo;s effect on the region. Chester&rsquo;s diary reveals the inner life of a frustrated man trying to raise his station in life.', 'param' => 'personal%20diaries', 'thumb' => 'personal-diaries-thumb', 'item_id' => '371'),
			'Stereoscopic Photographs' => array('description' => 'Stereoscopic photography was very popular in the 19th and early 20th centuries. By placing two images side-by-side in a viewer, stereoscopes trick the viewer into seeing spatial depth. These photographs, created by Edd R. Schlagel, 1935 – 1938, depict scenes and people in the Des Plaines area using this technology.', 'param' => 'stereoscopic%20photographs', 'thumb' => 'stereoscopic-thumb', 'item_id' => '608'),
			'Veterans&rsquo; History' => array('description' => 'Materials produced by, for, and about our city&rsquo;s veterans of foreign wars.', 'param' => 'veterans%20histories', 'thumb' => 'veterans-history-thumb', 'item_id' => '1195'),
			);
		/*base values for loop*/
		/*we don't start i at 0 so that modulo will calcuate the end of rows correctly*/
		$i = 1;
		/*these could be changed to make rows shorter or longer*/
		$features = 3;
		$row_length = 3;
		$span = 'span4';

		echo'<hr /><div class="row dpm-content-row">';
		
		foreach ($projects as $key => $project){

			if ($i == $features){
				$row_length = 4;
			}

			if ($i > $features){
				$span = 'span3';
			}

			if ($i % $row_length  == 0){
				echo '</div><!--end of row-->';
				echo'<div class="row dpm-content-row">';
			}
 
			$proj_url = str_replace('{param}', $project['param'], $base_url);
			$item_url = str_replace('{id}', $project['item_id'], $thumb_url);
			
			echo '	<div class="' . $span . '">';
			if ($has_images == True){
				echo '		<ul class="thumbnails"><li><a href="' . $proj_url . '" class="thumbnail"><img src="/ui/custom/default/collection/coll_' . $collection_ID . '/images/' . $project['thumb'] . '.jpg"></a></li></ul>';
			}
			echo '		<h3><a href="' . $proj_url . '" title="' . $key . '">' . $key . '</a></h3><p>' . $project['description'] . '</p><p><a href="' . $proj_url . '" title="' . $key . '" class="btn">View Items</a></p>';
			echo '	</div>';

			$i++;

		}
	?>
		</div>

</div></!--container-->
</body>
</html>