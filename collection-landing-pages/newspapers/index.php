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
			<p style="margin-top: 2em; font-style: oblique;">We recommend viewing the Local Newspaper collection with the <a href="http://www.mozilla.org/en-US/firefox/new" rel="nofollow">Firefox</a> or <a href="https://www.google.com/intl/en/chrome/browser/" rel="nofollow">Google Chrome</a> browser.</p>
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
		$collection_ID = 'p15770coll3';
		$base_url = '/cdm/search/collection/' . $collection_ID . '/searchterm/{param}/field/projec/mode/all/conn/and/order/title/ad/asc';
		$thumb_url = '/cdm/ref/collection/' . $collection_ID . '/id/{id}';
		$has_images = False;
		
		$projects = array(
			'Des Plaines Suburban Times' => array('description' => 'You will find issues for the Des Plaines Suburban Times for following year(s): 1939-1941, 1944-1945, 1947-1952, 1954, 1957-1970', 'param' => 'des%20plaines%20suburban%20times', 'thumb' => '', 'item_id' => ''),
			'Des Plaines Journal' => array('description' => 'You will find issues for the Des Plaines Journal for the following year(s): 2010.', 'param' => 'des%20plaines%20journal', 'thumb' => '', 'item_id' => ''),
			'Edison Norwood Review' => array('description' => 'You will find issues for the Edison Norwood Review for the following year(s): 1952 (October, November and December only)', 'param' => 'edison%20norwood%20review', 'thumb' => '', 'item_id' => ''),
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
				echo '		<ul class="thumbnails"><li><a href="' . $item_url . '" class="thumbnail"><img src="/ui/custom/default/collection/coll_' . $collection_ID . '/images/' . $project['thumb'] . '.jpg"></a></li></ul>';
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