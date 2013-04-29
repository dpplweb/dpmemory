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
			<p>There are so many stories to tell about the past. Popular stores that no longer exist. A recreation spot where eveyone hung out. Clothing styles that came and went.</p>
			<p>My Des Plaines Memory collects these stories from you, the people who experienced it with photographs, postcards, and other materials that you have collected. </p>
			<p>Start with recent contributions to the collection, or <a href="/cdm/search/collection/p15770coll2">browse</a> through everything.</p>
			<p>
	            <a href="/cdm/contribute/collection/<?php echo $this->collection; ?>" class="btn btn-large btn-success">Contribute now</a>
	        </p>
		</div>
		<div class="span4">
			<div class="well sidebar-nav" style="background-color: #F9F9F9;">
				<p><b>Follow us!</b></p>
				<p>You can learn more about the Des Plaines Memory project and receive regular updates with one of the following services:</p>
				<ul class="unstyled sm-links">
					<li><a href="http://www.twitter.com/DPMemory" class="sm-twitter">Twitter</a></li>
					<li><a href="http://desplainesmemory.tumblr.com/" class="sm-tumblr">Tumblr</a></li>
					<?php echo ($this->configs['rssEnabled'] === 'on' ? '<li><a href="/cdm/viewfeed/collection/' . $this->collection . '" class="sm-rss">Updates</a></li>' : ''); ?>
				</ul>
			</div>
		</div>
	</div><!--first row-->
	<hr />
	<div class="row">
	    <div class="span4">
	        <h2>Contribute</h2>
	        <p>Do you have historical photographs, postcards, or other visual material that reveals something interesting, unexpected, or important about Des Plaines' past?</p>
	        <p>Upload your materials to My Des Plaines Memory and help tell the story of Des Plaines.</p>
	    </div>
	    <div class="span8">
	        <h3>Recent contributions</h3>
	        <ul class="thumbnails">
	        <?php

                $max_items = 8;
                $fh = file_get_contents('http://cdm15770.contentdm.oclc.org:81/dmwebservices/index.php?q=dmGetRecent/' . $this->collection . '/'. $max_items . '/title/json');
                $json = json_decode($fh);
                
                if ($json->total == 0){echo '<li>There are no recent items to display.</li>'; return 0;}
                
                $items = $json->records;
                
                $img_base_url = 'http://desplainesmemory.org/utils/ajaxhelper/?CISOROOT=' . $this->collection . '&CISOPTR={pointer}&action=2&DMSCALE=10&DMWIDTH=130&DMHEIGHT=98&&DMX=40&DMY=45';
                $item_base_url = '/cdm/singleitem/collection/' . $this->collection . '/id/{pointer}';

                foreach($items as $item) {
                     $link = str_replace('{pointer}', $item->pointer, $item_base_url);
                     $image_link = str_replace('{pointer}', $item->pointer, $img_base_url);
                     echo '<li class="span2"><a href="' . $link . '" class="thumbnail"><img src="' . $image_link . '" alt="Image with title ' . $item->title . '" title="' . $item->title . '" /></li></a>';
                }
               
            ?>
            </ul><!--end of thumbnails-->
		</div>
	</div><!--end of second row-->
</div><!--container-->
</body>
</html>
