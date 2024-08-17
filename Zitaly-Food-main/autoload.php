<?php
    if( file_exists( __DIR__ .'/app/functions.php') ){
        require_once __DIR__.'/app/functions.php';
    }

    if(file_exists( __DIR__.'/app/data.php')){
        require_once(__DIR__.'/app/data.php');
    }
?>