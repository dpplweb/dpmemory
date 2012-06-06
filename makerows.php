<?php
//creates rows for collection landing pages

function makeRows($collection_ID, $projects, $show_thumbs){

	//set up base urls for showing item browse and items
	$base_url = '/cdm/search/collection/' . $collection_ID . '/searchterm/{param}/field/projec/mode/all/conn/and/order/title/ad/asc';
	$thumb_url = '/cdm/ref/collection/' . $collection_ID . '/id/{id}';
	
	//counters, c is used to track item in each row. i is total # of items
	$i = 0;
	$c = 0;
		
	foreach ($projects as $key => $project){
		
		//use modulo to check if item counter is divisble by three, if so, a new row
		if ($i % 3 == 0){
			echo '<hr /><div class="row">';
			$c = 0;
		}
		
		$proj_url = str_replace('{param}', $project['param'], $base_url);
				
		echo '	<div class="span4">';
		
		//show thumbs if param show_thumbs is true
		if ($show_thumbs == true){
			$item_url = str_replace('{id}', $project['item_id'], $thumb_url);
			
			echo '		<ul class="thumbnails"><li><a href="' . $itemurl . '" class="thumbnail"><img src="/ui/custom/default/collection/coll_' . $collection_ID . '/images/' . $project['thumb'] . '.jpg"></a></li></ul>';
		}
		echo '		<h3><a href="' . $proj_url . '" title="' . $key . '">' . $key . '</a></h3><p>' . $project['description'] . '</p><p><a href="' . $proj_url . '" title="' . $key . '" class="btn">View Items</a></p>';
		echo '	</div>';
		
		//check if we are at the end of a row
		if ($c == 2){
			echo '</div><!--end of row-->';
		}
		$i++;
		$c++;
		
	}

}
?>