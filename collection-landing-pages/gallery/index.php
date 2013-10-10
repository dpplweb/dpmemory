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
			<h1>The Gallery</h1>
			<p>Whether you paint or make collages, your work reflects the time and place in which it was created. Looking back we learn about an era through the creative works it generated. The Gallery is an online space to exhibit and save the creative sprit in Des Plaines.</p>
			<p>Start with recent contributions to the collection, or <a href="/cdm/search/collection/<?php echo $this->collection ?>">browse</a> through everything.</p>
		</div>
		<div class="span4">
			<div class="well sidebar-nav" style="background-color: #F9F9F9;">
				<p><b>Follow us!</b></p>
				<p>You can learn more about the Des Plaines Memory project and receive regular updates with one of the following services:</p>
				<ul class="unstyled sm-links">
                    <li><a href="http://www.facebook.com/DesPlainesMemory" class="sm-facebook">Facebook</a></li>
					<li><a href="http://www.twitter.com/DPMemory" class="sm-twitter">Twitter</a></li>
					<li><a href="http://desplainesmemory.tumblr.com/" class="sm-tumblr">Tumblr</a></li>
					<?php echo ($this->configs['rssEnabled'] === 'on' ? '<li><a href="/cdm/viewfeed/collection/' . $this->collection . '" class="sm-rss">Updates</a></li>' : ''); ?>
				</ul>
			</div>
		</div>
	</div><!--first row-->
	<hr />
	<div class="row">
	    <div class="span6">
	        <h2>Contribute</h2>
	        <p>Do you have visual artwork that you want to share? We collect a variety of artistic creations from Des Plaines residents.</p>
	        <p>Upload your materials to the Gallery and leave a trace of the creative spirit in Des Plaines.</p>
	        <p><a href="/cdm/contribute/collection/<?php echo $this->collection; ?>" class="btn btn-large btn-success">Contribute now</a></p>
	    </div>
	    <div class="span6">
	        <h3>Recent contributions</h3>
	        <ul class="thumbnails">
	        <?php
                //define how many items to display
                $max_items = 6;
                $fh = file_get_contents('https://server15770.contentdm.oclc.org/dmwebservices/index.php?q=dmGetRecent/' . $this->collection . '/'. $max_items . '/title/json');
                $json = json_decode($fh);
                
                if ($json->total == 0){
                    echo '<li>There are no recent items to display.</li>';
                }
                else{
                    
                    $items = $json->records;
                    
                    $img_base_url = '/utils/getthumbnail/collection/' . $this->collection . '/id/{pointer}';
                    $item_base_url = '/cdm/singleitem/collection/' . $this->collection . '/id/{pointer}';

                    foreach($items as $item) {
                         $link = str_replace('{pointer}', $item->pointer, $item_base_url);
                         $image_link = str_replace('{pointer}', $item->pointer, $img_base_url);
                         echo '<li class="span2 recent-item"><a href="' . $link . '" class="thumbnail"><img src="' . $image_link . '" alt="Image with title ' . $item->title . '" title="' . $item->title . '" /></a></li>';
                    }
               }
            ?>
            </ul><!--end of thumbnails-->
		</div>
	</div><!--end of second row-->
</div><!--container-->
</body>
</html>
