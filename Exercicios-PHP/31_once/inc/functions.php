<?php 
function pre_print( $var ) {
    echo '<pre>';
    print_r( $var ); 
    echo '</pre>';
}

function para_print( $var ) {
    echo "<p>$var</p>";
}