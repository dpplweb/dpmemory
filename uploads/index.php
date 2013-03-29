<?php

if(!empty($this->uploadstatus)){
  ?>
<div class="modal-backdrop" id="form-response">
    <div class="modal">
		    <div class="modal-body">
		        <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
		        <p>
                  <?php
                  switch($this->uploadstatus){
                    case "success":
                      echo "The file has been uploaded for approval. Thank you.";
                      break;
                    case "failure":
                      echo "There was a problem saving the item.  Please try again.";
                      break;
                    case "uploaderror":
                      echo "There was a problem uploading the file. Please try again.";
                      break;
                    case "required":
                      echo "Both the File and the Title fields are required. Please try again.";
                      break;
                  }
                  ?>
            </p>
        </div>
    </div>
  </div>  
  <?php
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<link href="/ui/custom/default/collection/default/css/custom/bootstrap.css" rel="stylesheet">
	<!--<link href="../bootstrap.css" rel="stylesheet">-->
	<style>
	    .container{margin: 2em auto;}
	    #breadcrumb_top{display: none;}
	    .terms{margin-bottom: 1em; padding: 1em; border: 1px solid #ddd; border-radius: 5px;}
	    .agree{margin: .5em; }
	    legend{border: 0; font-weight: bold;}
	    .no-border{border: 0; -webkit-box-shadow: 0px 0px 0px; -moz-box-shadow: 0px 0px 0px; box-shadow: 0px 0px 0px;}
	    .no-border:focus{border: 0; -webkit-box-shadow: 0px 0px 0px; -moz-box-shadow: 0px 0px 0px; box-shadow: 0px 0px 0px;}
	    .form-wrapper{border: 1px solid #eee; border-radius: 5px;}
	    #preview{display: none; margin-bottom: 1em; position: relative; top: 0; right: 0; overflow: hidden;}
	    #preview img{width: 100%;}
	    #preview-label{position: absolute; width: 100%; left: 0; bottom: 0; text-align: center; font-weight: bold;}
	    .form i{font-weight: bold; color: red;}
	</style>
</head>
<body>
<div class="container">
	<div class="row">
		<div class="span8">
			<h1>My Des Plaines Memory <small>Contribute</small></h1>
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
	<div class="row" id="overview">
        <div class="span4">
	        <div class="overview-icon">
	            <img src="/ui/custom/default/collection/coll_p15770coll2/resources/custompages/contribute/gear32.png" />
	        </div>
            <h2>How it works</h2>
	        <ul>
	            <li>Fill out the form with your photograph attached.</li> 
	            <li>It may take between 1 to 5 days for your post(s) to appear on the site.</li> 
	            <li>Your contact information is for internal use only and will not appear in your post.</li>
	        </ul>
	    </div>
	    <div class="span4">
	        <div class="overview-icon">
	            <img src="/ui/custom/default/collection/coll_p15770coll2/resources/custompages/contribute/upload32.png" />
	        </div>
            <h2>Uploads</h2>
            <ul>
	            <li>Submit scanned and digital photos at 150 ppi to 300 ppi resolution.</li>
	            <li>File types .jpg, .png, and .tif are accepted.</li> 
	            <li>Do not include spaces or special characters (&, #, !, ?, etc.) in filenames.</li>
	        </ul>
	    </div>
	    <div class="span4">
	        <div class="overview-icon">
	            <img src="/ui/custom/default/collection/coll_p15770coll2/resources/custompages/contribute/warning32.png" />
	        </div>
	        <h2>We won't accept</h2>
            <ul>
                <li>Inflammatory, obscene, offense, or libelous material</li>
                <li>Internet links in your content</li>
                <li>Promotion of product or service</li>
                <li>Violations of individuals' privacy</li>
                <li>Personal identifying information</li>
             </ul>
	    </div>
	</div><!--second row-->
	<hr />
	<div class="row" id="terms">
	    <div class="span12">
			<h2>Terms and Conditions:</h2>
			    <p>In order to ensure that we receive and publish high quality content, we ask that you review and agree to the following terms and conditions.</p>
	    </div>
	    <div class="row">
		    <div class="span10 offset1">
		        <div class="terms">
		            <p>We will not publish content that:</p>
			        <ul>
				        <li>Includes inflammatory, rude or offensive language or content.</li>
				        <li>Contains content that is inappropriate, indecent, obscene, hateful, tortious, defamatory, slanderous or libelous.</li>
				        <li>Includes links to Internet sites.</li>
				        <li>Promotes products or services.</li>
				        <li>Violates the privacy of individuals.</li>
				        <li>Include any personal identifying information such as Social Security numbers, phone numbers, email addresses or street addresses.</li>
				    </ul>
				    <p>By publishing content on Des Plaines Memory, you agree to the following:</p>
				    <ul>
				        <li>User grants permission to the Des Plaines Public Library and the Des Plaines History Center to reproduce and distribute the submitted material for non-commercial use.</li>
				        <li>The Des Plaines Public Library reserves the right to edit, delete or reject submissions to My Des Plaines Memory.</li>
				        <li>User is the lawful copyright or intellectual property right holder of the material submitted.</li>
				        <li>Material submitted will be attributed to user.</li>
				        <li>Photographs found to be in violation of copyright will be deleted immediately.</li>
				        <li>User may not charge the Des Plaines Public Library any fees or royalties for material submitted to or published on Des Plaines Memory.</li>
				        <li>The Des Plaines Public Library will remove any materials upon request of the user.</li>
			        </ul>
			    </div><!--closing div for terms-->
			    <div style="text-align: center;">
                    <p><strong>Do you agree to the above terms and conditions?</strong></p>
                    <button id="agreement-no" class="agree btn btn-large btn-danger" type="button" data-agreement="no">No, I do no agree</button>
                    <button id="agreement-yes" class="agree btn btn-large btn-success" type="button" data-agreement="yes">Yes, I agree</button>
                </div>
		    </div>
		</div>
	</div><!--closing div for terms row-->
	<div class="row" id="form">
		<div class="span12">
		    <h2>Upload and Describe</h2>
			<form enctype="multipart/form-data" id="cdmWebAddForm" method="POST" action="/utils/webadd/collection/p15770coll2">
				    <input type="hidden" name="webaddurl" value="contribute" />
				    <div class="row">
	                    <div class="span7" >
	                        <div class="control-group">
		                        <label>Choose your image. <i>*</i></label> 
		                        <input id="CISOBROWSE" name="CISOBROWSE" value="" type="file" class="input-xlarge" style="height: 25px;" />
			                </div>
					       <div class="control-group">
				                <label>What type of picture is this? <i>*</i></label>
				                <select name="format" id="format">
				                    <option value=""></option>
				                    <option value="black and white photograph">Black & White Photograph</option>
				                    <option value="color photograph">Color Photograph</option>
				                    <option value="not sure">I'm not sure</option>
				                </select> 
				            </div>
				            <div class="control-group">
				                <label>When was this picture taken? <i class="icon-eye-open"></i></label>
				                <input type="text" id="date-year" class="date-input input-small" placeholder="Year" />
				                <input type="text" id="date-month" class="date-input input-mini" placeholder="Month" />
				                <input type="text" id="date-day" class="date-input input-mini" placeholder="Day" />
				                <input type="text" name="date" id="date" class="no-border" value="0000-00-00" />
				                <p class="muted"><b>Tip:</b> Enter as much of the date as you can, starting with the year</p>
				            </div>
					        <hr />
						    <div class="control-group">
						        <label>Add a short, descriptive caption. <i>*</i></label>
						        <input type="text" id="FILETITLE" name="title" value="" maxlength="128000" class="input-xxlarge" placeholder="" />
						    </div>
						    <div class="control-group">
						        <label>Describe what is going on in the picture. Try to include the names of poeple or places and your relationship to them. We would also like to know how you came to have this photograph. Is it a family photo? From a company's archive? <i>*</i></label>
						        <textarea name="descri" value="" maxlength="128000" class="input-xxlarge" rows="8" placeholder=""></textarea>
						    </div>
						    <hr />
				            <div class="control-group">
				                <label>What is your name? <i>*</i></label>
				                <input type="text" name="contri" id="contri" />
				            </div>
				            <div class="control-group">
				                <label>What is your email address?</label>
				                <input type="text" name="email" id="email" placeholder="example@example.com" />
				            </div>
				            <div class="control-group">
				                <label>Where do you live currently (city, state)?</label>
				                <input type="text" name="city" id="city" placeholder="City, State" />
				            </div>
				            <input type="submit" value="Submit" class="btn" />
				        </div>
				        <div id="preview" class="span5">
                            <img src="" id="preview-image" class="thumbnail" />
                            <p id="preview-label">Preview</p>
                       </div>
				    </div><!--closing div for image row-->
                </fieldset>
			</form>
		</div>
	</div><!--closing div for form row-->
	<div class="modal-backdrop" id="disagreement">
	    <div class="modal">
		    <div class="modal-body">
		        <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
		        <p>Thank you for considering uploading your content to My Des Plaines Memory. If you change your mind about our terms and conditions, please feel free to visit us again.</p>
		    </div>
		</div>
	</div><!--closing div for disagreement row-->
</div><!--container-->
    <script src="//ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.min.js"></script>
	<script>
	  /*var fieldnames = new Array();
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
	  fieldnames[i++] = new Array("audien","Audience");*/


	  $(document).ready(function(){
	        $('#form, #disagreement').hide();
	        $('.close').click(function(){
	            $(this).parents('.modal-backdrop').fadeOut();
	            return false;
	        });
	        $('.agree').click(function(){
	            var agree = $(this).attr('data-agreement');
	            console.log(agree);
	            switch (agree){
	                case 'no':
	                    $('#disagreement').fadeIn(); 
	                    break;
	                case 'yes':
	                    $('#terms').fadeOut();
	                    $('#form').fadeIn();
	                    break;
	            }
	            return false;
	        });
	        $('.date-input').change(function(){
	            var y = $('#date-year').val();
	            var m = $('#date-month').val();
	            var d = $('#date-day').val();
	            
	            y = checkYear(y);
	            m = checkMonth(m);
	            d = checkDay(d);
	            
	            $('#date').val((y.length != 0?y:'0000') + '-' + (m.length != 0?formatNumber(m):'00') + '-' + (d.length != 0?formatNumber(d):'00'));
	        });
	        
	        $('#CISOBROWSE').change(function(e){
				e = e.originalEvent;
				e.stopPropagation();
				e.preventDefault();
				
				if (this.files){
				    var files = this.files;
				    var count = files.length;
				
				    if (count > 0){
					    var file = files[0];
					    var reader = new FileReader();
					    reader.onload = function(e){
						    $('#preview-image').attr('src', e.target.result).parent().fadeIn();
					    };
					    reader.readAsDataURL(file);
				    }
			    }
			});

			/*$('#cdmWebAddForm').submit(function(e){
				e.preventDefault();
				$.post($(this).attr('action'), function(data){
					console.log(data);
				});
			});*/
	  });
	  
	  
	  
	  function checkYear(v){
	    var p = /\d{4}/;
	    if (isNumeric(v) == false){
	        return '0000';
	    }
	    if (p.test(v) == false){
	        return '0000';
	    }
	    else{
	        return v;
	    }
	  }
	  
	  function checkMonth(v){
	    if (isNumeric(v) == false){
	        return findMonth(v);
	    }
	    else{
	        if (isValidValue(v, 12) == false){
	            return '00';
	        }
	        else{
	            return v;
	        }
	    }
	  }
	  
	  function findMonth(v){
	    var months = ['january', 'february', 'march', 'april', 'may', 'june', 'july', 'august', 'september', 'october', 'november', 'december'];
	    v = v.toLowerCase();
	    for (i = 0; i < months.length; i++){
            if (v == months[i]){
               //if a match is found then exit from loop
               return (i + 1).toString();
            }
	    } 
	    return '00';
	  }
	  
	  
	  
	  function checkDay(v){
	    if (isNumeric(v) == false){
	        return '00';
	    }
	    else{
	        if (isValidValue(v, 31) == false){
	            return '00';
	        }
	        else{
	            return v;
	        }
	    }
	  }
	  
	  
	  function isNumeric(v){
	    var p = /\d+/;
	    return p.test(v);
	  }
	  
	  function isValidValue(v, l){
	    if (parseInt(v) <= l){
	        return true;
	    }
	    else{
	        return false;
	    }
	  }
	  
	  function formatNumber(v){
	    if (v.length == 1){
	        return '0' + v;
	    }
	    else{
	        return v;
	    }
	  }
	  
	</script>
</body>
</html>
