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
				<h1>Des Plaines History</h1>
				<p>This collection brings together a wide range of materials related to local Des Plaines history. The bulk of these photographs, postcards, letters, and other items have been selected from the archives of the Des Plaines History Center. If you have any information about anything in the collection, feel free to leave your comments about particular items.</p>
				<p>The following list of projects are a great way to explore related items in the Des Plaines History collection.</p>
			</div>
			<div class="span4">
				<ul class="sm-links">
					<li><a href="" class="sm-twitter"><span style="display: none;">Twitter</span></a></li>
					<li><a href="" class="sm-tumblr"><span style="display: none;">Tumblr</span></a></li>
					<li><a href="/cdm/viewfeed/collection/p15770coll1" class="sm-rss"><span style="display: none;">RSS</span></a></li>
				</ul>
			</div>
		</div><!--first row-->
				<?php
		
			$baseurl = '/cdm/search/collection/p15770coll1/searchterm/{param}/field/projec/mode/all/conn/and/order/title/ad/asc';
				$projects = array(
				'Browns Department Store' => array('description' => 'Description', 'param' => 'browns%20department%20store'),
				'Camp Pine' => array('description' => 'Hans Reinhold and Rudolph Velte were among the German P.O.W.s held at Camp Pine in Des Plaines, Illinois during World War II. These few letters and photographs offer insight into their experiences during their time as Camp Pine inmates through their return to Europe after the war.', 'param' => 'camp%20pine'),
				'Douglas Aircraft' => array('description' => 'World War II era photographs and documents related to the Douglas Aircraft (McDonnell Douglas Corporation) factory in Des Plaines, Illinois. The factory site later became part of O’Hare International Airport.', 'param' => 'douglas%20aircraft'),
				'Maine Township Schools' => array('description' => 'Photographs and postcards of schools built in Maine Township, Illinois from the mid-1870s through the mid-1930s. Includes public and parochial schools.', 'param' => 'maine%20township%20schools'),
				'On the Streets of Des Plaines, 1915' => array('description' => 'Candid photographs taken on the streets of downtown Des Plaines, Illinois, circa 1915. Locations include the Congregational Church, Village Hall and the Chicago and Northwestern Railway station.', 'param' => 'on%20the%20streets%20of%20des%20plaines%2c%201915'),
				'Plew Homes' => array('description' => 'Photographs from the archives of the W. L. Plew Company, a small real estate and construction company in Des Plaines, Illinois. Most of the homes pictured were built in the neighborhood known as Des Plaines Gardens during the 1920s and 1930s.', 'param' => 'plew%20homes'),
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
				echo '		<ul class="thumbnails"><li><a href="#" class="thumbnail"><img src="http://placehold.it/380x285"></a></li></ul>';
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
