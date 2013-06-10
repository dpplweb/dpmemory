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
			<h1>Telephone Directories</h1>
			<p>This collection brings together telephone directories from Des Plaines and the surrounding communities. The directories are a great tool for doing genealogical and historical research.</p>
		</div>
		<div class="span4">
			<div class="well sidebar-nav" style="background-color: #F9F9F9;">
				<p><b>Follow us!</b></p>
				<p>You can learn more about the Des Plaines Memory project and receive regular updates with one of the following services:</p>
				<ul class="unstyled sm-links">
					<li><a href="http://www.twitter.com/DPMemory" class="sm-twitter">Twitter</a></li>
					<li><a href="http://desplainesmemory.tumblr.com/" class="sm-tumblr">Tumblr</a></li>
				</ul>
			</div>
		</div>
	</div><!--first row-->
	<?php
		$collection_ID = 'p15770coll4';
		$base_url = '/cdm/search/collection/' . $collection_ID . '/searchterm/{param}/field/projec/mode/all/conn/and/order/title/ad/asc';
		$thumb_url = '/cdm/ref/collection/' . $collection_ID . '/id/{id}';
		$has_images = True;
		
		$projects = array(
			'Des Plaines and Rural City Directory' => array('description' => 'Residential and commercial telephone listings for Des Plaines, Illinois and surrounding area. 1940&ndash;1941.', 'param' => 'des%20plaines%20and%20rural%20city%20directory', 'thumb' => 'dp-rural-city-directory-thumb', 'item_id' => '132'),
			'Telephone Directory, Des Plaines, Illinois' => array('description' => 'Residential and commercial telephone directory of Des Plaines and Park Ridge, Illinois. January 1941, December 1943, November 1949.', 'param' => 'telephone%20directory%2C%20des%20plaines%2C%20illinois', 'thumb' => 'telephone-directory-dp-thumb', 'item_id' => '229'),
			'Telephone Directory, Norwood - Edison Park, Park Ridge and Des Plaines' => array('description' => 'Residential and commercial telephone directory of Des Plaines, Edison Park, Norwood Park and Park Ridge, Illinois. 1949.', 'param' => 'telephone%20directory%2C%20norwood%20-%20edison%20park%2C%20park%20ridge%20and%20des%20plaines', 'thumb' => 'telephone-directory-norwood-dp-thumb', 'item_id' => '521'),
			'Telephone Directory, Des Plaines - Park Ridge' => array('description' => 'Residential and commercial telephone directory of Des Plaines and Park Ridge, Illinois. 1956&ndash;1960, 1962&ndash;1965.', 'param' => 'telephone%20directory%2C%20des%20plaines%20-%20park%20ridge', 'thumb' => 'telephone-directory-dp-park-ridge-thumb', 'item_id' => '1432'),
			);
		$i = 0;
		$c = 0;
		
		foreach ($projects as $key => $project){
			
			if ($i % 3 == 0){
				echo '<hr /><div class="row">';
				$c = 0;
			}
			
			$proj_url = str_replace('{param}', $project['param'], $base_url);
			$item_url = str_replace('{id}', $project['item_id'], $thumb_url);
			
			echo '	<div class="span4">';
			
			if ($has_images == True){
				echo '		<ul class="thumbnails"><li><a href="' . $proj_url . '" class="thumbnail"><img src="/ui/custom/default/collection/coll_' . $collection_ID . '/images/' . $project['thumb'] . '.jpg"></a></li></ul>';
			}
			
			echo '		<h3><a href="' . $proj_url . '" title="' . $key . '">' . $key . '</a></h3><p>' . $project['description'] . '</p><p><a href="' . $proj_url . '" title="' . $key . '" class="btn">View Items</a></p>';
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