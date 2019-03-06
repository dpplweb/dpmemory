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
			<h1>My Des Plaines Memory</h1>
			<h2>UNDER CONSTRUCTION!</h2>
			<p>We're in the process of integrating the My Des Plaines Memory collection with our main collection, Des Plaines Memory. You might notice that some of your previous contributions have disappeared temporarily while we move things around.</p>
			<p><em><b>In the meantime, you can still upload your photos as usual, so start contributing right now!</b></em></p>
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
	<hr />
	<div class="row">
	    <div class="span6">
	        <h2>Contribute</h2>
	        <p>Do you have historical photographs, postcards, or other visual material that reveals something interesting, unexpected, or important about Des Plaines' past?</p>
	        <p>Upload your materials to Des Plaines Memory and help tell the story of Des Plaines.</p>
	        <p><a href="/cdm/contribute/collection/p15770coll1" class="btn btn-large btn-success">Contribute now</a></p>
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
