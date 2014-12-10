<?php
    //Be sure to change the collection intro variable before cloning this to other collections

    $collection_intro = 'We&rsquo;re looking for photographs that depict important people, institutions or events of historical significance to Des Plaines. If you have any interesting historical photographs, you can upload them and share your connection to our local history.';
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <link href="/ui/custom/default/collection/default/css/custom/bootstrap.css" rel="stylesheet">
    <link href="/ui/custom/default/collection/default/resources/custompages/contribute/contribute.css" rel="stylesheet">
</head>
<body>
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
<div class="container">
    <div class="row">
        <div class="span8">
            <h1>Contribute</h1>
            <p>Thank you for your interest in contributing to <?php echo $this->collectionNames[$this->collection] ;?>!</p>
            <p><?php echo $collection_intro; ?></p>
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
    </div><!--closing div for intro row-->
    <hr />
    <div class="row" id="overview">
        <div class="span4">
            <h2><i class="overview-icon overview-gear"></i>How it works</h2>
            <ul>
                <li>Fill out the form with a file attached.</li> 
                <li>It may take between 1 to 5 days for your post(s) to appear on the site.</li> 
                <li>Your contact information is for internal use only and will not appear in your post.</li>
            </ul>
        </div>
        <div class="span4">
            <h2><i class="overview-icon overview-uploads"></i>Uploads</h2>
            <ul>
                <li>Submit scanned and digital photos at 150 ppi to 300 ppi resolution.</li>
                <li>File types .jpg, .png, and .tif are accepted.</li> 
                <li>Do not include spaces or special characters (&, #, !, ?, etc.) in file names.</li>
            </ul>
        </div>
        <div class="span4">
            <h2><i class="overview-icon overview-warning"></i>We won't accept</h2>
            <ul>
                <li>Inflammatory, obscene, offensive, or libelous material</li>
                <li>Internet links in your content</li>
                <li>Promotion of products or services</li>
                <li>Violations of individuals' privacy</li>
                <li>Personal identifying information</li>
             </ul>
        </div>
        <div class="span12">
            <h2><i class="overview-icon overview-cc"></i>Creative Commons</h2>
            <div class="row">
                <div class="span8">
                    <p>Anything you upload to <?php echo $this->collectionNames[$this->collection] ?> will be covered by a Creative Commons license. This means that you agree to share your work as long as it is attributed to you, not used for commercial purposes, and future reuse have to use the same license.</p>
                    <p><a href="http://creativecommons.org/licenses/by-nc-sa/2.5/">Review the Creative Commons license</a></p>
                </div>
                <div class="span4">
                    <div>
                        <img src="/ui/custom/default/collection/default/resources/custompages/contribute/cc-license-icons.png" />
                        <ul class="caption">
                            <li>Attributon</li>
                            <li>Noncommercial</li> 
                            <li>Share alike</li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div><!--closing div for overview row-->
    <hr />
    <!--terms of use for contribute form-->
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
                        <li>Includes any personal identifying information such as Social Security numbers, phone numbers, email addresses or street addresses.</li>
                    </ul>
                    <p>By publishing content on <?php echo $this->collectionNames[$this->collection] ?>, you agree to the following:</p>
                    <ul>
                        <li>User grants permission to the Des Plaines Public Library and the Des Plaines History Center to reproduce and distribute the submitted material for non-commercial use.</li>
                        <li>The Des Plaines Public Library reserves the right to edit, delete or reject submissions to <?php echo $this->collectionNames[$this->collection] ?>.</li>
                        <li>User is the lawful copyright or intellectual property right holder of the material submitted.</li>
                        <li>Material submitted will be attributed to user.</li>
                        <li>Photographs found to be in violation of copyright will be deleted immediately.</li>
                        <li>User may not charge the Des Plaines Public Library any fees or royalties for material submitted to or published on <?php echo $this->collectionNames[$this->collection] ?>.</li>
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
    </div><!--end of terms-->
	<div class="row" id="form">
		<div class="span12">
		    <h2>Upload and Describe</h2>
			<form enctype="multipart/form-data" id="cdmWebAddForm" method="POST" action="/utils/webadd/collection/<?php echo $this->collection;?>">
				    <input type="hidden" name="webaddurl" value="<?php echo $this->cdmCustomPage; ?>" />
                    <input type="hidden" name="rights" value="This material may be protected by U.S. Copyright Law (Title 17 U.S. Code) and is intended solely for personal or educational use. Any commercial use without permission is prohibited." />
				    <div class="row">
	                    <div class="span7" >
	                        <div class="control-group">
		                        <label>Choose your image. <i>*</i></label> 
		                        <input id="CISOBROWSE" name="CISOBROWSE" value="" type="file" class="required input-xlarge" style="height: 25px;" />
			                </div>
					       <div class="control-group">
				                <label>What type of picture is this? <i>*</i></label>
				                <select name="format" id="format" class="required preview">
				                    <option value=""></option>
				                    <option value="black and white photograph">Black & White Photograph</option>
				                    <option value="color photograph">Color Photograph</option>
				                    <option value="not sure">I'm not sure</option>
				                </select> 
				            </div>
				            <div class="control-group">
				                <label>When was this picture taken? <i>*</i></label>
				                <input type="text" id="date-year" class="required date-input input-small" placeholder="Year" />
				                <input type="text" id="date-month" class="date-input input-mini" placeholder="Month" />
				                <input type="text" id="date-day" class="date-input input-mini" placeholder="Day" />
				                <input type="text" name="date" id="date" class="no-border " value="0000-00-00" />
				                <p class="muted"><b>Tip:</b> Enter as much of the date as you can, starting with the year</p>
				            </div>
					        <hr />
						    <div class="control-group">
						        <label>Add a short, descriptive caption. <i>*</i></label>
						        <input type="text" id="FILETITLE" name="title" value="" maxlength="128000" class="required preview input-xxlarge" placeholder="" />
						    </div>
						    <div class="control-group">
						        <label>Describe what is going on in the picture. Try to include the names of people or places and your relationship to them. We would also like to know how you came to have this photograph. Is it a family photo? From a company's archive? <i>*</i></label>
						        <textarea id="description" name="descri" value="" maxlength="128000" class="required preview input-xxlarge " rows="8" placeholder=""></textarea>
						    </div>
						    <hr />
				            <div class="control-group">
				                <label>What is your name? <i>*</i></label>
				                <input type="text" name="contri" id="contri" class="required" />
				            </div>
                            <p class="alert alert-info">Your personal information will be kept private.</p>
				            <div class="control-group">
				                <label>What is your email address? <i>*</i></label>
				                <input type="text" name="email" id="email" class="required" placeholder="example@example.com" />
				            </div>
				            <div class="control-group">
				                <label>Where do you live currently (city, state)?</label>
				                <input type="text" name="city" id="city" placeholder="City, State" />
				            </div>
				            <input type="submit" value="Submit" class="btn" />
				        </div>
				        <div id="preview" class="span4 offset1">
				            <div class="preview-image">
                                <img src="" id="preview-image" />
                                <p id="preview-label">Preview</p>
                            </div>
                            <div class="preview-text">
                                <p>Title: <span id="preview-title"></span></p>
                                <p>Description: <span id="preview-descri"></span></p>
                                <p>Date: <span id="preview-date"></span></p>
                                <p>Format: <span id="preview-format"></span></p>
                            </div>
                       </div>
				    </div><!--closing div for image row-->
                </fieldset>
			</form>
		</div>
	</div><!--closing div for upload form-->
	<div class="modal-backdrop" id="disagreement">
	    <div class="modal">
		    <div class="modal-body">
		        <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
		        <p>Thank you for considering uploading your content to <?php echo $this->collectionNames[$this->collection] ?>. If you change your mind about our terms and conditions, please feel free to visit us again.</p>
		    </div>
		</div>
	</div><!--closing div for disagreement row-->
</div><!--container-->
<script src="/ui/custom/default/collection/default/js/jquery.validate.min.js"></script>
<script src="/ui/custom/default/collection/default/resources/custompages/contribute/jquery.contribute.js"></script>
</body>
</html>
