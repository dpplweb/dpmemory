<?php

ini_set('display_errors', 'On');

    $records = array();
    $projects = explode('!', $_GET['p']);
    
    //var_dump($projects);
    
    foreach ($projects as $p){
       $fh = file_get_contents('https://server15770.contentdm.oclc.org/dmwebservices/index.php?q=dmQuery/' . $p . '/0/title!locati/title/500/1/0/0/0/0/0/0/json');
        $json = json_decode($fh);
        
        foreach ($json->records as $r){
            if (strlen($r->locati) > 0){
                array_push($records, $r);
            }
        }
    }
    
    echo json_encode($records);
  
?>
