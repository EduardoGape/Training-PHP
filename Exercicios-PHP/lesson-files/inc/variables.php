<?php 
    /* Variables */ 
    $title = 'Learning PHP Template Challenge';
    $description = 'Description goes here.';
    $author = 'Joe Casabona';
    setcookie( 'visited', true );

    function pre_dump( $var ) {
        echo '<pre>';
        var_dump( $var ); 
        echo '</pre>';
    }