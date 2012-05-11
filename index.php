<!DOCTYPE html>
<html>
<head>
	<title>DPM List Test</title>
	<link href="http://www.dppl.org/tests/dpm/bootstrap/css/bootstrap.css" rel="stylesheet">
	<style>
		body{overflow-x: hidden;}
		.container{margin-top: 2em; margin-left: 0;}
		a.thumbnail:hover {border-color: #63af00 !important;}
		.btn{margin-top: 1.5em;}
		h3 a{color: #63AF00;}
		ul.sm-links{list-style: none; width: 90%; margin: 0 auto; padding: 0; overflow: auto;}
		ul.sm-links li a{display: inline-block; float: left; height: 64px; width: 64px; margin: 0 .5em; background-image: url('http://www.dppl.org/tests/dpm/images/sm-icons.png');}
		ul.sm-links li a.sm-twitter{background-position: 0px 0px;}
		ul.sm-links li a.sm-twitter:hover{background-position: 0px -64px;}
		ul.sm-links li a.sm-tumblr{background-position: 0px -128px;}
		ul.sm-links li a.sm-tumblr:hover{background-position: 0px -192px;}
		ul.sm-links li a.sm-rss{background-position: 0px -256px;}
		ul.sm-links li a.sm-rss:hover{background-position: 0px -320px;}
	</style>
</head>
<body>
	<div class="container">
		<div class="row">
			<div class="span8">
				<div class="row">
					<div class="span8">
						<h1>Des Plaines History</h1>
						<p>This collection brings together a wide range of materials related to local Des Plaines history. The bulk of these photographs, postcards, letters, and other items have been selected from the archives of the Des Plaines History Center. If you have any information about anything in the collection, feel free to leave your comments about particular items.</p>
						<p>The following list of projects are a great way to explore related items in the Des Plaines History collection.</p>
					</div>
				</div>
				<?php
		
			$baseurl = '/cdm/search/collection/p15770coll1/searchterm/{param}/field/projec/mode/all/conn/and/order/title/ad/asc';
				$projects = array(
				'Browns Department Store' => array('description' => 'Description', 'param' => 'browns%20department%20store'),
				'Camp Pine' => array('description' => 'Description', 'param' => 'camp%20pine'),
				'Douglas Aircraft' => array('description' => 'Description', 'param' => 'douglas%20aircraft'),
				'Maine Township Schools' => array('description' => 'Description', 'param' => 'maine%20township%20schools'),
				'On the Streets of Des Plaines, 1915' => array('description' => 'Description', 'param' => 'on%20the%20streets%20of%20des%20plaines%2c%201915'),
				'Plew Homes' => array('description' => 'Description', 'param' => 'plew%20homes'),
				);
			
			foreach ($projects as $key => $project){
				echo '<div class="row">';
				echo '    <div class="span8"><hr />';
				echo '        <div class="row">';
				echo '            <div class="span5"><h3><a href="' . str_replace('{param}', $project['param'], $baseurl). '" title="' . $key . '">' . $key . '</a></h3><p>' . $project['description'] . '</p><p><a href="' . str_replace('{param}', $project['param'], $baseurl). '" title="' . $key . '" class="btn">View Project</a></div>';
				echo '            <div class="span3"><a href="#" class="thumbnail"><img src="http://placehold.it/207x153"></a></div>';
				echo '        </div>';
				echo '    </div>';
				echo '</div>';
			}
		?>
			</div>
			<div class="span4">
				<div class="well sidebar-nav" style="background-color: #f7fdec;">
					<p>Please explore our collections. You will find everything from pictures of old homes to street scenes in Des Plaines.</p>
					<p>If you find something that you like, share it with the "Share" option above the image or leave a comment.</p>
					<hr>
					<address><a href="http://www.dppl.org/home/index.shtml" target="_blank" style="color: #63af00"><strong>Des Plaines Public Library</strong><br></a>1501 Ellinwood Street<br>Des Plaines, Illinois 60016<br>847.827.5551</address>
					<address><a href="http://www.desplaineshistory.org/" target="_blank" style="color: #63af00"><strong>Des Plaines History Center</strong><br></a>781 Pearson Street<br>Des Plaines, Illinois 60016<br>847.391.5399</address>
					<hr>
					<ul class="sm-links">
						<li><a href="" class="sm-twitter"><span style="display: none;">Twitter</span></a></li>
						<li><a href="" class="sm-tumblr"><span style="display: none;">Tumblr</span></a></li>
						<li><a href="/cdm/viewfeed/collection/p15770coll1" class="sm-rss"><span style="display: none;">RSS</span></a></li>
					</ul>
				</div>	
			</div>
		</div>	
	</div>
</body>
</html>
