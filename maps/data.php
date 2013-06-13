<?php

    $projects = $_GET['p'];

    $fh = file_get_contents('http://cdm15770.contentdm.oclc.org:81/dmwebservices/index.php?q=dmQuery/' . $projects . '/0/title!locati/title/500/1/0/0/0/0/0/0/json');
    
    echo $fh;
?>
