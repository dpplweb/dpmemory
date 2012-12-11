<?php

echo "<h1 class='cdm_style'>".$this->cdmCustomPageName."</h1>";

if(!empty($this->uploadstatus)){
  ?>
  <p style="color:#cd0a0a;">
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
  <?php
}
?>
<p><span style="color:#cd0a0a;">*</span> = required field</p>
<span class="clear"></span>
<div style="width:460px;">
<form enctype="multipart/form-data" id="cdmWebAddForm" method="POST" action="/utils/webadd/collection/<?php echo $this->collection;?>">
<input type="hidden" name="webaddurl" value="<?php echo $this->cdmCustomPage; ?>" />
<table>
  <tr>
    <td class="fnc">
      <h3 class="cdm_style">File</h3> <span style="color:#cd0a0a;">*</span>
    </td>
    <td class="ffc">
    <input id="CISOBROWSE" name="CISOBROWSE" value="" type="file" class="webadd_text_input" style="height: 25px;" />
    </td>
  </tr>
  <tr>
    <td class="fnc">
      <h3 class="cdm_style">Title</h3> <span style="color:#cd0a0a;">*</span>
    </td>
    <td class="ffc">
    <input type="text" id="FILETITLE" name="title" value="" maxlength="128000" class="webadd_text_input"  />
    </td>
  </tr>
  <tr>
    <td class="fnc">
      <h3 class="cdm_style">Subject</h3>
    </td>
    <td class="ffc">
      <input type="text" name="subjec" value="" maxlength="128000" class="webadd_text_input" />
    </td>
  </tr>
  <tr>
    <td class="fnc">
      <h3 class="cdm_style">Description</h3>
    </td>
    <td class="ffc">
    <input type="text" name="descri" value="" maxlength="128000" class="webadd_text_input" />
    </td>
  </tr>
  <tr>
    <td class="fnc">
      <h3 class="cdm_style">Creator</h3>
    </td>
    <td class="ffc">
      <input type="text" name="creato" value="" maxlength="128000" class="webadd_text_input" /> 
    </td>
  </tr>
  <tr>
    <td class="fnc">
      <h3 class="cdm_style">Publisher</h3>
    </td>
    <td class="ffc">
    <input type="text" name="publis" value="" maxlength="128000" class="webadd_text_input" />
    </td>
  </tr>
  <tr>
    <td class="fnc">
      <h3 class="cdm_style">Date</h3>
    </td>
    <td class="ffc">
      <input type="text" name="date" value="" maxlength="128000" class="webadd_text_input" />
    </td>
  </tr>
  <tr>
    <td class="fnc">
      <h3 class="cdm_style">Type</h3>
    </td>
    <td class="ffc">
    <input type="text" name="type" value="" maxlength="128000" class="webadd_text_input" />
    </td>
  </tr>
  <tr>
    <td class="fnc">
      <h3 class="cdm_style">Format</h3>
    </td>
    <td class="ffc">
      <input type="text" name="format" value="" maxlength="128000" class="webadd_text_input" />
    </td>
  </tr>
  <tr>
    <td class="fnc">
      <h3 class="cdm_style">Contributors</h3>
    </td>
    <td class="ffc">
    <input type="text" name="contri" value="" maxlength="128000" class="webadd_text_input" />
    </td>
  </tr>
  <tr>
    <td class="fnc">
      <h3 class="cdm_style">Identifier</h3>
    </td>
    <td class="ffc">
      <input type="text" name="identi" value="" maxlength="128000" class="webadd_text_input" /> 
    </td>
  </tr>
  <tr>
    <td class="fnc">
      <h3 class="cdm_style">Source</h3>
    </td>
    <td class="ffc">
    <input type="text" name="source" value="" maxlength="128000" class="webadd_text_input" />
    </td>
  </tr>
  <tr>
    <td class="fnc">
      <h3 class="cdm_style">Language</h3>
    </td>
    <td class="ffc">
      <input type="text" name="langua" value="" maxlength="128000" class="webadd_text_input" /> 
    </td>
  </tr>
  <tr>
    <td class="fnc">
      <h3 class="cdm_style">Relation</h3>
    </td>
    <td class="ffc">
    <input type="text" name="relati" value="" maxlength="128000" class="webadd_text_input" />
    </td>
  </tr>
  <tr>
    <td class="fnc">
      <h3 class="cdm_style">Coverage</h3>
    </td>
    <td class="ffc">
      <input type="text" name="covera" value="" maxlength="128000" class="webadd_text_input" /> 
    </td>
  </tr>
  <tr>
    <td class="fnc">
      <h3 class="cdm_style">Rights</h3>
    </td>
    <td class="ffc">
    <input type="text" name="rights" value="" maxlength="128000" class="webadd_text_input" />
    </td>
  </tr>
  <tr>
    <td class="fnc">
      <h3 class="cdm_style">Audience</h3>
    </td>
    <td class="ffc">
      <input type="text" name="audien" value="" maxlength="128000" class="webadd_text_input" />
    </td>
  </tr>
  <tr>
    <td class="fnc">
      <h3 class="cdm_style">Creator</h3>
    </td>
    <td class="ffc">
      <input type="text" name="creato" value="" maxlength="128000" class="webadd_text_input" />
    </td>
  </tr>
</table>
<span class="clear"></span>
<div id="webadd_button" class="menu_button float_right" button_type="menu" >
  <table class="button_table"><tr>
    <td><span class="menu_button_text"><?php echo $this->selectedLanguageArray["SITE_KEY_submit"];?></span></td>
  </tr></table>
</div>
</form>

<span class="clear"></span>
</div>

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
    $("#webadd_button").click(function(){
      fpath = $.trim($("#CISOBROWSE").val());
      ftitle = $.trim($("#FILETITLE").val());
      if( fpath.length == 0 || ftitle.length == 0 ){
        alert("The File and Title are required.");
        return false;
      } else {
        bindWebAddForm();
      }
    });
  });
  
  function bindWebAddForm(){
    $("#cdmWebAddForm").submit();
  }
  
</script>