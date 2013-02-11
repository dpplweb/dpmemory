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
			<h1>Contribute <small>to My Des Plaines Memory</small></h1>
			<p>Thank you for your interest in contributing to My Des Plaines Memory!</p>
			<p>We&rsquo;re looking for photographs that depict important people, institutions or events of historical significance to Des Plaines. If you have any interesting historical photographs in your family or business collection you can upload them to My Des Plaines Memory and share your personal connection to our local history.</p>
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
	<hr />
	<div class="row">
		<div clsas="span12" id="intro">
			<h2>Here’s how it works: </h2>
				<p>Fill out the form with your photograph attached. It may take between 1 to 5 days for your post(s) to appear on the site. Your contact information is for internal use only and will not appear in your post.</p>
			<h2>Here are the technical requirements:</h2>
				<p>Submit scanned and digital photos at an appropriate resolution and size for web site display (150 dpi to 300 dpi). File types .jpg and .tif are accepted. Do not include spaces or special characters (&, #, !, ?, etc.) in filenames.</p>
			<h2>Terms and Conditions:</h2>
				<div class="well">
					<p>In order to be published on My Des Plaines Memory, your submission must:</p>
					<ul class="unstyled">
						<li>Not include inflammatory, rude or offensive language or content.</li>
						<li>Not contain content that is inappropriate, indecent, obscene, hateful, tortious, defamatory, slanderous or libelous.</li>
						<li>Not include links to Internet sites.</li>
						<li>Not be used to promote products or services.</li>
						<li>Be sensitive to the privacy concerns of individuals.</li>
						<li>Not include any personal identifying information such as Social Security numbers, phone numbers, email addresses or street addresses.</li>
						<li>User grants permission to the Des Plaines Public Library and the Des Plaines History Center to reproduce and distribute the submitted material for non-commercial use.</li>
						<li>The Des Plaines Public Library reserves the right to edit, delete or reject submissions to My Des Plaines Memory.</li>
						<li>User is the lawful copyright or intellectual property right holder of the material submitted.</li>
						<li>Material submitted will be attributed to user.</li>
						<li>Photographs found to be in violation of copyright will be deleted immediately.</li>
						<li>User may not charge the Des Plaines Public Library any fees or royalties for material submitted to or published on Des Plaines Memory.</li>
						<li>The Des Plaines Public Library will remove any materials upon request of the user.</li>
					</ul>
				</div>
				<label class="checkbox" for="agreement-check"><input type="checkbox" id="agreement-check">I have read and agreed to the above terms and conditions.</label>
				<button id="get-started">Get Started</button>
		</div>
		<div class="span12" id="form" style="display: none;">
			<form enctype="multipart/form-data" id="cdmWebAddForm" method="POST" action="/">
				<input type="hidden" name="webaddurl" value="upload" />
				<fieldset>
					<legend>Select your image and describe it</legend>
						<div class="control-group">
						<label>File<span style="color:#cd0a0a;">*</span></label> 
						<input id="CISOBROWSE" name="CISOBROWSE" value="" type="file" class="input-xlarge" style="height: 25px;" />
						</div>
						<div class="control-group">
						<label>Title <span style="color:#cd0a0a;">*</span></label>
						<input type="text" id="FILETITLE" name="title" value="" maxlength="128000" class="input-xxlarge"  />
						</div>
						<div class="control-group">
						<label>Description</label>
						<textarea name="descri" value="" maxlength="128000" class="input-xxlarge" rows="4"></textarea>
						</div>
				 </fieldset>
				<span class="clear"></span>
				<input type="submit" value="Submit" class="btn" />
			</form>
		</div>
	</div><!--second row-->
</div><!--container-->
	<script>
	  var fieldnames = new Array();
	  var i = 0;
	  fieldnames[i++] = new Array("title","Title");
	  fieldnames[i++] = new Array("subjec","Subject");
	  fieldnames[i++] = new Array("descri","Description");
	  fieldnames[i++] = new Array("creato","Creator");
	  fieldnames[i++] = new Array("publis","Publisher");
	  fieldnames[i++] = new Array("date","Date");
	  fieldnames[i++] = new Array("type","Type");
	  fieldnames[i++] = new Array("format","Format");
	  fieldnames[i++] = new Array("contri","Contributors");
	  fieldnames[i++] = new Array("identi","Identifier");
	  fieldnames[i++] = new Array("source","Source");
	  fieldnames[i++] = new Array("langua","Language");
	  fieldnames[i++] = new Array("relati","Relation");
	  fieldnames[i++] = new Array("covera","Coverage");
	  fieldnames[i++] = new Array("rights","Rights");
	  fieldnames[i++] = new Array("audien","Audience");


	  $(document).ready(function(){
			$('#cdmWebAddForm').submit(function(e){
				e.preventDefault();
				
				$.post($(this).attr('action'), function(data){
					console.log(data);
				});
			});
	  });
	</script>
</body>
</html>