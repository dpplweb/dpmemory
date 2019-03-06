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
            <h1>Upload & Share <?php echo $this->collectionNames[$this->collection] ;?></h1>
            <p>Thank you for your interest in contributing to <?php echo $this->collectionNames[$this->collection] ;?>!</p>
            <p><?php echo $collection_intro; ?></p>
        </div>
        <div class="span4">
            <div class="well sidebar-nav" style="background-color: #F9F9F9;">
                <p><b>Follow us!</b></p>
              
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
                <li>Submit scanned and digital photos (we suggest 300 ppi or higher resolution).</li>
                <li>File types .jpg, .png, and .tif are accepted.</li> 
                <li>Do not include spaces or special characters (&, #, !, ?, etc.) in filenames.</li>
            </ul>
        </div>
        <div class="span4">
            <h2><i class="overview-icon overview-warning"></i>We won't accept</h2>
            <ul>
                <li>Inflammatory, obscene, offense, or libelous material</li>
                <li>Internet links in your content</li>
                <li>Promotion of product or service</li>
                <li>Violations of individuals' privacy</li>
                <li>Personal identifying information</li>
             </ul>
        </div>
        <div class="span12">
            <h2><i class="overview-icon overview-cc"></i>Creative Commons</h2>
            <div class="row">
                <div class="span8">
                    <p>Anything you upload to <?php echo $this->collectionNames[$this->collection] ?> will be covered by a Creative Commons license. This means that you agree to share your work as long as it is attributed to you, not used for commercial purposes, and future resues have to use the same license.</p>
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
                        <li>Include any personal identifying information such as Social Security numbers, phone numbers, email addresses or street addresses.</li>
                    </ul>
                    <p>By publishing content on <?php echo $this->SITE_CONFIG_title ?>, you agree to the following:</p>
                    <ul>
                        <li>User grants permission to the Des Plaines Public Library and the Des Plaines History Center to reproduce and distribute the submitted material for non-commercial use.</li>
                        <li>The Des Plaines Public Library reserves the right to edit, delete or reject submissions to <?php echo $this->SITE_CONFIG_title ?>.</li>
                        <li>User is the lawful copyright or intellectual property right holder of the material submitted.</li>
                        <li>Material submitted will be attributed to user.</li>
                        <li>Photographs found to be in violation of copyright will be deleted immediately.</li>
                        <li>User may not charge the Des Plaines Public Library any fees or royalties for material submitted to or published on <?php echo $this->SITE_CONFIG_title ?>.</li>
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