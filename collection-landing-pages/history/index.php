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
			<h1>Des Plaines Memory</h1>
			<p>This collection brings together a wide range of materials related to local Des Plaines history and culture. The bulk of these photographs, postcards, letters, and other items have been selected from the archives of the Des Plaines History Center. If you have any information about anything in the collection, feel free to leave your comments about particular items.</p>
			<p>The following list of projects are a great way to explore related items in the Des Plaines Memory collection.</p>
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
			'Arts and Culture' => array('description' => 'Des Plaines has a rich and vibrant arts culture that reflects the diversity of our community. Find photographs of concerts, dancing, festivals, plays and art exhibits here.', 'param' => 'arts%20and%20culture', 'thumb' => 'arts-culture-2-thumb', 'item_id' => '1218'),
			'Brown\'s Department Store' => array('description' => 'Brown&rsquo;s Department Store&mdash;originally known as the Des Plaines Department Store&mdash;was located on Miner Street in downtown Des Plaines, Illinois. These photographs of the store span the years 1916 through 1958.', 'param' => 'browns%20department%20store', 'thumb' => 'browns-thumb', 'item_id' => '243'),
			'Camp Pine' => array('description' => 'Hans Reinhold and Rudolph Velte were among the German P.O.W.s held at Camp Pine in Des Plaines, Illinois during World War II. These few letters and photographs offer insight into their experiences during their time as Camp Pine inmates through their return to Europe after the war.', 'param' => 'camp%20pine', 'thumb' => 'camp-pine-thumb', 'item_id' => '211'),
			'City of Destiny' => array('description' => 'A collection focusing on Des Plaines&#39; city government and elected officials from its origins as a 19th century village to today&rsquo;s city government.', 'param' => 'city%20of%20destiny', 'thumb' => 'city-of-destiny-thumb', 'item_id' => '1195'),
			'Civil War Era Diaries' => array('description' => 'This collection of 19th century manuscripts includes the diaries of four people whose lives were interconnected: Hester Thomas and her daughter Adelia Thomas; Adelia&rsquo;s future husband Chester Bennett; and Isabella Norton, who was a neighbor of the Bennett family. Also of note: The Ledger Book of Dr. Theo Hoffmann.', 'param' => 'civil%20war%20era%20diaries', 'thumb' => 'personal-diaries-thumb', 'item_id' => '371'),
			'Come Out and Play' => array('description' => 'This collection celebrates the many ways in which the <a href="http://www.dpparks.org/">Des Plaines Park District</a> has been enriching the lives of our community since the park district was founded in January 25, 1919. The majority of the photographs shown here were taken by the staff of the Des Plaines Park District, and document the initial development of individual parks.', 'param' => 'come%20out%20and%20play', 'thumb' => 'come-out-play-thumb', 'item_id' => '4366'),
			'Dear Gloria' => array('description' => 'Gloria Mau was a lifelong resident of Des Plaines. She was active in the Des Plaines community; a member of the Junior League and the Women&#39;s Defense Corps of America during World War II, and a dedicated pen pal to friends and relatives. The collection offered here represents a small selection of her extensive papers, which are housed in the archives of the Des Plaines History Center.', 'param' => 'dear%20gloria%20', 'thumb' => 'Gloria-Mau-thumb', 'item_id' => '2397'),
			'Douglas Aircraft' => array('description' => 'World War II era photographs, articles and documents related to the Douglas Aircraft (McDonnell Douglas Corporation) factory in Des Plaines, Illinois. The factory site later became part of O’Hare International Airport.', 'param' => 'douglas%20aircraft', 'thumb' => 'douglas-thumb', 'item_id' => '223'),
			'Frontier Days Festival' => array('description' => 'The Frontier Days Festival was held in Des Plaines in September 1950 and again in August 1951. The festivities included various events and a parade through downtown Des Plaines. Participants were encouraged to wear western-style dress during the Frontier Days festivities. Many small businesses held special Frontier Day sales and sponsored contests during the time of the festival.', 'param' => 'frontier%20days%20festival', 'thumb' => 'frontier-days-thumb', 'item_id' => '4842'),
			'Greetings From...' => array('description' => 'A large collection of modern and vintage postcards. Includes scenes of Des Plaines, Illinois; holiday postcards, novelty postcards, tourist attractions and more.', 'param' => 'greetings%20from%20', 'thumb' => 'greetings-from-thumb', 'item_id' => '3460'),
			'History Center Cross Section' => array('description' => 'The <a href="http://www.desplaineshistory.org/collections/research">Des Plaines History Center</a> holds over twelve thousand photographs that document the history of Des Plaines, IL. All of these have been digitized for use in research, exhibits, and programs. This Cross Section gives a sense of the wide-ranging subjects contained in the collection. Contact the <a href="http://www.desplaineshistory.org/collections/research">History Center</a> to conduct research on any specific topic.', 'param' => 'history%20center%20cross%20section%20', 'thumb' => 'history-center-cross-section-thumb', 'item_id' => '4566'),
			'Library and Community' => array('description' => 'The library is more than a place for learning and research. This collection focuses on the essential role the Des Plaines Public Library plays in the cultural life of our community.', 'param' => 'library%20and%20community', 'thumb' => 'library-thumb', 'item_id' => '597'),
			'Life During Wartime' => array('description' => 'The eclectic materials gathered here speak to the effects of war on the citizens of Des Plaines; those who served in the military and those who remained on the home front. Includes newsletters, articles, scrapbooks, letters, exhibits, and more.', 'param' => 'life%20during%20wartime', 'thumb' => 'veterans-history-thumb', 'item_id' => '1195'),
			'Maine Township Schools' => array('description' => 'Photographs and postcards of the public and parochial schools built in Maine Township, Illinois from the mid-1870s through the mid-1930s. Includes some newspaper and yearbook articles.', 'param' => 'maine%20township%20schools', 'thumb' => 'schools-thumb', 'item_id' => '258'),
			'My Des Plaines Memory' => array('description' => 'Here at Des Plaines Memory, we believe that history begins with your history! This collection gathers together all the photographs contributed by you! If you have photographs that depict the people, businesses, institutions, and events of historical significance to Des Plaines, upload them to My Des Plaines Memory and add them to our archives. Start <a href="/cdm/contribute/collection/p15770coll1">contributing</a> right now!', 'param' => 'my%20des%20plaines%20memory', 'thumb' => 'mydpm-thumb', 'item_id' => '3760'),
			'On the Streets of Des Plaines, 1915' => array('description' => 'Candid photographs (glass positives) taken on the streets of downtown Des Plaines, Illinois, circa 1915. Locations include the Congregational Church, Village Hall and the Chicago and Northwestern Railway station.', 'param' => 'on%20the%20streets%20of%20des%20plaines%2c%201915', 'thumb' => 'streets-thumb', 'item_id' => '302'),
			'Paper Clips' => array('description' => 'Short articles and photographs with high human interest or historical value clipped from Des Plaines newspapers. Covers local sports, clubs, entertainment and more.', 'param' => 'paper%20clips', 'thumb' => 'paper-clips-thumb', 'item_id' => '1898'),
			'Plew Homes' => array('description' => 'Photographs from the archives of the W. L. Plew Company, a small real estate and construction company in Des Plaines, Illinois. Most of the homes pictured were built in the neighborhood known as Des Plaines Gardens during the 1920s and 1930s. Many of the homes were Sears house designs.', 'param' => 'plew%20homes', 'thumb' => 'plew-thumb', 'item_id' => '68'),
			'We Mean Business' => array('description' => 'Whether they be Mom and Pop stores, sole proprietorships or light manufacturing companies, small businesses have always played an important part of life in Des Plaines. This collection features photographs, postcards, advertisements, news clippings and other materials related to family-owned and other small businesses from the 1900s to the present day.', 'param' => 'we%20mean%20business', 'thumb' => 'we-mean-business-thumb', 'item_id' => '3804'),
			'The Works of Edward Dougal' => array('description' => 'This collection features selected works of Des Plaines artist and author Edward Dougal (1937-2016). Much of the work in this collection reflects his interest in Eastern art and philosophy and his fluid mastery of a variety of media. Unless otherwise indicated, descriptions and titles of individual works were supplied by Mr. Dougal.', 'param' => 'the%20works%20of%20edward%20dougal', 'thumb' => 'ed-dougal-thumb', 'item_id' => '2182'),
			);
		/*base values for loop*/
		/*we don't start i at 0 so that modulo will calculate the end of rows correctly*/
		$i = 0;
		/*these could be changed to make rows shorter or longer*/
		$row_length = 4;
		$span = 'span3';

		echo'<hr /><div class="row dpm-content-row">';
		
		
		foreach ($projects as $key => $project){
		

			if ($i % $row_length == 0 && $i <> 0){
				echo '</div><!--end of row-->';
				echo'<div class="row dpm-content-row">';
			}
 
			$proj_url = str_replace('{param}', $project['param'], $base_url);
			$item_url = str_replace('{id}', $project['item_id'], $thumb_url);
			
			echo '	<div class="' . $span . '">';
			if ($has_images == True){
				echo '		<ul class="thumbnails"><li><a href="' . $proj_url . '" class="thumbnail"><img src="/ui/custom/default/collection/coll_' . $collection_ID . '/resources/custompages/landing/' . $project['thumb'] . '.jpg"></a></li></ul>';
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
