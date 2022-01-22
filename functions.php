<?php

// Program to display Root Folder.
function assets_url($path = null){  	
    $fulluri =  explode("/",$_SERVER['REQUEST_URI']); 
	$link = (isset($_SERVER['HTTPS']) && $_SERVER['HTTPS']
    === 'on' ? "https" : "http") .
    "://" . $_SERVER['HTTP_HOST'] .'/'. $fulluri[1].'/'.$path??'';
    return $link; 
}

// page file path
function getPageUrl(){
    $pageflurl = explode('/',$_SERVER['PHP_SELF']);
    $end = end($pageflurl);
    return $end;
}
function current_dir(){
    return realpath(dirname(__FILE__));
}





