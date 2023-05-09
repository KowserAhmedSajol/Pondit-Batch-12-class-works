<?php

function d($var){
    echo "<pre>";
    print_r($var);
    echo "</pre>";
}

function dd($var){
   d($var);
   die();
}
$webroot = "http://limitless-templating.test/";
$docroot = $_SERVER['DOCUMENT_ROOT'].'/PHP-B12/limitless-templating-main';
$partials = $docroot.'/partials'.'/';