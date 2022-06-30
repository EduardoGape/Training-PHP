<?php
//Must return positive integer
function multiply($a, $b) {
    $x = $a * $b;
    if ( $x < 0 ) {
        throw new Exception( "The result is not positive." );
    } else {
        return $x;
    }
    
}
try {
    echo multiply( -5, 4 );
} catch( Exception $e ) {
    echo $e->getMessage();
}