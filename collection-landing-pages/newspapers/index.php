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
			<h1>Local Newspapers</h1>
			<p>This collection brings together issues of several local newspapers dating from 1939 to the present. The oldest newspapers were badly damaged by water and mold and are preserved here for historical research.</p>
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
		$collection_ID = 'p15770coll3';
		$base_url = '/cdm/search/collection/' . $collection_ID . '/searchterm/{param}/field/projec/mode/all/conn/and/order/title/ad/asc';
		$thumb_url = '/cdm/ref/collection/' . $collection_ID . '/id/{id}';
		$has_images = True;
		
		$projects = array(
			'Des Plaines Suburban Times' => array('description' => 'You will find issues for the Des Plaines Suburban Times for following year(s): 1939&ndash;1941, 1944&ndash;1945, 1947&ndash;1952, 1954, 1957&ndash;1970', 'param' => 'des%20plaines%20suburban%20times', 'thumb' => 'dp-suburban-times-thumb', 'item_id' => '68'),
			'Des Plaines Journal' => array('description' => 'You will find issues for the Des Plaines Journal for the following year(s): 2000&ndash;2018. The most recent issues may be accessed <a href="http://www.desplainesmemory.org/cdm/search/collection/p15770coll3/searchterm/des%20plaines%20journal/field/projec/mode/all/conn/and/order/date!reverse">here</a>.Current year added continuously every three to five days.', 'param' => 'des%20plaines%20journal', 'thumb' => 'dp-journal-thumb', 'item_id' => '3539'),
			
			);
		$i = 0;
		$c = 0;
		
		foreach ($projects as $key => $project){
			
			if ($i % 3 == 0){
				echo '<div class="row dpm-content-row">';
				$c = 0;
			}
			
			$proj_url = str_replace('{param}', $project['param'], $base_url);
			$item_url = str_replace('{id}', $project['item_id'], $thumb_url);
			
			echo '	<div class="span4">';
			
			if ($has_images == True){
				echo '		<ul class="thumbnails"><li><a href="' . $proj_url . '" class="thumbnail"><img src="/ui/custom/default/collection/coll_' . $collection_ID . '/resources/custompages/landing/' . $project['thumb'] . '.jpg"></a></li></ul>';
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
